<?php
$title_text = "";
$story = "";
$background_color = "";
$button_title = "";
$button_url = "";
$slide_number = "";
	
	//this is going to make sure that there is a title for this spot and make sure there are no errors.
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
if(!empty($slide['entity']->field_background_image_main['und'][0]['uri'])){
	$bg_image = file_create_url($slide['entity']->field_background_image_main['und'][0]['uri']);
}
if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){
	$slide_number = ($slide['entity']->field_slide_number['und'][0]['value']);
}
?>
<section class="module parallax parallax-2">
	<div class="rightslide" id="slide<?php if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){echo $slide_number;} ?>" style="background:rgb(<?php if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){echo $background_color;}?>) url( <?php if(!empty($slide['entity']->field_background_image_main['und'][0]['uri'])){echo $bg_image;}?>)" >
		<a name="slide<?php if(!empty($slide['entity']->field_slide_number['und'][0]['value'])){echo $slide_number;} ?>"></a>
		<div class ="col-lg-4 pull-left col-md-4 pull-left col-sm-4 pull-left col-xs-11 col-xs-offset-1 para-left-btn" id="title"> <h1><?php echo $title_text; ?></h1>
			<div id= "story"><?php echo $story; ?> </div>
			<?php if(!empty($slide['entity']->field_call_to_action['und'][0]['url']) || !empty($slide['entity']->field_call_to_action['und'][0]['title'])){?>
				<div>
					<p><a href=" <?php echo $button_url; ?>" class="btn btn-lg btn-secondary" title=" "><?php echo $button_title; ?></a></p>
				</div>
			<?php } ?>
		</div>
		<?php 
		$img_number = count($slide['entity']->field_image_asset['und']);
			if ($img_number == 1){
				$class_Id = "singlepicright";
			}else if($img_number == 2){
				$class_Id = "twopicright";
			}else{
				$class_Id = "threepicright";
			}

			?>
		<div class="col-lg-4 pull-right col-md-4 pull-right col-sm-4 pull-right col-xs-12 pull-right <?php echo $class_Id;?>">
			<ul id="circlepics">
				<?php foreach ($slide['entity']->field_image_asset['und'] as $key => $value) {
					$pic = file_create_url($slide['entity']->field_image_asset['und'][$key]['uri']);
				?>
					<li class="<?php echo $key . $slide['entity']->field_type['und'][0]['value']; ?>"><img class="img-responsive"src="<?php echo $pic ?>"/></li>	
				<?php } ?>
			</ul>
		</div>
	</div>
</section>