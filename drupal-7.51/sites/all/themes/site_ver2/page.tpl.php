<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="../sites/default/files/logo.png" alt="Главная">
   </a>
</div>
    <div class="lang child-lang">
        <div class="active"><a href="#">RU</a></div>
        <div><a href="#">EN</a></div>
     </div>
            <img src="../sites/default/files/child-img.png">

<div class="two-blocks">
	<?php if ($page['content']): ?>
	    <div class="child-info">
		<?php print render($page['content']); ?>
	    </div>
	<?php endif; ?>
<div class="child-menu-block">
         <div class="child-menu">
	<?php 
	  print theme('links', array('links' => menu_navigation_links('main-menu'), 'attributes' => array('class'=> array('links', 'main-menu')) ));
	?>

</div>
<?php if ($page['banners']): ?>
    <div class="child-banners">
        <?php print render($page['banners']); ?>
    </div>
<?php endif; ?>
</div>

</div>


<?php /*if ($page['sidebar_second']): ?>
    <div class="menu">
regions[banners] = Баннеры
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
        <img src="../sites/default/files/logo2.png" id="logo2">
        <img src="../sites/default/files/logo3.jpg">
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
