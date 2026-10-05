<?php
/**
 * Template pour les pages 404 (introuvable)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vsc-theme
 */

get_header();

$boca_rdv_url = 'https://www.docclik.com/fr/clinic/12333/booking';
$boca_tel     = '+14502325202';
$boca_tel_txt = '(450) 232-5202';

$boca_liens = array(
	array(
		'titre' => __( 'Nos services dentaires', 'vsc-theme' ),
		'desc'  => __( 'Dentisterie générale, orthodontie, esthétique, implants.', 'vsc-theme' ),
		'url'   => home_url( '/nos-services-dentaires/' ),
	),
	array(
		'titre' => __( 'Urgence dentaire', 'vsc-theme' ),
		'desc'  => __( 'Douleur, dent cassée ou enflure : voici quoi faire.', 'vsc-theme' ),
		'url'   => home_url( '/nos-services-dentaires/urgence-dentaire/' ),
	),
	array(
		'titre' => __( 'Nouveau patient', 'vsc-theme' ),
		'desc'  => __( 'Comment se passe votre première visite chez Boca.', 'vsc-theme' ),
		'url'   => home_url( '/nouveau-patient/' ),
	),
	array(
		'titre' => __( 'Nous joindre', 'vsc-theme' ),
		'desc'  => __( 'Adresse, heures d’ouverture et coordonnées.', 'vsc-theme' ),
		'url'   => home_url( '/contactez-nous/' ),
	),
);
?>
<style>
	 /* ==========================================================
   Page 404 — Clinique dentaire Boca
   Remplace les 4 variables par les couleurs du thème.
   ========================================================== */
.boca-404 {
	--boca-encre:   #1f2a2e; /* texte principal */
	--boca-accent:  #8fa89b; /* couleur de marque (boutons, gencive) */
	--boca-doux:    #f3f1ee; /* fond doux */
	--boca-ligne:   #dcd8d2; /* bordures */

	max-width: 960px;
	margin: 0 auto;
	padding: clamp(3rem, 8vw, 6rem) 1.25rem clamp(3rem, 6vw, 5rem);
	color: var(--boca-encre);
	font-family: inherit;
}

/* ---------- Bloc principal ---------- */
.boca-404__hero {
	max-width: 36rem;
	margin: 0 auto;
	text-align: center;
}

.boca-404__sourire {
	display: block;
	width: min(260px, 70%);
	height: auto;
	margin: 0 auto 1.5rem;
}
.boca-404__gencive { fill: var(--boca-accent); opacity: .35; }
.boca-404__dents rect {
	fill: #fff;
	stroke: var(--boca-encre);
	stroke-width: 2;
}
.boca-404__dents .boca-404__trou {
	fill: none;
	stroke: var(--boca-accent);
	stroke-dasharray: 6 6;
	animation: boca-404-trou 2.4s ease-in-out 1;
}
@keyframes boca-404-trou {
	0%, 40% { opacity: 1; }
	60%     { opacity: .25; }
	100%    { opacity: 1; }
}

.boca-404__code {
	margin: 0 0 .25rem;
	font-size: .95rem;
	letter-spacing: .08em;
	color: var(--boca-accent);
	font-weight: 600;
}

.boca-404 .page-header { margin: 0; }
.boca-404 .page-title {
	margin: 0 0 1rem;
	font-size: clamp(1.9rem, 4.5vw, 2.8rem);
	line-height: 1.15;
	font-weight: 500;
}

.boca-404__intro {
	margin: 0 auto 2rem;
	max-width: 30rem;
	font-size: 1.05rem;
	line-height: 1.6;
}

