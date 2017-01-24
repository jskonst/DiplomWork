<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="flickerplate-no-touch">
<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="sites/default/files/logo.png" alt="Главная">
   </a>
</div>
<div class="flicker-example">
    <div class="lang">
        <div class="active"><a href="#">RU</a></div>
        <div><a href="#">EN</a></div>
    </div>
            <ul>
                
                <li data-background="carousel/img/flicker-1.jpg"></li>
                <li data-background="carousel/img/flicker-2.jpg"></li>
                <li data-background="carousel/img/flicker-3.jpg"></li>
                <li data-background="carousel/img/flicker-2.jpg"></li>
                            
            </ul>
</div>

<?php if ($main_menu): ?>
   <?php print render(menu_tree('main-menu')); ?>
<?php endif; ?>

<?php if ($page['header']): ?>
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
<?php endif; ?>

<?php /*if ($page['content']): ?>
    <div class="content">
        <?php print render($page['content']); ?>
    </div>
<?php endif; */?>



<?php /*if ($page['main_picture']): ?>
    <div class="baner">
        <?php print render($page['main_picture']); ?>
    </div>
<?php endif; */?>

<?php /*if ($page['main_tools']): ?>
    <div class="block">
        <?php print render($page['main_tools']); ?>
    </div>
<?php endif; ?>

<?php if ($page['main_works']): ?>
    <div class="baner">
        <?php print render($page['main_works']); ?>
    </div>
<?php endif; ?>

<?php if ($page['footer']): ?>
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
<?php endif; */?>

<script>
    new flickerplate('.flicker-example');
</script>
</div>
