<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/*
Plugin Name: HotelBeds XML Travel Portal Search Widget
Plugin URI: www.oganro.com
Description: HotelBeds XML Travel Portal Search Widget by Oganro (Pvt) Ltd.
Version: 1.0
Author: Oganro
Author URI: www.oganro.com
*/

/*---------------------------------------------------------------------------------------------
|								Installation Instructions
-----------------------------------------------------------------------------------------------
|
|	1 Install and activate the plugin
|
|	2 Visit Dashboard->Oganro-search-box add required details and customize searchbox
|
|	3 Add following shortcode to generate the search box
|
|	  - [ogn-hxsw-travel-portal-search-box]
|
|----------------------------------------------------------------------------------------------
*/


/*----------------------------------------------
 Initiating Methods to generate Search box
------------------------------------------------*/
add_shortcode( 'ogn-hxsw-travel-portal-search-box', 'ogn_hxsw_generateSearchBox' );

function ogn_hxsw_generateSearchBox(){

	include('includes/ogn_hxsw_load_options.php');

	ogn_hxsw_load_css_files();
	ogn_hxsw_load_js_files($ogn_hxsw_bootstrap);

	

	include('templates/ogn_hxsw_searchbox.php');
}



/*--------------------------------------------------
 Initiating action to add search box admin menu 
----------------------------------------------------*/
add_action( 'admin_menu', 'ogn_hxsw_search_box_plugin_menu' );

# add search box admin menu 
function ogn_hxsw_search_box_plugin_menu() {
	add_menu_page( 'Oganro Search box', 'Oganro Search box', 'manage_options', 'ogn-hxsw-search-widget-options', 'ogn_hxsw_search_widget_options' , plugin_dir_url( __FILE__ ).'css/img/ogn_hxsw_search.png' );
}

# prcess admin menu
function ogn_hxsw_search_widget_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	$ogn_hxsw_admin_erros = array();

	# save admin menu options
	if(isset($_POST['ogn_hxsw_srch_wdgt_opt']) && $_POST['ogn_hxsw_srch_wdgt_opt'] == "y"){
	
		
		$ogn_hxsw_options = array();
		$ogn_hxsw_h_fields = array();

		include('includes/ogn_hxsw_load_options.php');
		include('includes/ogn_hxsw_validate_inputs.php');
		 
		$ogn_hxsw_options['hotelbeds_api_key'] 		= $ogn_hxsw_post_sb_hotelbeds_api_key; 
		$ogn_hxsw_options['hotelbeds_shared_secret']= $ogn_hxsw_post_sb_hotelbeds_shared_secret; 
		$ogn_hxsw_options['submit_url'] 			= $ogn_hxsw_post_sb_submit_url; 
		$ogn_hxsw_options['autocomplete_url'] 		= $ogn_hxsw_post_sb_autocomplete_url; 
		$ogn_hxsw_options['nights'] 				= $ogn_hxsw_post_sb_nights; 
		$ogn_hxsw_options['submit_type'] 			= $ogn_hxsw_post_sb_submit_type; 
		$ogn_hxsw_options['background_color'] 		= $ogn_hxsw_post_sb_background_color; 
		$ogn_hxsw_options['background_rgba'] 		= $ogn_hxsw_post_sb_background_rgba; 
		$ogn_hxsw_options['icon_color'] 			= $ogn_hxsw_post_sb_icon_color; 
		$ogn_hxsw_options['label_color'] 			= $ogn_hxsw_post_sb_label_color; 
		
		$ogn_hxsw_options['border_radius'] 			= $ogn_hxsw_post_sb_border_radius; 
		$ogn_hxsw_options['opacity'] 				= $ogn_hxsw_post_sb_opacity; 
		$ogn_hxsw_options['border_width'] 			= $ogn_hxsw_post_sb_border_width;
		$ogn_hxsw_options['border_color'] 			= $ogn_hxsw_post_sb_border_color; 
		$ogn_hxsw_options['search_box_width'] 		= $ogn_hxsw_post_sb_search_box_width; 
		$ogn_hxsw_options['bootstrap'] 				= $ogn_hxsw_post_sb_bootstrap; 

		#title options
		$ogn_hxsw_options['title'] 					= $ogn_hxsw_post_sb_title;
		$ogn_hxsw_options['title_color'] 			= $ogn_hxsw_post_sb_title_color; 
		$ogn_hxsw_options['title_size'] 			= $ogn_hxsw_post_sb_title_size; 

		#location field options
		$ogn_hxsw_options['location_placeholder'] 	= $ogn_hxsw_post_sb_location_placeholder;
		$ogn_hxsw_options['location_title'] 		= $ogn_hxsw_post_sb_location_title; 

		#date options
		$ogn_hxsw_options['checkin_title'] 			= $ogn_hxsw_post_sb_checkin_title;
		$ogn_hxsw_options['checkout_title'] 		= $ogn_hxsw_post_sb_checkout_title;
		$ogn_hxsw_options['date_format'] 			= $ogn_hxsw_post_sb_date_format;

		#nights options
		$ogn_hxsw_options['nights_title']			= $ogn_hxsw_post_sb_nights_title;

		#rooms options
		$ogn_hxsw_options['rooms_title']			= $ogn_hxsw_post_sb_rooms_title;

		#search button options
		$ogn_hxsw_options['button_background_color']= $ogn_hxsw_post_sb_button_background_color;
		$ogn_hxsw_options['button_text_color'] 		= $ogn_hxsw_post_sb_button_text_color; 
		$ogn_hxsw_options['button_text'] 			= $ogn_hxsw_post_sb_button_text;

		if(isset($_POST['ogn_hxsw_opt_hfields']) && count($_POST['ogn_hxsw_opt_hfields'])){
			$count = 0 ;
			foreach ($_POST['ogn_hxsw_opt_hfields'] as $key => $value) {
				
				$ogn_hxsw_h_fields[$count]['name']		= sanitize_text_field($value['name']);
				$ogn_hxsw_h_fields[$count]['value']	= sanitize_text_field($value['value']);
				$count++;
			}
		}

		$ogn_hxsw_options['hidden_fields'] 		= json_encode($ogn_hxsw_h_fields); 

		$ogn_hxsw_values = json_encode($ogn_hxsw_options);

		update_option( 'ogn_hxsw_sb_options', $ogn_hxsw_values );
	}

	include('includes/ogn_hxsw_load_options.php');

	ogn_hxsw_load_admin_css_and_js_files();
	
	include('templates/ogn_hxsw_admin_form.php');
}


