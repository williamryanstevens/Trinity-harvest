<?php
$title_text = "";
$story = "";
$background_color = "";
$button_title = "";
$button_url = "";

	//this is going to make sure that there is a title elemnt and set it.
if(!empty($slide['entity']->title)){
	$title_text = $slide['entity']->title;
}
	// this will make sure that the story is set and if not it will return a blank value.
if(!empty($slide['entity']->field_story['und'][0]['value'])){
	$story = $slide['entity']->field_story['und'][0]['value'];
}
	//this is going to check to see if the element has any classes on it and pull them in to apply them as needed.
if(!empty($slide['entity']->field_class['und'][0]['value'])){
	$class_set = $slide['entity']->field_class['und'][0]['value'];
}
if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){
	$background_color = $slide['entity']->field_image_banner_color['und'][0]['value'];
}
if(!empty($slide['entity']->field_call_to_action['und'][0]['url'])){
	$button_url = $slide['entity']->field_call_to_action['und'][0]['url'];
}
if(!empty($slide['entity']->field_call_to_action['und'][0]['title'])){
	$button_title = $slide['entity']->field_call_to_action['und'][0]['title'];
}

?>

<section class="parallax-window" id="<?php if(!empty($slide['entity']->field_class['und'][0]['value']))echo $class_set; ?>" data-parallax="scroll" style="background-color:rgb(<?php if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){echo $background_color;} ?>)">
	<div class="slide slide-permanent col-lg-12 col-md-12 col-sm-12" >
		<div class="col-lg-8 col-md-7 col-sm-7 col-xs-10 pull-left slide-divider-top-title " id="title"><h1> <?php echo $title_text; ?></h1>
				<div id="story"> <?php echo $story; ?> 
					<?php if(!empty($slide['entity']->field_call_to_action['und'][0]['url']) || !empty($slide['entity']->field_call_to_action['und'][0]['title'])){?>
					<p><a href=" <?php echo $button_url; ?>" class="btn btn-lg btn-secondary" title=" "><?php echo $button_title; ?></a></p>
				</div><?php } ?>
			</div>
		<?php 
		$img_number = count($slide['entity']->field_image_asset['und']);
			?>
			<div class="col-lg-7 col-md-3 col-sm-3 pull-right slide-divider-top slide-container-top" id="diamondtop">
				<ul>
					<?php foreach ($slide['entity']->field_image_asset['und'] as $key => $value) {
						$pic = file_create_url($slide['entity']->field_image_asset['und'][$key]['uri']);
					?>
						<li class="<?php echo $key . $slide['entity']->field_type['und'][0]['value']; ?> text-center"><img src="<?php echo $pic ?>"/></li>	
					<?php } ?>
				</ul>
			</div>
	
			
	</div>

</section>