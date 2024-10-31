<?php
	if ( ! defined( 'ABSPATH' ) ) exit;

	#load search box options
	$ogn_hxsw_field_options = json_decode(get_option( 'ogn_hxsw_sb_options', '' ));

	#set option values
	$ogn_hxsw_hotelbeds_api_key 		= (isset($ogn_hxsw_field_options->hotelbeds_api_key)) ? $ogn_hxsw_field_options->hotelbeds_api_key : '' ;
	$ogn_hxsw_hotelbeds_shared_secret= (isset($ogn_hxsw_field_options->hotelbeds_shared_secret)) ? $ogn_hxsw_field_options->hotelbeds_shared_secret : '' ;
	$ogn_hxsw_nights 				= (isset($ogn_hxsw_field_options->nights)) ? $ogn_hxsw_field_options->nights : '7' ;
	$ogn_hxsw_submit_url 			= (isset($ogn_hxsw_field_options->submit_url)) ? $ogn_hxsw_field_options->submit_url : 'http://result.oganro.org/hotelbeds/' ;
	$ogn_hxsw_autocomplete_url 		= (isset($ogn_hxsw_field_options->autocomplete_url)) ? $ogn_hxsw_field_options->autocomplete_url : 'http://result.oganro.org/hotelbeds/autocomplete' ;
	$ogn_hxsw_background_color 		= (isset($ogn_hxsw_field_options->background_color)) ? $ogn_hxsw_field_options->background_color : '#d3d3d3' ;
	$ogn_hxsw_background_rgba 		= (isset($ogn_hxsw_field_options->background_rgba)) ? $ogn_hxsw_field_options->background_rgba : '211, 211, 211' ;
	$ogn_hxsw_icon_color 			= (isset($ogn_hxsw_field_options->icon_color)) ? $ogn_hxsw_field_options->icon_color : '#1a1a1a' ;
	
	$ogn_hxsw_hidden_fields 			= (isset($ogn_hxsw_field_options->hidden_fields)) ? json_decode($ogn_hxsw_field_options->hidden_fields) : array() ;
	$ogn_hxsw_submit_type 			= (isset($ogn_hxsw_field_options->submit_type)) ? $ogn_hxsw_field_options->submit_type : 'GET' ;
	$ogn_hxsw_border_radius 			= (isset($ogn_hxsw_field_options->border_radius)) ? $ogn_hxsw_field_options->border_radius : '20' ;
	$ogn_hxsw_opacity 				= (isset($ogn_hxsw_field_options->opacity)) ? $ogn_hxsw_field_options->opacity : '1' ;
	$ogn_hxsw_border_color 			= (isset($ogn_hxsw_field_options->border_color)) ? $ogn_hxsw_field_options->border_color : '#1a1a1a' ;
	$ogn_hxsw_label_color 			= (isset($ogn_hxsw_field_options->label_color)) ? $ogn_hxsw_field_options->label_color : '#1a1a1a' ;
	$ogn_hxsw_border_width 			= (isset($ogn_hxsw_field_options->border_width)) ? $ogn_hxsw_field_options->border_width : '05' ;
	$ogn_hxsw_search_box_width 		= (isset($ogn_hxsw_field_options->search_box_width)) ? $ogn_hxsw_field_options->search_box_width : '100' ;
	$ogn_hxsw_bootstrap 				= (isset($ogn_hxsw_field_options->bootstrap)) ? $ogn_hxsw_field_options->bootstrap : '1' ;

	#title options
	$ogn_hxsw_title 					= (isset($ogn_hxsw_field_options->nights)) ? $ogn_hxsw_field_options->title : 'Search' ;
	$ogn_hxsw_title_size   			= (isset($ogn_hxsw_field_options->title_size)) ? $ogn_hxsw_field_options->title_size : '20' ;
	$ogn_hxsw_title_color 			= (isset($ogn_hxsw_field_options->title_color)) ? $ogn_hxsw_field_options->title_color : '#1a1a1a' ;

	#location field options
	$ogn_hxsw_location_placeholder 			= (isset($ogn_hxsw_field_options->location_placeholder)) ? $ogn_hxsw_field_options->location_placeholder : 'Select your destination' ;
	$ogn_hxsw_location_title 				= (isset($ogn_hxsw_field_options->location_title)) ? $ogn_hxsw_field_options->location_title : 'Where are you going ?' ;

	#date options
	$ogn_hxsw_checkin_title 			= (isset($ogn_hxsw_field_options->checkin_title)) ? $ogn_hxsw_field_options->checkin_title : 'Check In' ;
	$ogn_hxsw_checkout_title 		= (isset($ogn_hxsw_field_options->checkout_title)) ? $ogn_hxsw_field_options->checkout_title : 'Checkout' ;
	$ogn_hxsw_date_format 			= (isset($ogn_hxsw_field_options->date_format)) ? $ogn_hxsw_field_options->date_format : 'dd-mm-yy' ;

	#nights options
	$ogn_hxsw_nights_title 			= (isset($ogn_hxsw_field_options->nights_title)) ? $ogn_hxsw_field_options->nights_title : 'Nights' ;

	#rooms options
	$ogn_hxsw_rooms_title 			= (isset($ogn_hxsw_field_options->rooms_title)) ? $ogn_hxsw_field_options->rooms_title : 'Rooms' ;

	#search button options
	$ogn_hxsw_button_text 			= (isset($ogn_hxsw_field_options->button_text)) ? $ogn_hxsw_field_options->button_text : 'search' ;
	$ogn_hxsw_button_background_color= (isset($ogn_hxsw_field_options->button_background_color)) ? $ogn_hxsw_field_options->button_background_color : '#1a1a1a' ;
	$ogn_hxsw_button_text_color		= (isset($ogn_hxsw_field_options->button_text_color)) ? $ogn_hxsw_field_options->button_text_color : '#FFFFFF' ;

	$ogn_hxsw_submit_types			= array('GET','POST');
	$ogn_hxsw_date_formats			= array('dd-mm-yy','mm-dd-yy','yy-mm-dd','yy-dd-mm','dd/mm/yy','mm/dd/yy','yy/mm/dd','yy/dd/mm');