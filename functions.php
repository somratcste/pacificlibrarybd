<?php
/* For enable Crop feature */
add_theme_support('post-thumbnails', array('post') );
set_post_thumbnail_size( 200, 200, true );
add_image_size( 'post-image', 185, 265, true );
add_image_size( 'single-image', 185, 265, true );



function  footer_widget_areas() {
	register_sidebar( array(
		'name' => __( 'Footer Widget', 'footer' ),
		'id' => 'footer_widget',
		'before_widget' => ' <div class="about_us fix  floatleft">',
		'after_widget' => '</div>',
	    'before_title' => '<div class="header_3_footer fix"><h3>',
	    'after_title' => '</h3></div>
						 <div class="footer_head_border"></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Mid Widget', 'footer' ),
		'id' => 'footer_mid_widget',
		'before_widget' => ' <div class="about_us fix  floatleft">',
		'after_widget' => '</div>',
	    'before_title' => '<div class="header_3_footer fix"><h3>',
	    'after_title' => '</h3></div>
						 <div class="footer_head_border"></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Right Widget', 'footer' ),
		'id' => 'footer_right_widget',
		'before_widget' => ' <div class="about_us fix  floatleft">',
		'after_widget' => '</div>',
	    'before_title' => '<div class="header_3_footer fix"><h3>',
	    'after_title' => '</h3></div>
						 <div class="footer_head_border"></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Category Widget', 'category_widget' ),
		'id' => 'category_widget',
		'before_widget' => '<ul id="nav-deal-category">',
		'after_widget' => '</ul>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Category_Author Widget', 'category_widget' ),
		'id' => 'author_widget',
		'before_widget' => '<ul id="nav">',
		'after_widget' => '</ul>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => __( 'Publishers Widget', 'category_widget' ),
		'id' => 'publishers_widget',
		'before_widget' => '<ul id="nav">',
		'after_widget' => '</ul>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );

        register_sidebar( array(
		'name' => __( 'Left Sidebar Widget', 'category_widget' ),
		'id' => 'left_sidebar_widget',
		'before_widget' => ' <div class="left-category-pic"> ',
		'after_widget' => '</div>',
	    'before_title' => '<div class="header_3_footer fix"><h3>',
	    'after_title' => '</h3></div>',
	) );
}
add_action('widgets_init', 'footer_widget_areas');
add_theme_support( 'woocommerce' );
add_action('init','wpj_register_menu');
function wpj_register_menu(){

	if(function_exists('register_nav_menu')){
		register_nav_menu('wpj-main-menu',__('Main Menu', 'Asif'));
	}
}



?>