<?php
/**
 * VW Bakery Theme Customizer
 *
 * @package VW Bakery
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_bakery_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_bakery_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-bakery' ),
	    'description' => __( 'Description of what this panel does.', 'vw-bakery' ),
	) );

	$wp_customize->add_section( 'vw_bakery_left_right', array(
    	'title'      => __( 'General Settings', 'vw-bakery' ),
		'priority'   => null,
		'panel' => 'vw_bakery_panel_id'
	) );

	$wp_customize->add_setting('vw_bakery_theme_options',array(
        'default' => __('Right Sidebar','vw-bakery'),
        'sanitize_callback' => 'vw_bakery_sanitize_choices'	        
	));
	$wp_customize->add_control('vw_bakery_theme_options',array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-bakery'),
        'description' => __('Here you can change the sidebar layout for post. ','vw-bakery'),
        'section' => 'vw_bakery_left_right',
        'choices' => array(
        	'One Column' => __('One Column','vw-bakery'),
            'Left Sidebar' => __('Left Sidebar','vw-bakery'),
            'Right Sidebar' => __('Right Sidebar','vw-bakery'),            
            'Three Columns' => __('Three Columns','vw-bakery'),
            'Four Columns' => __('Four Columns','vw-bakery'),
            'Grid Layout' => __('Grid Layout','vw-bakery')
        ),
	) );

	$wp_customize->add_setting('vw_bakery_page_layout',array(
        'default' => __('Right Sidebar','vw-bakery'),
        'sanitize_callback' => 'vw_bakery_sanitize_choices'	        
	));
	$wp_customize->add_control('vw_bakery_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-bakery'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-bakery'),
        'section' => 'vw_bakery_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-bakery'),
            'Right Sidebar' => __('Right Sidebar','vw-bakery'),
            'One Column' => __('One Column','vw-bakery')
        ),
	) );

	//Conatct us
	$wp_customize->add_section('vw_bakery_topbar',array(
		'title'	=> __('Contact Section','vw-bakery'),
		'description'=> __('This section will appear in the topbar and below slider','vw-bakery'),
		'panel' => 'vw_bakery_panel_id',
	));	
	
	$wp_customize->add_setting('vw_bakery_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_location',array(
		'label'	=> __('Location','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_location',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_opening_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_opening_text',array(
		'label'	=> __('Opening Time Text','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_opening_text',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_opening_time',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_opening_time',array(
		'label'	=> __('Opening Time','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_opening_time',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_call_us',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_call_us',array(
		'label'	=> __('Phone no. Text','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_call_us',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_call_no',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_call_no',array(
		'label'	=> __('Phone Number','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_call_no',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_email_us',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_email_us',array(
		'label'	=> __('Email Text','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_email_us',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_email_address',array(
		'label'	=> __('Email Address','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_email_address',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_bakery_contact_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('vw_bakery_contact_link',array(
		'label'	=> __('Contact Link','vw-bakery'),
		'section'=> 'vw_bakery_topbar',
		'setting'=> 'vw_bakery_contact_link',
		'type'=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'vw_bakery_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-bakery' ),
		'priority'   => null,
		'panel' => 'vw_bakery_panel_id'
	) );

	$wp_customize->add_setting('vw_bakery_slider_arrows',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_bakery_slider_arrows',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','vw-bakery'),
       'section' => 'vw_bakery_slidersettings',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_bakery_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'vw_bakery_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'vw_bakery_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-bakery' ),
			'description' => __('Slider image size (1500 x 600)','vw-bakery'),
			'section'  => 'vw_bakery_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Bakery Products
	$wp_customize->add_section( 'vw_bakery_product_section' , array(
    	'title'      => __( 'Bakery products', 'vw-bakery' ),
		'priority'   => null,
		'panel' => 'vw_bakery_panel_id'
	) );

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'vw_bakery_product_settings', array(
		'default'           => '',
		'sanitize_callback' => 'vw_bakery_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'vw_bakery_product_settings', array(
		'label'    => __( 'Select Product Page', 'vw-bakery' ),
		'section'  => 'vw_bakery_product_section',
		'type'     => 'dropdown-pages'
	) );	
	
	//Footer Text
	$wp_customize->add_section('vw_bakery_footer',array(
		'title'	=> __('Footer','vw-bakery'),
		'description'=> __('This section will appear in the footer','vw-bakery'),
		'panel' => 'vw_bakery_panel_id',
	));	
	
	$wp_customize->add_setting('vw_bakery_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_bakery_footer_text',array(
		'label'	=> __('Copyright Text','vw-bakery'),
		'section'=> 'vw_bakery_footer',
		'setting'=> 'vw_bakery_footer_text',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'vw_bakery_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Bakery_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Bakery_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Bakery_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Bakery Pro Theme', 'vw-bakery' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'vw-bakery' ),
					'pro_url'  => esc_url('https://www.vwthemes.com/themes/bakery-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-bakery-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-bakery-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Bakery_Customize::get_instance();