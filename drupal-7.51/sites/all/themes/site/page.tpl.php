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
