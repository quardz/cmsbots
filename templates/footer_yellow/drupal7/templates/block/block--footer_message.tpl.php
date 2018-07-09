<?php if ($block->subject): ?>
<div class = "block-title footer-message-title ">
<h2 class = "title"><?php print $block->subject; ?></h2>
</div>
<?php endif; ?>
<div class = "block-content footer-message-content">
<?php print $content; ?>
</div>
