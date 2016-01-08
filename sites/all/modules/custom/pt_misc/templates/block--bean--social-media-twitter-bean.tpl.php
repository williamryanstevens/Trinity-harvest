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
foreach ($variables['elements'] as $tid){ 
	if(is_array($tid)){
		if(array_key_exists("#title",$tid) && $tid['#title'] == 'Twitter URL' && !is_array($tid['#title'])){
		  	?>
			<a class="twitter-timeline" href="<?php echo $tid['#object']->field_sm_bean_twitter_url['und'][0]['value']
; ?>" data-widget-id="<?php echo $tid['#object']->field_sm_bean_twitter_badge_id['und'][0]['value']; ?>">Tweets by <?php echo $tid['#object']->field_sm_bean_twitter_handle['und'][0]['value']; ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
		<?php } ?>
	<?php } ?>
<?php } ?>	









