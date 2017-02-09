<?php
	ini_set("display_errors",1);
	error_reporting(E_ALL);
	if (function_exists('add_theme_support')) {
   		add_theme_support('menus');
   		add_theme_support('post-thumbnails');
	}
	function true_after_theme_setup() {
		add_image_size('portfolio-thumb', 500, 300, true);
		add_image_size('portfolio-thumb-2x', 1000, 600, true);
		add_image_size('fullhd', 1920, 1080, true);
	} 
	add_action( 'after_setup_theme', 'true_after_theme_setup', 11 );

	function test_funct($atts){
		extract( shortcode_atts( array(
			'foo' => 'что-то',
			'bar' => 'что-то ещё',
		), $atts ) );
		return "MyShortCode ".$foo." ".$bar; 
		//return $atts;
	}
	add_shortcode('test','test_funct');

	add_action('customize_register', function($customizer){
	    $customizer->add_section(
	        'more_setting',
	        array(
	            'title' => 'Дополнительные настройки',
	            'description' => 'Дополнительные настройки',
	            'priority' => 9999,
	        )
	    );
		$customizer->add_setting(
		    'youtube_id',
		    array('default' => '')
		);
		$customizer->add_control(
		    'youtube_id',
		    array(
		        'label' => 'ID видео для Главной страницы',
		        'section' => 'more_setting',
		        'type' => 'text',
		    )
		);
	});
?>
