<?php

	//load script cdomaterialize
	function script_cdomaterial(){
		wp_enqueue_style("style", get_stylesheet_uri() );

		//load CSS CORE MATERIALIZE
		wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.0' );
		wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.5' );
		wp_enqueue_style( 'roboto-min', get_template_directory_uri() . '/css/roboto.min.css', array(), '3.5' );
		wp_enqueue_style( 'material-min', get_template_directory_uri() . '/css/material.min.css', array(), '3.5' );
		wp_enqueue_style( 'ripples-min', get_template_directory_uri() . '/css/ripples.min.css', array(), '3.5' );

		//load CSS Add
		//wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );

		//load JS CORE MATERIALIZE & jquery-2.1.1.min.js
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array(), '2.1.1', true );

		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '0.97.1', true );
		wp_enqueue_script( 'ripples-min', get_template_directory_uri() . '/js/ripples.min.js', array(), '0.97.1', true );
		wp_enqueue_script( 'material', get_template_directory_uri() . '/js/material.min.js', array(), '0.97.1', true );
	}

	add_action("wp_enqueue_scripts", "script_cdomaterial");

	//the excerpt
	function get_excerpt_length(){
		return 20;
	}

	function return_excerpt_text(){
		return '';
	}

	add_filter('excerpt_more', 'return_excerpt_text');
	add_filter('excerpt_length', 'get_excerpt_length');

	function init_setup(){
		register_nav_menus(array(
			'main_menu' => 'Menu Utama',
			'menu_footer' => 'Menu Footer'
		));

		//thumbnail
		add_theme_support("post-thumbnails");
		add_image_size("small_thumb", 150, 150, true);
		add_image_size("big_thumb", 350, 350, true);
	}

	add_action("after_setup_theme","init_setup");

	function widget_setup(){
		register_sidebar(array(
			"name" => "Sidebar Right",
			"id" => "sidebar_right"
		));

		register_sidebar(array(
			"name" => "Single Page Right",
			"id" => "single_page_right"
		));

		register_sidebar(array(
			"name" => "Page Right",
			"id" => "page_right"
		));
	}

	add_action("widgets_init", "widget_setup");
?>