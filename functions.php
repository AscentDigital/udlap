<?php  
	function resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
		wp_enqueue_style('styles-extended', get_template_directory_uri() . '/assets/css/styles-extended.css');
		wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('bootstrap-min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), '1.0.0', true);
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
		if(wp_mail(get_option('udlap_recipient_email', 'stephan.sutter2000@gmail.com'), 'Contact Form', $body)){
			$success = 'true';
		}

		echo $success;
	}
	add_action("wp_ajax_udlap_contact_form", "udlap_contact_form_process");

	//use this version for if you want the callback to work for users who are not logged in
	add_action("wp_ajax_nopriv_udlap_contact_form", "udlap_contact_form_process");
?>