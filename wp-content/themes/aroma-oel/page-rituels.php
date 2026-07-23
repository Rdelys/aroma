<?php
/**
 * Template Name: Page Rituels
 * Description: Page hub des 6 rituels — conforme Document 04, Page 02.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$hero_img = get_theme_mod( 'aromaoel_rituels_hero_image' );
?>

<main>

	<!-- BLOC 01 — HERO -->
	<section class="hero <?php echo $hero_img ? 'hero--has-image' : ''; ?>"
		<?php if ( $hero_img ) : ?>
		style="background-image:linear-gradient(180deg, rgba(110,88,70,.15), rgba(110,88,70,.55)), url('<?php echo esc_url( $hero_img ); ?>');"
		<?php endif; ?>>
		<div class="hero-content">
			<?php if ( ! $hero_img ) : ?>
				<div class="hero-icon"><i class="ti ti-flower" aria-hidden="true" style="font-size:28px;color:var(--vert);"></i></div>
			<?php endif; ?>
			<h1>Choisissez votre rituel</h1>
			<p>Chez AROMA OËL, tout commence par un moment de vie — un matin à ouvrir, un souffle à retrouver, une peau à nourrir. Chaque rituel réunit les produits qui accompagnent ce moment, rien de plus.</p>
			<div class="hero-cta">
				<a href="#essential-rituals" class="btn btn--primary">Découvrir un rituel</a>
				<a href="<?php echo esc_url( home_url( '/boutique/' ) ); ?>" class="btn btn--secondary <?php echo $hero_img ? 'btn--on-image' : ''; ?>">Explorer la boutique</a>
			</div>
		</div>
		<div class="hero-scroll-cue" aria-hidden="true">
			<span>Découvrir</span>
			<i class="ti ti-chevron-down"></i>
		</div>
	</section>

	<!-- BLOC 02 — LE CONCEPT DE RITUEL -->
	<section class="section">
		<div class="container" style="max-width:760px;text-align:center;">
			<span class="eyebrow eyebrow--dark">Notre approche</span>
			<h2>Qu'est-ce qu'un rituel chez AROMA OËL ?</h2>
			<p style="color:var(--brun-clair);font-size:15px;">
				Un rituel n'est pas un produit de plus — c'est un geste qui trouve naturellement sa place dans votre quotidien. Quelques gouttes dans un diffuseur au réveil, une huile chauffée entre les mains le soir, un masque préparé le dimanche : des gestes simples, répétés avec plaisir, qui rapprochent de la nature. Chaque rituel AROMA OËL réunit des produits sélectionnés avec exigence, pensés pour être vécus ensemble. Les Essential Rituals rassemblent quatre huiles essentielles complémentaires, avec un roll-on rechargeable de 10&nbsp;ml offert, livré vide. Les Botanical Rituals associent une huile végétale et une poudre, pour un soin complet.
			</p>
		</div>
	</section>

	<!-- BLOC 03 — ESSENTIAL RITUALS -->
	<section id="essential-rituals" class="section section--alt">
		<div class="container">
			<div class="section-intro">
				<span class="eyebrow eyebrow--dark">Essential Rituals</span>
				<h2>Trois rituels d'huiles essentielles</h2>
				<p>Quatre flacons chacun, un roll-on rechargeable de 10 ml offert (livré vide).</p>
			</div>
			<div class="grid-3">

				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-leaf" aria-hidden="true"></i></div>
					<h3>RESET</h3>
					<div class="subtitle">Le rituel pour retrouver son équilibre.</div>
					<div class="hook">Katrafay, Ravintsara, Saro, Eucalyptus globuleux.</div>
					<div class="price">5 ml : 29,90&nbsp;€ &nbsp;|&nbsp; 10 ml : 39,90&nbsp;€</div>
					<div class="price-note">Roll-on rechargeable de 10&nbsp;ml offert · Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/reset/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel RESET</a>
				</div>

				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-wind" aria-hidden="true"></i></div>
					<h3>FLOW</h3>
					<div class="subtitle">Le rituel du souffle et de la fluidité.</div>
					<div class="hook">Ravintsara, Saro, Niaouli, Eucalyptus globuleux.</div>
					<div class="price">5 ml : 29,90&nbsp;€ &nbsp;|&nbsp; 10 ml : 39,90&nbsp;€</div>
					<div class="price-note">Roll-on rechargeable de 10&nbsp;ml offert · Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/flow/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel FLOW</a>
				</div>

				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-bolt" aria-hidden="true"></i></div>
					<h3>BOOST</h3>
					<div class="subtitle">Le rituel énergie.</div>
					<div class="hook">Ylang-Ylang, Katrafay, Niaouli, Eucalyptus citronné.</div>
					<div class="price">5 ml : 34,90&nbsp;€ &nbsp;|&nbsp; 10 ml : 44,90&nbsp;€</div>
					<div class="price-note">Roll-on rechargeable de 10&nbsp;ml offert · Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/boost/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel BOOST</a>
				</div>

			</div>
		</div>
	</section>

	<!-- BLOC 04 — BOTANICAL RITUALS -->
	<section class="section">
		<div class="container">
			<div class="section-intro">
				<span class="eyebrow eyebrow--dark">Botanical Rituals</span>
				<h2>Trois rituels de soin</h2>
				<p>Autour d'huiles végétales et de poudres complémentaires.</p>
			</div>
			<div class="grid-3">

				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-sparkles" aria-hidden="true"></i></div>
					<h3>GLOW</h3>
					<div class="subtitle">Le rituel éclat.</div>
					<div class="hook">Huile et poudre de Figue de Barbarie.</div>
					<div class="price">49,90&nbsp;€</div>
					<div class="price-note">Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/glow/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel GLOW</a>
				</div>

				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-plant-2" aria-hidden="true"></i></div>
					<h3>ROOTS</h3>
					<div class="subtitle">Le rituel nourrissant.</div>
					<div class="hook">Huile et poudre de Moringa.</div>
					<div class="price">24,90&nbsp;€</div>
					<div class="price-note">Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/roots/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel ROOTS</a>
				</div>

				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-feather" aria-hidden="true"></i></div>
					<h3>BLOOM</h3>
					<div class="subtitle">Le rituel douceur.</div>
					<div class="hook">Huile de Kukui, poudre de Baobab.</div>
					<div class="price">29,90&nbsp;€</div>
					<div class="price-note">Livraison gratuite en France, y compris à La Réunion</div>
					<a href="<?php echo esc_url( home_url( '/rituels/bloom/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel BLOOM</a>
				</div>

			</div>
		</div>
	</section>

	<!-- BLOC 05 — AIDE AU CHOIX -->
	<section class="section section--alt">
		<div class="container" style="max-width:720px;">
			<div class="section-intro">
				<span class="eyebrow eyebrow--dark">Aide au choix</span>
				<h2>Quel rituel pour quel moment ?</h2>
			</div>
			<div class="choice-table">
				<div class="choice-row">
					<span>Retrouver son équilibre après une période intense</span>
					<strong>RESET</strong>
				</div>
				<div class="choice-row">
					<span>Retrouver une sensation de fraîcheur au fil des saisons</span>
					<strong>FLOW</strong>
				</div>
				<div class="choice-row">
					<span>Retrouver de l'élan dans la journée</span>
					<strong>BOOST</strong>
				</div>
				<div class="choice-row">
					<span>Offrir un vrai moment d'éclat à sa peau</span>
					<strong>GLOW</strong>
				</div>
				<div class="choice-row">
					<span>Nourrir la peau et les cheveux en profondeur</span>
					<strong>ROOTS</strong>
				</div>
				<div class="choice-row">
					<span>S'accorder une parenthèse de douceur</span>
					<strong>BLOOM</strong>
				</div>
			</div>
			<p style="text-align:center;color:var(--brun-clair);font-size:14px;margin-top:28px;">
				Vous hésitez encore ? Écrivez-nous — nous vous orienterons avec plaisir, sans jamais insister.
			</p>
			<div style="text-align:center;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--secondary btn--small">Nous contacter</a>
			</div>
		</div>
	</section>

	<!-- BLOC 06 — RÉASSURANCE (condensée à 4 items) -->
	<section class="section" style="padding-top:48px;padding-bottom:48px;">
		<div class="container">
			<div class="engagements engagements--4">
				<div class="engagement"><i class="ti ti-droplet-filled" aria-hidden="true"></i><span>100&nbsp;% pur et naturel</span></div>
				<div class="engagement"><i class="ti ti-certificate" aria-hidden="true"></i><span>Certificat d'analyse disponible pour les huiles concernées</span></div>
				<div class="engagement"><i class="ti ti-package" aria-hidden="true"></i><span>Préparation soignée</span></div>
				<div class="engagement"><i class="ti ti-truck" aria-hidden="true"></i><span>Livraison suivie</span></div>
			</div>
		</div>
	</section>

	<!-- BLOC 07 — FAQ COURTE -->
	<section class="section section--alt">
		<div class="container" style="max-width:720px;">
			<div class="section-intro">
				<h2>Questions fréquentes</h2>
			</div>

			<div class="faq-list">
				<details class="faq-item">
					<summary>Que contient exactement chaque rituel ?</summary>
					<p>La composition exacte figure sur chaque page rituel : quatre huiles essentielles d'un même format pour les Essential Rituals, une huile végétale et une poudre pour les Botanical Rituals.</p>
				</details>
				<details class="faq-item">
					<summary>Quels sont les frais de livraison ?</summary>
					<p>Rituels : livraison gratuite en France, y compris à La Réunion ; 5,99&nbsp;€ pour les autres destinations proposées par la boutique. Produits individuels : 5,99&nbsp;€ pour toutes les destinations proposées. Le forfait de 5,99&nbsp;€ ne s'applique qu'une seule fois par commande.</p>
				</details>
				<details class="faq-item">
					<summary>Le roll-on offert est-il rechargeable ?</summary>
					<p>Oui. D'une contenance de 10&nbsp;ml, il est offert avec chaque pack Essential Rituals et livré vide : remplissez-le selon les recommandations propres à chaque huile, avec une huile végétale adaptée.</p>
				</details>
				<details class="faq-item">
					<summary>Puis-je acheter les produits d'un rituel séparément ?</summary>
					<p>Oui, tous les produits sont disponibles à l'unité dans la Boutique.</p>
				</details>
			</div>

			<div style="text-align:center;margin-top:36px;">
				<a href="<?php echo esc_url( home_url( '/boutique/' ) ); ?>" class="btn btn--primary btn--small">Explorer la boutique</a>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
