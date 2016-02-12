<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="content" class="clearfix">

		<!-- categories: start -->
		<SCRIPT SRC="htpp://www.n-somnium.com/wp-content/themes/n-somnium/js/ssm.js" language="JavaScript1.2">
		
		//Dynamic-FX slide in menu v6.5 (By maXimus, http://maximus.ravecore.com/)
		//Updated July 8th, 03' for doctype bug
		//For full source, and 100's more DHTML scripts, visit http://www.dynamicdrive.com
		
		</SCRIPT>
		
		<SCRIPT SRC="htpp://www.n-somnium.com/wp-content/themes/n-somnium/js/ssmItems.js" language="JavaScript1.2"></SCRIPT>
		<a name="goTop"></a>
		<div class="categories">
			<ul>
				<?php wp_nav_menu( array( 'theme_location' => 'categories-submenu', 'container' => 'ul' ) ); ?>		
			</ul>
		</div>
		<!-- categories: end -->
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<!-- portfolio piece: start -->
		<div class="porfolio-piece clearfix" id="post-<?php the_ID(); ?>">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="thumbnail">
			<?php
			if ( has_post_thumbnail() ) {
							the_post_thumbnail();
			}
			else {
							echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
											. '/images/portfolio/design-blog.jpg" />';
			}
			?>		
			</a>
			<div class="piece-cnt">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		</div>
		<!-- portfolio piece: end -->
		<!-- comments: start -->
<?php if ( get_theme_mod( 'nsomnium_page_comment_toggle' ) == 1 ) : // show page comments? ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>		
<?php endif; ?>
		<!-- comments: end -->

		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'nsomnium'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&acute;t here.', 'nsomnium'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	<a href="<?php bloginfo('url'); _e('ways-of-contact', 'nsomnium'); ?>" class="btn-portfolioContact" title="<?php _e('Feel free to contact me', 'nsomnium'); ?>"><?php _e('Feel free to contact me', 'nsomnium'); ?></a>
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>




		
		