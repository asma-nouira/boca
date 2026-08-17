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

					<div class="menu-col col-1">
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
						<svg xmlns="http://www.w3.org/2000/svg" width="57.372" height="57.372" viewBox="0 0 57.372 57.372">
  <g id="Groupe_247" data-name="Groupe 247" transform="translate(-604 -8595.5)">
    <path id="Tracé_430" data-name="Tracé 430" d="M770.022,46.813h-6.865V29.959h-5.611V23.413h5.585c.013-.276.03-.492.034-.708.032-1.823-.022-3.652.108-5.468a7.578,7.578,0,0,1,7.664-7.351c1.737-.051,3.48.086,5.219.146a4.1,4.1,0,0,1,.582.108v5.875c-.7,0-1.348-.015-1.993,0-.9.025-1.8.015-2.694.127a2,2,0,0,0-1.918,1.923c-.1,1.749-.026,3.506-.026,5.323h6.413l-.845,6.563h-5.653Z" transform="translate(-134.429 8596)" fill="#43544a"/>
    <circle id="Ellipse_2" data-name="Ellipse 2" cx="27.686" cy="27.686" r="27.686" transform="translate(605 8596.5)" fill="none" stroke="#43544a" stroke-miterlimit="10" stroke-width="2"/>
  </g>
</svg>

						</a>
						<a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
							<svg xmlns="http://www.w3.org/2000/svg" width="57.372" height="57.372" viewBox="0 0 57.372 57.372">
  <g id="Groupe_248" data-name="Groupe 248" transform="translate(-604 -8675.928)">
    <circle id="Ellipse_3" data-name="Ellipse 3" cx="27.686" cy="27.686" r="27.686" transform="translate(605 8676.928)" fill="none" stroke="#43544a" stroke-miterlimit="10" stroke-width="2"/>
    <path id="Tracé_431" data-name="Tracé 431" d="M767.042,123.574c-2.714-.115-5.386-.122-8.036-.365a7.889,7.889,0,0,1-7.318-7.662c-.149-4.944-.205-9.9,0-14.842a7.833,7.833,0,0,1,7.645-7.689c4.206-.243,8.43-.178,12.646-.177a19.447,19.447,0,0,1,4.048.381,7.812,7.812,0,0,1,6.33,7.452c.166,5.025.172,10.066-.018,15.089a7.842,7.842,0,0,1-7.278,7.442c-2.676.25-5.375.257-8.019.371M766.987,95.4c0,.076,0,.152-.005.228-2.231,0-4.464-.059-6.692.017a5.667,5.667,0,0,0-5.04,2.65,7.635,7.635,0,0,0-.934,4c-.024,4.027-.066,8.057.02,12.083.086,3.991,2.253,6.146,6.233,6.209,4.432.069,8.869.052,13.3-.008,3.164-.043,5.6-2.105,5.69-5.055.141-4.917.125-9.843,0-14.761a5.06,5.06,0,0,0-4.675-4.957c-2.619-.269-5.264-.283-7.9-.409" transform="translate(-134.429 8596)" fill="#43544a"/>
    <path id="Tracé_432" data-name="Tracé 432" d="M759.019,108.044a8.009,8.009,0,1,1,7.915,7.982,7.973,7.973,0,0,1-7.915-7.982m7.995,5.2a5.189,5.189,0,0,0,5.222-5.072,5.211,5.211,0,1,0-10.421.072,5.18,5.18,0,0,0,5.2,5" transform="translate(-134.429 8596)" fill="#43544a"/>
    <path id="Tracé_433" data-name="Tracé 433" d="M777.173,99.9a1.84,1.84,0,1,1-3.68.011,1.84,1.84,0,0,1,3.68-.011" transform="translate(-134.429 8596)" fill="#ecd8c9"/>
  </g>
</svg>

						</a>
					</div>

					</div>

					<div class="menu-col col-2">
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

					<div class="menu-col col-3">
						<p class="menu-col__title">+ <?php esc_html_e( 'Contact', 'vsc-theme' ); ?></p>
						<address class="menu-col__address">
							<a href="tel:+14502325202" class="bold">T (450) 232-5202</a>
							<p>1500 Rue Montgolfier, suite 201 <span class="nowrap">Chomedey (Laval), Québec&nbsp; H7T 0A2</span></p>
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

						<a href="https://www.docclik.com/fr/clinic/12333/booking" class="btn-cta btn--outline menu-overlay__cta">
						<?php esc_html_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>
						<svg width="16" height="12" viewBox="0 0 16 12" fill="none" aria-hidden="true"><path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</div><!-- .menu-overlay__columns -->

			</div><!-- .menu-overlay__inner -->
		</div><!-- .menu-overlay -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
