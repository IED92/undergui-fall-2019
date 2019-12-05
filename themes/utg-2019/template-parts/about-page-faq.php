<?php

/**
 * Template part for displaying faq in about page.
 *
 * @package utg_Theme
 */
?>

<section class="faq-container">
	<!-- faq loop for about page -->
	<?php if (have_rows('faq')) : ?>

		<!-- loop through the rows of data -->
		<?php while (have_rows('faq')) : the_row(); ?>

			<article class="faq-item">

				<!-- display a sub field value -->

				<div class="faq-question-container">
					<!-- <img src="" alt=""> -->
					<div class="faq-question">
						<h2>Q</h2>
						<h3><?php the_sub_field('question'); ?></h3>

					</div>
					<i class="fas fa-chevron-down down"></i>
					<i class="fas fa-chevron-up up"></i>

				</div>

				<div class="faq-answer-container">
					<!-- <img src="" alt=""> -->
					<h2>A</h2>
					<div class="faq-answer">
						<?php if (have_rows('answer')) : ?>
							<?php while (have_rows('answer')) : the_row(); ?>
								<p><?php the_sub_field('answer_text'); ?></p>
						<?php endwhile;

								else :

								// no rows found

								endif; ?>

					</div>
				</div>

			</article>
	<?php endwhile;

	else :

	// no rows found

	endif; ?>


</section>