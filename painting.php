<?php while ( have_posts() ) : the_post(); ?>

<div id="painting" class="site-painting" style="background-image: url(<?php 
						if ( get_field('bg_image')) {
							the_field('bg_image');
						} else  {
							echo get_bloginfo('template_url').'/gfx/default_bg_image.jpg'; 
						}
						?>)">
	<div class="painting_rap" >
		<div class="painting_top">
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
				<p class="paint_name">by <a href="http://www.bernardbolter.com">Bernard John Bolter IV</a></p>
				<p class="paint_medium">Historical Photo and Acrylic on Canvas</p>
				<p class="paint_size_date"><?php echo get_field('size'); ?> | <?php echo get_field('date_create'); ?></p>
				<div class="paint_info_line"></div>
				<div class="paint_info_shop_rap">
					<img src="<?php echo get_field('red_pin') ?>" alt="red push pin">
					<div class="paint_info_shop_inner">
						<p>Painting is <?php echo get_field('paint_available'); ?> <a href="<?php echo get_field('paint_link'); ?>"><?php echo get_field('paint_text'); ?><?php echo get_field('paint_arrow'); ?></a></p>
						<p>Prints are <?php echo get_field('prints_available'); ?> <a href="<?php echo get_field('prints_link'); ?>"><?php echo get_field('prints_text'); ?><?php echo get_field('prints_arrow'); ?></a></p>
					</div>
				</div>
			</div> <!-- painting_info -->
		</div> <!-- painting_top -->

		<div class="painting_bottom">
			<div class="painting_extra_rap">
				<div class="painting_original_rap">
					<h2>The Original Vintage Photo of <?php echo get_field('title'); ?> <?php echo get_field('date'); ?></h2>
					<img src="<?php echo get_field('original_photo'); ?>" alt="original historical photo from <?php the_title(); ?>">
					<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_curve.png" alt="curved shadow for photos" />
				</div> <!-- painting original rap -->

				<div class="painting_text_rap">
					<div class="painting_clip_box">
						<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_clip.png" alt="Clip holding paper with text up" />
					</div>
					<article class="painting_content_rap">
						<p class="painting_content_text"><?php echo get_field('description') ?></p>
						<p class="painting_content_text_two"><?php echo get_field('description_two') ?></p>
					</article> <!-- about_color_text_rap -->
					<img class="content_shadow" src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_points.png" alt="pointed drop shadow for paper with text" />
				</div> <!-- painting text rap -->	
			</div> <!-- painting extra rap -->
		</div> <!-- painting_bottom -->

	</div> <!-- painting rap -->
</div> <!-- painting -->

<?php endwhile; // end of the loop. ?>