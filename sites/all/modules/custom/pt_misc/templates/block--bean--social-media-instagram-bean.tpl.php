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
<?php foreach ($variables as $tid): ?>
	<?php if(is_array($tid)): ?>
		<?php if(array_key_exists("#entity",$tid) && $tid['#entity']->type == 'social_media_instagram_bean' && !is_array($tid['#entity']->type)): ?>
			<!-- SnapWidget -->
			<script src="http://snapwidget.com/js/snapwidget.js"></script>
			<?php $snapwidget_u = $tid['#entity']->field_sm_bean_snapwidget_u['und'][0]['value'];
			$snapwidget_ve = $tid['#entity']->field_sm_bean_snapwidget_ve['und'][0]['value'];?>
			<iframe src="http://snapwidget.com/in/?u=<?php echo $snapwidget_u; ?>=&ve=<?php echo $snapwidget_ve; ?>" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>  



      







