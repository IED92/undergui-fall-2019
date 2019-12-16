<div class="classes-container">

<<<<<<< HEAD
	<?php
	$args = array(
		'order' => 'ASC',
		'post_type' => 'post_classes',
		'posts_per_page' => -1
	);
	$classes = new WP_Query($args);
	?>
	<?php if ($classes->have_posts()) : while ($classes->have_posts()) : $classes->the_post(); ?>

        <!-- website default card -->
        <a class="classes-box" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">

            <!-- dynamic post image for card -->
            <div class="class-image" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
            </div>

            <!-- dynamic post title, date, and category -->
            <div class="post-meta">
                <h3 class="class-title"><?= the_title(); ?></h3>
                <p class="class-age">Age &nbsp;<?= the_field('ages') ?></p>
                <p class="class-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Location.svg" alt="location"> &nbsp;<?= the_field('location') ?></p>
                <p class="class-data">From: &nbsp;<?= the_field('start_date') ?></p>
                <p class="class-data">To: &nbsp;<?= the_field('end_date') ?></p>
                <p class="class-day"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Clock.svg" alt="time"> &nbsp;<?= the_field('time')?></p>
            </div>

            <div class="class-price">
                <p>$&nbsp;<?= the_field('price') ?></p>
            </div>
        </a>
    <?php endwhile;
    else : ?> <p>Sorry, there are no classes to display</p> <?php endif; ?>

	<?php wp_reset_query(); ?>
=======
    <h2>
        <?php echo strval(wp_count_posts($post_type = 'post_classes')->publish)
            . ' Classes'; ?>

    </h2>
    <?php
    $args = array(
        'order' => 'ASC',
        'post_type' => 'post_classes',
        'posts_per_page' => -1,
    );
    $classes = new WP_Query($args);
    ?>
    <?php if ($classes->have_posts()) : while ($classes->have_posts()) : $classes->the_post(); ?>

            <!-- website default card -->
            <a class="classes-box" href="<?php echo get_post_permalink(); ?>" style="background: <?= the_field('background_color'); ?> ">

                <!-- dynamic post image for card -->
                <div class="class-image" style="background: url('<?php the_post_thumbnail_url('full'); ?>'); background-size: cover; background-position: center;">
                </div>

                <!-- dynamic post title, date, and category -->
                <div class="post-meta">
                    <h3 class="class-title"><?= the_title(); ?></h3>
                    <p class="class-age">Age &nbsp;<?= the_field('ages') ?></p>
                    <p class="class-location"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/Location.svg" alt="location"> &nbsp;<?= the_field('location') ?></p>
                    <p class="class-data">From: &nbsp;<?= the_field('start_date') ?></p>
                    <p class="class-data">To: &nbsp;<?= the_field('end_date') ?></p>
                    <?php while (have_rows('time')) : the_row() ?>

                        <p class="class-data"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.svg" alt=""><?php the_sub_field('start_time') ?> &#45; <?php the_sub_field('end_time') ?></p>

                    <?php endwhile; ?>
                </div>

                <div class="class-price">
                    <p>$&nbsp;<?= the_field('price') ?></p>
                </div>

            </a>
        <?php endwhile;
        else : ?> <p>Sorry, there are no classes to display</p> <?php endif; ?>

    <?php wp_reset_query(); ?>
>>>>>>> 9a56ed8de06ee9974a17d51b1134be9a4a3917b1
</div>