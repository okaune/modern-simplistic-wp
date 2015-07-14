<?php get_header(); ?>

    <div class="single_blog row">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="column">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <div class="row">
                        <div class="column medium-2">
                            <div class="entry_date">
                                <span class="entry_date_element entry_date_month"><?php echo get_the_date('M'); ?></span>
                                <span class="entry_date_element entry_date_day"><?php echo get_the_date('j'); ?></span>
                                <span class="entry_date_element entry_date_year"><?php echo get_the_date('Y'); ?></span>
                            </div>
                        </div>
                        <div class="entry column medium-8 end">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>
