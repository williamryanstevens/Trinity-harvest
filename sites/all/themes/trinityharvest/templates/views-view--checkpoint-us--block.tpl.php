<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<div id="thc-history-page" class="thc-history-page col-lg-12 col-md-12 col-sm-12 
col-xs-12" >
	<div class="thc-history-page-image-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<img class="img-responsive front-history-page-image1" src="<?php echo file_create_url( $view->result[3]->field_field_building_history[0]['raw']['uri']); ?>" >
	</div>
	<div class="thc-history-page-text1 text-center col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <p>Trinity Harvest Church launched in January 2007 in a rented store front with less than 20 people. In 2009 a second Sunday morning service was added.</p>
    </div>
</div> 
<div id="thc-history-page" class="thc-history-page col-lg-12 col-md-12 col-sm-12 
col-xs-12" >
	<div class="thc-history-page-image-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<img class="img-responsive front-history-page-image1" src="<?php echo file_create_url( $view->result[3]->field_field_building_history[0]['raw']['uri']); ?>" >
	</div>
	<div class="thc-history-page-text2 text-center col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <p>In August 2010 Trinity moved into our 2nd facility on Third Street in downtown Pikeville. The church experienced a great season of ministry and blessing during the nearly five years in this location.</p>
    </div>
</div>
<div id="thc-history-page" class="thc-history-page col-lg-12 col-md-12 col-sm-12 
col-xs-12" >
	<div class="thc-history-page-image-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<img class="img-responsive front-history-page-image1" src="<?php echo file_create_url( $view->result[3]->field_field_building_history[0]['raw']['uri']); ?>" >
	</div>
	<div class="thc-history-page-text3 text-center col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <p>May 3rd, 2015 Trinity Harvest Church moved into our current location, the former Mark V convention center.</p>
      </div>
</div> 
<div id="thc-history-page" class="thc-history-page col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<div class="thc-history-page-image-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
<img class="img-responsive front-history-page-image1" src="<?php echo file_create_url( $view->result[3]->field_field_building_history[0]['raw']['uri']); ?>" >
	</div>
<div class="thc-history-page-text4 text-center col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
        <p>God has used the ministry of Trinity Harvest Church to impact the lives of many people in Pikeville and Eastern Kentucky leading them to know and grow in Jesus. Since the church was launched in 2007 Trinity has seen over 600 people receive Jesus Christ as their Lord and Savior! God has been faithful and gracious to Trinity and we can't wait to see all He has planned for the future.
</p>
      </div>

</div>

 <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>



