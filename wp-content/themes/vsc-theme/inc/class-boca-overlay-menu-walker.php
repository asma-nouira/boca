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

	/**
	 * Top-level item currently being rendered, so start_lvl() (which WP
	 * calls without the item) knows whether the list it's about to open
	 * belongs to the "services" column — the one long enough to need a
	 * mobile "voir plus" toggle.
	 */
	private $current_top_item = null;

	private function is_services_item( $item ) {
		return false !== stripos( remove_accents( $item->title ), 'service' );
	}

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$is_services = 0 === $depth && $this->current_top_item && $this->is_services_item( $this->current_top_item );
		$class       = 'menu-col__list' . ( $is_services ? ' menu-col__list--services is-collapsed' : '' );
		$output     .= '<ul class="' . $class . '">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$url = ! empty( $item->url ) ? esc_url( $item->url ) : '#';

		if ( 0 === $depth ) {
			$this->current_top_item = $item;
			$is_services            = $this->is_services_item( $item );
			$title_class            = 'menu-col__title' . ( $is_services ? ' menu-col__title--services' : '' );

			$output .= '<p class="' . $title_class . '"><a href="' . $url . '">+ ' . esc_html( $item->title ) . '</a></p>';

			if ( $is_services ) {
				$output .= '<button type="button" class="menu-services-toggle-all" aria-expanded="false" data-label-more="' . esc_attr__( 'Voir plus de nos services dentaires', 'vsc-theme' ) . '" data-label-less="' . esc_attr__( 'Voir moins de nos services dentaires', 'vsc-theme' ) . '">' . esc_html__( 'Voir plus de nos services dentaires', 'vsc-theme' ) . '</button>';
			}
		} else {
			$output .= '<li><a href="' . $url . '">' . esc_html( $item->title ) . '</a></li>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// Elements are self-closed in start_el().
	}
}
