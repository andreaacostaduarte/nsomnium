<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */
?>
<!-- Footer: Start -->
<div id="footer-wrapper">
	<div id="footer">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'ul', 'container_class' => '', 'menu_class' => 'footer-nav clearfix' ) ); ?>	
		<div class="net-misc clearfix">
			<div class="networks">
				<h4><?php _e('3 top Social Networks I visit the most:', 'nsomnium'); ?></h4>
				<ul>
				<?php $wl_theme_options = nsomnium_get_options(); ?>
					<?php if($wl_theme_options['social_media_facebook_link']) { ?>
					<li><a href="<?php echo esc_url($wl_theme_options['social_media_facebook_link']); ?>" title="facebook" target="_blank" id="ico-facebook"><?php _e('Facebook','nsomnium'); ?></a></li>
					<?php } 
					if($wl_theme_options['social_media_twitter_link']) { ?>
					<li><a href="<?php echo esc_url($wl_theme_options['social_media_twitter_link']); ?>" title="twitter" target="_blank" id="ico-twitter"><?php _e('Twitter','nsomnium'); ?></a></li>
					<?php } 
					if($wl_theme_options['social_media_flicker_link']) { ?>
					<li><a href="<?php echo esc_url($wl_theme_options['social_media_flicker_link']); ?>" title="flicker" target="_blank" id="ico-flicker"><?php _e('Fickler','nsomnium'); ?></a></li>
					<?php } ?>					
				</ul>
			</div>
			
			<?php if ( is_active_sidebar( 'footer_right_1' ) ) : ?>
				<div id="footer-right" class="footer-right widget-area miscellaneous" role="complementary">
					<?php dynamic_sidebar( 'footer_right_1' ); ?>
				</div><!-- #footer right -->
			<?php else: ?>
				<div class="miscellaneous">
					<h4><?php _e('Writings and Miscellaneous', 'nsomnium'); ?></h4>
					<p><?php _e('Read my', 'nsomnium'); ?>&nbsp;<a href="#" target="_blank"><?php _e('poems', 'nsomnium'); ?></a>,<br /><?php _e('not-so-useless', 'nsomnium'); ?> <a href="#" target="_blank"><?php _e('webish blog', 'nsomnium'); ?></a><br /><?php _e('and useless oline ramblings.', 'nsomnium'); ?></p>
				</div>			
			<?php endif; ?>			
			
		</div>
		<div class="copy-email clearfix">
		<?php if ( is_active_sidebar( 'footer_copyright' ) ) : ?>
			<div id="footer-copyright" class="copyright widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_copyright' ); ?>
			</div><!-- #footer copyright -->
		<?php else: ?>
			<div class="copyright">&copy;<?php echo date("Y"); _e('&nbsp;Andrea Acosta-Duarte', 'nsomnium'); ?>.<br /><?php _e('All rights reserved.', 'nsomnium'); ?>	</div>
		<?php endif; ?>					

		<?php if ( is_active_sidebar( 'footer_contact' ) ) : ?>
			<div id="footer-contact" class="email widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer_contact' ); ?>
			</div><!-- #footer contact -->
		<?php else: ?>		
			<div class="email">
				Email:  <a href="mailto: contact@n-somnium.com">contact@n-somnium.com</a>
			</div>
		<?php endif; ?>	
		</div>
	</div>
</div>
<!-- Footer: End -->
<?php wp_footer(); ?>
</body>
</html>