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
<div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
<div class="pt-service-card col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pt-container-nopadding" style="border-top: 2px solid #9BD6EC  ;">
<img src="<?php echo file_create_url($variables['elements']['#entity']->field_eatdrink_image1['und'][0]['uri']);?>" class="img-responsive" />
<a href="services?field_service_type_tags_tid%5B%5D=22">
<button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Eat+Drink</button>
</a>
</div>
</div>
<div class="pt-service-card col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pt-container-nopadding" style="border-top: 2px solid #9BD6EC  ;">
<img src="<?php echo file_create_url($variables['elements']['#entity']->field_shop_image1['und'][0]['uri']);?>" class="img-responsive" />
<a href="services">
<button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Shop</button>
</a>
</div>
</div>
<div class="pt-service-card col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pt-container-nopadding" style="border-top: 2px solid #9BD6EC  ;">
<img src="<?php echo file_create_url($variables['elements']['#entity']->field_entertain_image1['und'][0]['uri']);?>" class="img-responsive" />
<a href="services?field_service_type_tags_tid%5B%5D=32">
<button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Entertain</button>
</a>
</div>
</div>
<div class="pt-service-card col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 pt-container-nopadding" style="border-top: 2px solid #9BD6EC  ;">
<img src="<?php echo file_create_url($variables['elements']['#entity']->field_services_image1['und'][0]['uri']);?>" class="img-responsive" />
<a href="services?field_service_type_tags_tid%5B%5D=23">
<button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12">Services</button>
</a>
</div>
</div>
</div>