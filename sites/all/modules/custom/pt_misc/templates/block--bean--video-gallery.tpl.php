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
<?php foreach($variables['elements'] as $tid): ?>
	<?php if(is_array($tid)): ?>
		<?php if(array_key_exists('#title' , $tid) && $tid['#title'] == 'Thumbnail'): ?>
				<div col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-container-nopadding>
				<div class="videocard">
					<div class="row ">
						<div class="col-lg-12 text-center videoPlayer">
							<a class="youtube" href='<?php echo $tid['#object']->field_videos['und'][0]['value'];?>'><img src="<?php echo file_create_url($tid['#object']->field_thumbnail['und'][0]['uri']
							); ?>"class="youtube img-responsive"/></a>
						<div class="pt-inside-video-card text-center">
							   


							<a class="youtube" href='<?php echo $tid['#object']->field_videos['und'][0]['value'];?>'> <img class="img-responsive btn-link" src="/sites/all/modules/custom/pt_misc/images/Play.png"/>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>









