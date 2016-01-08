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
// dsm($node);
?>

<?php print $messages; ?>
 <!-- // if module exists, call method to get slide html -->
 <?php
 if (module_exists('pt_parallax')){ ?>

<?php include_once (drupal_get_path('module',"pt_parallax").'/templates/include/storyheader.tpl.php'); 
?>

 
 <?php foreach ($node as $key => $value) {
  if (!empty($node->field_background_image_main['und'][0]['filename'])){
    $parallax_intro = file_create_url($node->field_background_image_main['und'][0]['uri']);
  if(!empty($node->field_image_banner_color['und'][0]['value'])){
    $banner_color = $node->field_image_banner_color['und'][0]['value'];
  }
  $parallax_subtitle = $node->field_subtitle['und'][0]['value'];
  $parallax_title = $node->title;
  

} 
 }?>
 <div class="content"> 
    <div class="parallax-mirror " style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 3124px; left: 0px; height: 600px; width: 1280px;">
        <img class="parallax-slider" src=<?php echo $parallax_intro; ?>" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -2834.2px; left: 0px; height: 1302px; width: 1280px; max-width: none;">
    </div>
 <section >
      <div class="main-container container-fluid" >
        <div class="row"> 
          <section>
            <!-- Place the Storypage content here  -->
            <div class="parallax-container divider" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="<?php echo $parallax_intro ; ?>" data-natural-width="1400" data-natural-height="900" style="height: 624px;">
              <div class="storypage">
                <div class="slider_title transbox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(<?php if(!empty($node->field_image_banner_color['und'][0]['value'])){echo $banner_color;} ?>,.7)">             
                       <h2 style="border-bottom:solid white 2px;"><?php echo $parallax_subtitle; ?></h2>
                       <h1><?php echo $parallax_title;?></h1>
                </div>
              </div> <!--.story-->
           </div> <!--#intro-->
      
            <?php 
              $output = "";
              // loop thru all slides in this $node
              foreach ($node->field_story_slide['und'] as $slide){
                $output .= pt_parallax_get_slide($slide['entity']->field_type['und'][0]['value'],$slide);
              }?>
            <?php
            echo $output;
            ?>

          </section>
        </div>
    </div>
</div>

</section>

  <?php include_once (drupal_get_path('module',"pt_parallax").'/templates/include/storyfooter.tpl.php'); ?>


<?php } ?>

