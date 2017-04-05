<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Стройэксперт, Стройэксперт Вологда, stroyexpert.pro");
$APPLICATION->SetPageProperty("title", "О компании");
$APPLICATION->SetPageProperty("keywords", "stroyexpert.pro Вологда,  строй эксперт");
$APPLICATION->SetPageProperty("description", "Коллектив компании stroyexpert.pro– специалисты с многолетним опытом работы в крупных проектных, строительных и девелоперских компаниях федерального уровня.");
$APPLICATION->SetTitle("О компании");
?><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="width:100%;background-color:#fff;">
	<div class="wrapper1">
		<div class="otstup otstup_company">
 <img src="/img/map.png">
			<!-- Гугл карта --> <!--Временно отключаем карту!!!!!!!!!!!!!!! (попросила Настя)

<script>
$(document).ready(function() {

    var myLatLng = new google.maps.LatLng(59.221332, 70.88736);
    MYMAP.init('#map', myLatLng, 4);


        MYMAP.placeMarkers('markers.xml');

});

var MYMAP = {
    map: null,
    bounds: null
}

var MY_MAPTYPE_ID = 'mystyle';

MYMAP.init = function(selector, latLng, zoom) {
    var myOptions = {
        zoom:zoom,
        center: latLng,
      	mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                },
        mapTypeId: MY_MAPTYPE_ID,
		panControl: false,
		zoomControl: false,
		scaleControl: false,
		disableDefaultUI: true
    }
    this.map = new google.maps.Map($(selector)[0], myOptions);
    //this.bounds = new google.maps.LatLngBounds();

	var stylez =  [
                { "featureType": "landscape", "stylers": [
                    { "visibility": "on" },
                    { "hue": "#0800ff" },
                    { "saturation": -100 },
                    { "gamma": 1.54 },
                    { "lightness": -44 } ] },

                { "featureType": "water", "stylers": [
                    { "visibility": "on" },
                    { "hue": "#0011ff" },
                    { "saturation": -100 } ] },

                { "featureType": "poi.park", "stylers": [
                    { "visibility": "on" },
                    { "hue": "#2200ff" },
                    { "saturation": -100 },
                    { "lightness": -50 } ] },

                { "featureType": "administrative.country", "elementType": "geometry", "stylers": [
                    { "visibility": "on" },
                    { "saturation": -100 },
                    { "lightness": -28 } ] }
            ];




	var styledMapOptions = {name: "Мой стиль"};
	this.jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
	this.map.mapTypes.set(MY_MAPTYPE_ID, this.jayzMapType);

}

MYMAP.placeMarkers = function(filename) {
    $.get(filename, function(xml){
        $(xml).find("marker").each(function(){
            var name = $(this).find('name').text();
            var address = $(this).find('address').text();

            // create a new LatLng point for the marker
            var lat = $(this).find('lat').text();
            var lng = $(this).find('lng').text();
			var txt = $(this).find('text').text();
			var src = $(this).find('src').text();
			var active = $(this).find('active').text();
			var color = $(this).find('color').text();
            var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));

            // extend the bounds to include the new point
            //MYMAP.bounds.extend(point);
if(color=='black' && active=='Y') {
			 var image = 'kompl.png';
            var marker = new google.maps.Marker({
                position: point,
                map: MYMAP.map,
				icon: image
            });
			var host=document.location.hostname;
            var infoWindow = new google.maps.InfoWindow();
            var html='<div class="q1"><img src="http://'+host+src+'"><br /><strong>'+name+'</strong><br />'+address+'<br />'+txt+'</div>';


            google.maps.event.addListener(marker, 'mouseover', function() {
                infoWindow.setContent(html);
                infoWindow.open(MYMAP.map, marker);
            });

			google.maps.event.addListener(marker, 'mouseout', function() {
				infoWindow.close();
			});
            //MYMAP.map.fitBounds(MYMAP.bounds);
		};




if(color=='grey' && active=='Y') {
			 var image = 'stroit.png';
            var marker = new google.maps.Marker({
                position: point,
                map: MYMAP.map,
				icon: image
            });
			var host=document.location.hostname;
            var infoWindow = new google.maps.InfoWindow();
            var html='<div class="q1"><img src="http://'+host+src+'">'
			'<strong>'+name+'</strong><br />'+address+'<br />'+txt+
				'</div>';
            google.maps.event.addListener(marker, 'mouseover', function() {
                infoWindow.setContent(html);
                infoWindow.open(MYMAP.map, marker);
            });

			google.maps.event.addListener(marker, 'mouseout', function() {
				infoWindow.close();
			});

            //MYMAP.map.fitBounds(MYMAP.bounds);
		};





if(color=='green' && active=='Y') {
			 var image = 'icon_k3.png';
            var marker = new google.maps.Marker({
                position: point,
                map: MYMAP.map,
				icon: image
            });
			var host=document.location.hostname;
            var infoWindow = new google.maps.InfoWindow();
            var html='<strong>'+name+'</strong><br />'+address+'<br />'+txt+
				'<img src="http://'+host+src+'">';
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(MYMAP.map, marker);
            });
            //MYMAP.map.fitBounds(MYMAP.bounds);
		};








        });
    });

}
		</script>








		<p class="region_p" style="">РЕГИОНЫ ПРИСУТСТВИЯ</p>
		<div  id="map" style="width:100%;height:600px;"></div>

--> <!-- /Гугл карта -->
			<div style="padding-top:0px;">
				<div class="otstup">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "number1",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/index_number1.php"
	)
);?>
				</div>
			</div>
			 <!--<div style="border-top:1px solid #393536;width:500%;margin-top:30px;margin-left: -200%;"></div>-->
			<div style="margin:17px 0px 20px 0px;">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "number7",
		"EDIT_TEMPLATE" => ""
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "number8",
		"EDIT_TEMPLATE" => ""
	)
);?>
			</div>
			 <!--Временно отключаем 2 блока!!!!!!!!!!!!!!!!!!!!!!!!! (попросила Настя)-->
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>