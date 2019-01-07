<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<title>SABILA CELL</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
    <link rel="icon" href="{{ asset ('assets/frontend/images/hahai.png') }}" type="image/x-icon" />
	  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{ asset ('assets/frontend/common-css/bootstrap.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/common-css/ionicons.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/common-css/swiper.css') }}" rel="stylesheet">

	<link href="{{ asset ('assets/frontend/04-portfolio/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/04-portfolio/css/responsive.css') }}" rel="stylesheet">

	<link href="{{ asset ('assets/frontend/03-services/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/03-services/css/responsive.css') }}" rel="stylesheet">

	<link href="{{ asset ('assets/frontend/02-about-us/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/02-about-us/css/responsive.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/01-homepage/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/01-homepage/css/responsive.css') }}" rel="stylesheet">
	
	
</head>
<body>
	
 	<header>
		<div class="container">
		
    <a class="logo" href="/index"><img src="{{ asset ('assets/frontend/images/hahai.png') }}" alt="Logo"></a>
			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon ion-navicon"></i></div>
			
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/index">Home</a></li>
				<li><a href="/produk">Product</a></li>
				<li><a href="/galeri">Galeri</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/testimoni">Testimoni</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul><!-- main-menu -->
			
		</div><!-- container -->
	</header>

	
	<div class="main-slider" style="background-image: url('assets/frontend/images/gif/m.gif');">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">
				
					<h5 class="pre-heading"><b>This is a</b></h5>
					<h2 class="hand-writing">Galery</h2>
					
				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->


<br>
<br>
<br>			
<center>
		<h2><b>galery</b></h2>
							  </center>
<br>
<br>
<br>

	@php
