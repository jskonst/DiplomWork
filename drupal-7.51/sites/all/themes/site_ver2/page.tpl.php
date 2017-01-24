<h1>Page content</h1>
<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

<?php if ($page['header']): ?>
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
<?php endif; ?>

<?php if ($page['content']): ?>
    <div class="content">
        <?php print render($page['content']); ?>
    </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
    <div class="menu">
        <?php print render($page['sidebar_second']); ?>
    </div>
<?php endif; ?>

<?php if ($page['sidebar_first']): ?>
    <div class="baner">
        <?php print render($page['sidebar_first']); ?>
    </div>
    <div class="map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=h2PHpnPS0zR0ZPwrEqNS-6IcPFB_Nz7n&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    </div>
<?php endif; ?>

<?php if ($page['footer']): ?>
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
<?php endif; ?>
