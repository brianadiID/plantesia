<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Plantesia</title>

        <!-- CSS  -->
        <link href="<?php echo asset('css/uikit.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset('css/components/form-advanced.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset('css/components/form-file.gradient.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset('css/components/form-select.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset('css/app.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo asset('css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo asset('css/components/slideshow.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo asset('css/components/slidenav.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script src="<?= asset('js/jquery.js') ?>"></script>
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
                var marker1 = new google.maps.Marker({
                    position: new google.maps.LatLng(-6.367766, 106.829961)
                });
                marker1.setMap(map);
                marker1.setIcon("<?php echo asset('img/assets/icon/pinsmall.png'); ?>");
                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="<?php echo asset('img/assets/home1.jpg'); ?>" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet</b></h5>' +
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
                                <button id="close-btn1" class="uk-button white-map-btn">CLOSE</button>\n\
                            </a>\n\
                        </div>\n\
                        <div class="uk-width-1-2" style="margin-left:-16px">\n\
                            <a href="#modal" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>';
                var infowindow1 = new google.maps.InfoWindow({
                    content: info
                });
                google.maps.event.addListener(marker1, 'click', function () {
                    infowindow1.open(map, marker1);
                });
                customInfoWindow(infowindow1);
                google.maps.event.addListener(infowindow1, 'domready', function () {
                    $('#close-btn1').click(function () {
                        infowindow1.close();
                    });
                });

                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(-0.042062, 117.212051)
                });
                marker2.setMap(map);
                marker2.setIcon("<?php echo asset('img/assets/icon/pinsmall.png'); ?>");
                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="<?php echo asset('img/assets/home1.jpg'); ?>" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet</b></h5>' +
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
                            <a href="#modal" data-uk-modal="{center:true}">\n\
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

                var marker3 = new google.maps.Marker({
                    position: new google.maps.LatLng(-3.555403, 139.536269)
                });
                marker3.setMap(map);
                marker3.setIcon("<?php echo asset('img/assets/icon/pinsmall.png'); ?>");

                var info = '\
                <div style="line-height: 1.35; overflow: hidden; white-space: nowrap;">\n\
                    <img src="<?php echo asset('img/assets/home1.jpg'); ?>" width="206px" height="100px" alt="foto-disini"><br>' +
                        '<h5 style="padding-left:2%;padding-right:2%"><b>Kebun Durian Pak Slamet</b></h5>' +
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
                            <a href="#modal" data-uk-modal="{center:true}">\n\
                                <button class="uk-button green-map-btn">VIEW</button>\n\
                            </a>\n\
                        </div>\n\
                    </div>\n\
                </div>';

                var infowindow3 = new google.maps.InfoWindow({
                    content: info
                });
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

                google.maps.event.addListener(marker3, 'click', function () {
                    infowindow3.open(map, marker3);
                });
                customInfoWindow(infowindow3);
                google.maps.event.addListener(infowindow3, 'domready', function () {
                    $('#close-btn3').click(function () {
                        infowindow3.close();
                    });
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
                <a href="#" class="uk-navbar-brand">
                    <p style="margin-top: -25px;margin-left: 61px;"><img src="<?= asset('img/assets/icon/daun.png') ?>" width="20"></p>
                    <p style="margin-top: -12px;">P L A N T E S I A</p>
                </a>
<!--                <a href="#" class="uk-navbar-brand">
                    <p style="margin-top: -35px;"><img src="<?= asset('img/logo.png') ?>" width="200"></p>
                </a>-->
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li><a href="<?= url('site/home') ?>">Beranda</a></li>
                        <li><a href="<?= url('site/explore') ?>" class="nav-active margin-left-25">Jelajahi <i class="uk-icon-angle-down"></i></a></li>
                        @if (Auth::user())
							<li><button onclick="location.href='{{ url('/auth/logout') }}'" class="green-button margin-left-25"><a href="{{ url('/auth/logout') }}">Logout</a></button></li>
                    
						@else
							<li><button data-uk-modal="{target:'#modallogin', center:true}" class="green-button margin-left-25"><a href="#modallogin" data-uk-modal="{center:true}">LOGIN</a></button></li>
						
						@endif
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
            <img src="<?= asset('img/assets/icon/daun grayscale.png') ?>" alt="" width="20px" style="position: absolute;z-index: 2;margin: 43px 25.7%;">
            <img src="<?= asset('img/assets/icon/search-icon.png') ?>" alt="" width="20px" style="position: absolute;z-index: 2;margin: 43px 72%;">
            <input id="pac-input" type="text" placeholder="Telusuri Plantesia" class="form-search-custom">
            <div id="googleMap" style="width:100%;height:590px;"></div>
        </section>

        <!-- This is the modal -->
        <div id="modal" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="<?= asset('img/assets/tanah.jpg') ?>" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Kebun Durian Pak Slamet</h2>
                        <div style="font-size: 13pt">
                            <p>Jalan Delima Raya, Kabupaten Sleman, <br> D.I Yogayakarta</p>
                            <div class="uk-grid">
                                <div class="uk-width-2-10">
                                    <img src="<?= asset('img/assets/icon/nature.png') ?>" width="20px" alt="">
                                </div>
                                <div class="uk-width-8-10 no-padding-left">Durian Monthong</div>
                            </div>
                            <div class="uk-grid margin-top-10">
                                <div class="uk-width-2-10">
                                    <img src="<?= asset('img/assets/icon/money.png') ?>" width="18px" alt="">
                                </div>
                                <div class="uk-width-8-10 no-padding-left">1 ton per tahun</div>
                            </div>
                            <div class="uk-grid margin-top-10">
                                <div class="uk-width-2-10">
                                    <img src="<?= asset('img/assets/icon/moneychart.png') ?>" width="16px" alt="">
                                </div>
                                <div class="uk-width-8-10 no-padding-left">Perkiraan profit 20% per tahun</div>
                            </div>
                            <p class="margin-top-10">Kebun durian Pak Jaya adalah kebun 
                                seluas 200 Ha yang terlatak di Kabupaten
                                Slemana, Daerah Istimewa Yogyakarta.
                                Kebun ini paling cocok untuk ditanami
                                durian jenis monthong.
                            </p>
                        </div>
                        <a href="#modal2" data-uk-modal="{center:true}">
                            <button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">PLANT YOUR SEED</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal2" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                <div class="uk-grid">
                    <div class="uk-width-2-4">
                        <img src="<?= asset('img/assets/tanah.jpg') ?>" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Plant Your Seed</h2>
                        <div style="font-size: 13pt">
                            <form class="uk-form">
                                <div class="uk-form-row">
                                    <input type="text" placeholder="username or email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row">
                                    <input type="password" placeholder="password" class="uk-form-width-large input-custom">
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
                        <img src="<?= asset('img/assets/tanah.jpg') ?>" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Register to plant</h2>
                        <div style="font-size: 13pt">
                            <form class="uk-form">
                                <div class="uk-form-row">
                                    <input type="text" placeholder="Email" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row">
                                    <input type="text" placeholder="Username" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row">
                                    <input type="password" placeholder="Password" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row">
                                    <input type="password" placeholder="Re-type passowrd" class="uk-form-width-large input-custom">
                                </div>
                                <div class="uk-form-row text-center">
                                    <button class="uk-button uk-width-1-1 login-btn" type="submit" style="font-size: 14pt">Register</button>
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
                        <img src="<?= asset('img/assets/tanah.jpg') ?>" alt="photo">
                    </div>
                    <div class="uk-width-2-4 padding-right-35">
                        <h2 class="font-green">Terimakasih</h2>
                        <p>Tim kami akan menghubungi Anda
                            secepatnya melalui kontak yang Anda Miliki
                            pada profil Anda</p>
                        <a href=""  class="uk-modal-close">
                            <button class="uk-button uk-width-1-1 login-btn"  style="font-size: 14pt">JELAJAHI KEMBALI</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		
		<div id="modallogin" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="#" class="uk-modal-close uk-close uk-close-alt"></a>
                    <div class="uk-width-1-1">
                        <h2 class="font-green text-center">Plant Your Seed</h2>
                        <div style="font-size: 13pt">
                            <form id="login-form" action="{{ url('/auth/login') }}" method = "post" class="uk-form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="uk-form-row text-center">
                                    <input name="email" type="text" placeholder="username or email" class="uk-form-width-large input-custom">
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
		
		<div id="modalregister" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-modal-dialog-medium">
                <a href="#" class="uk-modal-close uk-close uk-close-alt"></a>

                    <div class="uk-width-1-1">
                        <h2 class="font-green text-center">Register to plant</h2>
                        <div style="font-size: 13pt">
                            <form id="register-form" action="{{ url('/auth/register') }}" style="display: lalala;" class="uk-form" method = "post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="uk-form-row text-center">
                                    <input type="text" placeholder="name" class="uk-form-width-large input-custom" name="name" ">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input type="text" placeholder="email" class="uk-form-width-large input-custom" name="email">
                                </div>
                                <div class="uk-form-row text-center">
                                    
									<input type="password" placeholder="password" class="uk-form-width-large input-custom" name="password">
                                </div>
                                <div class="uk-form-row text-center">
                                    <input type="password" placeholder="confirm password" class="uk-form-width-large input-custom" name="password_confirmation">
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
		

		
    </body>
</html>
<script src="<?= asset('js/uikit.js') ?>"></script>
<script src="<?= asset('js/components/slideshow.js') ?>"></script>
<script src="<?= asset('js/components/lightbox.js') ?>"></script>
<script src="<?= asset('js/core/modal.js') ?>"></script>
<script src="<?= asset('js/smoothscroll.js') ?>"></script>
<!--<script>
    //$.UIkit.modal.Modal('#modal').show();
</script>-->