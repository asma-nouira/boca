<?php
/**
 * The template for displaying all single posts
 *
 * Reproduit le design : titre centré, date/auteur, image mise en avant,
 * contenu, puis lien "Revenir aux articles".
 *
 * @package vsc-theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'vsc-single-article' ); ?>>

			<header class="vsc-single-article__header">
				<h1 class="vsc-single-article__title"><?php the_title(); ?></h1>
				<p class="vsc-single-article__meta">
					<?php
					printf(
						/* translators: 1: date, 2: author name */
						esc_html__( 'Publié le %1$s par %2$s', 'vsc' ),
						esc_html( get_the_date( 'Y / m / d' ) ),
						esc_html( get_the_author() )
					);
					?>
				</p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="vsc-single-article__image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="vsc-single-article__content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages :', 'vsc' ),
					'after'  => '</div>',
				) );
				?>
			</div>

			<div class="vsc-single-article__back">
				<a href="<?php echo esc_url( home_url( '/blogue/' ) ); ?>">
					<?php esc_html_e( 'Revenir aux articles', 'vsc' ); ?>
				</a>
			</div>

		</article>

		<?php

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();