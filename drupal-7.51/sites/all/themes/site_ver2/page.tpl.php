<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>
<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="../../sites/default/files/logo.png" alt="Главная">
   </a>
</div>
    <div class="lang child-lang">
        <div class="active"><a href="/ru">RU</a></div>
        <div><a href="/en">EN</a></div>
     </div>

	<?php if ($page['top_picture']): ?>
	    <div class="top_picture">
		<?php print render($page['top_picture']); ?>
	    </div>
	<?php endif; ?>

            <!--<img id="shema" src="../../sites/default/files/child-img.png">-->

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
<div class="child-banners">
	<div id="vk_groups"></div>
	<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 4,
	 wide: 1,
	 no_cover: 1,
	 width: "auto",
	 height: "400"},
	 133225986);
	window.addEventListener('load', VK_Widget_Init, false);
        window.addEventListener('resize', VK_Widget_Init, false);
	</script>
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
        <img src="../../sites/default/files/logo2.png" id="logo2">
        <img src="../../sites/default/files/logo3.jpg">
	<?php if ($page['map_contacts']): ?>
	    <div class="map_contacts">
		<?php print render($page["map_contacts"]); ?>
	    </div>
	<?php endif; ?>
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
