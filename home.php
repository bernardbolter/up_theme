<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'hero' ); ?>
<?php get_template_part( 'nav' ); ?>

<div id="colorful_wrap">
	<div class="color_info_box">
		<h2>THE PULLUP GALLERY PRESENTS</h2>
		<h3>A Colorful History</h3>
		<h4>by Bernard John Bolter IV</h4>
		<p>They especially invite inspection of these painting marvels, which they have had the hounour of introducing, and which have been met with so much approval.</p>
		<div class="color_accent"><span class="icon-accent_two"></span></div>
	</div><!-- color_info_box -->
	<div class="color_insta_box">
	</div><!-- color_insta_box -->
	<div class="color_tweet_box">
	</div><!-- color_tweet_box -->
</div><!-- colorful_wrap -->

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>