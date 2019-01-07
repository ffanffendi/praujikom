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

	
	<div class="main-slider" style="background-image: url('assets/frontend/images/Mm.gif');">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">
				
					<h2><b>BLOG</b></h2>
					
				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->
	
	
	
<center>	
<section class="latest_blog_area">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="{{ asset ('assets/img/artikel/' .$artikels->gambar. '' ) }}" style="margin-top: 50px; max-width: 75%;height: auto;" alt="">
                    <br>
                    <br>
                        <h2>
                            {{ $artikels->judul }}
                        </h2><br>
                    <div class="content-wrap">
                        <li>
                            {!! $artikels->deskripsi !!}
                        </li>
						

                    </div>
                </div>
				<br>
				<!-- Start nav Area -->
                <section class="nav-area pt-50 pb-100">
                    <div class="container">
                        <div class="row justify-content-between">
                            @if(isset($previous))
                            <div class="col-sm-6 nav-left justify-content-start d-flex">
                                <!-- <div class="thumb">
                                    <img src="/frontend/img/blog/prev.jpg" alt="">
                                </div> -->
                                <div class="post-details">
                                    <h4><p><b>{{ $previous->judul }}</b></p><h4>	
                                    <h5 class="text-uppercase"><a href="{{ URL::to( '/artikels/single/' . $previous->id) }}"><<-Previous</a></h5>
                                </div>
                            </div>
                            @endif
                            @if(isset($next))
                            <div class="col-sm-6 nav-right justify-content-end d-flex">
                                <div class="post-details">
								<h4><p><b>{{ $next->judul }}</b></p></h4>
                                    <h5 class="text-uppercase"><a href="{{ URL::to( '/artikels/single/' . $next->id) }}">Next->></a></h5>
                                </div>
                                             
                                <!-- <div class="thumb">
                                    <img src="/frontend/img/blog/next.jpg" alt="">
                                </div>                          -->
                            </div>
                            @endif
                        </div>
                    </div>    
                </section>
                <!-- End nav Area -->
            </div>
            {{--  view composer  --}}
            @include('frontends.side')
            {{--  end view composer  --}}
        </div>
		<br>


<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://fran-7.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
</center>


	
	
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
	
	<script src="{{ asset ('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/tether.min.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/bootstrap.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/scripts.js') }}"></script>
	
	
</body>
</html>