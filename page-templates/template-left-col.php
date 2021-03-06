<?php
/**
 * Template Name: Two Column, Left-Sidebar
 * Template Post Type: post, page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package some_like_it_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'page-templates/template-parts/content', 'page' );
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

	<?php endwhile; ?>

	<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
