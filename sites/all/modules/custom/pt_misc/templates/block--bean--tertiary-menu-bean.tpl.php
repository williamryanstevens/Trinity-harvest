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

<div class="pt-tertiary-menu-wrapper pt-tertiary-menu-shadow">
	<div class="row">
		<div class="row">
			<div>
  				<div class="col-lg-4 col-md-4 col-sm-4"><div class="pt-tertiary-menu">
    <div>
        <a href=#>
            <div class="pt-120pxwidthimage">
                <img src="<?php echo file_create_url($variables['elements']['#entity']->field_image1_tertiary_menu['und'][0]['uri']);?>" class="img-responsive" alt="Responsive image" max-width="120px" width="100%">                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>     
                 <div class="pt-tertiary-caption">
                     <h2><?php echo $variables['elements']['#entity']->field_title1_tertiary_menu['und'][0]['value'];?></h2>
                     <p><?php echo $variables['elements']['#entity']->field_text1_tertiary_menu['und'][0]['value'];?></p>
                 </div>
        </a>
    </div>
    </div></div>
  				<div class="col-lg-4 col-md-4 col-sm-4"><div class="pt-tertiary-menu">
    <div>
        <a href=#>
            <div class="pt-120pxwidthimage">
                <img src="<?php echo file_create_url($variables['elements']['#entity']->field_image2_tertiary_menu['und'][0]['uri']);?>" class="img-responsive" alt="Responsive image" max-width="120px" width="100%">                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>    
                 <div class="pt-tertiary-caption">
                     <h2><?php echo $variables['elements']['#entity']->field_title2_tertiary_menu['und'][0]['value'];?></h2>
                     <p><?php echo $variables['elements']['#entity']->field_text2_tertiary_menu['und'][0]['value'];?></p>
                 </div>
        </a>
    </div>
    </div></div>
  				<div class="col-lg-4 col-md-4 col-sm-4"><div class="pt-tertiary-menu">
    <div>
        <a href=#>
            <div class="pt-120pxwidthimage">
                <img src="<?php echo file_create_url($variables['elements']['#entity']->field_image3_tertiary_menu['und'][0]['uri']);?>" class="img-responsive" alt="Responsive image" max-width="120px" width="100%">                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
                 <div class="pt-tertiary-caption">
                     <h2><?php echo $variables['elements']['#entity']->field_title3_tertiary_menu['und'][0]['value'];?></h2>
                     <p><?php echo $variables['elements']['#entity']->field_text3_tertiary_menu['und'][0]['value'];?></p>
                 </div>
        </a>
    </div>
    </div></div>
  			</div>
  		</div>			
	</div>
</div>