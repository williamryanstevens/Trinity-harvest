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
<?php
$call_action_grid="col-lg-4 col-md-4 col-sm-4 col-xs-12 pt-container-nopadding";
if(empty($variables['elements']['#entity']->field_text_block1['und'][0]['value'])&& !empty($variables['elements']['#entity']->field_text_block2['und'][0]['value'])){
$call_action_grid="col-lg-8 col-md-8 col-sm-8 col-xs-12 pt-container-nopadding";
}
if(!empty($variables['elements']['#entity']->field_text_block1['und'][0]['value'])&& empty($variables['elements']['#entity']->field_text_block2['und'][0]['value'])){
$call_action_grid="col-lg-8 col-md-8 col-sm-8 col-xs-12 pt-container-nopadding";
}
if(empty($variables['elements']['#entity']->field_text_block1['und'][0]['value']) && empty($variables['elements']['#entity']->field_text_block2['und'][0]['value'])){
$call_action_grid="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-container-nopadding";
}
?>	
<div class="container-fluid pt-container-nopadding col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<a href="<?php echo $variables['elements']['#entity']->field_call_to_action_link['und'][0]['url'];?>" target="_blank">
		<div class="<?php echo $call_action_grid; ?>">
			<div class="panel panel-default">
	  			<div class="panel-heading pt-quinary-bg pt-no-border secondary-font pt-light-text-26 pt-quaternary-font-color text-center"><?php echo $variables['elements']['#entity']->field_call_to_action_link['und'][0]['title']; ?></div>
	  			<div class="panel-body pt-primary-bg pt-thin-text-19 secondary-font pt-quaternary-font-color">
	    		<?php echo $variables['elements']['#entity']->field_call_to_action_body['und'][0]['value']; ?>
	  			</div>
			</div>
		</div>
	</a>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="panel-body pt-thin-text-19 secondary-font">
		<?php echo $variables['elements']['#entity']->field_text_block1['und'][0]['value']; ?>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="panel-body pt-thin-text-19 secondary-font">
		<?php echo $variables['elements']['#entity']->field_text_block2['und'][0]['value']; ?>
		</div>
	</div>
</div>