<?php
/**
 * AROMA OËL — Ajout automatique de 2 produits de démonstration
 *
 * Crée deux huiles essentielles avec variations 5 ml / 10 ml, catégorisées
 * dans "Huiles essentielles", avec un texte conforme au ton de marque.
 *
 * ⚠️ PRIX PLACEHOLDER : les tarifs ci-dessous (9,90 € / 14,90 €) sont des
 * valeurs temporaires. Remplacez-les par les prix réels du Catalogue
 * officiel AROMA OËL avant la mise en ligne (Brand Book, règle documentaire :
 * le Catalogue prévaut toujours pour les données commerciales).
 *
 * DÉCLENCHEMENT : visitez une fois, connecté en administrateur :
 * https://votre-site.fr/wp-admin/?aromaoel_seed_products=1
 * Le script ne s'exécute qu'une seule fois (vérifie si les produits existent déjà).
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function aromaoel_seed_products() {

	if ( ! is_admin() || ! current_user_can( 'manage_options' ) ) return;
	if ( ! isset( $_GET['aromaoel_seed_products'] ) ) return;
	if ( ! class_exists( 'WC_Product_Variable' ) ) return; // WooCommerce non actif

	$products = array(
		array(
			'name'  => 'Huile essentielle de Ravintsara',
			'sku'   => 'HE-RAVINTSARA',
			'excerpt' => "Traditionnellement appréciée depuis des générations à Madagascar, l'huile essentielle de Ravintsara apporte une sensation de fraîcheur et accompagne les moments où l'on cherche à retrouver son équilibre.",
			'description' => "<p>L'huile essentielle de Ravintsara (Cinnamomum camphora) est l'une des essences les plus emblématiques de Madagascar, traditionnellement appréciée pour sa fraîcheur vive et enveloppante.</p><p><strong>100&nbsp;% pure et naturelle</strong>, sélectionnée avec exigence par AROMA OËL. Certificat d'analyse disponible sur demande.</p><h3>Comment la vivre</h3><p>Quelques gouttes dans un diffuseur pour parfumer l'atmosphère de notes fraîches, ou diluée dans une huile végétale selon les recommandations figurant sur l'étiquette et les précautions propres au produit.</p><h3>Précautions</h3><p>Test cutané recommandé avant la première utilisation. Tenir hors de portée des enfants. Déconseillée aux femmes enceintes ou allaitantes sans avis d'un professionnel de santé.</p>",
			'variations' => array(
				'5 ml'  => array( 'price' => '9.90',  'stock' => 25 ),
				'10 ml' => array( 'price' => '16.90', 'stock' => 20 ),
			),
		),
		array(
			'name'  => 'Huile essentielle de Katrafay',
			'sku'   => 'HE-KATRAFAY',
			'excerpt' => "Essence rare de Madagascar, l'huile essentielle de Katrafay accompagne les moments où l'on cherche de l'élan et de l'équilibre au quotidien.",
			'description' => "<p>Le Katrafay (Cedrelopsis grevei) est une essence rare, originaire de Madagascar, réputée depuis longtemps pour son caractère boisé et chaleureux.</p><p><strong>100&nbsp;% pure et naturelle</strong>, sélectionnée avec exigence par AROMA OËL. Certificat d'analyse disponible sur demande.</p><h3>Comment la vivre</h3><p>S'intègre naturellement dans un rituel du matin ou du soir, en diffusion ou diluée dans une huile végétale selon les recommandations figurant sur l'étiquette.</p><h3>Précautions</h3><p>Test cutané recommandé avant la première utilisation. Tenir hors de portée des enfants. Déconseillée aux femmes enceintes ou allaitantes sans avis d'un professionnel de santé.</p>",
			'variations' => array(
				'5 ml'  => array( 'price' => '10.90', 'stock' => 25 ),
				'10 ml' => array( 'price' => '18.90', 'stock' => 20 ),
			),
		),
	);

	// Catégorie "Huiles essentielles" — créée si elle n'existe pas encore
	$term = term_exists( 'Huiles essentielles', 'product_cat' );
	if ( ! $term ) {
		$term = wp_insert_term( 'Huiles essentielles', 'product_cat', array( 'slug' => 'huiles-essentielles' ) );
	}
	$category_id = is_array( $term ) ? $term['term_id'] : $term;

	// Attribut global "Contenance" (créé une seule fois)
	$attribute_name = 'contenance';
	if ( ! taxonomy_exists( 'pa_' . $attribute_name ) ) {
		wc_create_attribute( array(
			'name'         => 'Contenance',
			'slug'         => $attribute_name,
			'type'         => 'select',
			'order_by'     => 'menu_order',
			'has_archives' => false,
		) );
	}

	$created = array();

	foreach ( $products as $data ) {

		// Ne pas dupliquer si le SKU existe déjà
		if ( wc_get_product_id_by_sku( $data['sku'] ) ) {
			$created[] = $data['name'] . ' (déjà existant, ignoré)';
			continue;
		}

		$product = new WC_Product_Variable();
		$product->set_name( $data['name'] );
		$product->set_sku( $data['sku'] );
		$product->set_description( $data['description'] );
		$product->set_short_description( $data['excerpt'] );
		$product->set_category_ids( array( $category_id ) );
		$product->set_status( 'draft' ); // reste en brouillon : à valider avant publication

		// Attribut de variation "Contenance"
		$attribute = new WC_Product_Attribute();
		$attribute->set_id( wc_attribute_taxonomy_id_by_name( $attribute_name ) );
		$attribute->set_name( 'pa_' . $attribute_name );
		$attribute->set_options( array_keys( $data['variations'] ) );
		$attribute->set_visible( true );
		$attribute->set_variation( true );
		$product->set_attributes( array( $attribute ) );

		$product_id = $product->save();

		// Création des termes de contenance (5 ml / 10 ml) si nécessaires
		foreach ( $data['variations'] as $label => $infos ) {
			if ( ! term_exists( $label, 'pa_' . $attribute_name ) ) {
				wp_insert_term( $label, 'pa_' . $attribute_name );
			}
			wp_set_object_terms( $product_id, $label, 'pa_' . $attribute_name, true );
		}

		// Création des variations
		foreach ( $data['variations'] as $label => $infos ) {
			$variation = new WC_Product_Variation();
			$variation->set_parent_id( $product_id );
			$variation->set_attributes( array( $attribute_name => sanitize_title( $label ) ) );
			$variation->set_regular_price( $infos['price'] );
			$variation->set_manage_stock( true );
			$variation->set_stock_quantity( $infos['stock'] );
			$variation->set_stock_status( $infos['stock'] > 0 ? 'instock' : 'outofstock' );
			$variation->set_sku( $data['sku'] . '-' . sanitize_title( $label ) );
			$variation->save();
		}

		$created[] = $data['name'] . ' — créé en brouillon avec variations ' . implode( ' / ', array_keys( $data['variations'] ) );
	}

	wp_die(
		'<h1>AROMA OËL — Produits ajoutés</h1><ul><li>' . implode( '</li><li>', array_map( 'esc_html', $created ) ) . '</li></ul>' .
		'<p><strong>Important :</strong> les produits sont créés en <em>brouillon</em> et avec des prix placeholder. Ouvrez chaque fiche dans WooCommerce &gt; Produits pour : ajouter les vraies photos, corriger les prix selon le Catalogue officiel, puis publier.</p>' .
		'<p><a href="' . esc_url( admin_url( 'edit.php?post_type=product' ) ) . '">→ Aller à la liste des produits</a></p>'
	);
}
add_action( 'admin_init', 'aromaoel_seed_products' );
