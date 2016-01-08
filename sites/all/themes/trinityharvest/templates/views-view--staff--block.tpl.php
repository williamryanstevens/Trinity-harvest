<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>


       <?php
 

          
            foreach($view->result as $staff){
              $firstname = $staff->field_field_first_name[0]['raw']['value'];
              $lastname = $staff->field_field_last_name[0]['raw']['value'];
              $Position = $staff->field_field_position[0]['raw']['value'];
              $Email = $staff->field_field_em[0]['raw']['email'];
              $phonecontact = $staff->field_field_phone_contact[0]['raw']['value'];
              $Image = file_create_url($staff->field_field_image[0]['raw']['uri']);
         
        ?>
  <div id="thc-staff-page" class="thc-service-card-org col-lg-4 col-md-6 col-sm-6 col-xs-12" >
    <div class="thc-staff-wrapper">
      <div class="thc-staff-image">  
        <img class="img-rounded" src="<?php echo $Image; ?>"><br/>
      </div>  
      <div class="thc-staff-name text-center">
        <p><?php echo $firstname . " " . $lastname;?></p>
      </div> 
      <div class="thc-staff-position text-center"> 
        <p><?php echo $Position;?></p>
      </div> 
      <div class="thc-staff-Email text-center">  
        <p><?php echo $Email;?></p>
      </div>
      <div class="thc-staff-phone text-center">
        <p><?php echo $phonecontact;?></p>
      </div>  
    </div>
  </div>

        <?php } ?>

        <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>
