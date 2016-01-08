<?php

/**
* @file
* Default simple view template to all the fields as a row.
*
* - $view: The view in use.
* - $fields: an array of $field objects. Each one contains:
*  - $field->content: The output of the field.
*  - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
*  - $field->class: The safe class id to use.
*  - $field->handler: The Views field handler object controlling this field. Do not use
*    var_export to dump this object, as it can't handle the recursion.
*  - $field->inline: Whether or not the field should be inline.
*  - $field->inline_html: either div or span based on the above flag.
*  - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
*  - $field->wrapper_suffix: The closing tag for the wrapper.
*  - $field->separator: an optional separator that may appear before a field.
*  - $field->label: The wrap label text to use.
*  - $field->label_html: The full HTML of the label to use including
*    configured element type.
* - $row: The raw result object from the query, with all data it fetched.
*
* @ingroup views_templates
*/
	$row_count = $view->row_index;
	$value = $row;
	$current_date = date_format(new DateTime($value->field_data_field_event_date_field_event_date_value) , 'm-d-Y' );
	$date_setup = date_create($value->field_field_event_date[0]['raw']['value']);
	$event_time = date_format($date_setup, 'g:i A');
	$short_description = "";
	$event_pic = "";
	$url_name = "Link";
	$event_location = "";
    $event_gmap_location_link_lat = "37.4691174";
	$event_gmap_location_link_long = "-82.5263025";
	$nodeId = $row->nid;
	$nodePath= "node/".$nodeId;
	$tPath = 'http://'.$_SERVER['HTTP_HOST'].base_path().drupal_get_path_alias($nodePath);
	$hide_this_button = "";
