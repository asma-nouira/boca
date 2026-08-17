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

				<a href="/urgence-dentaire/" class="btn-cta btn--pill"><?php esc_html_e( 'Urgence dentaire', 'vsc-theme' ); ?></a>

				<a href="/prendre-rendez-vous/" class="btn btn--round" aria-label="<?php esc_attr_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="41.077" viewBox="0 0 35 41.077">
  <g id="Groupe_170" data-name="Groupe 170" transform="translate(-1756 -88.923)">
    <g id="Groupe_158" data-name="Groupe 158" transform="translate(39 -359)">
      <g id="Groupe_157" data-name="Groupe 157">
        <g id="Groupe_155" data-name="Groupe 155">
          <g id="Rectangle_47" data-name="Rectangle 47" transform="translate(1717 453)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2">
            <rect width="35" height="36" stroke="none"/>
            <rect x="1" y="1" width="33" height="34" fill="none"/>
          </g>
          <path id="Tracé_149" data-name="Tracé 149" d="M3803,507.857h32.963" transform="translate(-2085.105 -45.287)" fill="none" stroke="#fff" stroke-width="2"/>
          <g id="Groupe_153" data-name="Groupe 153" transform="translate(1726 448.923)">
            <path id="Tracé_150" data-name="Tracé 150" d="M0,0H8.951" transform="translate(0 8.951) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
            <path id="Tracé_151" data-name="Tracé 151" d="M0,0H8.951" transform="translate(17 8.951) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
          </g>
        </g>
      </g>
    </g>
    <g id="__TEMP__SVG__" transform="translate(1727.97 177.038) rotate(-90)">
      <path id="Tracé_153" data-name="Tracé 153" d="M60.806,53V36.383m0,16.618-6.232-6.232M60.806,53l6.232-6.232" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
    </g>
  </g>
</svg>

				</a>

				<div class="lang-switcher">
				</div>

			</div><!-- .site-header__actions -->

		</div><!-- .site-header__inner -->

		<div class="menu-overlay" id="site-navigation">
			<button type="button" class="menu-close" id="menu-close" aria-label="<?php esc_attr_e( 'Fermer le menu', 'vsc-theme' ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="120.915" height="120.915" viewBox="0 0 120.915 120.915">
  <text id="_" data-name="+" transform="translate(66.468 102.53) rotate(-45)" fill="#fff" font-size="88" font-family="Manrope-Regular, Manrope" letter-spacing="-0.015em"><tspan x="0" y="0">+</tspan></text>
</svg>

			</button>

			<div class="menu-overlay__inner">

				<div class="menu-overlay__media">
					<img src="/wp-content/uploads/2026/08/Boca-Clinique.jpg" alt="Clinique dentaire BOCA" class="menu-overlay__photo">

					
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
						<div class="menu-overlay__social">
						<a href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10.5" stroke="currentColor" stroke-width="1.3"/><path d="M13.8 8.6h1.4V6.3h-1.7c-1.8 0-2.9 1.1-2.9 3v1.4H9.1v2.1h1.5v6.1h2.3v-6.1h1.6l.3-2.1h-1.9V9.5c0-.6.3-.9.9-.9z" fill="currentColor"/></svg>
						</a>
						<a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.3"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.3"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg>
						</a>
					</div>

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

						<a href="/prendre-rendez-vous/" class="btn btn--outline menu-overlay__cta">
						<?php esc_html_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>
						<svg width="16" height="12" viewBox="0 0 16 12" fill="none" aria-hidden="true"><path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</div><!-- .menu-overlay__columns -->

			</div><!-- .menu-overlay__inner -->
		</div><!-- .menu-overlay -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
