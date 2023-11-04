<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_jsp
 */
$dataDessert = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<h1><?php the_title();?></h1>
		</header><!-- .page-header -->

		<section class="wrapper-bois">

			<?php
			while ( have_posts() ) :
				the_post();
			?>
			<article class="card-bois">
				<?php the_post_thumbnail(); ?>
					<div class="card-content">
						<h3><?php the_title() ?></h3>
						<?php the_content(); ?>
						<button class="btn-bois">Commander</button>
					</div>
			</article>
		</section>

		<div class="nav-bois">
				<?php the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Précédement :', 'ping-passion' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Suivant :', 'ping-passion' ) . '</span> <span class="nav-title">%title</span>',
					)
					);
				?>
			</div>

			

			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

	</main><!-- #main -->

<?php
get_footer();
