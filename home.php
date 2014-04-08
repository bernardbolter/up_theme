<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'hero' ); ?>
<?php get_template_part( 'nav' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>