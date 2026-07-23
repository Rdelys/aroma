<?php if ( ! defined( 'ABSPATH' ) ) exit; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Le header transparent-sur-image ne s'applique qu'à l'accueil (qui a un hero avec image de fond).
// Sur les autres pages, le header reste classique, opaque dès le départ.
$is_transparent_header = is_front_page();
?>

<header class="site-header <?php echo $is_transparent_header ? 'site-header--transparent' : ''; ?>">
	<div class="header-inner">

		<nav class="main-nav" aria-label="Menu principal" id="main-nav">

			<div class="main-nav-head">
				<span class="site-logo site-logo--mobile">AROMA OËL</span>
				<button class="menu-close" aria-label="Fermer le menu">
					<i class="ti ti-x" aria-hidden="true"></i>
				</button>
			</div>

			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => '',
					'walker'         => new Aromaoel_Nav_Walker(),
				) );
			} else {
				echo '<ul>
					<li class="menu-item-has-children">
						<a href="' . esc_url( home_url( '/rituels/' ) ) . '">Rituels</a>
						<button class="submenu-toggle" aria-label="Afficher le sous-menu Rituels" aria-expanded="false"><i class="ti ti-chevron-down" aria-hidden="true"></i></button>
						<ul class="sub-menu">
							<li><a href="' . esc_url( home_url( '/rituels/reset/' ) ) . '">RESET</a></li>
							<li><a href="' . esc_url( home_url( '/rituels/flow/' ) ) . '">FLOW</a></li>
							<li><a href="' . esc_url( home_url( '/rituels/boost/' ) ) . '">BOOST</a></li>
							<li><a href="' . esc_url( home_url( '/rituels/glow/' ) ) . '">GLOW</a></li>
							<li><a href="' . esc_url( home_url( '/rituels/roots/' ) ) . '">ROOTS</a></li>
							<li><a href="' . esc_url( home_url( '/rituels/bloom/' ) ) . '">BLOOM</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="' . esc_url( home_url( '/boutique/' ) ) . '">Boutique</a>
						<button class="submenu-toggle" aria-label="Afficher le sous-menu Boutique" aria-expanded="false"><i class="ti ti-chevron-down" aria-hidden="true"></i></button>
						<ul class="sub-menu">
							<li><a href="' . esc_url( home_url( '/boutique/huiles-essentielles/' ) ) . '">Huiles essentielles</a></li>
							<li><a href="' . esc_url( home_url( '/boutique/huiles-vegetales/' ) ) . '">Huiles végétales</a></li>
							<li><a href="' . esc_url( home_url( '/boutique/poudres-vegetales/' ) ) . '">Poudres végétales</a></li>
						</ul>
					</li>
					<li><a href="' . esc_url( home_url( '/journal/' ) ) . '">Journal</a></li>
					<li><a href="' . esc_url( home_url( '/notre-histoire/' ) ) . '">Notre histoire</a></li>
					<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>
				</ul>';
			}
			?>

			<div class="main-nav-foot">
				<span class="lang-switch lang-switch--mobile">
					<a href="#">FR</a> | <a href="#">EN</a>
				</span>
			</div>
		</nav>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo site-logo--center">AROMA OËL</a>

		<div class="header-icons">
			<span class="lang-switch lang-switch--desktop">
				<a href="#">FR</a> <span aria-hidden="true">|</span> <a href="#">EN</a>
			</span>
			<a href="#" aria-label="Recherche"><i class="ti ti-search" aria-hidden="true"></i></a>
			<a href="<?php echo function_exists('wc_get_page_permalink') ? esc_url( wc_get_page_permalink('myaccount') ) : '#'; ?>" aria-label="Mon compte"><i class="ti ti-user" aria-hidden="true"></i></a>
			<a href="<?php echo function_exists('wc_get_cart_url') ? esc_url( wc_get_cart_url() ) : '#'; ?>" aria-label="Panier" class="cart-link">
				<i class="ti ti-shopping-bag" aria-hidden="true"></i>
				<?php if ( function_exists( 'WC' ) ) : ?>
					<span class="cart-count"><?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?></span>
				<?php endif; ?>
			</a>
			<button class="menu-toggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="main-nav">
				<i class="ti ti-menu-2" aria-hidden="true"></i>
			</button>
		</div>

	</div>

	<div class="nav-overlay"></div>
</header>
