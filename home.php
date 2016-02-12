<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */
/*
Template Name: Homepage
 */
get_header(); ?>

	<!-- content: start -->
	<div id="content" class="clearfix">
	
		<?php if ( is_active_sidebar( 'vertical_carousel' ) ) : ?>
		<div class="carousel-widget">
			<style>
			.carousel-widget { overflow: hidden; width: 705px; margin: 0 auto 24px; }
			</style>
			<?php dynamic_sidebar( 'vertical_carousel' ); ?>
		</div>
		<?php endif; ?>	
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<div class="featured-work">
			<h1>Featured Works</h1>
			<div id="imagedisplay">
					<div class="link slider_item active">
					<?php
					if ( has_post_thumbnail() ) {
									the_post_thumbnail();
					}
					else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
													. '/images/img-featuredWork3.jpg" />';
					}
					?>									
					</div>
			</div>
			</div>
			<div class="home-intro">
			<h2><?php the_title(); ?></h2>
			<p class="intro"><?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?></p>
		</div>
				
		</div>
		<?php endwhile; endif; ?>
		
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>