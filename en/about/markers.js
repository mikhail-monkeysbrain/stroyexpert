$(document).ready(function() {
    $("#map").css({
        height: 600,
        width: 100%
    });
    var myLatLng = new google.maps.LatLng(59.221332, 70.88736);
    MYMAP.init('#map', myLatLng, 4);


        MYMAP.placeMarkers('markers.xml');

});

var MYMAP = {
    map: null,
    bounds: null
};

var MY_MAPTYPE_ID = 'mystyle';

MYMAP.init = function(selector, latLng, zoom) {
    var myOptions = {
        zoom:zoom,
        center: latLng,
      	mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                },
        mapTypeId: MY_MAPTYPE_ID
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
if(color=='blue' && active=='Y') {
			 var image = 'icon_k2.png';
            var marker = new google.maps.Marker({
                position: point,
                map: MYMAP.map,
				icon: image
            });
			var host=document.location.hostname;
            var infoWindow = new google.maps.InfoWindow();
            var html='<div class="q1"><img src="http://'+host+src+'"><br /><strong>'+name+'</strong><br />'+address+'<br />'+txt+'</div>';


            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(MYMAP.map, marker);
            });
            //MYMAP.map.fitBounds(MYMAP.bounds);
		};




if(color=='red' && active=='Y') {
			 var image = 'icon_k1.png';
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
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(MYMAP.map, marker);
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