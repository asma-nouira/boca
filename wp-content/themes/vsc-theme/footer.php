<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsc-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		  <div class="footer-inner">

    <!-- Logo + réseaux sociaux -->
    <div class="footer-brand">
    <img src="/wp-content/themes/vsc-theme/images/Clinique-dentaire-Boca.svg" alt="Clinique dentaire Boca"/>
   
    </div>

    <!-- À propos -->
    <div class="footer-col col-2">
      	<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-overlay-col-1',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Boca_Overlay_Menu_Walker(),
							'fallback_cb'    => false,
						) );
						?>
	     <div class="footer-social">
        <a href="#" aria-label="Facebook">
         <svg xmlns="http://www.w3.org/2000/svg" width="19.192" height="36.938" viewBox="0 0 19.192 36.938">
  <path id="Tracé_430" data-name="Tracé 430" d="M770.022,46.813h-6.865V29.959h-5.611V23.413h5.585c.013-.276.03-.492.034-.708.032-1.823-.022-3.652.108-5.468a7.578,7.578,0,0,1,7.664-7.351c1.737-.051,3.48.086,5.219.146a4.1,4.1,0,0,1,.582.108v5.875c-.7,0-1.348-.015-1.993,0-.9.025-1.8.015-2.694.127a2,2,0,0,0-1.918,1.923c-.1,1.749-.026,3.506-.026,5.323h6.413l-.845,6.563h-5.653Z" transform="translate(-757.546 -9.875)" fill="#fff"/>
</svg>

        </a>
        <a href="#" aria-label="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="30.927" height="30.744" viewBox="0 0 30.927 30.744">
  <g id="Groupe_363" data-name="Groupe 363" transform="translate(-617.126 -8688.83)">
    <path id="Tracé_431" data-name="Tracé 431" d="M767.042,123.574c-2.714-.115-5.386-.122-8.036-.365a7.889,7.889,0,0,1-7.318-7.662c-.149-4.944-.205-9.9,0-14.842a7.833,7.833,0,0,1,7.645-7.689c4.206-.243,8.43-.178,12.646-.177a19.447,19.447,0,0,1,4.048.381,7.812,7.812,0,0,1,6.33,7.452c.166,5.025.172,10.066-.018,15.089a7.842,7.842,0,0,1-7.278,7.442c-2.676.25-5.375.257-8.019.371M766.987,95.4c0,.076,0,.152-.005.228-2.231,0-4.464-.059-6.692.017a5.667,5.667,0,0,0-5.04,2.65,7.635,7.635,0,0,0-.934,4c-.024,4.027-.066,8.057.02,12.083.086,3.991,2.253,6.146,6.233,6.209,4.432.069,8.869.052,13.3-.008,3.164-.043,5.6-2.105,5.69-5.055.141-4.917.125-9.843,0-14.761a5.06,5.06,0,0,0-4.675-4.957c-2.619-.269-5.264-.283-7.9-.409" transform="translate(-134.429 8596)" fill="#fff"/>
    <path id="Tracé_432" data-name="Tracé 432" d="M759.019,108.044a8.009,8.009,0,1,1,7.915,7.982,7.973,7.973,0,0,1-7.915-7.982m7.995,5.2a5.189,5.189,0,0,0,5.222-5.072,5.211,5.211,0,1,0-10.421.072,5.18,5.18,0,0,0,5.2,5" transform="translate(-134.429 8596)" fill="#fff"/>
    <path id="Tracé_433" data-name="Tracé 433" d="M777.173,99.9a1.84,1.84,0,1,1-3.68.011,1.84,1.84,0,0,1,3.68-.011" transform="translate(-134.429 8596)" fill="#ecd8c9"/>
  </g>
</svg>

        </a>
      </div>
    </div>

    <!-- Services / Urgence / Espace patient -->
    <div class="footer-col col-3">
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

    <!-- Contact -->
    <div class="footer-col footer-contact">
      <p class="menu-col__title">+ <?php esc_html_e( 'Contact', 'vsc-theme' ); ?></p>
      <a class="phone underline" href="tel:+14502325202">T (450) 232-5202</a>

      <address>
        1500 Rue Montgolfier, suite 201 <span class="nowrap">Chomedey (Laval), Québec  H7T 0A2</p>
      </address>

      <div class="footer-hours">
        <div><span>Lundi à Mercredi</span><span>8h30 à 17h00</span></div>
        <div><span>Jeudi</span><span>8h30 à 18h00</span></div>
        <div><span>Vendredi</span><span>8h30 à 16h00</span></div>
        <div><span>Samedi</span><span>8h30 à 14h00</span></div>
        <div><span>Dimanche</span><span>Fermé</span></div>
      </div>

      <a href="https://www.docclik.com/fr/clinic/12333/booking" class="btn-cta btn--outline menu-overlay__cta">
						<?php esc_html_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>
						<svg width="16" height="12" viewBox="0 0 16 12" fill="none" aria-hidden="true"><path d="M1 6H15M15 6L10 1M15 6L10 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
    </div>

  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
document.querySelector('.scroll-arrow').addEventListener('click', () => {
  document.querySelector('#next-section').scrollIntoView({ behavior: 'smooth' });
});
</script>
<script>
const items = document.querySelectorAll('.circle-item');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.3 });

items.forEach(item => observer.observe(item));
</script>
<script>
const smileSvg = document.getElementById('smile-svg');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

observer.observe(smileSvg);
</script>

</body>
</html>
