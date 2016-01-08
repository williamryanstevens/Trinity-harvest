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
<div class="container-fluid pt-container-nopadding">
	<div class="jumbotron pt-jumbotron  pt-attraction-clear-menu-mainstreet">
	  <div class="row">
	  	<div class="col-md-12 img-container pt-container-nopadding">
				<img src="<?php echo file_create_url($variables['elements']['#entity']->field_jumbotron_w_button_image['und'][0]['uri'])?>" class="img-responsive img-back" />
				<div class="pt-jumbotron-image-text">
					<h1><?php echo $variables['elements']['#entity']->label ;?></h1>
					<p><a class="btn btn-primary pt-btn-xlg" href="<?php echo $variables['elements']['#entity']->field_call_to_action['und'][0]['url'] ;?>" role="button"><?php echo $variables['elements']['#entity']->field_call_to_action['und'][0]['title']; ?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>


























