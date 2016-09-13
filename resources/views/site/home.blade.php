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
    </head>
    <body>
        <nav class="uk-navbar" style="background-color: white">
            <div class="container">
                <a href="#" class="uk-navbar-brand">
                    <p style="margin-top: -25px;margin-left: 61px;"><img src="<?= asset('img/assets/icon/daun.png') ?>" width="20"></p>
                    <p style="margin-top: -12px;">P L A N T E S I A</p>
                </a>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li><a href="<?= url('site/home') ?>" class="nav-active">Beranda <i class="uk-icon-angle-down"></i></a></li>
                        <li><a href="<?= url('site/explore') ?>" class="margin-left-25">Jelajahi</a></li>
                        @if (Auth::user())
							<li><button onclick="location.href='{{ url('/auth/logout') }}'" class="green-button margin-left-25"><a href="{{ url('/auth/logout') }}">Logout</a></button></li>
                    
						@else
							<li><button onclick="location.href='#login'" class="green-button margin-left-25"><a href="#login">LOGIN</a></button></li>
						
						@endif
						</ul>
                </div>
            </div>
            <a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        </nav>

        <div id="my-id" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
                    <li><a href="<?= url('site/home') ?>">Beranda</a></li>
                    <li><a href="<?= url('site/explore') ?>">Jelajahi</a></li>
                    
						@if (Auth::user())
							<li><a href="#login">Login</a></li>
                    
						@else
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						
						@endif
                </ul>
            </div>
        </div>

        <section id="one" style="overflow: hidden">
            <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
                <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="{autoplay:true}">
                    <li>
                        <img src="<?= asset('img/assets/home-test.png') ?>" width="" height="" alt="">
                        <div class="uk-overlay-panel uk-overlay-background overlay-trans uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>
                                <h1 style="font-size: 55pt"><strong>Investasi Masa Depan</strong></h1>
                                <a href="<?= url('site/explore') ?>">
                                    <button class="uk-button trans-button">JELAJAHI 1</button>
                                </a>
                            </div>
                        </div>
                    </li>
					<li>
                        <img src="<?= asset('img/assets/home-test.png') ?>" width="" height="" alt="">
                        <div class="uk-overlay-panel uk-overlay-background overlay-trans uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>
                                <h1 style="font-size: 55pt"><strong>Investasi Masa Depan</strong></h1>
                                <a href="<?= url('site/explore') ?>">
                                    <button class="uk-button trans-button">JELAJAHI 2</button>
                                </a>
                            </div>
                        </div>
                    </li>
					<li>
                        <img src="<?= asset('img/assets/home-test.png') ?>" width="" height="" alt="">
                        <div class="uk-overlay-panel uk-overlay-background overlay-trans uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>
                                <h1 style="font-size: 55pt"><strong>Investasi Masa Depan</strong></h1>
                                <a href="<?= url('site/explore') ?>">
                                    <button class="uk-button trans-button">JELAJAHI 3</button>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            </div>
        </section>
		<a name = "login"></a>
        <section id="two">
            <div class="container margin-top-40 margin-bottom-40">
                <div class="uk-grid">
                    <div class="uk-width-6-10">
                        <div class="uk-row">
                            <h1>Investasi yang bermakna</h1>
                            <p style="font-size: 17px">Investasi yang menguntungkan, sekaligus
                                berdampak kepada masyarakat dan lingkungan.
                                Raup keuntungan maksimal; bagi diri Anda
                                dan lingkungan Anda.</p>
                        </div>
                    </div><div class="uk-width-1-10"></div>
                    
					@if (Auth::user())
						<div class="uk-width-3-10 text-right margin-top-10 margin-bottom-20">
						<div class="uk-row">
						<h1>Halo, {{{ Auth::user()->name }}}!</h1>
						<p style="font-size: 17px">Silahkan jelajahi Investasi Masa Depan yang 
						Anda Inginkan</p>
						</div>
						<br>
						
					@else
						<div class="uk-width-3-10 text-right margin-top-30 margin-bottom-30">
                        <form id="login-form"  class="uk-form" role="form" method="POST" action="{{ url('/auth/login') }}" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="uk-form-row">
                                <input type="text" placeholder="username or email" class="uk-form-width-large input-custom" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="uk-form-row">
                                <input type="password" placeholder="password" class="uk-form-width-large input-custom" name="password">
                            </div>
							<div class="uk-form-row">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
                            <div class="uk-form-row text-center">
                                <div class="uk-grid">
                                    <div class="uk-width-1-2">
                                        <button id="register_button" type="button" class="uk-button uk-width-1-1 register-btn">REGISTER</button>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <button type="submit" class="uk-button uk-width-1-1 login-btn">LOGIN</button>
                                    </div>
									
                                </div>
                            </div>
                        </form>
						
						
						
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						
						<form id="register-form"  class="uk-form" role="form" method="POST" action="{{ url('/auth/register') }}" style="display: none;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="uk-form-row">
                                <input type="text" placeholder="name" class="uk-form-width-large input-custom" name="name" ">
                            </div>
							<div class="uk-form-row">
                                <input type="text" placeholder="email" class="uk-form-width-large input-custom" name="email">
                            </div>
                            
                            <div class="uk-form-row">
                                <input type="password" placeholder="password" class="uk-form-width-large input-custom" name="password">
                            </div>
                            <div class="uk-form-row">
                                <input type="password" placeholder="confirm password" class="uk-form-width-large input-custom" name="password_confirmation">
                            </div>
                            <div class="uk-form-row text-center">
                                <div class="uk-grid">
                                    <div class="uk-width-1-2">
                                        <button type="submit" class="uk-button uk-width-1-1 login-btn">REGISTER</button>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <button id="login_button" type="button" class="uk-button uk-width-1-1 register-btn">LOGIN</button>
                                    </div>
									
                                </div>
                            </div>
                        </form>
					@endif
                    </div>
                </div>
            </div>
        </section>
        <section id="three">
            <div class="container margin-top-40 margin-bottom-40">
                <div class="uk-grid margin-top-40 margin-bottom-40">
                    <div class="uk-width-1-2">
                        <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="">
                            <li>
                                <img src="<?= asset('img/assets/macbook-924781.jpg') ?>" width="" height="100" alt="">
                                <div class="uk-overlay-panel uk-overlay-background overlay-green uk-overlay-fade uk-flex uk-flex-left uk-flex-middle uk-text-left">
                                    <div>
                                        <h1><strong>Partisipasi</strong></h1>
                                        <p style="font-size: 17px">Keuntungan dari bagi <br> hasil antar 13%-24%</p>
                                        <a href="<?= url('site/explore') ?>" style="text-decoration: none !important;">
                                            <button class="uk-button trans-button-medium">JELAJAHI</button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-width-1-2">
                        <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="">
                            <li>
                                <img src="<?= asset('img/assets/6934698807_79d3e96fe1_b.jpg') ?>" width="" height="100" alt="">
                                <div class="uk-overlay-panel uk-overlay-background overlay-green uk-overlay-fade uk-flex uk-flex-left uk-flex-middle uk-text-left">
                                    <div>
                                        <h1><strong>Memberdayakan</strong></h1>
                                        <p style="font-size: 17px">Memberikan pekerjaan pada petani <br> dan mengoptimalkan lahan</p>
                                        <a href="<?= url('site/explore') ?>" style="text-decoration: none !important;">
                                            <button class="uk-button trans-button-medium">JELAJAHI</button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="four">
            <div class="container margin-top-40 margin-bottom-40">
                <div class="margin-top-20 margin-bottom-40 text-center">
                    <h1><strong>PENCAPAIN KAMI</strong></h1>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-4 text-center">
                        <div><img src="<?= asset('img/assets/img_operator.png') ?>"></div>
                        <div><h3><strong>1200</strong></h3></div>
                        <div><h4>total partner</h4></div>
                    </div>
                    <div class="uk-width-1-4 text-center">
                        <div><img src="<?= asset('img/assets/img_sponsor.png') ?>"></div>
                        <div><h3><strong>1630</strong></h3></div>
                        <div><h4>total klien</h4></div>
                    </div>
                    <div class="uk-width-1-4 text-center">
                        <div><img src="<?= asset('img/assets/img_lahan.png') ?>"></div>
                        <div><h3><strong>169</strong></h3></div>
                        <div><h4>total hektar</h4></div>
                    </div>
                    <div class="uk-width-1-4 text-center">
                        <div><img src="<?= asset('img/assets/ic_emisi.png') ?>" width="149px"></div>
                        <div><h3><strong>17.555 Kg</strong></h3></div>
                        <div><h4>CO2 terserap</h4></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="five">
            <div class="uk-slidenav-position" data-uk-slideshow="{autoplay:true}">
                <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="{autoplay:true}">
                    <li>
                        <img src="<?= asset('img/assets/footer.jpg') ?>" width="" height="200" alt="">
                        <div class="uk-overlay-panel uk-overlay-background overlay-trans uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>
                                <a href="<?= url('site/explore') ?>" style="text-decoration: none !important;">
                                    <button class="uk-button trans-button">JELAJAHI</button>
                                </a>
								
                                <a href="#login" 
								@if (Auth::user())
									style="display: none;"
								@endif
								>
                                    <button class="uk-button white-button font-black margin-left-45">GABUNG</button>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="footer">
            <div class="container text-center">
                <div class="margin-top-20 margin-bottom-20 font-white">
                    Copyright 2016 | Plantesia Indonesia | All Rights Reserved
                </div>
            </div>
        </section>
    </body>
</html>
<script src="<?= asset('js/uikit.js') ?>"></script>
<script src="<?= asset('js/components/slideshow.js') ?>"></script>
<script src="<?= asset('js/smoothscroll.js') ?>"></script>

<script>
$(document).ready(function(){
	
	$("#register-popup").click(function(){
        $("#modalregister").show();
    });
    $("#register_button").click(function(){
        $("#register-form").show();
        $("#login-form").hide();
    });
    $("#login_button").click(function(){
        $("#login-form").show();
        $("#register-form").hide();
    });
});
</script>