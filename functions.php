<?php  
	function resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
		wp_enqueue_style('styles-extended', get_template_directory_uri() . '/assets/css/styles-extended.css');
		// wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	}

	add_action('wp_enqueue_scripts', 'resources');
?>