<footer id = "footer" class = "footer-section section footer-white xs-text-center">
  <?php if ($page['footer_message']): ?>
  <div class = "footer-message container text-center vertical-menu">
    <?php print render($page['footer_message']); ?>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_signup'] || $page['footer_menu_1'] 
         || $page['footer_menu_2'] || $page['footer_menu_3']): ?>
  <div class = "footer-menus-signup container">
    <div class = "vertical-menu">
      <div class = "col-md-6 footer-menus">
        <div class = "row">
          <?php if ($page['footer_menu_1']): ?>
          <div class = "col-sm-4 footer-menu footer-menu-1">
            <?php print render($page['footer_menu_1']); ?>
          </div>
          <?php endif; ?>
          <?php if ($page['footer_menu_2']): ?>
          <div class = "col-sm-4 footer-menu footer-menu-2">
            <?php print render($page['footer_menu_2']); ?>
          </div>
          <?php endif; ?>
          <?php if ($page['footer_menu_3']): ?>          
          <div class = "col-sm-4 footer-menu footer-menu-3">
            <?php print render($page['footer_menu_3']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($page['footer_signup']): ?>
      <div class = "col-md-6 footer-signup">
        <?php print render($page['footer_signup']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright']): ?>
  <div class = "container footer-copyright text-right horizontal-menu">
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
