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
	<div class="row pt-image-card-main-div">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pt-image-card-image-div">
			<a href=#>
			<img class="img-responsive pt-image-card-pic" src="<?php echo file_create_url($variables['elements']['#entity']->field_image_card['und'][0]['uri'])?>"/>
			</a>
		</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pt-card-text-div pt-secondary-font">
				<?php echo $variables['elements']['#entity']->field_image_card_body['und'][0]['value']; ?> 
			</div>
		</div><!-- End of row -->
