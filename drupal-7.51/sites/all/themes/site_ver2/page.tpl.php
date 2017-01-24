<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="flickerplate-no-touch">
<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="../sites/default/files/logo.png" alt="Главная">
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

<?php /*if ($page['header']): ?>
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
<?php endif; ?>

<?php /*if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

<?php if ($page['header']): ?>
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
<?php endif; */?>

<?php if ($page['content']): ?>
    <div class="child-info">
        <?php print render($page['content']); ?>
    </div>
<?php endif; ?>

<?php /*if ($page['sidebar_second']): ?>
    <div class="menu">
        <?php print render($page['sidebar_second']); ?>
    </div>
<?php endif; ?>

<?php if ($page['sidebar_first']): ?>
    <div class="baner">
        <?php print render($page['sidebar_first']); ?>
    </div>
<?php endif; */?>



<div class="row">

    <div class="map-block">
        <img src="logo2.png" id="logo2">
        <img src="logo3.jpg">
    </div>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=h2PHpnPS0zR0ZPwrEqNS-6IcPFB_Nz7n&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

<?php if ($page['footer']): ?>
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
<?php endif; ?>

</div>

 <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  
  <script type="text/javascript">
    ymaps.ready(init);
    var myMap, myPlacemark;

    function init(){     
        myMap = new ymaps.Map("ymap", {
            center: [56.985158, 40.984067], 
            zoom: 17,
            controls: ['mediumMapDefaultSet']
        });

        myPlacemark = new ymaps.Placemark([56.985158, 40.984067], {}, {
            iconLayout: 'default#image',
            iconImageHref: '/sites/all/themes/synamy/images/icon-map-label.png',
            iconImageSize: [43, 57],
            iconImageOffset: [-21, -57],
        });
         
        myMap.geoObjects.add(myPlacemark);
                myMap.behaviors.disable('scrollZoom');
    }
    
  </script>
<div id="ymap" style="width:100%;height:100%"></div>


<script>
    new flickerplate('.flicker-example');
</script>
</div>
