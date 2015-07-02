<?php get_header(); ?>

<div class="box">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h1>
        			<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
        			</a>
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

<?php get_footer(); ?>