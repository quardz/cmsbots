<footer id = "footer" class = "footer-section section footer-blue-medium">
  <?php if ($page['footer_message']): ?>  
  <div class = "footer-message xs-text-center vertical-menu">
    <div class = "container">
        <?php print render($page['footer_message']); ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright'] || $page['footer_menu']): ?>
  <div class = "footer-copyright-menu text-center horizontal-menu">
    <div class = "container">
      <div class = "row">
        <?php if ($page['footer_copyright']): ?>
        <div class = "col-sm-6 footer-copyright text-left xs-text-center">
          <?php print render($page['footer_copyright']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_menu']): ?>
        <div class = "col-sm-6 footer-menu text-right xs-text-center">
          <?php print render($page['footer_menu']); ?>
        </div>
        <?php endif; ?>
      </diV>
    </div>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
