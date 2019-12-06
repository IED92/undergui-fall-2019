
 <!-- get post loop for 8 posts to be displayed on cummunity and get more to show up with more button -->
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => -1,
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
        <a href="<?php get_permalink();?>">  
            <div>
                <?php the_post_thumbnail('full'); ?>
                <?php echo get_the_date( 'F j, Y' ); ?>
                <?php echo get_post_field('Catagory'); ?>
                <?php single_post_title(); ?>
            </div>
        </a>  
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>