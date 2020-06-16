<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', zerzerzerz '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', qsdqsdq '</div>' );
				?>
			</header><!-- .page-header -->
			chabadabada
			<?php $cat=get_query_var(cat);
			echo $cat;
			if( $cat == 220 ){
			echo "Les Matinales Jiga sont de 3 types...";
			?>

			<?php get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
