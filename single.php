<?php get_header(); ?>

    <div class="box">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>
        <?php endif; ?>
    </div>
    
    <?php get_sidebar(); ?>

<?php get_footer(); ?>