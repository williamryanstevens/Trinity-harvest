<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 * 
 */


?>
<?php


$current_segmentation=pt_misc_map_cookie();
$item_id=$node->field_user_segmentation['und'][$current_segmentation]['value'];
$entity=entity_load('field_collection_item', array($item_id));
?>
<?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/header.tpl.php'); ?>

<?php print $messages; ?>

<?php $setTopContent = $page ?>
<div class="main-container container">
  <div class="pt-attraction-card-image attraction-main-top-margin">
    <?php foreach ($page['content']['system_main']['nodes'] as $tid):?>
    <?php if(is_array($tid)): ?>
      <img src="<?php echo file_create_url($entity[$item_id]->field_collection_image['und'][0]['uri'])?>" class="img-responsive">
    <div class ="pt-lower-text-section attraction-lower-text-section">
      <div class="pt-attraction-card-title text-center">
        <div class="attraction-card-header">
          <h1>PACKAGES</h1>
        </div> 
      </div>
        <div class = "container">
          <div class="pt-attraction-card-paragraph-title">
            <div>
              <h2><?php print $tid['#node']->title; ?></h2>
            </div>   
          </div>
            <div class="pt-attraction-card-paragraph pt-attraction-card-text">
              <p class=""><?php print $entity[$item_id]->field_collection_text['und'][0]['value']; ?></p>
              </p>
            </div>
              <div class="pt-time-location pt-attraction-time">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 pt-no-padding">
                      <div class="col-lg-3 pt-no-padding">
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
                <div class="pt-attraction-card-bottom">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-3 pt-attraction-social-media">
                        <div class="row">
                          <?php if (!empty ($tid['field_social_media']['#items'])):?>
                            <?php  foreach($tid['field_social_media']['#items'] as $mediaLink ):?>
                              <?php
                              if(array_key_exists("class", $mediaLink['attributes'])) {
                              $iconLink = $mediaLink['attributes']['class']; 
                               }else{
                                $iconLink = "fa fa-share";
                                };?>
                              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 attraction-social-media-icons">
                                <a href="http://<?php echo $mediaLink['url']; ?>" class="btn azm-social azm-circle azm-long-shadow azm-size-32 azm-facebook" target="_blank">
                                <i class="<?php echo $iconLink ?>"></i>
                                </a>
                              </div>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                        <div class="col-lg-3"></div>
                          <div class="col-lg-3 pt-navigation-icons">
                            <div class="row">
                                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 attraction-navigation-icons">
                                  <i class="material-icons"data-toggle="modal" data-target="#myModal">share</i>
                                 </div> 
                            </div>
                          </div>
                            <div class="col-lg-3 pull-right pt-attraction-button">   
                          </div>
                    </div>
                  </div>    
                </div>
          </div>  
    </div>
</div> 
<?php endif; ?>
<?php endforeach; ?> 
<div class="main-container container ">
  <div class="attractions-image-video">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
<div class= "row attraction-image-gallery-row">
  <?php if(array_key_exists('und', $node->field_image_gallery)):?>
    <?php  foreach($node->field_image_gallery['und'] as $key => $value):?>
      <div class="attraction-subpage-image-gallery">
        <?php $bean = $node->field_image_gallery['und'][$key]['entity'];?>
        <?php $view = bean_view($bean, $view_mode = 'default', $langcode = NULL);?>
        <?php print render($view); ?>
      </div>
    </div>
    <?php endforeach; ?>
  <?php endif ?>
</div>
<div class ="row">
  <?php if(array_key_exists('und', $node->field_attraction_video_gallery)):?>
    <?php  foreach($node->field_attraction_video_gallery['und'] as $key => $value):?>
      <div class ="imageGalleryStyle">
        <?php $bean = $node->field_attraction_video_gallery['und'][$key]['entity'];?>
        <?php $view = bean_view($bean, $view_mode = 'default', $langcode = NULL);?>
        <?php print render($view); ?>
      </div> 
    <?php endforeach; ?>
  <?php endif ?>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 adventureOfficeInput">
      <?php if(array_key_exists('nodes',$page['content']['system_main'])):?>   
        <?php foreach($page['content']['system_main']['nodes'] as $key => $value):?>
           <?php if(is_numeric($key)):?>
              <?php $nodeId = $key;?>   
              <!--Insert Adventure Office Iframe -->
              <iframe id='iframeAdventureOffice' width = "100%" height = "500" 
              scrolling = "auto" frameborder = "0" 
              src = <?php  echo $page['content']['system_main']['nodes'][$nodeId]['field_adventure_office_parameter'][0]['#markup'];?>>
              </iframe>
           <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div>
          <?php
            $block = module_invoke('sharethis','block_view','sharethis_block');
            print render($block['content']);
          ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/footer.tpl.php'); ?>

