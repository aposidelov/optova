<?php include('header.inc'); ?>

<div id='page' class='clear-block limiter page-content'>
  <?php if ($show_messages && $messages): ?>
    <div id='console' class='clear-block'><?php print $messages; ?></div>
  <?php endif; ?>
  <div id='content'>
    <?php if (!empty($content)): ?>
      <div class='content-wrapper clear-block'><?php print $content ?></div>
    <?php endif; ?>
    <?php print $content_region ?>
  </div>
  <div id='right' class='clear-block'>
      <!-- Sticky Sidebar Anchor -->
      <div id="scroller-anchor"></div>
      <!-- / Sticky Sidebar Anchor -->
      <?php print $right ?>
  </div>
</div>

<?php include('footer.inc'); ?>
