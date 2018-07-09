<aside data-type="block" data-module="<?php print $block->module ?>" id="<?php print $block_html_id; ?>" class="<?php print $block_html_id; ?> <?php print $classes ?> <?php print $block->region ?>" <?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
  <div class = "title container text-center"><h2 <?php print $title_attributes; ?>><?php print $block->subject ?></h2></div>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <div class = "container">
  <?php print $content ?>
  </div>
</aside>