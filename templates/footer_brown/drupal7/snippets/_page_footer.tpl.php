<footer id = "footer" class = "footer-section section footer-brown">
  <?php if ($page['footer_signup']): ?>
  <div class = "footer-subscribe horizontal-menu xs-text-center">
    <div class = "container">
      <div class = "row">
        <?php print render($page['footer_signup']); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright'] || $page['footer_social']): ?>
  <div class = "footer-copyright-social vertical-menu ">
    <div class = "container">
      <div class = "row">
        <?php if ($page['footer_copyright']): ?>
        <div class = "col-sm-8 footer-copyright text-left xs-text-center">
          <?php print render($page['footer_copyright']); ?>
        </div>
        <?php endif; ?>
        <?php if ($page['footer_social']): ?>
        <div class = "footer-social col-sm-4 text-right xs-text-center">
          <?php print render($page['footer_social']); ?>
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
