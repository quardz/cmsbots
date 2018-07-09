<footer id = "footer" class = "footer-section section footer-dark-green">
  <?php if ($page['footer_menu_1'] || $page['footer_menu_2'] || 
      $page['footer_message'] || $page['footer_signup']): ?>
  <div class = "footer-menus-signup container">
    <div class = "vertical-menu">
      <?php if ($page['footer_menu_1'] || $page['footer_menu_2']): ?>
      <div class = "col-md-4 footer-menus xs-text-center">
        <div class = "row">
          <?php if ($page['footer_menu_1']): ?>
          <div class = "col-sm-6 footer-menu footer-menu-1">
            <?php print render($page['footer_menu_1']); ?>
          </div>
          <?php endif; ?>
          <?php if ($page['footer_menu_2']): ?>
          <div class = "col-sm-6 footer-menu footer-menu-2">
            <?php print render($page['footer_menu_2']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if ($page['footer_message']): ?>
      <div class = "col-md-4 footer-message xs-text-center">
        <?php print render($page['footer_message']); ?>
      </div>
      <?php endif; ?>
      
      <?php if ($page['footer_signup']): ?>
      <div class = "col-md-4 footer-signup">
        <?php print render($page['footer_signup']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
  
  <?php if ($page['footer_copyright']): ?>
  <div class = "container footer-copyright text-left horizontal-menu xs-text-center">
    <div class = "row">
      <?php print render($page['footer_copyright']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
