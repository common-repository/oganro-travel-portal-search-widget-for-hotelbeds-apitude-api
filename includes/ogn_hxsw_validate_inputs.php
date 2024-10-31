<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$ogn_hxsw_integer_error = 'Enter a Integer value';

$ogn_hxsw_post_sb_hotelbeds_api_key = sanitize_text_field($_POST['ogn_hxsw_opt_sb_hotelbeds_api_key']);
$ogn_hxsw_post_sb_hotelbeds_shared_secret = sanitize_text_field($_POST['ogn_hxsw_opt_sb_hotelbeds_shared_secret']);
$ogn_hxsw_post_sb_submit_url = sanitize_text_field($_POST['ogn_hxsw_opt_sb_submit_url']);
$ogn_hxsw_post_sb_autocomplete_url = sanitize_text_field($_POST['ogn_hxsw_opt_sb_autocomplete_url']);
$ogn_hxsw_post_sb_nights = sanitize_text_field($_POST['ogn_hxsw_opt_sb_nights']);
$ogn_hxsw_post_sb_submit_type = sanitize_text_field($_POST['ogn_hxsw_opt_sb_submit_type']);
$ogn_hxsw_post_sb_background_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_background_color']);
$ogn_hxsw_post_sb_background_rgba = sanitize_text_field($_POST['ogn_hxsw_opt_sb_background_rgba']);
$ogn_hxsw_post_sb_icon_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_icon_color']);
$ogn_hxsw_post_sb_label_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_label_color']);
$ogn_hxsw_post_sb_opacity = sanitize_text_field($_POST['ogn_hxsw_opt_sb_opacity']);
$ogn_hxsw_post_sb_border_width = sanitize_text_field($_POST['ogn_hxsw_opt_sb_border_width']); 
$ogn_hxsw_post_sb_border_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_border_color']);
$ogn_hxsw_post_sb_bootstrap = isset($_POST['ogn_hxsw_opt_sb_bootstrap'])? 1 : 0;
$ogn_hxsw_post_sb_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_title']);
$ogn_hxsw_post_sb_title_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_title_color']);
$ogn_hxsw_post_sb_location_placeholder = sanitize_text_field($_POST['ogn_hxsw_opt_sb_location_placeholder']);
$ogn_hxsw_post_sb_location_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_location_title']);
$ogn_hxsw_post_sb_checkin_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_checkin_title']);
$ogn_hxsw_post_sb_checkout_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_checkout_title']);
$ogn_hxsw_post_sb_date_format = sanitize_text_field($_POST['ogn_hxsw_opt_sb_date_format']);
$ogn_hxsw_post_sb_nights_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_nights_title']);
$ogn_hxsw_post_sb_rooms_title = sanitize_text_field($_POST['ogn_hxsw_opt_sb_rooms_title']);
$ogn_hxsw_post_sb_button_background_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_button_background_color']); 
$ogn_hxsw_post_sb_button_text_color = '#'.sanitize_text_field($_POST['ogn_hxsw_opt_sb_button_text_color']);
$ogn_hxsw_post_sb_button_text = sanitize_text_field($_POST['ogn_hxsw_opt_sb_button_text']); 

if(isset($_POST['ogn_hxsw_opt_sb_search_box_width']) && is_numeric($_POST['ogn_hxsw_opt_sb_search_box_width'])){

	$ogn_hxsw_post_sb_search_box_width = sanitize_text_field($_POST['ogn_hxsw_opt_sb_search_box_width']);
}else{
	$ogn_hxsw_admin_erros['box_width']['msg'] =  $ogn_hxsw_integer_error;
	$ogn_hxsw_admin_erros['box_width']['field'] = 'Search Box Width'; 
	$ogn_hxsw_post_sb_search_box_width = $ogn_hxsw_search_box_width;
}


if(isset($_POST['ogn_hxsw_opt_sb_title_size']) && is_numeric($_POST['ogn_hxsw_opt_sb_title_size'])){

	$ogn_hxsw_post_sb_title_size = sanitize_text_field($_POST['ogn_hxsw_opt_sb_title_size']);
}else{
	$ogn_hxsw_admin_erros['title_size']['msg'] =  $ogn_hxsw_integer_error;
	$ogn_hxsw_admin_erros['title_size']['field'] = 'Title Size'; 
	$ogn_hxsw_post_sb_title_size = $ogn_hxsw_title_size;
}


if(isset($_POST['ogn_hxsw_opt_sb_border_radius']) && is_numeric($_POST['ogn_hxsw_opt_sb_border_radius'])){

	$ogn_hxsw_post_sb_border_radius = sanitize_text_field($_POST['ogn_hxsw_opt_sb_border_radius']);
}else{
	$ogn_hxsw_admin_erros['border_radius']['msg'] =  $ogn_hxsw_integer_error;
	$ogn_hxsw_admin_erros['border_radius']['field'] = 'Border Radius'; 
	$ogn_hxsw_post_sb_border_radius = $ogn_hxsw_border_radius;
}