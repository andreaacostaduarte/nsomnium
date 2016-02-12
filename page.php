<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<div class="page-featureImage">
			<?php
			if ( has_post_thumbnail() ) {
							the_post_thumbnail();
			}
			else {
							echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
											. '/images/portfolio/design-blog.jpg" />';
			}
			?>				
			</div>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
	
			 ?>
		</div>
		<?php endwhile; endif; ?>
		
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>