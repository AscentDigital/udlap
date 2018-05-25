<?php  
	function resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0');
		wp_enqueue_style('styles-extended', get_template_directory_uri() . '/assets/css/styles-extended.css');
		wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
		wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('bootstrap-min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
		wp_localize_script( "scripts", 'udlap_contact_form_vars', array(
	            'ajaxUrl' => admin_url( 'admin-ajax.php' ), //url for php file that process ajax request to WP
	            'nonce' => wp_create_nonce( "udlap_contact_form_nonce" )
	        )
	    );
	}

	add_action('wp_enqueue_scripts', 'resources');

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

	function udlap_contact_form_process() {
    	$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$body = 'Full Name: ' . $name . "\r\n";
		$body .= 'Email Address: ' . $email . "\r\n";
		$body .= 'Message: ' . $message;

		$success = 'false';
		if(wp_mail(get_option('udlap_recipient_email', ''), 'Contact Form', $body)){
			$success = 'true';
		}

		echo $success;
	}
	add_action("wp_ajax_udlap_contact_form", "udlap_contact_form_process");

	//use this version for if you want the callback to work for users who are not logged in
	add_action("wp_ajax_nopriv_udlap_contact_form", "udlap_contact_form_process");

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

	function updates_cpt() {
		register_post_type( 'updates', array(
		  'labels' => array(
		    'name' => 'Updates',
		    'singular_name' => 'Update',
		   ),
		  'description' => 'Update Custom Post Type',
		  'public' => true,
		  'publicly_queryable' => true,
		  'menu_position' => 20,
		  'supports' => array( 'title', 'editor', 'custom-fields', 'author', 'thumbnail', 'excerpt' ),
		  'taxonomies' => array('category')
		));
	}
	add_action( 'init', 'updates_cpt' );

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

	add_action('admin_menu', 'theme_contact_setup_menu');
 
	function theme_contact_setup_menu(){
	    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme-option', 'init' );
	}
	 
	function init(){
		include get_template_directory() . '/includes/theme-options.php';
	}

	function update_theme_options(){
		$email = $_POST['recipient-email'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];
		$twitter = $_POST['twitter'];
		$youtube = $_POST['youtube'];
		update_option('udlap_recipient_email', $email);
		update_option('udlap_facebook', $facebook);
		update_option('udlap_instagram', $instagram);
		update_option('udlap_twitter', $twitter);
		update_option('udlap_youtube', $youtube);
		wp_redirect(admin_url('admin.php?page=theme-option&success'));
		exit;
	}

	add_action( 'admin_post_nopriv_udlap_update_theme_options', 'update_theme_options' );
	add_action( 'admin_post_udlap_update_theme_options', 'update_theme_options' );

	function load_custom_fonts($init) {

	    $stylesheet_url = 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900';  // Note #1

	    if(empty($init['content_css'])) {  // Note #2
	        $init['content_css'] = $stylesheet_url;
	    } else {
	        $init['content_css'] = $init['content_css'].','.$stylesheet_url;
	    }

	    $font_formats = isset($init['font_formats']) ? $init['font_formats'] : 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Raleway=Raleway;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats;';

	    $init['font_formats'] = $font_formats . $custom_fonts;

	    return $init;
	}
	add_filter('tiny_mce_before_init', 'load_custom_fonts');
?>