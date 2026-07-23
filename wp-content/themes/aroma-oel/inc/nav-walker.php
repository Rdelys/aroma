<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Walker simple pour transformer le menu WordPress (Apparence > Menus)
 * en <ul><li> avec sous-menus .sub-menu déjà stylés dans style.css
 */
class Aromaoel_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="sub-menu">';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = implode( ' ', $classes );
		$output .= '<li class="' . esc_attr( $class_names ) . '">';
		$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}
