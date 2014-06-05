<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'small_hero' ); ?>
<?php get_template_part( 'nav' ); ?>

<div id="about_main" class="site-about">
	<section class="about_rap">

		<?php $the_query = new WP_Query( 'page_id=67' ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class="about_pullup_story">
			<div class="about_pullup_title_rap">
				<p class="about_pullup_title">#PullupGallery</p>
			</div> <!-- about_pullup_title_rap -->
			<div class="about_clip_box">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_clip.png" alt="Clip holding paper with text up" />
			</div>
			<article class="about_pullup_text_rap">
				<h2 class="about_pullup_text_heading"><?php echo get_field('pullup_title'); ?></h2> <!-- about_pullup_text_heading -->
				<h3 class="about_pullup_text_quote"><?php echo get_field('pullup_quote'); ?></h3>
				<h4 class="about_pullup_text_name"> - Bernard John Bolter IV, founder</h4>
				<p class="about_pullup_text"><?php echo get_field('pullup_para_1'); ?></p>
				<p class="about_pullup_text"><?php echo get_field('pullup_para_2'); ?></p>
				<p class="about_pullup_text"><?php echo get_field('pullup_para_3'); ?></p>
			</article> <!-- about_pullup_text_rap -->
			<img class="paper_shadow" src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_points.png" alt="pointed drop shadow for paper with text" />
		</div> <!-- about_pullup_story -->

		<div class="about_pullup_comp">
			<p class="about_pullup_comp_title">The Pullup Gallery from the Bus to the Street <span class="icon-arrow-down2"></span></p>
			<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_pullup_comp.jpg" alt="Pictures of the Pullup Gallery from the bus to the street" />
			<img class="about_pullup_comp_img" src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_curve.png" alt="curved shadow for photos" />
		</div> <!-- about_pullup_comp -->

		<div class="about_color_story">
			<section class="about_color_title_box">
				<div class="about_color_title">
					<span class="icon-a"></span>
					&nbsp;
					<span class="icon-C"></span>
					<span class="icon-O"></span>
					<span class="icon-L"></span>
					<span class="icon-O"></span>
					<span class="icon-R"></span>
					<span class="icon-F"></span>
					<span class="icon-U"></span>
					<span class="icon-L"></span>
					&nbsp;
					<span class="icon-H"></span>
					<span class="icon-I"></span>
					<span class="icon-S"></span>
					<span class="icon-T"></span>
					<span class="icon-O"></span>
					<span class="icon-R"></span>
					<span class="icon-Y"></span>
				</div> <!-- about_color_title -->
				<h4>by Bernard John Bolter IV</h4>
				<p>a series of historical photographs and acrylic paint on canvas</p>
			</section> <!-- about_color_title_box -->
			
			<div class="about_clip_box">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_clip.png" alt="Clip holding paper with text up" />
			</div>
			<article class="about_color_text_rap">
				<p class="about_color_text"><?php echo get_field('color_para_1'); ?></p>
				<p class="about_color_text"><?php echo get_field('color_para_2'); ?></p>
				<p class="about_color_text"><?php echo get_field('color_para_3'); ?></p>
				<p class="about_color_text"><?php echo get_field('color_para_4'); ?></p>
				<h4 class="about_pullup_text_name"> - Bernard John Bolter IV</h4>
			</article> <!-- about_color_text_rap -->
			<img class="about_color_text_shadow" src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_points.png" alt="pointed drop shadow for paper with text" />
		</div> <!-- about_color_story -->
		
		<div class="about_color_comp">
			<p class="about_color_comp_title">The painting #PortsmouthSquare1851 from start to finish <span class="icon-arrow-down2"></span></p>
			<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_color_comp.jpg" alt="Series of photos showing the creating of a painting from the Colorful History series" />
			<img src="<?php bloginfo( 'template_url' ); ?>/gfx/about_shadow_curve.png" alt="curved shadow for photos" />
		</div> <!-- about_color_comp -->
		
		<div class="about_foot">
			<p class="about_foot_text"></p>
		</div> <!-- about_foot -->

		<?php endwhile; ?>
		<?php endif; ?>

	</section> <!-- about_rap -->
</div> <!-- about_main -->

<?php get_footer(); ?>