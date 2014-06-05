<div id="gallery" class="site-gallery">
	<div class="gallery_rap">
	<?php get_template_part( 'colorful'); ?>

		<?php $the_query = new WP_Query( 'cat=2&posts_per_page=-1' ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class="frame_rap">
			<a href="<?php echo get_permalink(); ?>">
				<section class="frame_top">
					<div class="frame_top_left"></div>
					<div class="frame_top_mid"></div>
					<div class="frame_top_right"></div>
				</section>
				<section class="frame_mid">
					<div class="frame_mid_left"></div>
					<div class="frame_image">
						<img src="<?php echo get_field('thumbnail'); ?>" alt="<?php the_title() ?>">
						<p class="gallery_hashtag"><?php echo get_field('hashtag'); ?><span class="frame_click">click to view larger</span></p>
					</div>
					<div class="frame_mid_right"></div>
				</section>
				<section class="frame_bot">
					<div class="frame_bot_left"></div>
					<div class="frame_bot_mid"></div>
					<div class="frame_bot_right"></div>
				</section>
			</a>
			<div class="frame_tag">
				<p class="frame_tag_title"><?php echo get_field('title'); ?></p>
				<div class="frame_tag_rap">	
					<img src="<?php echo get_field('red_pin') ?>" alt="red push pin">
					<p class="frame_tag_info"><?php echo get_field('location'); ?> . <?php echo get_field('date'); ?></p>
				</div>
			</div>
		</div> <!-- frame_rap -->

		<?php endwhile; ?>
		<?php endif; ?>
		<script type="text/javascript" async  data-pin-color="grey" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
	</div> <!-- gallery rap -->
</div> <!-- gallery -->