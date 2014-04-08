	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'up' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'up' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'up' ), 'up-theme', '<a href="http://www.smoothism.com" rel="designer">Bernard John Bolter IV</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>
