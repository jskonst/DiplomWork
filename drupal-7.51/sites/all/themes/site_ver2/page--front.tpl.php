<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="sites/default/files/logo.png" alt="Главная">
   </a>
</div>
<div class="logo">

<div class="flicker-example">
    <div class="lang">
        <div class="active"><a href="#">RU</a></div>
        <div><a href="#">EN</a></div>
    </div>
<!--
            <ul>
                
                <li data-background="carousel/img/flicker-1.jpg"></li>
                <li data-background="carousel/img/flicker-2.jpg"></li>
                <li data-background="carousel/img/flicker-3.jpg"></li>
                <li data-background="carousel/img/flicker-2.jpg"></li>
                            
            </ul>
-->
</div>


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


<?php if ($page['main_picture']): ?>
    <div class="baner">
        <?php print render($page['main_picture']); ?>
    </div>
<?php endif; ?>
<?php if ($page['main_tools']): ?>
    <div class="baner">
        <?php print render($page['main_tools']); ?>
    </div>
<?php endif; ?>
<?php if ($page['main_works']): ?>
    <div class="baner">
        <?php print render($page['main_works']); ?>
    </div>
<?php endif; ?>

    <div class="map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=h2PHpnPS0zR0ZPwrEqNS-6IcPFB_Nz7n&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    </div>
<?php if ($page['footer']): ?>
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
<?php endif; ?>
