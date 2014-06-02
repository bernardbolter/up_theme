<?php while ( have_posts() ) : the_post(); ?>

<div id="painting" class="site-painting" style="background-image: url(<?php 
						if ( get_field('bg_image')) {
							the_field('bg_image');
						} else  {
							echo get_bloginfo('template_url').'/gfx/default_bg_image.jpg'; 
						}
						?>)">
	<div class="painting_rap" >
		<h1><?php echo get_field('hashtag'); ?></h1>

			<picture class="the_painting">
				<!--[if IE 9]><video style="display: none;"><![endif]-->
				<source srcset="<?php echo get_field('large_painting'); ?>" media="(min-width: 701px)">
				<source srcset="<?php echo get_field('medium_painting'); ?>" media="(min-width: 401px)">
				<source srcset="<?php echo get_field('small_painting'); ?>">
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo get_field('small_painting'); ?>" alt="<?php the_title(); ?> - Historical Photo and Acrylic on Canvas">
			</picture>

		<div class="painting_info">
			<p class="paint_title"><?php echo get_field('title'); ?></p>
			<p class="paint_info"><?php echo get_field('location'); ?> . <?php echo get_field('date'); ?></p>
			<p class="paint_medium">Historical Photo and Acrylic on Canvas</p>
			<p class="paint_size_date"><?php echo get_field('size'); ?> | <?php echo get_field('date_create'); ?></p>
		</div> <!-- painting_info -->

	</div> <!-- painting rap -->
</div> <!-- painting -->

<?php endwhile; // end of the loop. ?>