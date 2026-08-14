<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsc-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vsc-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__inner">

			<button type="button" class="menu-toggle" id="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
				<span class="menu-toggle__icon"><span></span><span></span><span></span></span>
				<span class="menu-toggle__label"><?php esc_html_e( 'Menu', 'vsc-theme' ); ?></span>
			</button>

			<div class="site-branding">
				<?php the_custom_logo(); ?>
				<?php if ( ! has_custom_logo() ) : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div class="site-header__actions">

				<a href="tel:+14502325202" class="site-header__phone">(450) 232-5202</a>

				<a href="/urgence-dentaire/" class="btn btn--pill"><?php esc_html_e( 'Urgence dentaire', 'vsc-theme' ); ?></a>

				<a href="/prendre-rendez-vous/" class="btn btn--round" aria-label="<?php esc_attr_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
						<rect x="3" y="5" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.6"/>
						<path d="M3 9.5H21" stroke="currentColor" stroke-width="1.6"/>
						<path d="M7.5 3V6.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
						<path d="M16.5 3V6.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
					</svg>
				</a>

				<div class="lang-switcher">
					<button type="button" class="lang-switcher__current" id="lang-switcher-toggle" aria-expanded="false" aria-haspopup="true">
						EN
						<svg width="10" height="6" viewBox="0 0 10 6" fill="none" aria-hidden="true">
							<path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<ul class="lang-switcher__menu" id="lang-switcher-menu">
						<li><a href="#">FR</a></li>
						<li><a href="#">EN</a></li>
					</ul>
				</div>

			</div><!-- .site-header__actions -->

		</div><!-- .site-header__inner -->

		<div class="menu-overlay" id="site-navigation">
			<button type="button" class="menu-close" id="menu-close" aria-label="<?php esc_attr_e( 'Fermer le menu', 'vsc-theme' ); ?>">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
					<path d="M1 1L17 17M17 1L1 17" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
				</svg>
			</button>

			<div class="menu-overlay__inner">

				<div class="menu-overlay__media">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/menu-photo.jpg' ); ?>" alt="" class="menu-overlay__photo">

					<div class="menu-overlay__social">
						<a href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10.5" stroke="currentColor" stroke-width="1.3"/><path d="M13.8 8.6h1.4V6.3h-1.7c-1.8 0-2.9 1.1-2.9 3v1.4H9.1v2.1h1.5v6.1h2.3v-6.1h1.6l.3-2.1h-1.9V9.5c0-.6.3-.9.9-.9z" fill="currentColor"/></svg>
						</a>
						<a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.3"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.3"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg>
						</a>
					</div>

					<a href="/prendre-rendez-vous/" class="btn btn--outline menu-overlay__cta">
						<?php esc_html_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>
						<svg width="16" height="12" viewBox="0 0 16 12" fill="none" aria-hidden="true"><path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</div><!-- .menu-overlay__media -->

				<div class="menu-overlay__columns">

					<div class="menu-col">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-overlay-col-1',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Boca_Overlay_Menu_Walker(),
							'fallback_cb'    => false,
						) );
						?>
					</div>

					<div class="menu-col">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-overlay-col-2',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Boca_Overlay_Menu_Walker(),
							'fallback_cb'    => false,
						) );
						?>
					</div>

					<div class="menu-col">
						<p class="menu-col__title">+ <?php esc_html_e( 'Contact', 'vsc-theme' ); ?></p>
						<address class="menu-col__address">
							<a href="tel:+14502325202">T (450) 232-5202</a>
							<span>1500 Rue Montgolfier, suite 201</span>
							<span>Chomedey (Laval), Québec&nbsp; H7T 0A2</span>
						</address>

						<table class="menu-col__hours">
							<tr>
								<th><?php esc_html_e( 'Lundi à Mercredi', 'vsc-theme' ); ?></th>
								<td><?php esc_html_e( '8h30 à 17h00', 'vsc-theme' ); ?></td>
							</tr>
							<tr>
								<th><?php esc_html_e( 'Jeudi', 'vsc-theme' ); ?></th>
								<td><?php esc_html_e( '8h30 à 18h00', 'vsc-theme' ); ?></td>
							</tr>
							<tr>
								<th><?php esc_html_e( 'Vendredi', 'vsc-theme' ); ?></th>
								<td><?php esc_html_e( '8h30 à 16h00', 'vsc-theme' ); ?></td>
							</tr>
							<tr>
								<th><?php esc_html_e( 'Samedi', 'vsc-theme' ); ?></th>
								<td><?php esc_html_e( '8h30 à 14h00', 'vsc-theme' ); ?></td>
							</tr>
							<tr>
								<th><?php esc_html_e( 'Dimanche', 'vsc-theme' ); ?></th>
								<td><?php esc_html_e( 'Fermé', 'vsc-theme' ); ?></td>
							</tr>
						</table>

						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-overlay-col-3',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Boca_Overlay_Menu_Walker(),
							'fallback_cb'    => false,
						) );
						?>
					</div>

				</div><!-- .menu-overlay__columns -->

			</div><!-- .menu-overlay__inner -->
		</div><!-- .menu-overlay -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
