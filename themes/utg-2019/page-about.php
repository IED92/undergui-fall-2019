<?php
/**
 * The template for displaying all pages.
 *
 * @package utg_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<!-- Custom loop for testimonials -->
	
	<?php
$utg_testimonial_about_page_loop = new WP_Query( array(
    'post_type' => 'Property',
    'posts_per_page' => 6,
  )
);
?>

<?php while ( $utg_testimonial_about_page_loop->have_posts() ) : $utg_testimonial_about_page_loop->the_post(); ?>

  <!-- do stuff -->

<?php endwhile; wp_reset_query(); ?>

	<!-- faq loop for about page -->
		<?php if( have_rows('faq') ): ?>

			<!-- loop through the rows of data -->
			<?php while ( have_rows('faq') ) : the_row(); ?>

			<!-- display a sub field value -->
			<h3><?php the_sub_field('question'); ?></h3>
			<p><?php the_sub_field('awnser'); ?></p>

			<?php endwhile;

			else :

			// no rows found

			endif; ?>

			<!-- partners loop for about page -->
				<?php if( have_rows('partners') ): ?>

				<!-- loop through the rows of data -->
				<?php while ( have_rows('partners') ) : the_row(); ?>

				<!-- display a sub field value -->
				<h3><?php the_sub_field('name'); ?></h3>
				
				
				<?php if( get_sub_field('logo') ): ?>
    				<img src="<?php the_sub_field('logo'); ?>" />
				<?php endif; ?>


				<p><?php the_sub_field('content'); ?></p>

				<?php endwhile;

				else :

				// no rows found

				endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	

<?php get_footer(); ?>