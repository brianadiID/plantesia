<?php
   include("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Thread</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminPlantesia.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<style>
	  #mapCanvas {
		width: 400px;
		height: 300px;
		float: left;
	  }
	  #infoPanel {
		float: left;
		margin-left: 10px;
	  }
	  #infoPanel div {
		margin-bottom: 5px;
	  }
	</style> 
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
		<header class="main-header">
        <a href="index.php" class="logo">
          <span class="logo-mini"><button href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></button></span>
          <span class="logo-lg">Navigation <button href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="margin-right:-15px"><span class="sr-only">Toggle navigation</span></button></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
			<div class="navbar-custom-menu" style="float:left;margin-left:5px;">
            <p style="margin-top: 0px;margin-left: 35px;"><img width="20" src="../img/assets/icon/daun.png"></p>
			<p style="margin-top: -14px;">P L A N T E S I A</p>
          </div>
		  
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="" class="user-image" alt="User Image">
                  <span class="hidden-xs">Leonardo K. Japri</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-files-o"></i>
                <span>Thread</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php">All Thread</a></li>
                <li class="active"><a href="compose.php">New Thread</a></li>
              </ul>
            </li>
            <li>
              <a href="mailbox.php">
                <i class="fa fa-envelope"></i> <span>Mail</span>
                <!--<small class="label pull-right bg-yellow">5</small>-->
              </a>
            </li>
          </ul>
        </section>
      </aside>
	  
	  <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Add New Thread
          </h1>
        </section>
		<section class="content">
          <div class="row">
            <div class="col-md-12">
				<form action="upload.php" method="post" enctype="multipart/form-data">
              <div class="box box-primary">
                <div class="box-body">
                  <div class="form-group">
                    <div>Title</div>
                    <input class="form-control" placeholder="Enter title here" name="title" id="title">
                  </div>
				  <div>Drag Location	</div>
				  <div class="col-md-12">
				  <div id="mapCanvas"></div>
				  <div id="infoPanel">
					<b>Marker status:</b>
					<div id="markerStatus"><i>Click and drag the marker.</i></div>
					<b>Current position (Lattitude, Longutide):</b>
					<div id="info"></div>
					<b>Closest matching address:</b>
					<div id="address"></div>
				  </div>
					
					</div>
                  <div class="form-group">
                    <div>Location</div>
                    <input class="form-control" placeholder="Enter location here" name="location" id="location">
                    <div>Province</div>
                    <input class="form-control" placeholder="Enter province here" name="province" id="province">
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <nav class="navbar ">
                      <ul class="nav navbar-nav " style="
                          margin-left: 0px;
                          margin-right: 0px;">
                        <li >
                        <div class="md-col-6" style ="margin-right:20px;">
                          <div>Plantation type</div>
						  
						  <input class="form-control" placeholder="Plantation Type" name="plantation" id="plantation">
                        </div>
                        </li>
                        <li>
                        <div class="md-col-6" style ="margin-right:20px;">
                          <div>Yield</div>
                          <input class="form-control" placeholder="Yield per year" name="yield" id="yield">
                        </div>
                        </li>
						
                        <li>
                        <div class="md-col-6" style ="margin-right:20px;">
                          <div>Profitability</div>
                          <input class="form-control" placeholder="Profit per year" name="profit" id="profit">
                          </div>
                        </li>
						<li>
                        <div class="md-col-6" style ="margin-right:20px;">
                          <div>Lattitude</div>
                          <input class="form-control" placeholder="Koordinat Lattitude" name="lattitude" id="lattitude">
                        </div>
                        </li>
						<li>
                        <div class="md-col-6" style ="margin-right:20px;">
                          <div>Longutide</div>
                          <input class="form-control" placeholder="Koordinat Longutide" name="longutide" id="longutide">
                        </div>
                        </li>
                      </ul>
                      </nav>
                    </div>
                    </div>
					
					
					
					
                  <div>Description</div>
                  <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="description" id="description">
                      <p>Describe everything not listed above</p>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-paperclip"></i> Attachment
					  <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <p class="help-block">Max. 32MB</p>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                  </div>
                </div>
              </div>
			  </form>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Version 1.0
        </div>
        <strong>Copyright &copy; 2016 Plantesia</strong> All rights reserved.
      </footer>    
      <div class="control-sidebar-bg"></div>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        $("#compose-textarea").wysihtml5();
      });
    </script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBUYYPGRofs7hXyofEyuVtnvS9GyX6vO_Y&sensor=true"></script>
	<script type="text/javascript">
	var geocoder = new google.maps.Geocoder();

	function geocodePosition(pos) {
	  geocoder.geocode({
		latLng: pos
	  }, function(responses) {
		if (responses && responses.length > 0) {
		  updateMarkerAddress(responses[0].formatted_address);
		} else {
		  updateMarkerAddress('Cannot determine address at this location.');
		}
	  });
	}

	function updateMarkerStatus(str) {
	  document.getElementById('markerStatus').innerHTML = str;
	}

	function updateMarkerPosition(latLng) {
	  document.getElementById('info').innerHTML = [
		latLng.lat(),
		latLng.lng()
	  ].join(', ');
	}

	function updateMarkerAddress(str) {
	  document.getElementById('address').innerHTML = str;
	}

	function initialize() {
	  var latLng = new google.maps.LatLng(-6.175, 106.826);
	  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
		zoom: 8,
		center: latLng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  });
	  var marker = new google.maps.Marker({
		position: latLng,
		title: 'Point A',
		map: map,
		draggable: true
	  });

	  // Update current position info.
	  updateMarkerPosition(latLng);
	  geocodePosition(latLng);

	  // Add dragging event listeners.
	  google.maps.event.addListener(marker, 'dragstart', function() {
		updateMarkerAddress('Dragging...');
	  });

	  google.maps.event.addListener(marker, 'drag', function() {
		updateMarkerStatus('Dragging...');
		updateMarkerPosition(marker.getPosition());
	  });

	  google.maps.event.addListener(marker, 'dragend', function() {
		updateMarkerStatus('Drag ended');
		geocodePosition(marker.getPosition());
	  });
	  
	  //Add listener
	google.maps.event.addListener(marker, "click", function (event) {
		var latitude = marker.getPosition()
		var longitude = marker.getPosition()
		console.log( latitude + ', ' + longitude );

		radius = new google.maps.Circle({map: map,
			radius: 100,
			center: event.latLng,
			fillColor: '#777',
			fillOpacity: 0.1,
			strokeColor: '#AA0000',
			strokeOpacity: 0.8,
			strokeWeight: 2,
			draggable: true,    // Dragable
			editable: true      // Resizable
		});

		// Center of map
		map.panTo(new google.maps.LatLng(latitude,longitude));

	}); //end addListener
	  
	}

	// Onload handler to fire off the app.
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
  </body>
</html>
