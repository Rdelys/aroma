<?php
/**
 * AROMA OËL — functions.php
 * Thème sur-mesure, léger, sans dépendance à un page builder.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once get_template_directory() . '/inc/nav-walker.php';

/* 1. Support du thème */
function aromaoel_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'aroma-oel' ),
		'footer-rubriques'     => __( 'Footer — Rubriques', 'aroma-oel' ),
		'footer-service'       => __( 'Footer — Service client', 'aroma-oel' ),
		'footer-informations'  => __( 'Footer — Informations légales', 'aroma-oel' ),
	) );
}
add_action( 'after_setup_theme', 'aromaoel_setup' );

/* 2. Feuilles de styles et polices */
function aromaoel_assets() {
	wp_enqueue_style( 'aromaoel-fonts', 'https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&family=Manrope:wght@400;500;600&family=Allura&display=swap', array(), null );
	wp_enqueue_style( 'tabler-icons', 'https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css', array(), '2.0' );
	wp_enqueue_style( 'aromaoel-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'aromaoel-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'aromaoel_assets' );

/* 3. Largeur d'image mise en avant */
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'aromaoel-card', 600, 450, true );
	add_image_size( 'aromaoel-hero', 1400, 900, true );
}

/* 4. Widgets footer (optionnel, en plus des menus) */
function aromaoel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer — La maison', 'aroma-oel' ),
		'id'            => 'footer-maison',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'aromaoel_widgets_init' );

/* 5. Nettoyage <head> WordPress (performance) */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* 6. WooCommerce — retirer wrapper par défaut pour custom design plus tard */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
function aromaoel_woo_wrapper_start() { echo '<main class="container section">'; }
function aromaoel_woo_wrapper_end() { echo '</main>'; }
add_action( 'woocommerce_before_main_content', 'aromaoel_woo_wrapper_start' );
add_action( 'woocommerce_after_main_content', 'aromaoel_woo_wrapper_end' );

/* 7. Menu mobile toggle — chargé via assets/js/main.js */
