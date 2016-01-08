<?php if($title == "Events"){ ?>

<?php print render($title_prefix); ?>
  <?php if (!empty($title)): ?>
    <h1 
    	class="page-header default-Event-Title"><?php print $title; ?>
    </h1>
  <?php endif; ?>
<?php print render($title_suffix); ?>


  <?php }else{ ?>
  <?php print render($title_prefix); ?>
  <?php if (!empty($title)): ?>
    <h1 
    	class="page-header"><?php print $title; ?>
    </h1>
  <?php endif; ?>
	<?php } ?>
<?php print render($title_suffix); ?>