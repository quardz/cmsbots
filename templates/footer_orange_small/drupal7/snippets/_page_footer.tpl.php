<footer id = "footer" class = "footer-section section footer-orange-small text-center">
  <?php if ($page['footer_signup']): ?>
  <div class = "footer-subscribe vertical-menu">
    <div class = "container">
      <div class = "row">
        <?php print render($page['footer_signup']); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_menu'] || $page['footer_copyright']): ?>
  <div class = "footer-copyright-menu horizontal-menu">
    <div class = "container">
      <div class = "row">
        <?php if ($page['footer_copyright']): ?>
        <div class = "col-sm-6 footer-copyright text-left xs-text-center">
          <?php print render($page['footer_copyright']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_menu']): ?>
        <div class = "footer-menu col-sm-6 text-right xs-text-center">
          <?php print render($page['footer_menu']); ?>
        </div>
        <?php endif; ?>
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
