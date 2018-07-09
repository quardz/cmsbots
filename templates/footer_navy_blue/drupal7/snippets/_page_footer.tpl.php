<footer id = "footer" class = "footer-section section footer-navy-blue text-center">
  <div class = "footer-logo">
    <?php if ($logo): ?>
    <a   href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
    <span class="logo"><?php echo theme('image', array(
      'path' => $logo,
      'alt' => $site_name,
      )); ?></span>
    </a>
    <?php endif; ?>
  </div>
  <?php if ($page['footer_menu']): ?>
  <div class = "footer-menu container horizontal-menu">
    <div class = "row menu-wrap">
      <?php print render($page['footer_menu']); ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($page['footer_copyright']): ?>
  <div class = "footer-copyright container text-center">
    <div class = "row menu-wrap">
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
