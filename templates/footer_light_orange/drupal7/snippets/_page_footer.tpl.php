<footer id="footer" class="footer-section section footer-light-orange">
  <?php if ($page['footer_message']): ?>
  <div class="footer-message vertical-menu xs-text-center">
    <div class="container">
      <div class = "row">
        <?php print render($page['footer_message']); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_menu_1'] || $page['footer_menu_2'] || 
      $page['footer_menu_3'] || $page['footer_social']): ?>
  <div class="footer-blocks vertical-menu">
    <div class="container">
      <div class="row">
        <?php if ($page['footer_menu_1']): ?>
        <div class="col-sm-3 footer-menu footer-menu-1">
          <?php print render($page['footer_menu_1']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_menu_2']): ?>
        <div class="col-sm-3 footer-menu footer-menu-2">
          <?php print render($page['footer_menu_2']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_menu_3']): ?>        
        <div class="col-sm-3 footer-menu footer-menu-3">
          <?php print render($page['footer_menu_3']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_social']): ?>        
        <div class="col-sm-3 footer-menu footer-social xs-text-center">
          <?php print render($page['footer_social']); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright']): ?>
  <div class="footer-copyright text-center horizontal-menu">
    <div class="container">
      <div class = "row">
        <?php print render($page['footer_copyright']); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
