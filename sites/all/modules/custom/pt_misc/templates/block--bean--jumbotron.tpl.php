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
	<div class="jumbotron pt-jumbotron  pt-attraction-clear-menu">
	  <div class="row">
	  	<div class="col-md-12 img-container pt-container-nopadding">
	  		<?php if(array_key_exists('und', $variables['elements']['#entity']->field_jumbotron_image)){?>
	    		<img src="<?php echo file_create_url($variables['elements']['#entity']->field_jumbotron_image['und'][0]['uri'])?>" class="img-responsive img-back" />
	    	<?php } ?>
	    	<?php if(array_key_exists('und', $variables['elements']['#entity']->field_jumbotron_text)){ ?>
		    	<div class="pt-jumbotron-image-text">
		     		<h1><?php echo $variables['elements']['#entity']->field_jumbotron_text['und'][0]['value']; ?></h1>
		     	</div>
	     	<?php } ?>
	    </div>
	  </div>
	</div>
</div>								

									
