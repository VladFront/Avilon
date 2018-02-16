<?php
	// Include style
	function theme_style_load() {
		wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i');
		wp_enqueue_style( 'google-fonts');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css');		
		wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css');
		wp_enqueue_style( 'aos', get_template_directory_uri() . '/lib/aos/aos.css');
		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/lib/magnific-popup/magnific-popup.css');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	}

	add_action( 'wp_enqueue_scripts', 'theme_style_load' );

	// Include script
	function theme_script_load() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', '', '', true);
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true);
		wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js', array('jquery'), '', true);
		wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '', true);
		wp_enqueue_script( 'aos', get_template_directory_uri() . '/lib/aos/aos.js', array('jquery'), '', true);
		wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array('jquery'), '', true);
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array('jquery'), '', true);
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/lib/magnific-popup/magnific-popup.min.js', array('jquery'), '', true);
		wp_enqueue_script( 'contactform', get_template_directory_uri() . '/contactform/contactform.js', array('jquery'), '', true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
	}
	add_action( 'wp_enqueue_scripts', 'theme_script_load' );
	
	add_theme_support('post-thumbnails');
	show_admin_bar(false);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');


	register_nav_menu( 'top', 'Верхнее меню');
	register_nav_menu( 'bottom', 'Нижнее меню');

	if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки лендинга',
		'menu_title'	=> 'Настройки лендинга',
		'menu_slug' 	=> 'general-settings',
		'redirect'		=> false,
		'post_id' => 'option',
	));
}

?>