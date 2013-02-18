
	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php echo __('&copy; ', 'epublishing') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php if ( is_home() || is_front_page() ) : ?>
            <?php _e('- Powered by ', 'epublishing'); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'epublishing' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'epublishing' ); ?>"><?php _e('Wordpress' ,'epublishing'); ?></a>
			<?php _e(' and ', 'epublishing'); ?><a href="<?php echo esc_url( __( 'http://wpthemes.co.nz/', 'epublishing' ) ); ?>"><?php _e('WPThemes.co.nz', 'epublishing'); ?></a>
            <?php endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>