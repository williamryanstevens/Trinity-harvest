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
<script>

jQuery('#contact-link').click(function(){ ScrollToBottom(); return false; });

function ScrollToBottom(){
     return window.scrollTo(0,document.body.scrollHeight);

};
</script>
                    <?php if ($variables['field_about_us_link'][0]['title'] == "CONTACT"){
                        $about_us_link = "";
                        $about_us_link_prefix = "<a id='contact-link' href='#'>";
                        $about_us_link_suffix = "</a>";
                    }else{
                        $about_us_link_prefix = "<a href='";
                        $about_us_link = $variables['elements']['#entity']->field_about_us_link['und'][0]['url'] . "'>";
                        $about_us_link_suffix = "</a>";
                    } 

                    ?>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="imgtxtlbl">
        <?php echo $about_us_link_prefix?><?php echo $about_us_link?>
            <div class="thumbnail">
                <img src="<?php echo file_create_url($variables['elements']['#entity']->field_about_us_image['und'][0]['uri']);?>" class="img-responsive" alt="Responsive image">
                <!-- http://lorempixel.com/850/280/people/9/ -->
                 <div class="caption text-center">
                    
                     <h2><?php echo $variables['elements']['#entity']->field_about_us_link['und'][0]['title'];?></h2>
                 </div>
            </div>
        <?php echo $about_us_link_suffix?>
    </div>
    <br>