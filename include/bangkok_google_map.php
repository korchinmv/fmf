<!DOCTYPE html>
<html>
    <head>      
        <style type="text/css">
            * {
				margin:0;
				padding:0;
			}			
            #map {
                width: 100%;
                height: 100vh;
                min-width: 100%;
                min-height: 550px;
            }
			html {
				overflow-y: hidden;
			}
        </style>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAswQEPH_KO0pNFZRxQz-yve_s5hmnd1Fg"></script>
        
        <script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
			
				function init() {
					var mapOptions = {
						zoom: 13,
						center: {lat:13.740205,lng:100.588614}
					};
					console.log(mapOptions);
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(13.740205,100.650408),
						map: map,
						title: 'FMF',
						icon: '/images/map_marker1.png'
					});
					infowindow = new google.maps.InfoWindow({
						content: 'FMF, Baanklangmuang Rama9-Motorway, Suanluang, Bangkok 10250 '
					});
					var marker2 = new google.maps.Marker({
						position: new google.maps.LatLng(13.7347396,100.588614),
						map: map,
						title: 'FMF',
						icon: '/images/map_marker1.png'
					});
					infowindow2 = new google.maps.InfoWindow({
						content: 'FMF, Office 308, 354/3 Ekkamai 20, Khlong Tan Nuea, Wattana, Bangkok, 10110'
					});
					marker.addListener('click', function() {
						infowindow.open(map, marker);
					});
					marker2.addListener('click', function() {
						infowindow2.open(map, marker2);
					});
				}
        </script>
    </head>
    <body>

       <div id="map"></div>
    </body>
</html>
