<div class="footer_moulding" id="contact"></div>

<footer id="wood_footer" class="site_wood_footer" role="contentinfo">
	<div class="contact_rap">
		<div class="contact_left">
			<div class="contact_social">
				<ul>
					<li class="soc_instagram"><a href="http://instagram.com/pullupgallery"><span class="icon-instagram"></span></a></li>
					<li class="soc_twitter"><a href="https://twitter.com/PullUpGallery"><span class="icon-twitter2"></span></a></li>
					<li class="soc_facebook"><a href="https://facebook.com/bernard.bolter"><span class="icon-facebook2"></span></a></li>
					<li class="soc_pinterest"><a href="https://facebook.com/bernard.bolter"><span class="icon-pinterest"></span></a></li>
				</ul>
			</div>
			<div class="wood_info">
				<div class="wood_info_title_rap">
					<img src="<?php bloginfo( 'template_url' ); ?>/gfx/sm_logo_left.svg" alt="logo accent left">
					<div class="sm_accent"></div>
					<h1>PULLUP GALLERY</h1>
					<div class="sm_accent"></div>
					<img src="<?php bloginfo( 'template_url' ); ?>/gfx/sm_logo_right.svg" alt="logo accent right">
				</div> <!-- wood_info_title_rap -->

				<?php $the_query = new WP_Query( 'page_id=59' ); ?>

				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<p class="contact_para"><?php echo get_field('first_para'); ?></p>
				<p class="contact_para"><?php echo get_field('second_para'); ?></p>
				<p><?php echo do_shortcode('[mc4wp_form]'); ?></p>
				<p class="contact_para_2"><?php echo get_field('third_para'); ?></p>
				<div class="current_map"><?php echo get_field('map_link'); ?></div>
				<p class="contact_location">current location:<br><?php echo get_field('current_location'); ?></p>
				<p class="contact_info_undertitle">The Pullup Gallery</p>
				<p class="contact_info">Bernard John Bolter IV</p>
				<p class="contact_info">info@pullupgallery.com</p>
				<p class="contact_info"><?php echo get_field('phone_one'); ?></p>
				<p class="contact_info"><?php echo get_field('phone_two'); ?></p>

				<?php endwhile; ?>
				<?php endif; ?>

			</div><!-- .wood_info -->
		</div><!-- contact_left -->
		<div class="contact_right">
			<div class="contact_form_title_rap">
				<p class="contact_form_title">Contact Form</p>
			</div>
			<div class="wood_contact">
				<?php echo do_shortcode( '[contact-form-7 id="64" title="Pullup Gallery Contact Form"]' ); ?>
			</div><!-- .wood_contact -->
				<div class="wood_smallprint">
						<p>All artwork images used on this website are the exclusive property of the Pullup Gallery. All rights reserved. Any other use of these artwork images, without the expressed written consent of the Pullup Gallery, is strictly prohibited. All artwork images used on this website have been embedded with a unique digital code, for the purpose of identification, and are copyright protected by United States and International Law.<br /><br />All rights resereved 2013-<?php echo date('Y'); ?>.</p> 
				</div><!-- .wood_smallprint -->
		</div><!-- contact_right -->
	</div><!-- contact rap -->
</footer><!-- #wood_footer -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>