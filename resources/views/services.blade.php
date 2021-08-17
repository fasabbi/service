<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
  
  <!-- FAVICON -->
  <link href="{{asset('home/img/favicon.png')}}" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('home/plugins/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('home/plugins/bootstrap/css/bootstrap-slider.css')}}">
  <!-- Font Awesome -->
  <link href="{{asset('home/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{asset('home/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
  <link href="{{asset('home/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{asset('home/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
  <link href="{{asset('home/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{asset('home/css/style.css')}}" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <![endif]-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <style>
	
@media only screen and (max-width: 400px) {
  
  a small{
	 
    background-color: rgb(74, 154, 180);
	color: white;
	
	  
	/* display: none; */
  }
  
}
</style>

  


</head>

<body class="body-wrapper">

<section style="background-color: black;">
	<div class="container" >
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{asset('home/images/logooo.jpg')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span style="background-color: aliceblue;" class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item dropdown dropdown-slide">
								{{-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">
									<span>
										<!-- <i class="fa fa-angle-down"></i> -->
									</span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="dashboard.html"> </a>
									<a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
									<a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a>
									<a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived Ads</a>
									<a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending Ads</a>
								</div> --}}
							</li>

							<li class="nav-item dropdown dropdown-slide">
								
							</li>

							<li class="nav-item ">
								<a style="color:aliceblue; font-weight:400; " 
								class="nav-link dropdown-toggle" href="{{ route('service') }}"> All Services</a>
							</li>

							<li class="nav-item dropdown dropdown-slide">
								<a style="color:aliceblue" class="nav-link dropdown-toggle" href="{{ route('blog') }}" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blog <span>
										<!-- <i class="fa fa-angle-down"></i> -->
									</span>
								</a>
								<!-- Dropdown list 
								<div class="dropdown-menu">
									<a class="dropdown-item" href="category.html">Ad-Gird View</a>
									<a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
								</div>-->
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a style="color:aliceblue" class="nav-link login-button" href="{{ route('connect') }}">Register As a professional</a>
							</li>
							<li class="nav-item">
@if (Route::has('login'))
{{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
@auth
{{-- <a href="{{ url('/home') }}" class="nav-link text-white add-button">Home</a> --}}
<a href="{{ url('/category') }}" class="nav-link text-white add-button">Home</a>
@else
<a class="nav-link text-white add-button" href="{{ route('connectlogin') }}">
<!-- <i class="fa fa-plus-circle"></i> -->
Login/Sign up</a>

{{-- @if (Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> 
@endif--}}
@endauth
{{-- </div> --}}
@endif

							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
{{-- <section style="background-color: black;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="{{asset('home/images/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="dashboard.html">Dashboard</a>
									<a class="dropdown-item" href="dashboard-my-ads.html">Dashboard My Ads</a>
									<a class="dropdown-item" href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a>
									<a class="dropdown-item" href="dashboard-archived-ads.html">Dashboard Archived Ads</a>
									<a class="dropdown-item" href="dashboard-pending-ads.html">Dashboard Pending Ads</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="about-us.html">About Us</a>
									<a class="dropdown-item" href="contact-us.html">Contact Us</a>
									<a class="dropdown-item" href="user-profile.html">User Profile</a>
									<a class="dropdown-item" href="404.html">404 Page</a>
									<a class="dropdown-item" href="package.html">Package</a>
									<a class="dropdown-item" href="single.html">Single Page</a>
									<a class="dropdown-item" href="store.html">Store Single</a>
									<a class="dropdown-item" href="single-blog.html">Single Post</a>
									<a class="dropdown-item" href="blog.html">Blog</a>

								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="category.html">Ad-Gird View</a>
									<a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login.html">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section> --}}

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Home Serivces On Demand </h1>
					<p>Join the millions who work with us <br> everyday in local communities around the world</p>
					{{-- <div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="category.html"><i class="fa fa-bed"></i> Hotel</a></li>
							<li class="list-inline-item">
								<a href="category.html"><i class="fa fa-grav"></i> Fitness</a>
							</li>
							<li class="list-inline-item">
								<a href="category.html"><i class="fa fa-car"></i> Cars</a>
							</li>
							<li class="list-inline-item">
								<a href="category.html"><i class="fa fa-cutlery"></i> Restaurants</a>
							</li>
							<li class="list-inline-item">
								<a href="category.html"><i class="fa fa-coffee"></i> Cafe</a>
							</li>
						</ul>
					</div> --}}
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form>
											<div class="form-row">
                                                @foreach ($categories as $ccc)
                                                    
												<div class="form-group col-md-2">
                                                    <a href="{{route('categorywise',$ccc->id)}}">
                                                        <img src="{{asset('home/00.png')}}" alt="plumber" style="width: 30px;">
														<small>{{ $ccc->category_name }}</small>
													</a>
												</div>

                                                @endforeach
												{{-- <div class="form-group col-md-2">
                                                    <a href="google.com">
                                                        <img src="{{asset('home/01.png')}}" alt="plumber" style="width: 30px;">
                                                        <small>massage</small>
													</a>
												</div> --}}
												
                                                
											</div>
										</form>
									</div>
								</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Latest Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">

@foreach ($products as $item)
	<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="{{asset('uploads/product')}}/{{$item->product_photo }}" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="{{url('product/details')}}/{{$item->id}}">{{ $item->product_name }}</a>(<span class="fa fa-star"> {{ $item->product_rating }} /5</span>)</h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a ><i class="fa fa-folder-open-o"></i>{{App\Models\Category::find($item->category_id)->category_name}}</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>{{ $item->created_at->diffForHumans() }}</a>
		    	</li>
		    </ul>
		    <p class="card-text">{{ $item->product_short }}</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>
</div>
@endforeach

	
					

				</div>
			</div>
		</div>
	</div>
</section>



{{-- ========================================== --}}

<div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="section-title from-blog__title">
						
                    <h2><button type="button" class="btn btn-danger btn-lg btn-block">Sale of the year</button></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident! dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
                    </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-4">
                    <div class="banner__pic">
                        <img style="width: 400px;height:200px" src="{{ asset('services/img/banner/banner69.gif') }}" alt="">
                        {{-- <label for=""><h3>Fast Electrician</h3> </label> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>


<br><br><br>
	
<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<div class="section-title from-blog__title">
				<h2>Special Discount</h2>
				</div>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="banner__pic">
					<img style="width: 400px;height:200px" src="{{ asset('services/img/banner/banner-1.jpg') }}" alt="">
					<label for=""><h3>Fast Electrician</h3> </label>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="banner__pic">
					<img style="width: 400px;height:200px" src="{{ asset('services/img/banner/banner-2.jpg') }}" alt="">
					<label for=""><h3>Slow Electrician</h3> </label>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- =========================================== --}}

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Sub-Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
				<div class="row">
					
					@foreach ($subcategories as $iii)
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i> 
								<h4>{{ $iii->subcategory_name }}</h4>
							</div>							 
						</div>
					</div> 
					@endforeach
					<!-- Category list -->
					<!--
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i> 
								<h4>Vehicles</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Bus <span>193</span></a></li>
								<li><a href="category.html">Cars <span>23</span></a></li>
								<li><a href="category.html">Motobike  <span>33</span></a></li>
								<li><a href="category.html">Rent a car <span>73</span></a></li>
							</ul>
						</div>
					</div>  
					-->
					
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Start today to get more exposure and
					book professionals form your phone</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-main" href="{{ route('customer.register') }}">Register</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="{{ url('allservices') }}">Start Listing</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img style="width: 200px;" src="{{asset('home/images/logo-footer.jpg')}}" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Location</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">Sydney</a></li>
            <li><a href="#">beijing</a></li>
            <li><a href="#">Delhi</a></li>
            <li><a href="#">Bangladesh</a></li>
            {{-- <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li> --}}
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Cities</h4>
          <ul>
            <li><a href="#">Dhaka</a></li>
            <li><a href="#">Sydney</a></li>
            <li><a href="#">new york</a></li>
            <li><a href="#">kolkata</a></li>
            <li><a href="#">paris</a></li>
            {{-- <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li> --}}



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="{{asset('home/images/footer/phone-icon.png')}}" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="{{asset('home/images/apps/google-play-store.png')}}" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="{{asset('home/images/apps/apple-app-store.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved
            Jian Afran Fasabbi</p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a style="color: rgb(230, 230, 243);" class="fa fa-facebook" href="https://www.facebook.com/givemeanotherchancetoprovemyself" target="_blank">acebook</a></li>
          {{-- <li><a class="fa fa-linkdin" href="https://www.twitter.com/" target="_blank"></a></li> --}}
          
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="{{asset('home/plugins/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
  <!-- tether js -->
<script src="{{asset('home/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{asset('home/plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{asset('home/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('home/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('home/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('home/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{asset('home/plugins/google-map/gmap.js')}}"></script>
<script src="{{asset('home/js/script.js')}}"></script>

</body>

</html>



