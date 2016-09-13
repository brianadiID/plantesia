<!DOCTYPE html>
<?php
	
    include('../../session.php');
	include('../../config.php');
    //echo $state;

   $date = date("Y-m-d");
   //echo $date;
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Plantesia</title>

        <!-- CSS  -->
        <link href="../../css/uikit.css" type="text/css" rel="stylesheet"/>
        <link href="../../css/components/form-advanced.css" type="text/css" rel="stylesheet"/>
        <link href="../../css/components/form-file.gradient.css" type="text/css" rel="stylesheet"/>
        <link href="../../css/components/form-select.css" type="text/css" rel="stylesheet"/>
        <link href="../../css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/components/slideshow.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../../css/components/slidenav.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script src="../../js/jquery.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBUYYPGRofs7hXyofEyuVtnvS9GyX6vO_Y&libraries=places&callback=initAutocomplete"async defer></script>
        <script>
            function initAutocomplete() {
                var mapProp = {
                    center: {lat: -2.524161, lng: 121.804342},
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                var marker = new google.maps.Marker({});
                marker.setMap(map);
				var markers = [];
				var infowindows = []; 
				var lat = [-8.367766, -7.367766, -6.367766];
				var lng = [108.829961, 107.829961, 106.829961];
				var info = [];
				
				/*var locations = [
				  ['\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="'+
					'../../img/assets/home1.jpg'+
					'" width="206px" height="100px" alt="'+
					'foto-disini'+
					'"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>'+
						'Kebun Durian Pak Slamet 1'+
						'</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>'+
						'Sleman, Jogja'+
						'</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'Durian Monthong'+
								'</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'1 ton perbulan'+
								'</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <a href="#">\n\
                                <button id="close-btn'+
								'1'+
								'" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modalDescription1" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>', -8.367766, 108.829961],
				  ['\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="../../img/assets/home1.jpg" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet 2</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>Sleman, Jogja</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>Durian Monthong</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>1 ton perbulan</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <a href="#">\n\
                                <button id="close-btn2" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modalDescription1" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>', -7.367766, 107.829961],
				  ['Tes 3', -6.367766, 106.829961],
				  ['Tes 4', -5.367766, 105.829961],
				  ['Tes 5', -4.367766, 104.829961]
				];*/
				
				var locations = [];
				var infowindow = new google.maps.InfoWindow();
				//var test = ['Tes 7', -7.367766, 105.829961]
				//locations.push(test);
				<?php
                        $sql = "SELECT * FROM thread";
                        $result = $conn->query($sql);
						$counter = 1;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if(($row["latitude"] != null) && ($row["longitude"] != null)){
								$nama = $row["nama"];
								$deskripsi = $row["deskripsi"];
								$keuntungan = $row["keuntungan"];
								$total_yield = $row["total_yield"];
								$lokasi = $row["lokasi"];
								$jenis = $row["jenis"];
								$foto = $row["foto"];
								$provinsi = $row["provinsi"];
								$latitude = $row["latitude"];
								$longitude = $row["longitude"];
								
								?>
									var test = ['\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="../'+
								'<?php echo $foto;?>'+
								'" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>'+
						'<?php echo $nama;?>'+
						'</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>'+
						'<?php echo $provinsi;?>'+
						'</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'<?php echo $jenis;?>'+
								'</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'<?php echo $keuntungan;?>'+
								'</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <a href="#">\n\
                                <button id="close-btn2" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modalDescription'+
							'<?php echo $counter;?>'+'" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>', <?php echo "".$latitude."";?>, <?php echo "".$longitude."";?>]
									locations.push(test);
								<?php	
								$counter++;
							}
                        }
                        //$conn->close();
                ?>
				var marker, i;

				for (i = 0; i < locations.length; i++) {  
				  marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map
				  });
					marker.setIcon("../../img/assets/icon/pinsmall.png");
                
				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
					  infowindow.setContent(locations[i][0]);
					  infowindow.open(map, marker);
					}
				  })(marker, i));
				  
				  google.maps.event.addListener(infowindow, 'domready', (function (marker, i) {
                    return function() {
						$('#close-btn'+i).click(function () {
							infowindow.close(map, marker);
						});
					}
                })(marker, i));
				}
				
				
				
				/*
				//marker1
				markers.push();
                markers[0] = new google.maps.Marker({
                    position: new google.maps.LatLng(lat[0], lng[0])
                });
                markers[0].setMap(map);
                markers[0].setIcon("../../img/assets/icon/pinsmall.png");
                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="'+
					'../../img/assets/home1.jpg'+
					'" width="206px" height="100px" alt="'+
					'foto-disini'+
					'"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>'+
						'Kebun Durian Pak Slamet 1'+
						'</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>'+
						'Sleman, Jogja'+
						'</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'Durian Monthong'+
								'</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>'+
								'1 ton perbulan'+
								'</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <a href="#">\n\
                                <button id="close-btn'+
								'1'+
								'" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modal" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>';
				infowindows.push();
                infowindows[0] = new google.maps.InfoWindow({
                    content: info
                });
				var markerTemp = markers[0];
				var infoTemp = infowindows[0];
                google.maps.event.addListener(markerTemp, 'click', function () {
                    infoTemp.open(map, markerTemp);
                });
				
                customInfoWindow(infoTemp);
                google.maps.event.addListener(infoTemp, 'domready', function () {
                    $('#close-btn'+'1').click(function () {
                        infoTemp.close();
                    });
                });
				
				
				//marker2
                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(-0.042062, 117.212051)
                });
                marker2.setMap(map);
                marker2.setIcon("../../img/assets/icon/pinsmall.png");
                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="../../img/assets/home1.jpg" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet 2</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>Sleman, Jogja</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>Durian Monthong</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>1 ton perbulan</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <a href="#">\n\
                                <button id="close-btn2" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modalDescription1" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>';
                var infowindow2 = new google.maps.InfoWindow({
                    content: info
                });
                google.maps.event.addListener(marker2, 'click', function () {
                    infowindow2.open(map, marker2);
                });
                customInfoWindow(infowindow2);
                google.maps.event.addListener(infowindow2, 'domready', function () {
                    $('#close-btn2').click(function () {
                        infowindow2.close();
                    });
                });
				//marker3
                var marker3 = new google.maps.Marker({
                    position: new google.maps.LatLng(-3.555403, 139.536269)
                });
                marker3.setMap(map);
                marker3.setIcon("../../img/assets/icon/pinsmall.png");

                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="../../img/assets/home1.jpg" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet 3</b></h5>' +
                        '<div style="padding-left:2%;padding-right:2%">' +
                        '<h6>Sleman, Jogja</h6>' +
                        '<table style=" border-spacing: 0;border-collapse: collapse;">\n\
                            <tr>\n\
                                <td><b><i class="uk-icon-pagelines"></i></td> \n\
                                <td>&nbsp;:&nbsp;</td> </b>\n\
                                <td>Durian Monthong</td>\n\
                            </tr>' +
                        '<tr>\n\
                                <td><b><i class="uk-icon-calculator"></i></td>\n\
                                <td> &nbsp;:&nbsp;</td> </b>\n\
                                <td>1 ton perbulan</td>\n\
                            </tr>\n\
                        </table><br>\n\
                    </div>' +
                        '<div class="uk-grid margin-bottom-5" style="padding-left:2%;padding-right:2%">\n\
                        <div class="uk-width-1-2" style="margin-left:5px">\n\
                            <button id="close-btn3" class="uk-button white-map-btn">CLOSE</button>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modalDescription1" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>';

                var infowindow3 = new google.maps.InfoWindow({
                    content: info
                });
				google.maps.event.addListener(marker3, 'click', function () {
                    infowindow3.open(map, marker3);
                });
                customInfoWindow(infowindow3);
                google.maps.event.addListener(infowindow3, 'domready', function () {
                    $('#close-btn3').click(function () {
                        infowindow3.close();
                    });
                });
				*/
                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function () {
                    searchBox.setBounds(map.getBounds());
                });

                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();

                    if (places.length == 0) {
                        return;
                    }
                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };
                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });

                
				
            }

            function customInfoWindow(infowindow) {
                google.maps.event.addListener(infowindow, 'domready', function () {
                    // Reference to the DIV which receives the contents of the infowindow using jQuery
                    var iwOuter = $('.gm-style-iw');

                    /* The DIV we want to change is above the .gm-style-iw DIV.
                     * So, we use jQuery and create a iwBackground variable,
                     * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
                     */
                    var iwBackground = iwOuter.prev();

                    // Remove the background shadow DIV
                    iwBackground.children(':nth-child(2)').css({'display': 'none'});

                    // Remove the white background DIV
                    iwBackground.children(':nth-child(4)').css({'display': 'none'});

                    var iwCloseBtn = iwOuter.next();

                    // Apply the desired effect to the close button
                    iwCloseBtn.css({
                        display: 'none',
                        opacity: '1', // by default the close button has an opacity of 0.7
                        right: '20px', top: '5px', // button repositioning
                        width: '18px', height: '18px',
                        border: '2px solid white', // increasing button border and new color
                        'background-color': 'white',
                        'border-radius': '13px', // circular effect
                        'box-shadow': '0 0 5px #3990B9' // 3D effect to highlight the button
                    });

                    // The API automatically applies 0.7 opacity to the button after the mouseout event.
                    // This function reverses this event to the desired value.
                    iwCloseBtn.mouseout(function () {
                        $(this).css({opacity: '1'});
                    });
                });
            }
