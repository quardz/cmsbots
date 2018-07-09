<footer id = "footer" class = "footer-section section footer-green-medium">
  <?php if ($page['footer_message'] || $page['footer_menu_1']
     || $page['footer_menu_2'] || $page['footer_menu_3']): ?>
  <div class = "container footer-blocks">
    <div class = "row">
      <?php if ($page['footer_message']): ?>
      <div class = "col-md-6 footer-message">
        <?php print render($page['footer_message']); ?>
      </div>
      <?php endif; ?>
      <div class = "col-md-6 footer-menus vertical-menu xs-text-center">
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
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright'] || $page['footer_menu']): ?>
  <div class = "footer-copyright-menu container horizontal-menu xs-text-center">
    <div class = "row xs-margin-0">
      <?php if ($page['footer_copyright']): ?>
      <div class = "col-sm-6 footer-copyright text-left">
        <?php print render($page['footer_copyright']); ?>
      </div>
      <?php endif; ?>
      <?php if ($page['footer_menu']): ?>
      <div class = "col-sm-6 footer-menu text-right xs-text-center">
        <?php print render($page['footer_menu']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
