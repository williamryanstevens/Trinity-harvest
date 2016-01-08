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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php foreach ($variables['elements'] as $tid): ?>
  <?php if(is_array($tid)): ?>
    <?php if(array_key_exists("#title",$tid) && $tid['#title'] == 'Facebook URL' && !is_array($tid['#title'])): ?>
      <div class="fb-page" data-href="<?php echo $tid['#object']->field_sm_bean_facebook_url['und'][0]['value']; ?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
      <div class="fb-xfbml-parse-ignore">
      <blockquote cite="<?php echo $tid['#object']->field_sm_bean_facebook_url['und'][0]['value']; ?>">
      <a href="<?php echo $tid['#object']->field_sm_bean_facebook_url['und'][0]['value']; ?>"><?php echo $tid['#title']; ?></a>
      </blockquote>
      </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
<?php endforeach; ?>  












