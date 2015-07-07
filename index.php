<?php get_header(); ?>

<!-- FEAUTURED BLOGPOST -->
<?php // Large block with large image
        $do_not_duplicate = array(); // Create array
        $my_args = array(
            'posts_per_page' => 1,
            'post__in'  => get_option( 'sticky_posts' ),
            'ignore_sticky_posts' => 1
        );
        $my_query = new WP_Query( $my_args );
		if($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); // Start post loop
        $do_not_duplicate[] = $post->ID; // Fill array with ID
            include 'modules/module_feautured_blogpost.php'; // Get loop content
        endwhile; // End post loop
		endif;
    ?>


<!-- REST OF BLOGPOSTS -->
<div class="blog row">
    <div class="blog_main column medium-8">

        <?php
            $blog_query_args = array(
                'posts_per_page' => -1,
                'post__not_in' => array_merge($do_not_duplicate,get_option( 'sticky_posts' )),
            );
            $blog_query = new WP_Query( $blog_query_args );
            if($blog_query->have_posts()) :
                while($blog_query->have_posts()) : $blog_query->the_post();
                    // Move into separate modules ?>

                    <a class="blog_post_link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="blog_post row">
                            <div class="blog_post_date column medium-3">
                                <span class="blog_post_date__span"><?php echo get_the_date('j'); ?></span><?php echo get_the_date('M'); ?>
                            </div>
                            <div class="blog_post_content column medium-9 medium-offset-3 end">
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <div class="entry">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </a>

            <?php   // End module
                endwhile; ?>
                <div class="navigation">
                    <?php posts_nav_link(); ?>
                </div>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
    <div class="blog_tags column medium-4">
        <?php
            $tags = get_tags();
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a> ';
                }
            }
        ?>
    </div>
</div>

<?php get_footer(); ?>
