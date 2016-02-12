<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */
/*
Template Name: 3 Column Page
 */
get_header(); ?>

	<!-- content: start -->
	<div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>

<!-- related links: start -->
<div class="related-links">
	<div class="content clearfix">
		<div class="fl-left">
		<?php if ( is_active_sidebar( 'page_links_left' ) ) : ?>
			<div class="groupLinks widget-area" role="complementary">
				<?php dynamic_sidebar( 'page_links_left' ); ?>
			</div>
		<?php endif; ?>
		</div>
		
		<div class="fl-left">
		<?php if ( is_active_sidebar( 'page_links_middle' ) ) : ?>
			<div class="groupLinks widget-area" role="complementary">
				<?php dynamic_sidebar( 'page_links_middle' ); ?>
			</div>
		<?php endif; ?>
		</div>	
		
		<div class="fl-left">
		<?php if ( is_active_sidebar( 'page_links_right' ) ) : ?>
			<div class="groupLinks widget-area" role="complementary">
				<?php dynamic_sidebar( 'page_links_right' ); ?>
			</div>
		<?php endif; ?>
		</div>
	</div>
	<div class="bottom"></div>
</div>
<!-- related links: end -->
		
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>