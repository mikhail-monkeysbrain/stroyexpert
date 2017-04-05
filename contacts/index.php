<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Адреса и телефоны компании stroyexpert.pro в городе Санкт Петербурге и Вологде");
$APPLICATION->SetPageProperty("title", "| Контакты");
$APPLICATION->SetTitle("Контакты");
?>


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script>

$(document).ready(function() {

    var myLatLng = new google.maps.LatLng(59.229556, 39.914313);
    MYMAP.init('#map', myLatLng, 15);


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
	//var host=document.location.hostname;
	//var infoWindow = new google.maps.InfoWindow();
	//var html='<div class="q1"><img src="http://'+host+src+'"><br /><strong>'+name+'</strong><br />'+address+'<br />'+txt+'</div>';


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











<div style="width:100%;background-color:#fff;">

<div id="map" style="width:100%;height:408px;margin-bottom:-128px;margin-top: 171px;"></div>

	<div class="wrapper_new" >
			<div class="otstup">

				<?/*$APPLICATION->IncludeComponent(
								"bitrix:main.include", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "karta_kontakti",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/karta_kontakti.php"
								),
								false
				);*/?>
			</div>

			<div class="otstup">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "number1",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_number1.php"
					),
					false
				);?>
			</div>


			<div class="line_zagran" style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>

			<div style="clear:both;"></div>
			<div class="profil_d_block_copy_contact">
				<div class="otstup">

					<div class="profd_new"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">КОНТАКТЫ КОМПАНИИ</p></div>
					<div class="block_kontakti_banner">
						<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "contact_images",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/contact_images.php"
										),
										false
						);?>
					</div>

					<div class="block_kontakti" style="">
							<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"AREA_FILE_SHOW" => "file",
															"AREA_FILE_SUFFIX" => "contact_contact",
															"EDIT_TEMPLATE" => "",
															"PATH" => "/contact_contact.php"
														),
														false
							);?>
					</div>

					<div style="clear:both;"></div>

				</div>
			</div>






			<div class="news_block_pd_contacts" style="">
				<div class="otstup">

					<div class="news_r_new"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">ФОРМА СВЯЗИ</p></div>
					<div class="block_kontakti_form" style="">
						<div id='product_add_result' style="padding: 10px;height:20px;"></div>
						<form style="padding: 0px 25px 0;" method="post" action="add_contact.php" class='vacanci_add' enctype="multipart/form-data">
							<input class="cont_inp1" type="text" placeholder="Ваше имя" name="user_name" value="" style="border:none;margin-bottom:2px;font-size:12px;"><br/>
							<input class="cont_inp1" type="text" placeholder="e-mail" name="user_email" value="" style="border:none;margin-bottom:2px;font-size:12px;"><br/>
							<textarea class="cont_inp1" type="text" placeholder="Сообщение" name="MESSAGE" value="" style="resize:none;border:none;margin-bottom:10px;font-size:12px;"></textarea><br/>
							<div align="center">
								<input class="inp11" type="submit" value="ОТПРАВИТЬ" style="line-height:16px;padding-right:11px;border-right:1px solid #fff;font-size:12px;border-radius:0;">
								<input class="clear_but inp11" type="button" value="ОЧИСТИТЬ" style="padding-left:7px;font-size:12px;">
							</div>
						</form>
					</div>

				</div>
			</div>

		<script type='text/javascript'>
			$('.clear_but').click(function(){
						$('.vacanci_add')[0].reset();
			})
		</script>
		<script type='text/javascript'>
			$(document).ready(function(){
				$(function(){
					// откуда берем данные сформы
					$('.vacanci_add').submit(function(e){
						//отменяем стандартное действие при отправке формы
						e.preventDefault();
						//берем из формы метод передачи данных
						var m_method=$(this).attr('method');
						//получаем адрес скрипта на сервере, куда нужно отправить форму
						var m_action=$(this).attr('action');
						//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
						//то есть в стандартном формате передачи данных формы
						var m_data=$(this).serialize();
						$.ajax({
							type: m_method,
							url: m_action,
							data: m_data,
							success: function(result){
								// где показываем результат
								$('#product_add_result').html(result);
							}
						});
					});
				});
			});
		</script>

		<div style="clear:both;"></div>

	</div>
</div>
<div style="clear:both;"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>