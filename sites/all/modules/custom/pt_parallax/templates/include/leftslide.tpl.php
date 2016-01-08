<?php
$title_text = "";
$story = "";
$background_color = "";
$button_title = "";
$button_url = "";
$slide_number = "";

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
if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){
	$slide_number = ($slide['entity']->field_slide_number['und'][0]['value']);
}

?>

<section class="parallax-window" id="slide<?php if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){echo $slide_number;} ?>" data-parallax="scroll" style="background-color:rgb(<?php if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){echo $background_color;} ?>)">
	<a name="slide<?php if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){echo $slide_number;} ?>"></a>
	<div class="slide slide-left" id="linkLeftSlide" >
		<?php 
		$img_number = count($slide['entity']->field_image_asset['und']);
			if ($img_number == 1){
				$class_Id = "singlepicleft";
			}else if($img_number == 2){
				$class_Id = "twopicleft";
			}else{
				$class_Id = "threepicleft";
			}

			?>
			<div class="col-lg-4 pull-left col-md-4 pull-left col-sm-4 pull-left col-xs12 pull-left <?php echo $class_Id;?>">
				<ul>
					<?php foreach ($slide['entity']->field_image_asset['und'] as $key => $value) {
						$pic = file_create_url($slide['entity']->field_image_asset['und'][$key]['uri']);
					?>
						<li class="<?php echo $key . $slide['entity']->field_type['und'][0]['value']; ?>"><img src="<?php echo $pic ?>"/></li>	
					<?php } ?>
				</ul>
			</div>
	
			<div class="col-lg-4 pull-right col-md-4 pull-right col-sm-4 pull-right col-xs-12" id="title"><h1> <?php echo $title_text; ?></h1>
				<div id="story"> <?php echo $story; ?> 

					<?php if(!empty($slide['entity']->field_call_to_action['und'][0]['url']) || !empty($slide['entity']->field_call_to_action['und'][0]['title'])){?>
					<p><a href=" <?php echo $button_url; ?>" class="btn btn-lg btn-secondary" title=" "><?php echo $button_title; ?></a></p>
				</div><?php } ?>
			</div>
	</div>

</section>