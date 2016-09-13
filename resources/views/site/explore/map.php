<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBUYYPGRofs7hXyofEyuVtnvS9GyX6vO_Y&sensor=false" 
          type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
	
	var lat = [-8.367766, -7.367766, -6.367766];
	var lng = [108.829961, 107.829961, 106.829961];
    var locations = [
      ['Tes 1', -8.367766, 108.829961],
      ['Tes 2', -7.367766, 107.829961],
      ['Tes 3', -6.367766, 106.829961],
      ['Tes 4', -5.367766, 105.829961],
      ['Tes 5', -4.367766, 104.829961]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: new google.maps.LatLng(-6.367766, 106.829961),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>