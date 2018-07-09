<footer id = "footer" class = "footer-section text-center horizontal-menu section footer-yellow">
  <?php if ($page['footer_social']): ?>
  <div class = "container footer-message">
    <div class = "row">
      <?php print render($page['footer_message']); ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_social']): ?>
  <div class = "container footer-social">
    <div class = "row">
      <?php print render($page['footer_social']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if($theme_credits) : ?>
  <div class = "theme-credit text-center">
    <?php print $theme_credits; ?>
  </div>
  <?php endif; ?>

</footer>
