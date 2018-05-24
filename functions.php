<?php  
	function resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
		wp_enqueue_style('styles-extended', get_template_directory_uri() . '/assets/css/styles-extended.css');
		wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
		wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('bootstrap-min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'resources');
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
		if( $item->menu_item_parent == 0 && 
		    in_array( 'current-menu-item', $classes ) ||
		    in_array( 'current-menu-ancestor', $classes ) ||
		    in_array( 'current-menu-parent', $classes ) ||
		    in_array( 'current_page_parent', $classes ) ||
		    in_array( 'current_page_ancestor', $classes )
		    ) {

	    	$classes[] = "active";
	 	 }

	  	return $classes;
	}
	function setup(){
	//Navigation Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu'),
		));
	//Add featured image support
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}
	add_action('after_setup_theme', 'setup');
	add_action( 'init', 'register_my_menus' );
	
	if ( function_exists('register_sidebar') ) {
	   register_sidebar(array(
	   'name' => 'Facbook Feed',
	   'id'            => 'facebook_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	    ));
	   register_sidebar(array(
	   'name' => 'Twitter Feed',
	   'id'            => 'twitter_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	   ));   
	   
	   register_sidebar(array(
	   'name' => 'Instagram Feed',
	   'id'            => 'instagram_feed',
	   'before_widget' => '<div id="%1$s" class="widget %2$s">',
	   'after_widget' => '</div>',
	   'before_title' => '<h2>',
	   'after_title' => '</h2>'
	   ));
	   
	}
	function gallery_cpt() {
		register_post_type( 'gallery', array(
		  'labels' => array(
		    'name' => 'Galleries',
		    'singular_name' => 'Gallery',
		   ),
		  'description' => 'Gallery Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'gallery_cpt' );

	function videos_cpt() {
		register_post_type( 'videos', array(
		  'labels' => array(
		    'name' => 'Videos',
		    'singular_name' => 'Video',
		   ),
		  'description' => 'Video Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'videos_cpt' );

	function brochures_cpt() {
		register_post_type( 'brochures', array(
		  'labels' => array(
		    'name' => 'Brochures',
		    'singular_name' => 'Brochure',
		   ),
		  'description' => 'Brochure Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'brochures_cpt' );
?>