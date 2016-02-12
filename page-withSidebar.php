<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */
/*
Template Name: Page with 1 column and Right Sidebar
 */
get_header(); ?>
	<!-- content: start -->
	<div id="content" class="clearfix">
		<div class="ways-contact clearfix">
			<!-- column left: start -->
			<div class="left">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; endif; ?>
			
			</div>
			<!-- column left: end --> 
			<!-- sidebar right: start -->
			<div class="right">
				<?php if(is_active_sidebar('Sidebar 1')) : ?>
				<div id="sidebar">
				<ul>
				<?php dynamic_sidebar('Sidebar 1'); ?>
				</ul>
				</div>
				<?php endif; ?>
			</div>
			<!-- sidebar right: end --> 
		</div>


		
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>

