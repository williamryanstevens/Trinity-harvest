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
 */
?>
<?php
  if(drupal_is_front_page()) {
    unset($page['content']['system_main']['default_message']);
    $title = "";
  }
?>

<?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/header.tpl.php'); ?>

<div class="main-container container">

<?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/banner.tpl.php'); ?>

  <div class="row">
    
    <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/sidebar_first.tpl.php'); ?>

    <section<?php print $content_column_class; ?>>

      <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/highlighted.tpl.php'); ?>

      <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/breadcrumb.tpl.php'); ?>
      
      <a id="main-content"></a>

      <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/title.tpl.php'); ?>
      
      <?php print $messages; ?>

      <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/tabs.tpl.php'); ?>
      
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
<?php
$current_segmentation=pt_misc_map_cookie();
$item_id=$node->field_user_segmentation['und'][$current_segmentation]['value'];
$entity=entity_load('field_collection_item', array($item_id));
$location_lat = "37.4691174";
$location_long = "-82.5263025";
$hide_this_button = "";
?>
<?php $setTopContent = $page ?>
<div class="container pt-event-subpage-shift-card-below">
  <div class="pt-attraction-card-image">
    <?php foreach ($page['content']['system_main']['nodes'] as $tid):?>
    <?php if(is_array($tid)): ?>
    <div class="pt-event-date-stamp-wraper"> <!-- this is the container for the image and the date stamp. -->
      <div class="pt-event_sub_date_stamp col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php 
            //this is going to setup the variable for the date of the event so that it can be shown.
          $date_of_event = date_create($tid['field_event_date']['#object']->field_event_date['und'][0]['value']);
          $time_of_event = date_format($date_of_event, 'g:i A');
          $date_of_sub_event = date_format($date_of_event, 'm-d-Y');
        ?>
        <h1><?php print $date_of_sub_event ?></h1>
      </div>
        <img src="<?php echo file_create_url($entity[$item_id]->field_collection_image['und'][0]['uri'])?>" class="img-responsive">
    </div>
    <div class ="pt-lower-text-section attraction-lower-text-section">
      <div class="pt-attraction-card-title text-center">
        <div class="attraction-card-header">
          <h1><?php print $tid['#node']->title; ?></h1>
        </div> 
      </div>
      <div class = "container">
        <div class="pt-attraction-card-paragraph-title">
          <div>
            <h2><?php print $tid['#node']->title; ?></h2>
          </div>   
        </div>
        <div class="pt-attraction-card-paragraph pt-attraction-card-text"> <!-- this is where the text for the event is going to be placed. -->
          <?php print $tid['field_event_description']['#object']->field_event_description['und'][0]['value'];?>
        </div>
        <div class="pt-time-location pt-attraction-time">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3">
                <p>Time:<?php  print $time_of_event; ?></p>
              </div>
              <div class="col-lg-3 pt-no-padding">
                
                <?php if (!empty($tid['field_event_location']['#items'])) {
                ?>
                Location:<?php print $tid['field_event_location']['#title']; ?><br/>
                <?php print $tid['field_event_location']['#items'][0]['name'];?><br> <?php print $tid['field_event_location']['#items'][0]['street'];?><br>
                <?php print $tid['field_event_location']['#items'][0]['city'];?>, <?php print $tid['field_event_location']['#items'][0]['province'];?><br>
                <?php print $tid['field_event_location']['#items'][0]['postal_code'];?>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="pt-attraction-card-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-xs-3 pt-attraction-social-media">
              <div class="row">  
                <?php if (!empty ($tid['field_event_social_media']['#items'])){?>
                <?php  foreach($tid['field_event_social_media']['#items'] as $mediaLink ){?>
                <?php $iconLink = "fa fa-share" ?>
                          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 attraction-social-media-icons event-social-media-links">
                            <a href="<?php echo $mediaLink['url']; ?>" class="btn azm-social azm-circle azm-long-shadow azm-size-32 azm-facebook" target="_blank">
                              <i class="<?php echo $iconLink ?>"></i>
                            </a>
                          </div>
                    <?php } ?>
                  <?php } ?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm col-xs-3">
            </div>
            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-8 pt-navigation-icons pt-events-subpage-navbuttons-center-up">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-3 attraction-navigation-icons">
                  
                  <?php if(!empty($tid['field_event_location']['#items'][0]['latitude'])){
                    $location_lat = $tid['field_event_location']['#items'][0]['latitude'];
                  }
                  if(!empty($tid['field_event_location']['#items'][0]['longitude'])){
                    $location_long = $tid['field_event_location']['#items'][0]['longitude'];
                  } ?>

                  <a href="https://www.google.com/maps?q=<?php echo $location_lat; ?>,<?php echo $location_long; ?>&z=15z" class="attraction-glyph-size btn azm-social azm-circle azm-long-shadow azm-size-64 azm-facebook" target="_blank">
                    <i class="material-icons">explore</i>
                  </a>
                </div>
                <?php if(array_key_exists('und', $node->field_download_field_label)){ ?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-3 attraction-navigation-icons">
                  <a href="/calendar/download/<?php echo $node->nid; ?>" target="_blank" type="button" class="btn btn-secondary attraction-glyph-size btn azm-social azm-circle azm-long-shadow azm-size-64 azm-facebook">
                    <i class="material-icons">file_download</i>
                  </a>
                </div> 
                <?php } ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 attraction-navigation-icons pt-events-subpage-icon-shift">
                    <i class="material-icons" data-toggle="modal" data-target="#eventsShareModal">share</i>
                </div> 
              </div>
            </div>
            <?php 
            if(array_key_exists("field_event_call_to_action_link",$tid)){
                //this is going to check to see if the url field is empty.
              if(!empty($tid->_field_data['nid']['entity']->field_event_call_to_action_link['und'][0]['url'])){
                $call_to_action_link = $tid['field_event_call_to_action_link']['#items'][0]['url'];
              }else{
                $call_to_action_link = "http://www.google.com";
              }
                //this is going to check to see if the title field is empty.
              if(!empty($tid['field_event_call_to_action_link']['#items'][0]['title'])){
                $call_to_action_title = $tid['field_event_call_to_action_link']['#items'][0]['title'];
                $call_to_action_title = substr($call_to_action_title, 0, 15);
              }else{
                $call_to_action_title = "Buy Tickets";
              }
            }else{
              $hide_this_button = "display_none";
              $call_to_action_title = "Buy Tickets";
              $call_to_action_link = "http://www.google.com";
            }
            ?>
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-10 pull-right pt-attraction-button">   
              <a href="<?php echo $call_to_action_link; ?>">
                <button type="button" class="btn btn-primary btn-lg <?php echo $hide_this_button; ?>"><?php echo $call_to_action_title; ?></button>
              </a>
            </div>
          </div>
        </div>    
      </div>
    </div>  
  </div>  
    <?php endif; ?>
    <?php endforeach; ?> 
  <!-- this is the modal for the share this stuff. -->
<div id="eventsShareModal" class="modal fade" role="dialog">
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
  <!-- this is the end of the modal for the share this -->
  <div class="main-container container">
    <div class="attractions-image-video">
      <div class= "row attraction-image-gallery-row">
        <?php if(array_key_exists('und', $node->field_image_gallery)):?>
        <?php  foreach($node->field_image_gallery['und'] as $key => $value):?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="attraction-subpage-image-gallery pt-event-subpage-image-gallery-fix">
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
      <div>
        <div class="pt-events-subpage-lower-content">
          <?php print render($page['post_content']); ?>
        </div>
      </div>
    </div>
  </div>  
</div>
    </section>
    <?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/sidebar_second.tpl.php'); ?>
  </div>
</div>
<?php include_once (drupal_get_path('theme',$GLOBALS['theme']).'/templates/include/footer.tpl.php'); ?>











