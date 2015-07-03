<?php include_once("module_profile__post.php"); ?>

<section id="profile">
		<div class="resume">
			<section id="education" class="row">
				<aside class="resume_type medium-2 column">
					<div class="row">
						<h4 class="column">Utdanning</h4>
					</div>
				</aside>
				<?php
				  $resume_query_args = array(
				    'post_type' => $post_type,
						'resumecategory' => 'utdanning',
						'post_status' => 'publish',
				    'orderby' => 'date',
				    'order' => 'DESC',
				    'posts_per_page' => -1,
				  );
					$resume_query= null;
				  $resume_query = new WP_Query($resume_query_args);

					if($resume_query->have_posts()) :
					  while($resume_query->have_posts()) : $resume_query->the_post();

						$title = get_the_title();
						$content = get_the_content();
						$date = get_post_meta($post->ID, 'date', true);
						$type = get_post_meta($post->ID, 'type', true);
						$link = get_post_meta($post->ID, 'link', true);

						makeProfilePost("$link", "$title", "$date", "$type", "$content");
					  endwhile;
						wp_reset_postdata();
					endif;
				?>
			</section>
			<section id="education" class="row">
				<aside class="resume_type medium-2 column">
					<div class="row">
						<h4 class="column">Erfaring</h4>
					</div>
				</aside>
				<?php
				  $resume_query_args = array(
				    'post_type' => $post_type,
						'resumecategory' => 'erfaring',
						'post_status' => 'publish',
				    'orderby' => 'date',
				    'order' => 'DESC',
				    'posts_per_page' => -1,
				  );
					$resume_query= null;
				  $resume_query = new WP_Query($resume_query_args);

					if($resume_query->have_posts()) :
					  while($resume_query->have_posts()) : $resume_query->the_post();

						$title = get_the_title();
						$content = get_the_content();
						$date = get_post_meta($post->ID, 'date', true);
						$type = get_post_meta($post->ID, 'type', true);
						$link = get_post_meta($post->ID, 'link', true);

						makeProfilePost("$link", "$title", "$date", "$type", "$content");
					  endwhile;
						wp_reset_postdata();
					endif;
				?>
			</section>
		</div>
	</section>
