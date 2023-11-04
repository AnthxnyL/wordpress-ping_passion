<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_jsp
 */
$dataRevetements = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<h1><?php the_title();?></h1>
		</header><!-- .page-header -->

		<section class="wrapper-revetements">

			<?php
			while ( have_posts() ) :
				the_post();
			?>
			<article class="card-revetements">
				<?php the_post_thumbnail(); ?>
					<div class="card-content-revetements">
						<h3><?php the_title() ?></h3>
						<?php the_content(); ?>
						<button class="btn-revetements">Commander</button>
					</div>
			</article>
		</section>
		
			
		<div class="info-produit">
			<h2>Caractéristique du produit</h2>
			<div class="caracteristique">
				<div class="card">
					<h3> Rapidité : </h3>
					<span><?=$dataRevetements['Rapidite']; ?></span>
				</div>
				<div class="card">
					<h3>Contrôle : </h3>
					<span><?=$dataRevetements['controle']; ?></span>
				</div>
				<div class="card">
					<h3>Adhérence : </h3> 
					<span><?=$dataRevetements['adherence']; ?></span>
				</div>
				<div class="card">
					<h3>Épaisseur</h3>
					<ul>
						<?php foreach ($dataRevetements['epaisseur'] as $epaisseur) : ?>
							<span><li><?=$epaisseur; ?></li></span>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="nav-revetements">
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
			?>

			<?php
			endwhile; // End of the loop.
			?>

	</main><!-- #main -->

<?php
get_footer();
