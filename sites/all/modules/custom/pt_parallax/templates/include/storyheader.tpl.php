<meta name="viewport" content="width=device-width">
<header id="navbar" role="banner" class="story-header <?php print $navbar_classes; ?>">
  <div id="parallax_center_header" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
  	<?php  
        $theme = $node->field_theme_type['und'][0]['value'];
        if(!empty($node->field_header_image['und'][0]['uri'])){
        $logo = file_create_url($node->field_header_image['und'][0]['uri']);
      }
        if(!empty($node->field_navigation_button['und'][0]['uri'])){
        $nav_button = file_create_url($node->field_navigation_button['und'][0]['uri']);
      }
      ?>
    <!-- /#secondary_menu -->
    
    <div class="navbarheaderleft col-lg-4 col-md-4 col-sm-4 col-xs-0">
      <div class="nav nav-justified circleNav page-scroll">
        <a href="#navbar" onclick="return false;"><div id="btn-1" class="parallax-nav btn-primary"></div></a>
        <a href="#slide2" onclick="return false;"><div id="btn-2" class="parallax-nav btn-primary"></div></a>
        <a href="#slide4" onclick="return false;"><div id="btn-3" class="parallax-nav btn-primary"></div></a>
        <a href="#slide6" onclick="return false;"><div id="btn-4" class="parallax-nav btn-primary"></div></a>
      </div>
    </div>       
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 centerlogo">
      <?php print render($page['header_middle']); ?>
      
        <?php if ($logo): ?>
          <a class="logo navbar-btn " href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
    </div> 
    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-9 rightside">
      <div class="img-responsive">
        <?php

          $menu = menu_navigation_links('menu-icon-menu');
          dsm($menu);
          print theme('links__menu-icon-menu', array('links' => $menu));
        ?>
      </div>
    </div>
   <!--  <div class="progress" id="bar">
      <div class="progress-bar bar" id="progressBar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div> -->     
 
  </div>
  
</header>