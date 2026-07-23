<?php if ( ! defined( 'ABSPATH' ) ) exit;

$facebook_url  = get_theme_mod( 'aromaoel_facebook_url' );
$instagram_url = get_theme_mod( 'aromaoel_instagram_url' );
?>

<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div>
				<h4>AROMA OËL</h4>
				<p>AROMA OËL — maison française de rituels naturels. Huiles essentielles, huiles végétales et poudres sélectionnées avec exigence, préparées avec soin par MAISON KAMEO. PURE BY NATURE — la pureté, sans compromis.</p>
			</div>
			<div>
				<h4>Rubriques</h4>
				<ul>
					<?php if ( has_nav_menu( 'footer-rubriques' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-rubriques', 'container' => false, 'items_wrap' => '%3$s' ) ); else : ?>
						<li><a href="<?php echo esc_url( home_url( '/rituels/' ) ); ?>">Rituels</a></li>
						<li><a href="<?php echo esc_url( home_url( '/boutique/' ) ); ?>">Boutique</a></li>
						<li><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>">Journal</a></li>
						<li><a href="<?php echo esc_url( home_url( '/notre-histoire/' ) ); ?>">Notre histoire</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div>
				<h4>Service client</h4>
				<ul>
					<?php if ( has_nav_menu( 'footer-service' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-service', 'container' => false, 'items_wrap' => '%3$s' ) ); else : ?>
						<li><a href="<?php echo esc_url( home_url( '/livraison/' ) ); ?>">Livraison</a></li>
						<li><a href="<?php echo esc_url( home_url( '/retours/' ) ); ?>">Retours</a></li>
						<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/precautions-generales/' ) ); ?>">Précautions générales</a></li>
						<li><a href="<?php echo esc_url( home_url( '/certificats-analyse/' ) ); ?>">Certificats d'analyse</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div>
				<h4>Informations</h4>
				<ul>
					<?php if ( has_nav_menu( 'footer-informations' ) ) : wp_nav_menu( array( 'theme_location' => 'footer-informations', 'container' => false, 'items_wrap' => '%3$s' ) ); else : ?>
						<li><a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>">Mentions légales</a></li>
						<li><a href="<?php echo esc_url( home_url( '/cgv/' ) ); ?>">CGV</a></li>
						<li><a href="<?php echo esc_url( home_url( '/politique-de-confidentialite/' ) ); ?>">Politique de confidentialité</a></li>
						<li><a href="<?php echo esc_url( home_url( '/politique-cookies/' ) ); ?>">Politique des cookies</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<span>© <?php echo esc_html( date( 'Y' ) ); ?> AROMA OËL — MAISON KAMEO. Tous droits réservés.</span>

			<?php if ( $facebook_url || $instagram_url ) : ?>
			<div class="footer-social">
				<?php if ( $facebook_url ) : ?>
					<a href="<?php echo esc_url( $facebook_url ); ?>" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
						<i class="ti ti-brand-facebook" aria-hidden="true"></i>
					</a>
				<?php endif; ?>
				<?php if ( $instagram_url ) : ?>
					<a href="<?php echo esc_url( $instagram_url ); ?>" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
						<i class="ti ti-brand-instagram" aria-hidden="true"></i>
					</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- Règle Brand Book : seuls les réseaux dont l'URL officielle est validée sont affichés.
			     Renseignez les URL dans Apparence > Personnaliser > AROMA OËL — Réseaux sociaux -->
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
