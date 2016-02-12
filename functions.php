<?php
/**
 * @package WordPress
 * @subpackage N-Somnium_Theme
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
						'categories-submenu' => __( 'Categories Sub-Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
	 'name'   => 'Sidebar 1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));
	
function nsomnium_customize_register( $wp_customize ) {
	// add "Content Options" section
	$wp_customize->add_section( 'nsomnium_content_options_section' , array(
		'title'      => __( 'N-Somnium Options', 'nsomnium' ),
		'priority'   => 1,
	) );
	
	// add setting for page comment toggle checkbox
	$wp_customize->add_setting( 'nsomnium_page_comment_toggle', array( 
		'default' => 1 
	) );
	
	// add control for page comment toggle checkbox
	$wp_customize->add_control( 'nsomnium_page_comment_toggle', array(
		'label'     => __( 'Show comments on pages?', 'nsomnium' ),
		'section'   => 'nsomnium_content_options_section',
		'priority'  => 10,
		'type'      => 'checkbox'
	) );

 // add setting and control for footer links
	$wp_customize->add_setting(
	'nsomnium_options[social_media_facebook_link]',
		array(
		'default'=>esc_attr($wl_theme_options['social_media_facebook_link']),
		'type'=>'option',
		'sanitize_callback'=>'esc_url',
		'capability'=>'edit_theme_options'
		)
	);
	$wp_customize->add_control( 'social_media_facebook_link', array(
		'label'        => __( 'Facebook URL', 'nsomnium' ),
		'type'=>'url',
		'section'    => 'nsomnium_content_options_section',
		'settings'   => 'nsomnium_options[social_media_facebook_link]'
	) );
	$wp_customize->add_setting(
		'nsomnium_options[social_media_twitter_link]',
			array(
			'default'=>esc_attr($wl_theme_options['social_media_twitter_link']),
			'type'=>'option',
			'sanitize_callback'=>'esc_url',
			'capability'=>'edit_theme_options'
			)
		);
		$wp_customize->add_control( 'social_media_twitter_link', array(
			'label'        => __( 'Twitter URL', 'nsomnium' ),
			'type'=>'url',
			'section'    => 'nsomnium_content_options_section',
			'settings'   => 'nsomnium_options[social_media_twitter_link]'
		) );	
		$wp_customize->add_setting(
		'nsomnium_options[social_media_flicker_link]',
			array(
			'default'=>esc_attr($wl_theme_options['social_media_flicker_link']),
			'type'=>'option',
			'sanitize_callback'=>'esc_url',
			'capability'=>'edit_theme_options'
			)
		);
		$wp_customize->add_control( 'social_media_flicker_link', array(
			'label'        => __( 'Flicker URL', 'nsomnium' ),
			'type'=>'url',
			'section'    => 'nsomnium_content_options_section',
			'settings'   => 'nsomnium_options[social_media_flicker_link]'
		) );	

	
}
add_action( 'customize_register', 'nsomnium_customize_register' );

//Change header image background
$args = array(
	'default-image' => get_template_directory_uri() . '/images/bgd-header.gif',
	'uploads'       => true,
);
add_theme_support( 'custom-header', array(
		'header-text' => false
	) );

//Change page background
$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );

/**
 * Widgetizing
 * Register our sidebars and widgetized areas.
 *
 */
function nsomnium_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer right column',
		'id'            => 'footer_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
			'name'          => 'Footer Copyright',
			'id'            => 'footer_copyright',
		) );
		
	register_sidebar( array(
			'name'          => 'Footer Contact',
			'id'            => 'footer_contact',
		) );
		
		register_sidebar( array(
			'name'          => 'Page Links Left',
			'id'            => 'page_links_left',
		) );
		
		register_sidebar( array(
			'name'          => 'Page Links Middle',
			'id'            => 'page_links_middle',
		) );
		
		register_sidebar( array(
			'name'          => 'Page Links Right',
			'id'            => 'page_links_right',
		) );
		
		register_sidebar( array(
			'name'          => 'Vertical Carousel',
			'id'            => 'vertical_carousel',
		) );
	
}
add_action( 'widgets_init', 'nsomnium_widgets_init' );

//Sane Defaults
	function nsomnium_default_settings()
	{
		$wl_theme_options=array(
				//Social media links
				'social_media_facebook_link' =>"#",				
				'social_media_twitter_link' =>"#",
				'social_media_flicker_link' =>"#",
				
			);
			return apply_filters( 'nsomnium_options', $wl_theme_options );
	}
	
//Function To get the Options-DATA
	function nsomnium_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'nsomnium_options', array() ), 
        nsomnium_default_settings() 
    );
	}
	
	add_theme_support( 'post-thumbnails' ); 
?>
