<?php 

/**
 * Theme Options.
 *
 * @package BusinesStar
 */

$businesstar_default = businesstar_get_default_theme_options();
//For Sidebar Layout Option
$wp_customize->add_section('section_sidebar_layout', array(    
'title'       => __('Sidebar Layout Setting', 'businesstar'),
'panel'       => 'theme_option_panel'    
));

//Layout Options for Blog
$wp_customize->add_setting('theme_options[layout_options_blog]', 
	array(
	'default' 			=> $businesstar_default['layout_options_blog'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'businesstar_sanitize_select'
	)
);

$wp_customize->add_control(new Businesstar_Image_Radio_Control($wp_customize, 'theme_options[layout_options_blog]', 
	array(		
	'label' 	=> __('Layout Option For Blog', 'businesstar'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_blog]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(								
			'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
			'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',					
		),	
	))
);

//Layout Options for Archive
$wp_customize->add_setting('theme_options[layout_options_archive]', 
	array(
	'default' 			=> $businesstar_default['layout_options_archive'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'businesstar_sanitize_select'
	)
);

$wp_customize->add_control(new Businesstar_Image_Radio_Control($wp_customize, 'theme_options[layout_options_archive]', 
	array(		
	'label' 	=> __('Layout Option For Archive', 'businesstar'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_archive]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(								
			'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
			'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		),	
	))
);


//Layout Options for Pages
$wp_customize->add_setting('theme_options[layout_options_page]', 
	array(
	'default' 			=> $businesstar_default['layout_options_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'businesstar_sanitize_select'
	)
);

$wp_customize->add_control(new Businesstar_Image_Radio_Control($wp_customize, 'theme_options[layout_options_page]', 
	array(		
	'label' 	=> __('Layout Option For Pages', 'businesstar'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_page]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(							
			'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
			'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		),	
	))
);

//Layout Options for Single Post
$wp_customize->add_setting('theme_options[layout_options_single]', 
	array(
	'default' 			=> $businesstar_default['layout_options_single'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'businesstar_sanitize_select'
	)
);

$wp_customize->add_control(new Businesstar_Image_Radio_Control($wp_customize, 'theme_options[layout_options_single]', 
	array(		
	'label' 	=> __('Layout Option For Single Posts', 'businesstar'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_single]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(								
			'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
			'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		),	
	))
);