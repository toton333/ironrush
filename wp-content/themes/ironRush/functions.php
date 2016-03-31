<?php 
if (file_exists( dirname(__FILE__).'/redux-framework/ReduxCore/framework.php'    )) {
	include_once(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php'  );
}

if (file_exists( dirname(__FILE__).'/redux-framework/sample/config.php'    )) {
	include_once(dirname(__FILE__).'/redux-framework/sample/config.php'  );
}




if ( ! function_exists( 'ironRush_setup' ) ) :

function ironRush_setup() {
	
	load_theme_textdomain( 'ironRush', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ironRush' ),
	) );

	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

}
endif; // ironRush_setup
add_action( 'after_setup_theme', 'ironRush_setup' );




function ironRush_scripts(){

//styles
wp_register_style( 'main', get_template_directory_uri().'/css/tooplate_style.css');
 wp_enqueue_style('main' );
wp_enqueue_style('ironRush_style', get_stylesheet_uri() );
wp_register_style( 'nivo-slider', get_template_directory_uri().'/css/nivo-slider.css');

	if (is_front_page()) {
		wp_enqueue_style('nivo-slider' );
	}

wp_register_style( 'lightbox', get_template_directory_uri().'/css/jquery.lightbox-0.5.css');
if (is_page('gallery' )) {
	wp_enqueue_style('lightbox' );
}


//scripts


	wp_register_script( 'nivo-slider-js', get_template_directory_uri().'/js/jquery.nivo.slider.js', array('jquery'), '1.0', false );
	if(is_front_page()){
		wp_enqueue_script('nivo-slider-js' );
	 }

   wp_register_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery', 'nivo-slider-js'), '1.0', false);
	if (is_front_page()) {
		wp_enqueue_script('custom' );
	}

   wp_register_script( 'lightbox', get_template_directory_uri().'/js/jquery.lightbox-0.5.js', array('jquery'), '1.0', false);
   if (is_page(array('gallery', 'contact') )) {
   	wp_enqueue_script('lightbox' );
   }
   wp_register_script( 'lightbox-init', get_template_directory_uri().'/js/lightbox-init.js', array('jquery', 'lightbox'), '1.0', false);
   if (is_page(array('gallery', 'contact' ))) {
   	wp_enqueue_script('lightbox-init' );
   }


}
add_action('wp_enqueue_scripts', 'ironRush_scripts' );


function ironRush_readmore($limit = 30){

	$content_array = explode(' ', get_the_content( ));
	$limited_content_array = array_slice($content_array,0, $limit);
	return $less_content = implode(' ', $limited_content_array);

}

function ironRush_sidebar(){

	register_sidebar(array(
	'name'          => __( 'Primary sidebar', 'ironRush' ),
	'id'            => 'primary-sidebar',
	'description'   => 'A sidebar to hold widgets\' content.',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>' ));

	register_sidebar(array(
      'name' => __('Footer sidebar', 'ironRush'),
      'id'   => 'footer-sidebar',
      'description' => 'A footer area to hold widgets ',
      'before_widget' => '<div class="col_w200 float_l">',
      'after_widget'  => '</ul></div>',
      'before_title'  =>  '<h4>',
      'after_title'   =>  '</h4><ul class="tooplate_list">'

		) );

}
add_action('widgets_init', 'ironRush_sidebar' );


