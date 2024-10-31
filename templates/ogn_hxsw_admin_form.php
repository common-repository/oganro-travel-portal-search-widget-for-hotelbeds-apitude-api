<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="ognwrap" style="width:100%;">

	
	<h2>HotelBeds XML Travel Portal Search Widget</h2>
	
	<?php if(!empty($ogn_hxsw_admin_erros)): ?>
		<div class="error notice">
			<?php foreach($ogn_hxsw_admin_erros as $errors): ?>
	        	<p><stron><?php echo esc_html($errors['field']); ?> : </stron><?php echo esc_html($errors['msg']); ?></p>
	    	<?php endforeach; ?>
	    </div>
    <?php endif; ?>

	<form method="POST" action="">

		<fieldset class="fieldwrap settings">

			<legend title="settings"><span class="iconssettings"></span>General Settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Submit URL </th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_submit_url" value="<?php echo esc_attr($ogn_hxsw_submit_url); ?>" class="regular-text"/>
							<p class="description" >Enter search box submit url</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Submit Type</th>
						<td>
							<select name="ogn_hxsw_opt_sb_submit_type">
								<?php foreach($ogn_hxsw_submit_types as $type): ?>
										<option value="<?php echo esc_attr($type); ?>" <?php if($type == $ogn_hxsw_submit_type) echo esc_attr("selected"); ?>><?php echo esc_html($type); ?></option>
								<?php endforeach; ?>
							</select>
							<p class="description" >Select form submit type</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Autocomplete URL</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_autocomplete_url" value="<?php echo esc_attr($ogn_hxsw_autocomplete_url); ?>" class="regular-text"/>
							<p class="description" >Enter search box destination auto complete url</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Hotelbeds API Key </th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_hotelbeds_api_key" value="<?php echo esc_attr($ogn_hxsw_hotelbeds_api_key); ?>" class="regular-text"/>
							<p class="description" >Enter your hotelbeds api key</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Hotelbeds Shared Secret </th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_hotelbeds_shared_secret" value="<?php echo esc_attr($ogn_hxsw_hotelbeds_shared_secret); ?>" class="regular-text"/>
							<p class="description" >Enter your hotelbeds shared secret</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Title </th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_title" value="<?php echo esc_attr($ogn_hxsw_title); ?>" class="regular-text"/>
							<p class="description" >Enter search box Title</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Title Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_title_color" value="<?php echo esc_attr($ogn_hxsw_title_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Select Title color</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Title Size</th>
						<td>
							<input type="number" name="ogn_hxsw_opt_sb_title_size" value="<?php echo esc_attr($ogn_hxsw_title_size); ?>"/><b> px</b>
							<p class="description" >Enter title size in px</p>
						</td>
					</tr>

					

				</tbody>
			</table>
		</fieldset>

		<fieldset class="fieldwrap settings">
			
			<legend title="settings"><span class="iconssettings"></span>Search box style settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Search Box Width</th>
						<td>
							<input type="number" name="ogn_hxsw_opt_sb_search_box_width" value="<?php echo esc_attr($ogn_hxsw_search_box_width); ?>" /><b> %</b>
							<p class="description" >Enter search box width in %</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Background Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_background_color" value="<?php echo esc_attr($ogn_hxsw_background_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666',onFineChange:'update(this)'}" />
							<p class="description" >Select background color</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Icons Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_icon_color" value="<?php echo esc_attr($ogn_hxsw_icon_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Select Icon color</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Input label Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_label_color" value="<?php echo esc_attr($ogn_hxsw_label_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Select Input label color</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Search Box Opacity</th>
						<td>
							<div id="slider"></div>
						</td>
					</tr>

					<tr>
						<th scope="row">Search Box Border Radius</th>
						<td>
							<input type="number" name="ogn_hxsw_opt_sb_border_radius" value="<?php echo esc_attr($ogn_hxsw_border_radius); ?>" /><b> px</b>
							<p class="description" >Enter search box radius in px</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Search Box Border Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_border_color" value="<?php echo esc_attr($ogn_hxsw_border_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Enter search box radus in px</p>
						</td>
					</tr>
					<tr>
						<th scope="row">Search Box Border width</th>
						<td>
							<input type="number" name="ogn_hxsw_opt_sb_border_width" value="<?php echo esc_attr($ogn_hxsw_border_width); ?>" /><b> px</b>
							<p class="description" >Enter search box border width in px</p>
						</td>
					</tr>
					
					
				</tbody>
			</table>
		</fieldset>

		<!-- Location settings -->
		<fieldset title="Settings" class="fieldwrap">
			<legend><span class="location"></span>Location Settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Location Title</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_location_title" value="<?php echo esc_attr($ogn_hxsw_location_title); ?>"  class="regular-text"/>
							<p class="description" >Enter location label text</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Location Placeholder Text</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_location_placeholder" value="<?php echo esc_attr($ogn_hxsw_location_placeholder); ?>"  class="regular-text"/>
							<p class="description" >Enter location placeholder text</p>
						</td>
					</tr>

				</tbody>
			</table>
		</fieldset>

		<!-- Location settings -->
		<fieldset title="Settings" class="fieldwrap">
			<legend><span class="checkout"></span>Datepicker settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Check In Title</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_checkin_title" value="<?php echo esc_attr($ogn_hxsw_checkin_title); ?>"  class="regular-text"/>
							<p class="description" >Enter check in label text</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Checkout Title</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_checkout_title" value="<?php echo esc_attr($ogn_hxsw_checkout_title); ?>"  class="regular-text"/>
							<p class="description" >Enter checkout label text</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Date format</th>
						<td>
							<select name="ogn_hxsw_opt_sb_date_format">
								<?php foreach($ogn_hxsw_date_formats as $format): ?>
										<option value="<?php echo esc_attr($format); ?>" <?php if($format == $ogn_hxsw_date_format) echo esc_attr("selected"); ?>><?php echo esc_html($format); ?></option>
								<?php endforeach; ?>
							</select>
							<p class="description" >Select datepicker default date format</p>
						</td>
					</tr>

				</tbody>
			</table>
		</fieldset>


		<!-- Nights settings -->
		<fieldset title="Settings" class="fieldwrap">
			<legend><span class="nights"></span>Nights Settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Nights Title</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_nights_title" value="<?php echo esc_attr($ogn_hxsw_nights_title); ?>"  class="regular-text"/>
							<p class="description" >Enter Nights label text</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Default Nights</th>
						<td>
							<select name="ogn_hxsw_opt_sb_nights">
								<?php for($i = 1; $i < 31;$i++): ?>
										<option value="<?php echo esc_attr($i); ?>" <?php if($i == $ogn_hxsw_nights) echo esc_attr("selected"); ?>><?php echo esc_html($i); ?></option>
								<?php endfor; ?>
							</select>
							<p class="description" >Select default nights count</p>
						</td>
					</tr>

				</tbody>
			</table>
		</fieldset>

		<!-- Rooms settings -->
		<fieldset title="Settings" class="fieldwrap">
			<legend><span class="roomsicon"></span>Rooms Settings</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Rooms Title</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_rooms_title" value="<?php echo esc_attr($ogn_hxsw_rooms_title); ?>"  class="regular-text"/>
							<p class="description" >Enter Rooms label text</p>
						</td>
					</tr>

				</tbody>
			</table>
		</fieldset>

		<!-- Search button settings -->
		<fieldset title="Settings" class="fieldwrap">
			<legend><span class="seachbox"></span>Search Button</legend>
			<table class="form-table">
				<tbody>

					<tr>
						<th scope="row">Search Button Text</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_button_text" value="<?php echo esc_attr($ogn_hxsw_button_text); ?>" />
							<p class="description" >Enter search button text</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Button Background Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_button_background_color" value="<?php echo esc_attr($ogn_hxsw_button_background_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Select Search button background color</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Button Text Color</th>
						<td>
							<input type="text" name="ogn_hxsw_opt_sb_button_text_color" value="<?php echo esc_attr($ogn_hxsw_button_text_color); ?>" class=" jscolor {width:243, height:150, position:'right',borderColor:'#FFF', insetColor:'#FFF', backgroundColor:'#666'}"/>
							<p class="description" >Select Search button background color</p>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>

		<fieldset class="fieldwrap settings">

			<legend title="settings"><span class="iconssettings"></span>Advance Settings</legend>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">Hidden Fields</th>
						<td>
							<a class="button button-default" id="add_field_btn">Add hidden field</a><br><br>
							<div id="hidden_fields_wrap">
								<?php 

									if(count($ogn_hxsw_hidden_fields)):
										foreach($ogn_hxsw_hidden_fields as $key => $hidden_field): 
								?>
											<div class="hfield" id="hfield<?php echo esc_attr($key); ?>">
												<input type="text" name="ogn_hxsw_opt_hfields[<?php echo esc_attr($key); ?>][name]" value="<?php echo esc_attr($hidden_field->name); ?>">
												<input type="text" name="ogn_hxsw_opt_hfields[<?php echo esc_attr($key); ?>][value]" value="<?php echo esc_attr($hidden_field->value); ?>">
												<a class="button button-danger h_field_rmv_btn" onClick="remove_field(hfield<?php echo esc_attr($key); ?>)" style="background-color:#e04848;color:white;border-radius:15px;">X</a>
											</div>
								<?php 
										endforeach;
									endif;
								?>
							</div>

							<p class="description" >Add hidden fields to search box</p>
						</td>
					</tr>

					<tr>
						<th scope="row">Load Bootstrap js</th>
						<td>
							<input type="checkbox" id="ToggleSwitchSample" name="ogn_hxsw_opt_sb_bootstrap" />
							<p class="description" >Off bootstrap js on conflict issues</p>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>

		<input type="hidden" name="ogn_hxsw_srch_wdgt_opt" value="y"/>
		<input type="hidden" name="ogn_hxsw_opt_sb_background_rgba" value="<?php echo esc_attr($ogn_hxsw_background_rgba);  ?>" id="bgr_rgba"/>
		<input type="hidden" name="ogn_hxsw_opt_sb_opacity" id="opacity" value="<?php echo esc_attr($ogn_hxsw_opacity); ?>" />
		<input type="hidden" id="ogn_sb_bootstrap" value="<?php echo esc_attr($ogn_hxsw_bootstrap); ?>"/>

		<fieldset class="fieldwrap settings" style="border:none;margin:0;box-shadow:none;">
				<input type="submit" id="submit" class="button button-primary" value="Save Changes">
		</fieldset>

	</form>
</div>
<script type="text/javascript">
	function update(picker) {

		var val = Math.round(picker.rgb[0]) + ', ' +
	        Math.round(picker.rgb[1]) + ', ' +
	        Math.round(picker.rgb[2]);

	    document.getElementById('bgr_rgba').value = val;
	}
</script>
<style>
	#slider label {
	    position: absolute;
	    width: 20px;
	    margin-left: -10px;
	    text-align: center;
	    margin-top: 20px;
	}

	#slider{
		width: 50%;
	}

	@media screen and (max-width: 1024px) {
	    #slider{
			width: 80%;
		}
	}

	@media screen and (max-width: 783px) {
	    #slider{
			width: 98%;
			margin-bottom: 25px;
		}
	}
</style>