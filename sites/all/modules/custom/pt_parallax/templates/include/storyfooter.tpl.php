<?php 

	$footer_link_left = $node->field_footer_links['und'][0]['url'];
	$footer_link_right = $node->field_footer_link_right['und'][0]['url'];
	$footer_link_title_left = $node->field_footer_links['und'][0]['title'];
	$footer_link_title_right = $node->field_footer_link_right['und'][0]['title'];

?>

<footer id="storypage_footer" class="container">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="col-lg-4 col-md-4 col-sm-4 text-center center"id="left">
    	<div><h1><a href="<?php echo $footer_link_left ?>"><?php echo $footer_link_title_left?></a></h1></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 text-center ">
        <img src="/sites/all/modules/custom/pt_parallax/images/Diamond_NightLife-03 (1).png">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 text-center center" id="right">
    	<h1><a href="<?php echo $footer_link_right ?>"><?php echo $footer_link_title_right?></a></h1>
	  </div>
  </div>
</footer>
