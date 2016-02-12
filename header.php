<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="keywords" content="<?php bloginfo('url'); _e('Andrea, Andrea Acosta, Andrea Acosta Duarte, Artist, Web Designer, Front-End Developer, Toronto, Montreal, Professional, freelance, contract, web, print, art direction, graphic designer, graphic design, designer, branding, colour, color, type, photo retouching, production, seo, search engine optimization, implementation, maintenance, websites, sites, digital, professional, adobe, photoshop, illustrator, indesign, quark, macromedia, flash, dreamweaver, fireworks, html, xhtml,  css, office, mac, pc, javascript, jquery, php, asp, mysql, independent', 'nsomnium'); ?>" />
<meta name="author" content="http://www.n-somnium.com" />
<meta name="copyright" content="Andrea Acosta Duarte" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/nsomnium/css/responsive.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script("jquery"); ?>   

<?php wp_head(); ?>
<script>
var jq183 = jQuery.noConflict();
</script>     
</head>

<body class="custom-background">
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php //get_sidebar(); 
?>
<!-- Main Content Wrapper: Start -->
<div id="wrapper">
	<!-- header: start -->
	<div id="header" class="clearfix" style="background-image: url(<?php header_image(); ?>);">
		<a href="<?php bloginfo('url'); ?>" id="logo"><?php _e('N-Somnium - Garden of Dreams by Andrea Acosta-Duarte', 'nsomnium'); ?></a>
		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'ul', 'container_class' => '', 'menu_class' => 'nav-bar' ) ); ?>
		</nav>
	</div>
	<!-- header: end -->
