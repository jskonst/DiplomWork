<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="logo">
   <a href="/" title="Главная" rel="home">
    <img src="sites/default/files/logo.png" alt="Главная">
   </a>
</div>
<div class="flicker-example">
    <div class="lang">
        <div class="active"><a href="/ru">RU</a></div>
        <div><a href="/en">EN</a></div>
    </div>
            <ul>
<?php 
$view = views_get_view_result('slideshow_top');
	foreach ($view as $result) {
				print '<li data-background="sites/default/files/styles/site_show/public/' . $result->_field_data['nid']['entity']->field_pic_top['und']['0']['filename'] . '">';
				print '<a href = "www.ya.ru">';
				print '</a> </li>';
'' ;		/*print $result->_field_data['nid']['entity']->field_link['und']['0']['url'] ;*/
}
?>
                <!--<li data-background="sites/default/files/styles/site_show/public/1qq7lGBRe2s.jpg?itok=OpZ-lON1"></li>
                <li data-background="sites/default/files/styles/site_show/public/WoJ3JCQMPhY_0.jpg?itok=zmjKgh8c"></li>-->
            </ul>
</div>

<div class="menu">

<?php if ($main_menu): ?>
<?php 
  print theme('links', array('links' => menu_navigation_links('main-menu'), 'attributes' => array('class'=> array('links', 'main-menu')) ));
?>
<?php endif; ?>
</div>

<?php if ($page['header']): ?>
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
<?php endif; ?>


<?php if ($page['main_picture']): ?>
    <div class="baner">
        <?php print render($page['main_picture']); ?>
    </div>
<?php endif; ?>

<?php if ($page['main_tools']): ?>
   <div class="own_block">
        <?php print render($page['main_tools']); ?>
   </div>
<?php endif;?>

<?php if ($page['main_works']): ?>
    <div class="baner">
        <?php print render($page['main_works']); ?>
    </div>
<?php endif; ?>

<div class="row">
    <div class="map-block">
        <img src="sites/default/files/logo2.png" id="logo2">
        <img src="sites/default/files/logo3.jpg">
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