/********************************** Helper functions **********************************/

function ogn_hxsw_load_js_files($bootstrap = true){

	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script('jquery-ui-autocomplete');
	if($bootstrap){
		wp_enqueue_script( 'ogn_hxsw_bootstrap_js', plugin_dir_url( __FILE__ ) . '/js/ogn_hxsw_bootstrap_min.js' );
	}
	wp_enqueue_script( 'ogn_hxsw_custom_script', plugin_dir_url( __FILE__ ) . '/js/ogn_hxsw_sb_script.js' );
}

function ogn_hxsw_load_css_files(){

	wp_enqueue_style( 'jquery-ui-datepicker' );
	wp_enqueue_style( 'ogn_hxsw_jquery_ui.css', plugins_url( '/css/ogn_hxsw_jquery_ui.css', __FILE__ ) );
	wp_enqueue_style( 'ogn_hxsw_bootstrap_min.css', plugins_url( '/css/ogn_hxsw_bootstrap_min.css', __FILE__ ) );
}


function ogn_hxsw_load_admin_css_and_js_files(){

	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_style( 'ogn_hxsw_jquery_ui.css', plugins_url( '/css/ogn_hxsw_jquery_ui.css', __FILE__ ) );
	wp_enqueue_style( 'ogn_hxsw_sb_admin_css', plugins_url( '/css/ogn_hxsw_reservation_admin.css', __FILE__ ) );
	wp_enqueue_style( 'ogn_hxsw_sb_switch_css', plugins_url( '/css/ogn_hxsw_tinytools_toggleswitch_min.css', __FILE__ ) );
	wp_enqueue_script( 'ogn_hxsw_sb_color_selector', plugin_dir_url( __FILE__ ) . '/js/ogn_hxsw_jscolor.js' );
	wp_enqueue_script( 'ogn_hxsw_sb_toggleswitch', plugin_dir_url( __FILE__ ) . '/js/ogn_hxsw_tinytools_toggleswitch_min.js' );
	wp_enqueue_script( 'ogn_hxsw_sb_admin_custom_script', plugin_dir_url( __FILE__ ) . '/js/ogn_hxsw_admin_sb_script.js' );
}