?>
<div class='views-row pt-event-main-page'>
	<div class="container date-stamp-outer">
		<div class='col-lg-3 col-md-3 col-sm-4 col-xs-12 event-mainpage-date-stamp text-center'>
			<h1 class="testing"><?php print $current_date; ?></h1>
		</div>
	</div>
	<?php  
    if(!empty($value->field_field_user_segmentation[0])){
    
      foreach ($value->field_field_user_segmentation[0]['rendered']['entity']['field_collection_item'] as $key2 => $user_seg) {
        $image_num = $value->field_field_user_segmentation[0]['raw']['value'];
        
        if(!empty($value->field_field_user_segmentation[0]['rendered']['entity']['field_collection_item'][$key2]['field_collection_image']['#object']->field_collection_image['und'][0]['filename'])){
          
          $event_pic = file_create_url($value->field_field_user_segmentation[0]['rendered']['entity']['field_collection_item'][$image_num]['field_collection_image']['#items'][0]['uri']);

          if(!empty($value->field_field_user_segmentation[0]['rendered']['entity']['field_collection_item'][$image_num]['field_collection_text'])){
            $short_description = $value->field_field_user_segmentation[0]['rendered']['entity']['field_collection_item'][$image_num]['field_collection_text'][0]['#markup'];
          }
        }
      } 

  ?>
	<div class="pt-attraction-card-image pt-event-main-pic-changes">
		<a href=" <?php echo $tPath; ?>">
			<img src="<?php echo $event_pic; ?>" class="img-responsive" alt="Responsive image">
		</a>
		<div class="pt-lower-text-section">
			<div class="pt-attraction-card-title text-center">
				<div class="attraction-card-header">
					<h1><?php echo $value->field_field_event_title[0]['raw']['value']; ?></h1>
				</div>
			</div>

			<div class="pt-attraction-card-paragraph-title">
				<div>
					<h2><?php echo $value->field_field_event_title[0]['raw']['value']; ?></h2>
				</div>		
			</div>
			<div class="pt-attraction-card-paragraph">
				<p class="">
					<?php echo $short_description; ?>
				</p>
			</div>
			<div class="pt-time-location">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							Time: <?php echo $event_time; ?>
						</div>
						<div class="col-lg-3">
							<?php if (!empty($value->field_field_event_location[0]['rendered']['#location']['name'])) {
								$event_location = $value->field_field_event_location[0]['rendered']['#location']['name'];
							} ?>
							Location: <?php echo $event_location; ?>
						</div>
					</div>
				</div>		
			</div>
			<div class="pt-attraction-card-bottom">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-sm-4 col-xs-3 pt-attraction-social-media">
							<div class="row">
								<!-- this is the loop that will output the social media links and will only show the ones that are listed by the admin. -->
			                <?php 
			                	if (!empty ($value->_field_data['nid']['entity']->field_event_social_media['und'])){
			                    	foreach($value->_field_data['nid']['entity']->field_event_social_media['und'] as $key => $socialMedia){
			                        if (!empty($value->_field_data['nid']['entity']->field_event_social_media['und'][$key]['attributes']['class'])){
			                        	$social_media_link = $value->_field_data['nid']['entity']->field_event_social_media['und'][$key]['attributes']['class'];
			                        }else{
			                        	$social_media_link = "fa fa-share";
			                        }
		                    ?>
			                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6 event_col_padding_removal">
			                        	<a href="http://<?php echo $value->_field_data['nid']['entity']->field_event_social_media['und'][$key]['url']; ?>" class="btn azm-social azm-circle azm-long-shadow azm-size-32 azm-facebook" target="_blank">
			                        		<i class="<?php echo $social_media_link; ?>"></i>
			                        	</a>
		                        	</div>
			                    	<?php } ?>
			                	<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 pt-navigation-icons pt-events-mainpage-nav-icons">
							<div class="row">
								<div class="col-lg-4 col-md-2 hidden-sm hidden-xs"></div>
								<!-- <div class="hidden-lg hidden-md col-sm-8 col-xs-7"></div> -->
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
									<div>
										<a href="<?php echo $tPath; ?>" class="attraction-glyph-size btn azm-social azm-circle azm-long-shadow azm-size-64 azm-facebook">
											<i class="material-icons">info_outline</i>
										</a>
									</div>	
								</div>
								<?php //this is going to show or hide the link that contains the image gallery.  
									if(!empty($value->field_field_image_gallery)){
								?>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 pt-mainpage-icon-small-screen-shift">
									<div>
										<a class="colorbox-inline" href="?width=300&height=300&inline=true#id-of-content">
											<i class="material-icons pt-eventmain-image-gallery-icon-shift">
												photo_library
											</i>
										</a>	
									</div>
									<div style="display: none;">
									 	<div id="id-of-content">
							        	<?php if (!empty($value->field_field_image_gallery)){ ?>
										      <div class="attraction-subpage-image-gallery">
										        <?php $bean = $value->field_field_image_gallery[0]['raw']['entity'];?>
										        <?php $view = bean_view($bean, $view_mode = 'default', $langcode = NULL);?>
										        <?php print render($view); ?>
										      </div>

										<?php } ?>
										</div>
						        	</div>	
								</div>
								<?php } ?>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
									<div>
										<?php if(!empty($value->field_field_event_location)){
                            					foreach($value->field_field_event_location as $link_tid => $gmap_link){
                                					$event_gmap_location_link_lat = $value->field_field_event_location[0]['raw']['latitude'];
                                					$event_gmap_location_link_long = $value->field_field_event_location[0]['raw']['longitude'];
                            						
                            						}
                								}?>
										<a href="https://www.google.com/maps?q=<?php echo $event_gmap_location_link_lat; ?>,<?php echo $event_gmap_location_link_long; ?>&z=15z" target="_blank" class="attraction-glyph-size btn azm-social azm-circle azm-long-shadow azm-size-64 azm-facebook">
											<i class="material-icons">explore</i>
										</a>
									</div>
								</div>
								<?php if(array_key_exists('und', $value->_field_data['nid']['entity']->field_download_field_label)){ ?>
				                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
				                  <a href="/calendar/download/<?php echo $nodeId; ?>" target="_blank" type="button" class="btn btn-secondary attraction-glyph-size btn azm-social azm-circle azm-long-shadow azm-size-64 azm-facebook">
				                    <i class="material-icons">file_download</i>
				                  </a>
				                </div> 
				                <?php } ?>  
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
							<div class="text-center pt-attraction-button">
								<?php 
								//this is going pull the call to action title and the link so that it can be populated dynamically.
									if(!empty($value->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0])){
											//this is going to check to see if the url field is empty.
										if(!empty($value->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0]['url'])){
											$call_to_action_link = "http://" . $value->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0]['url'];
										}else{
											$call_to_action_link = "http://www.google.com";
										}
											//this is going to check to see if the title field is empty.
										if(!empty($value->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0]['title'])){
											$call_to_action_title = $value->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0]['title'];
											$call_to_action_title = substr($call_to_action_title, 0, 15);
										}else{
											$call_to_action_title = "Buy Tickets";
										}
									}else{
										$hide_this_button = "display_none";
										$call_to_action_title = "Buy Tickets";
										$call_to_action_link = "http://www.google.com";
									}
								 ?>
								<a href=" <?php echo $call_to_action_link; ?>" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-full <?php echo $hide_this_button; ?>"><?php echo $call_to_action_title; ?></button></a>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>	
	</div>
</div>
<?php } ?>


