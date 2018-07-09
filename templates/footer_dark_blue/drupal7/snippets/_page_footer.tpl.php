<footer id = "footer" class = "footer-section section footer-dark-blue">
  <?php if ($page['footer_signup']): ?>
  <div class = "footer-subscribe">
    <div class = "container">
      <div class = "row">
        <?php print render($page['footer_signup']); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_message'] || $page['footer_menu_1'] || 
    $page['footer_menu_2'] || $page['footer_menu_3'] || 
    $page['footer_menu'] || $page['footer_copyright'] || 
    $page['footer_social']): ?>
  <div class = "footer-message-menus-copyright-social xs-text-center">
    <?php if ($page['footer_message'] || $page['footer_menu_1'] || 
      $page['footer_menu_2'] || $page['footer_menu_3']): ?>
    <div class = "container footer-blocks">
      <div class = "row vertical-menu">
        <?php if ($page['footer_message']): ?>
        <div class = "col-sm-4 col-xs-12 footer-message">
          <?php print render($page['footer_message']); ?>
        </div>
        <?php endif; ?>
        <div class = "col-sm-8 col-xs-12 footer-menus ">
          <div class = "row">
            <?php if ($page['footer_menu_1']): ?>
            <div class = "col-sm-4 col-xs-12 footer-menu footer-menu-1">
              <?php print render($page['footer_menu_1']); ?>
            </div>
            <?php endif; ?>
            <?php if ($page['footer_menu_2']): ?>
            <div class = "col-sm-4 col-xs-12 footer-menu footer-menu-2">
              <?php print render($page['footer_menu_2']); ?>
            </div>
            <?php endif; ?>
            <?php if ($page['footer_menu_3']): ?>
            <div class = "col-sm-4 col-xs-12 footer-menu footer-menu-3">
              <?php print render($page['footer_menu_3']); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if ($page['footer_menu'] || $page['footer_copyright'] || 
      $page['footer_social']): ?>
    <div class = "footer-copyright-menu-social container horizontal-menu">
      <div class = "row">
        <?php if ($page['footer_menu']): ?>
        <div class = "col-sm-4 col-xs-12 footer-menu text-left">
          <?php print render($page['footer_menu']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_copyright']): ?>
        <div class = "col-sm-4 col-xs-12 footer-copyright text-center">
          <?php print render($page['footer_copyright']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_social']): ?>        
        <div class = "col-sm-4 col-xs-12 footer-social text-right">
          <?php print render($page['footer_social']); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
