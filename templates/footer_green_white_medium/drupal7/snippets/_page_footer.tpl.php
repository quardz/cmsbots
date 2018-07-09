<footer id = "footer" class = "footer-section section footer-green-white-medium text-center">
  <?php if ($page['footer_social']): ?>
  <div class = "footer-social vertical-menu">
    <div class = "container">
      <div class = "row">
        <div class = "col-md-12">
          <?php print render($page['footer_social']); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright'] || $page['footer_menu']): ?>
  <div class = "footer-copyright-menu horizontal-menu">
    <div class = "container">
      <div class = "row">
        <?php if ($page['footer_copyright']): ?>
        <div class = "col-sm-6 footer-copyright text-left">
          <?php print render($page['footer_copyright']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_menu']): ?>
        <div class = "footer-menu col-sm-6 text-right">
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