//            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <nav class="uk-navbar" style="background-color: white">
            <div class="container">
                <a href="../../index.php" class="uk-navbar-brand">
                    <p style="margin-top: -25px;margin-left: 61px;"><img src="../../img/assets/icon/daun.png" width="20"></p>
                    <p style="margin-top: -12px;">P L A N T E S I A</p>
                </a>
<!--                <a href="#" class="uk-navbar-brand">
                    <p style="margin-top: -35px;"><img src="../../img/logo.png" width="200"></p>
                </a>-->
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li><a href="../../index.php">Beranda</a></li>
                        <li><a href="../explore" class="nav-active margin-left-25">Jelajahi <i class="uk-icon-angle-down"></i></a></li>
                        <?php 
                            if($state == "Login"){
                                ?>
                                    <li><button data-uk-modal="{target:'#modallogin', center:true}" class="green-button margin-left-25"><a href="#modallogin" data-uk-modal="{center:true}">LOGIN</a></button></li>
                                <?php
                            }
                            else{
                                ?>
                                    <li><button onclick="location.href='../../logout.php'" class="green-button margin-left-25"><a href="../../logout.php">Logout</a></button></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        </nav>
        <div id="my-id" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Jelajahi</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
        <section>
            <img src="../../img/assets/icon/daun grayscale.png" alt="" width="20px" style="position: absolute;z-index: 2;margin: 43px 25.7%;">
            <img src="../../img/assets/icon/search-icon.png" alt="" width="20px" style="position: absolute;z-index: 2;margin: 43px 72%;">
            <input id="pac-input" type="text" placeholder="Telusuri Plantesia" class="form-search-custom">
            <div id="googleMap" style="width:100%;height:590px;"></div>
        </section>
		
		<?php
							
					$sql = "SELECT * FROM thread";
					$result = $conn->query($sql);
					$counter = 1;
					if ($result->num_rows != 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							if(($row["latitude"] != null) && ($row["longitude"] != null)){
								$idthread = $row["id"];
								$nama = $row["nama"];
								$deskripsi = $row["deskripsi"];
								$keuntungan = $row["keuntungan"];
								$total_yield = $row["total_yield"];
								$lokasi = $row["lokasi"];
								$jenis = $row["jenis"];
								$foto = $row["foto"];
								$provinsi = $row["provinsi"];
								$latitude = $row["latitude"];
								$longitude = $row["longitude"];?>
								
								<!-- This is the modal -->
								<div id="modalDescription<?php echo $counter;?>" class="uk-modal">
									<div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
										<a href="" class="uk-modal-close uk-close uk-close-alt"></a>
										<div class="uk-grid">
											<div class="uk-width-2-4">
												<img src="../<?php echo $foto;?>" alt="photo">
											</div>
											<div class="uk-width-2-4 padding-right-35">
												<h2 class="font-green"><?php echo $nama;?></h2>
												<div style="font-size: 13pt">
													<p>
										  <?php echo $lokasi;?>, <br><?php echo $provinsi;?></p>
													<div class="uk-grid">
														<div class="uk-width-2-10">
															<img src="../../img/assets/icon/nature.png" width="20px" alt="">
														</div>
														<div class="uk-width-8-10 no-padding-left"><?php echo $jenis;?></div>
													</div>
													<div class="uk-grid margin-top-10">
														<div class="uk-width-2-10">
															<img src="../../img/assets/icon/money.png" width="18px" alt="">
														</div>
														<div class="uk-width-8-10 no-padding-left"><?php echo $total_yield;?></div>
													</div>
													<div class="uk-grid margin-top-10">
														<div class="uk-width-2-10">
															<img src="../../img/assets/icon/moneychart.png" width="16px" alt="">
														</div>
														<div class="uk-width-8-10 no-padding-left"><?php echo $keuntungan;?></div>
													</div>
													<p class="margin-top-10"><?php echo $deskripsi;?>
													</p>
												</div>
												<?php 
													if($state == "Login"){
														?>
															<a href="#modal2" data-uk-modal="{center:true}">
																<button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">PLANT YOUR SEED</button>
															</a>
														<?php
													}
													else{
														$login_session
														?>
															<!-- <a href="#modal4" method="post" data-uk-modal="{center:true}"> -->
																<?php
																
																if($konfirmasi == 1){
																?>
																<form action="plant.php" method="post"  class="col s12" onSubmit="alert('Terima kasih. Tim kami akan menghubungi Anda secepatnya.');">
																		<input name="input" type="hidden" value="<?php echo $id;?>">
																		<input name="id_thread" type="hidden" value="<?php echo $idthread;?>">
																		<input name="komentar" type="hidden" value="<?php echo $login_session;?> mau invest di ID thread <?php echo $idthread;?>">

																		<input type="submit" value="PLANT YOUR SEED <?php echo $id;?>" class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt"/>
																</form>
																<?php
																}
																else{
																?>
																	<a href="#modal5" data-uk-modal="{center:true}">
																		<button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">PLANT YOUR SEED</button>
																	</a>
																<?php
																}
																?>
																<!-- <button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">PLANT YOUR SEED</button> -->
															<!-- </a> -->
														<?php
													}
												?>
												
											</div>
										</div>
									</div>
								</div>
							<?php
							
						$counter++;
						}
					}
			$conn->close();
		}
	  ?>

        <div id="modal2" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="../../img/assets/tanah.jpg" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Plant Your Seed</h2>
                        <div style="font-size: 13pt">
                            <form action = "../../login.php" method = "post" class="uk-form">
                                <div class="uk-form-row text-center">
                                    <input name="username" type="text" placeholder="username or email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password" type="password" placeholder="password" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <button class="uk-button uk-width-1-1 login-btn" type="submit" style="font-size: 14pt">LOGIN</button>
                                </div>
                            </form>
                        </div><br>
                        <p class="text-center">Don't you have an account? <a href="#modal3" data-uk-modal="{center:true}" class="font-green">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal3" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="../../img/assets/tanah.jpg" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Register to plant</h2>
                        <div style="font-size: 13pt">
                            <form action="../../register.php" class="uk-form" method = "post">
                                <div class="uk-form-row text-center">
                                    <input name="email" type="text" placeholder="Email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="username" type="text" placeholder="Username" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password" type="password" placeholder="Password" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password2" type="password" placeholder="Re-type passowrd" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <button class="uk-button uk-width-1-1 register-btn" type="submit" style="font-size: 14pt">Register</button>
                                </div>
                            </form>
                        </div><br>
                        <p class="text-center">Have an account? <a href="#modal2" data-uk-modal="{center:true}" class="font-green">Login now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal4" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="../../img/assets/tanah.jpg" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Terimakasih</h2>
                        <p>Tim kami akan menghubungi Anda
                            secepatnya melalui kontak yang Anda Miliki
                            pada profil Anda</p>
                        <a href="../explore"  class="uk-modal-close">
                            <button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">JELAJAHI KEMBALI</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		
		<div id="modal5" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="../../img/assets/tanah.jpg" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Terimakasih sudah berminat</h2>
                        <p>Email Anda belum dikonfirmasi. Mohon konfirmasi terlebih dahulu</p>
                        <a href="../explore"  class="uk-modal-close">
                            <button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">JELAJAHI KEMBALI</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		
		<div id="modalregister" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="../../register.php" class="uk-modal-close uk-close uk-close-alt"></a>

                    <div class="uk-width-1-1">
                        <h2 class="font-green text-center">Register to plant</h2>
                        <div style="font-size: 13pt">
                            <form action="../../register.php" class="uk-form" method = "post">
                                <div class="uk-form-row text-center">
                                    <input name="email" type="text" placeholder="Email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="username" type="text" placeholder="Username" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password" type="password" placeholder="Password" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password2" type="password" placeholder="Re-type passowrd" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <button class="uk-button uk-width-1-1 register-btn" type="submit" style="font-size: 14pt">Register</button>
                                </div>
                            </form>
                        </div><br>
                        <p class="text-center">Have an account? <a href="#modallogin" data-uk-modal="{center:true}" class="font-green">Login now</a></p>
                    </div>
                
            </div>
        </div>
        
        <div id="modallogin" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="../../login.php" class="uk-modal-close uk-close uk-close-alt"></a>
                
                    <div class="uk-width-1-1">
                        <h2 class="font-green text-center">Plant Your Seed</h2>
                        <div style="font-size: 13pt">
                            <form action = "../../login.php" method = "post" class="uk-form">
                                <div class="uk-form-row text-center">
                                    <input name="username" type="text" placeholder="username or email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input name="password" type="password" placeholder="password" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <button class="uk-button uk-width-1-1 login-btn" type="submit" style="font-size: 14pt">LOGIN</button>
                                </div>
                            </form>
                        </div><br>
                        <p class="text-center">Don't you have an account? <a href="#modalregister" data-uk-modal="{center:true}" class="font-green">Register now</a></p>
                    </div>
                
            </div>
        </div>
        </div>
    </body>
</html>
<script src="../../js/uikit.js"></script>
<script src="../../js/components/slideshow.js"></script>
<script src="../../js/components/lightbox.js"></script>
<script src="../../js/core/modal.js"></script>
<script src="../../js/smoothscroll.js"></script>
<!--<script>
    //$.UIkit.modal.Modal('#modal').show();
</script>-->