$galeris =App\galeris::all();
@endphp
<style type ="text/css">
* {margin: 0;padding:0}
body {background: #111}
h1 {color: #aaa;margin: 10px}
.carousel-container {
  padding: 0;
  margin: 1em auto;
  display: inline-block;
  max-width: 100%;
  width: 283px;
  height: 283px;
  position: relative;
  list-style-type: none;
}
.carousel-container .carousel-content {
  height: 300px;
  overflow: hidden;
  background: rgba(0,0,0,0.9);
  position: absolute;
  top: 0;
  box-shadow: 0 5px 5px -5px #333;
  padding: 0;
  text-align: center;
  line-height: 296px;
}
.carousel-container .carousel-content img {
  opacity: 0;
  padding: 0;
  width: auto;
  height: auto;
  max-height: 300px;
  max-width: 400px;
  vertical-align: middle;
  -webkit-animation-name: ziim;
  -webkit-animation-duration: 0.6s;
  animation-name: ziim;
  animation-duration: 0.6s;
}
@-webkit-keyframes ziim {
  from {-webkit-transform:scale(1)} 
  to {-webkit-transform:scale(0)}
}
@keyframes ziim {
  from {transform:scale(1)} 
  to {transform:scale(0)}
}
.carousel-container .carousel-toggle:checked ~ .carousel-content,.carousel-container .carousel-toggle.active ~ .carousel-content {
  height: 100%;
  width: 100%;
}
.carousel-container .carousel-toggle:checked ~ .carousel-content img,.carousel-container .carousel-toggle.active ~ .carousel-content img {
  opacity: 1;
}
.carousel-fullscreen {
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 0 4px 4px 0;
  width: 27px;
  height: 27px;
  cursor: pointer;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAA/SURBVHjaYvjPQA5kGCHaUEApQylDKZrY4NEG5UG1YZUbetpKCcJBoG04R8DQyAGjJRfDf4b/DAAAAAD//wMAswEnryWu8FcAAAAASUVORK5CYII=') no-repeat center center;
}
.carouselFullScreen:checked,.carouselFullScreen.active {
  display: block;
  height: 100%;
}
.carouselFullScreen:checked+.carousel-container,.carouselFullScreen.active+.carousel-container {
  margin: 0;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;  
}
.carouselFullScreen:checked+.carousel-container .carousel-toggle:checked ~.carousel-content >li,.carouselFullScreen.active+.carousel-container .carousel-toggle:checked ~.carousel-content >li {
  height: 100%;
  line-height: 99vh;
}
.carouselFullScreen:checked+.carousel-container .carousel-fullscreen,.carouselFullScreen.active+.carousel-container .carousel-fullscreen {
  width: 54px;
  height: 54px;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAQAAAAmTKJWAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD+SURBVHja7Jc9CoQwEIW9gkdJYyFoIeiFvIaH0VLB0sLGI3iE1DbhbRciGDJrltnFHV+Zpx9I3vwkSPiUCExgAvsH2A7tUY/Sukr0Xt9Ohx3wPQtq66qxeH0HHWa8H1nRWFeD1eszdJiOhulPwKi/8RZMY8PsqIOyLoXudLad3rsB29CicqSQWlcKdTprscXBJuTkHOWY4mAjMjIswxgHm1GRYRXmn4eZy1yF5ObO3ClXbq5CcnP3RrkaLnMVkpu7gQ4rLnMVkpu7Qprnk2GsF4T16rOGmrVcPbfqf6l5so4FrAMP6yjHOqQyjN+siwXrysS6DEqnFpjABEbRawACMWGE7CJdswAAAABJRU5ErkJggg==') no-repeat center center;
}
.carouselFullScreen:checked+.carousel-container img,.carouselFullScreen.active+.carousel-container img {
  width: auto;
  height: 100%;
  max-height: 100vh;
  max-width: 100vw;
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
input[type=checkbox].carouselFullScreen,input[type=checkbox].carousel-toggle {
  visibility: hidden;  
}
</style>
	</section><!-- top-service-section -->

	<section class="team-section">

	<?php $no=1; ?>
	@foreach($galeris as $data)
	<?php $no++; ?>
	<input id="{{$no}}" type="checkbox" class="carouselFullScreen" />
    <ul class="carousel-container">

        <li>
			<input type="checkbox" checked="checked" class="carousel-toggle" />
            	<ul class="carousel-content">
                	<li><img src="{{ asset ('assets/img/galeri/' .$data->gambar. '' ) }}"  /></li>
						</ul>
        			</li>
        		<label for="{{$no}}" class="carousel-fullscreen"></label>
			</ul> 
		@endforeach
	</section><!-- about-section -->

   			
<br>
<br>
<br>	

<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-30">
					<h5 class="title margin-b-20"><b>SABILA CELL</b></h5>
						<p class="margin-tb-20">Seiring dengan berkembangnya teknologi informasi khususnya internet, memang tidak dapat kita pungkiri hal ini memberikan manfaat yang begitu besar dalam banyak aspek kehidupan, salah satunya dalam kegiatan jual beli.  SABILA CELL merupakan website resmi kami yang hadir mengiringi kemajuan teknologi tersebut yang tidak lain bertujuan untuk memberikan pelayanan lebih kepada custemer kami.</p>
						<p class="font-black-lite copyright"></p>
					</div><!-- margin-b-30 -->
				</div><!-- col-sm-6 -->


				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Contact Us</b></h5>
						<p>H.ibrahim</p>
						<p class="margin-tb-10">+62 82317639023</p>
						<p>ffanffendi11@gmail.com</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->


				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-30">
					<h5 class="title margin-b-20"><b>INFO</b></h5>						
						<p class="margin-tb-20">Konter handphone daerah cibaduyut. selain menjual berbagai macam handphone disini juga menjual accesories dan kebutuhan lainya seperti hardcase, headset, charger, temperedglass dan lain-lain. disipun juga bisa memperbaiki berbagai macam type handphone, seperti mengganti LCD, IC Power, Botloop, Fasboot, hardware dan sofware lainya.</<p class="font-black-lite copyright"></p>	
					</div><!-- margin-b-30 -->
				</div><!-- col-sm-6 -->


			<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>social media</b></h5>
						<P>facebook</P><li><a href="https://www.facebook.com/iamsije"><i class="ion-social-facebook"></i></a></li>
						<P>twitter</P><li><a href="https://twitter.com/FfendiFfan"><i class="ion-social-twitter"></i></a></li>
						<P>instagram</P><li><a href="https://www.instagram.com/ffan.ffendi_/"><i class="ion-social-instagram	"></i></a></li>
						</ul>   
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->
			</div><!-- row -->
		</div><!-- container -->
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c11ada882491369ba9de088/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

	
	<!-- SCIPTS -->
	
	<script src="{{ asset  ('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>
	
	<script src="{{ asset  ('assets/frontend/common-js/tether.min.js') }}"></script>
	
	<script src="{{ asset  ('assets/frontend/common-js/bootstrap.js') }}"></script>
	
	<script src="{{ asset  ('assets/frontend/common-js/swiper.js') }}"></script>
	
	<script src="{{ asset  ('assets/frontend/common-js/scripts.js') }}"></script>
	
	
</body>
</html>