<?php
/**
 * @file
 * Override the footer message block regions.
 */
?>
<?php if($block->subject) : ?>
  <h2 class = "title">
    <?php print $block->subject; ?>
  </h2>
<?php endif;?>
<div class = "block-content">
    <?php print $content; ?>
</div>
