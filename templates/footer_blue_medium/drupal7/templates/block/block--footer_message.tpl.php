<div class = "row">
  <?php if($block->subject): ?>
  <div class = "block-title footer-message-title text-center">
    <h2 class = "title"><?php print $block->subject; ?></h2>
  </div>
  <?php endif; ?>
  <div class = "block-content footer-message-content text-center col-sm-8 col-sm-offset-2">
      <?php print $content; ?>
  </div>
</div>
