<?php
/**
 * Custom walker for the header menu-overlay columns.
 *
 * Renders each top-level menu item as a "+ Title" heading (menu-col__title)
 * and, when it has children, a plain list of links underneath it
 * (menu-col__list) — matching the design's column layout while staying
 * fully editable from Appearance > Menus.
 *
 * @package vsc-theme
 */

class Boca_Overlay_Menu_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="menu-col__list">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$url = ! empty( $item->url ) ? esc_url( $item->url ) : '#';

		if ( 0 === $depth ) {
			$output .= '<p class="menu-col__title"><a href="' . $url . '">+ ' . esc_html( $item->title ) . '</a></p>';
		} else {
			$output .= '<li><a href="' . $url . '">' . esc_html( $item->title ) . '</a></li>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// Elements are self-closed in start_el().
	}
}
