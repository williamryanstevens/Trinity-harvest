<footer class="footer ex-container-full ex-container-nopadding">
  <footer class="center-footer">
    <?php  if(!empty($page['footer-left'])): ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-left">
        <?php print render($page['footer-left']); ?>
      </div>
    <?php endif ?>
    <?php  if(!empty($page['footer-middle'])): ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-middle">
        <?php print render($page['footer-middle']); ?>
      </div>
    <?php endif ?>
    <?php  if(!empty($page['footer-right'])): ?>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer-right pull-right">
        <?php print render($page['footer-right']); ?>
        <a href="#top">
          <div class="pull-right glyphicon glyphicon-upload"></div>
        </a>
      </div>
    <?php endif ?>
  </footer>
  <div class="footer-copy-right col-lg-12 col-md-12">
    <p class="text-center">Copyright &copy <?php echo date("Y"); ?> All Rights Reserved.</p>
  </div>
</footer>