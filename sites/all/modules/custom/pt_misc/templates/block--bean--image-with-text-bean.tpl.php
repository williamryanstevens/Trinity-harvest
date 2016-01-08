<?php
/**
 * @file
 * Default theme implementation for entities.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */

?>
<?php if(array_key_exists('und',$variables['elements']['#entity']->field_description)): ?>
<div class="pt-image-with-text-bean">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="TopTitleField">
				<?php echo $variables['elements']['#entity']->label; ?> 
			</div>
			<br/>
		</div> <!-- End of Col-lg-12 div	 -->

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="leftTextField">
				<?php echo $variables['elements']['#entity']->field_description['und'][0]['value']; ?> 
			</div>
		</div><!-- End of right col-lg-6 -->
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
			<?php $imageStyleResults = $variables['elements']['#entity']->field_image_size['und'][0]['value'] ?>
			<div class="picSpacing"><img src="<?php echo image_style_url($imageStyleResults,$variables['elements']['#entity']->field_image['und'][0]['uri']); ?>" class="img-responsive"/></div>
		</div><!-- End of left col-lg-6 -->
		<div class="row col-lg-12 col-med-12 col-sm-12 col-xs-12 text-left
		">
			<div class="BottomCallToAction"><a href="<?php echo $variables['elements']['#entity']->field_event_call_to_action_link['und'][0]['url']?>"
			target="_blank" type="button" class="mainStreetButton btn btn-primary">
			<?php echo $variables['elements']['#entity']->field_event_call_to_action_link['und'][0]['title'];?></a>
			</div>
		</div> <!-- End of Col-lg-12 div	 -->
	</div>	
<?php else: ?>	
	<div class="swasImageField">
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="TopTitleField">
				<?php echo $variables['elements']['#entity']->label; ?> 
			</div>
		</div> <!-- End of Col-lg-12 div	 -->
			<?php $imageStyleResults = $variables['elements']['#entity']->field_image_size['und'][0]['value'] ?>
			<img src="<?php echo image_style_url($imageStyleResults,$variables['elements']['#entity']->field_image['und'][0]['uri']); ?>" class="img-responsive"/>
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
			<div class="BottomCallToAction">
				<div><a href="<?php echo $variables['elements']['#entity']->field_event_call_to_action_link['und'][0]['url']?>" target="_blank" type="button" class="mainStreetButton btn btn-secondary"><?php echo $variables['elements']['#entity']->field_event_call_to_action_link['und'][0]['title'];?></a></div>
			 </div>
		</div> <!-- End of Col-lg-12 div	 -->
</div>
<?php endif; ?>
  




