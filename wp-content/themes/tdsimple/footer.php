<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tdsimple
 * @since tdsimple 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div id="gotop"><h6><?php _e( '<i class="foundicon-up-arrow"></i>', 'tdsimple' ); ?></h6></div>
		<div class="site-info twelve columns">
			<?php do_action( 'tdsimple_credits' ); ?>
			<?php printf( __( 'Proudly powered by %s', 'tdsimple' ), '<a href="http://wordpress.org/" title="<?php esc_attr_e( \'A Semantic Personal Publishing Platform\', \'tdsimple\' ); ?>">WordPress</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'tdsimple' ), 'tdsimple', '<a href="http://tasko.us/" rel="designer">Taras Dashkevych</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>