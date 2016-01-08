

<?php
$dividerPic = "";
$background_image = "";
$class_set = "";
$image_height = "";
$banner_color = "";
	
	// this is going to make sure that if there are any images and set them.
if(!empty($slide['entity']->field_image_asset['und'][0]['uri'])){
	$dividerPic = "<img src=" . file_create_url($slide['entity']->field_image_asset['und'][0]['uri']) . " />";
}
	// this is going to set the background image for the item.
if(!empty($slide['entity']->field_background_image_main['und'][0]['uri'])){
	$background_image = file_create_url($slide['entity']->field_background_image_main['und'][0]['uri']);
}
	//this is going to check to see if the element has any classes on it and pull them in to apply them as needed.
if(!empty($slide['entity']->field_class['und'][0]['value'])){
	$class_set = $slide['entity']->field_class['und'][0]['value'];
}
	//this is going to pull inthe image height so that it can be set for the div.
if(!empty($slide['entity']->field_background_image_main['und'][0]['image_dimensions']['height'])){
	$image_height = $slide['entity']->field_background_image_main['und'][0]['image_dimensions']['height'];
}
	//pulls in the banner color for the background parallaxing images.
if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){
	$banner_color = $slide['entity']->field_image_banner_color['und'][0]['value'];
}

$title = $slide['entity']->title;
?>

<div class="parallax-mirror " id="<?php echo $class_set;?>" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 3124px; left: 0px; height: 600px; width: 100%;">
	<img class="parallax-slider" src="<?php echo $background_image; ?>" style="transform: translate3d(0px, 0px, 0px); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat; background-attachment: fixed; height: 600px; width: 100%; max-width: none;">
</div>
<div class="parallax-container divider"  data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php echo $background_image; ?>" data-natural-width="1400" data-natural-height="900" style="height: 600px;">
		<div class="slider_
		 transbox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(<?php if(!empty($slide['entity']->field_image_banner_color['und'][0]['value'])){echo $banner_color;} ?>,.6)"> <h1><?php echo $title ?></h1>	</div>
</div>