<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

<?php if ($page['header']): ?>
    <div class="menu">
        <?php print render($page['header']); ?>
    </div>
<?php endif; ?>

<?php if ($page['content']): ?>
    <div class="content">
        <?php print render($page['content']); ?>
    </div>
<?php endif; ?>

<?php if ($page['footer']): ?>
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
<?php endif; ?>
