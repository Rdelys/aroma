<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Aromaoel_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="sub-menu">';
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes );
		$class_names = implode( ' ', $classes );

		$output .= '<li class="' . esc_attr( $class_names ) . '">';
		$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';

		if ( $has_children ) {
			$output .= '<button class="submenu-toggle" aria-label="' . esc_attr( 'Afficher le sous-menu ' . $item->title ) . '" aria-expanded="false"><i class="ti ti-chevron-down" aria-hidden="true"></i></button>';
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}