/* ---------- Boutons ---------- */
.boca-404__actions {
	display: flex;
	flex-wrap: wrap;
	gap: .75rem;
	justify-content: center;
	margin-bottom: 1.25rem;
}
.boca-404__btn {
	display: inline-block;
	padding: .9rem 1.6rem;
	border-radius: 999px;
	border: 1.5px solid var(--boca-encre);
	font-weight: 500;
	text-decoration: none;
	transition: background-color .2s, color .2s;
}
.boca-404__btn--plein { background: var(--boca-encre); color: #fff; }
.boca-404__btn--plein:hover { background: transparent; color: var(--boca-encre); }
.boca-404__btn--contour { background: transparent; color: var(--boca-encre); }
.boca-404__btn--contour:hover { background: var(--boca-encre); color: #fff; }

.boca-404__tel { margin: 0; font-size: .95rem; }
.boca-404__tel a { color: inherit; font-weight: 600; }

/* ---------- Liens utiles ---------- */
.boca-404__liens {
	margin-top: clamp(3rem, 7vw, 4.5rem);
	padding-top: 2rem;
	border-top: 1px solid var(--boca-ligne);
}
.boca-404__liens ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	gap: 1rem;
}
.boca-404__liens a {
	display: block;
	height: 100%;
	padding: 1.25rem;
	background: var(--boca-doux);
	border-radius: 14px;
	color: inherit;
	text-decoration: none;
	border: 1px solid transparent;
	transition: border-color .2s;
}
.boca-404__liens a:hover { border-color: var(--boca-accent); }
.boca-404__lien-titre { display: block; font-weight: 600; margin-bottom: .35rem; }
.boca-404__lien-desc  { display: block; font-size: .9rem; line-height: 1.5; opacity: .8; }

/* ---------- Accessibilité ---------- */
.boca-404 a:focus-visible {
	outline: 2px solid var(--boca-accent);
	outline-offset: 3px;
}
@media (prefers-reduced-motion: reduce) {
	.boca-404__trou { animation: none; }
	.boca-404__btn, .boca-404__liens a { transition: none; }
}
	</style>

	<div id="primary" class="content-area pt-160">
		<main id="main" class="site-main">

			<section class="error-404 not-found boca-404" aria-labelledby="boca-404-titre">

				<div class="boca-404__hero">

					<!-- Illustration : un sourire auquel il manque une dent -->
					<svg class="boca-404__sourire" viewBox="0 0 320 120" role="img" aria-label="<?php esc_attr_e( 'Illustration d’un sourire auquel il manque une dent', 'vsc-theme' ); ?>">
						<path class="boca-404__gencive" d="M10 30 Q160 -10 310 30 L310 48 Q160 10 10 48 Z" />
						<g class="boca-404__dents">
							<rect x="28"  y="34" width="36" height="58" rx="14" />
							<rect x="70"  y="28" width="40" height="66" rx="16" />
							<rect x="116" y="24" width="42" height="72" rx="17" />
							<!-- dent manquante -->
							<rect class="boca-404__trou" x="164" y="24" width="42" height="72" rx="17" />
							<rect x="212" y="28" width="40" height="66" rx="16" />
							<rect x="258" y="34" width="36" height="58" rx="14" />
						</g>
					</svg>

					<p class="boca-404__code" aria-hidden="true">404</p>

					<header class="page-header">
						<h1 id="boca-404-titre" class="page-title">
							<?php esc_html_e( 'Il manque quelque chose ici.', 'vsc-theme' ); ?>
						</h1>
					</header>

					<div class="page-content">
						<p class="boca-404__intro">
							<?php esc_html_e( 'La page que vous cherchez a été déplacée ou n’existe plus. Revenez à l’accueil ou choisissez une section ci-dessous.', 'vsc-theme' ); ?>
						</p>

						<div class="boca-404__actions">
							<a class="boca-404__btn boca-404__btn--plein" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php esc_html_e( 'Retour à l’accueil', 'vsc-theme' ); ?>
							</a>
							<a class="boca-404__btn boca-404__btn--contour" href="<?php echo esc_url( $boca_rdv_url ); ?>" target="_blank" rel="noopener">
								<?php esc_html_e( 'Prendre rendez-vous', 'vsc-theme' ); ?>
							</a>
						</div>

						<p class="boca-404__tel">
							<?php esc_html_e( 'Une question ? Appelez-nous au', 'vsc-theme' ); ?>
							<a href="tel:<?php echo esc_attr( $boca_tel ); ?>"><?php echo esc_html( $boca_tel_txt ); ?></a>
						</p>
					</div>
				</div>

				<nav class="boca-404__liens" aria-label="<?php esc_attr_e( 'Pages utiles', 'vsc-theme' ); ?>">
					<ul>
						<?php foreach ( $boca_liens as $lien ) : ?>
							<li>
								<a href="<?php echo esc_url( $lien['url'] ); ?>">
									<span class="boca-404__lien-titre"><?php echo esc_html( $lien['titre'] ); ?></span>
									<span class="boca-404__lien-desc"><?php echo esc_html( $lien['desc'] ); ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();