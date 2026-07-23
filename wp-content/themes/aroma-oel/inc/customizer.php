<?php
/**
 * AROMA OËL — Réglages du thème via le Customizer WordPress
 * Permet d'uploader les images et de renseigner les réseaux sociaux
 * depuis Apparence > Personnaliser, sans toucher au code.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function aromaoel_customize_register( $wp_customize ) {

	/* ============ SECTION IMAGES ============ */
	$wp_customize->add_section( 'aromaoel_images', array(
		'title'    => __( 'AROMA OËL — Images', 'aroma-oel' ),
		'priority' => 30,
	) );

	// Image Hero (accueil)
	$wp_customize->add_setting( 'aromaoel_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aromaoel_hero_image', array(
		'label'    => __( 'Image du Hero (accueil)', 'aroma-oel' ),
		'section'  => 'aromaoel_images',
		'settings' => 'aromaoel_hero_image',
	) ) );

	// Image Philosophie
	$wp_customize->add_setting( 'aromaoel_philo_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aromaoel_philo_image', array(
		'label'    => __( 'Image du bloc Philosophie', 'aroma-oel' ),
		'section'  => 'aromaoel_images',
		'settings' => 'aromaoel_philo_image',
	) ) );

	// Image Notre Histoire
	$wp_customize->add_setting( 'aromaoel_story_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aromaoel_story_image', array(
		'label'    => __( 'Image du bloc Notre histoire', 'aroma-oel' ),
		'section'  => 'aromaoel_images',
		'settings' => 'aromaoel_story_image',
	) ) );

	// Image Hero — page Rituels
	$wp_customize->add_setting( 'aromaoel_rituels_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aromaoel_rituels_hero_image', array(
		'label'    => __( 'Image du Hero (page Rituels)', 'aroma-oel' ),
		'section'  => 'aromaoel_images',
		'settings' => 'aromaoel_rituels_hero_image',
	) ) );

	/* ============ SECTION RÉSEAUX SOCIAUX ============ */
	$wp_customize->add_section( 'aromaoel_social', array(
		'title'    => __( 'AROMA OËL — Réseaux sociaux', 'aroma-oel' ),
		'priority' => 31,
		'description' => __( "N'affiche l'icône que si l'URL est renseignée — cohérent avec la règle de marque : seuls les réseaux dont l'URL officielle est validée sont affichés.", 'aroma-oel' ),
	) );

	$wp_customize->add_setting( 'aromaoel_facebook_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'aromaoel_facebook_url', array(
		'label'    => __( 'URL Facebook', 'aroma-oel' ),
		'section'  => 'aromaoel_social',
		'type'     => 'url',
	) );

	$wp_customize->add_setting( 'aromaoel_instagram_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'aromaoel_instagram_url', array(
		'label'    => __( 'URL Instagram', 'aroma-oel' ),
		'section'  => 'aromaoel_social',
		'type'     => 'url',
	) );

	$wp_customize->add_setting( 'aromaoel_linkedin_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'aromaoel_linkedin_url', array(
		'label'    => __( 'URL LinkedIn', 'aroma-oel' ),
		'section'  => 'aromaoel_social',
		'type'     => 'url',
	) );

	$wp_customize->add_setting( 'aromaoel_snapchat_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'aromaoel_snapchat_url', array(
		'label'    => __( 'URL Snapchat', 'aroma-oel' ),
		'section'  => 'aromaoel_social',
		'type'     => 'url',
	) );
}
add_action( 'customize_register', 'aromaoel_customize_register' );