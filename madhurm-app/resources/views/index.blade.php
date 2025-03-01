<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Madhurm - Home</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ '/public/images/favicon.ico' }}" />
    {{-- <link href="{{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> --}}

	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/settings.css') }}">
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/navigation.css') }}">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/lib.css') }}">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/plugins.css') }}">			
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/navigation-menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/shortcode.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('../asset/css/style.css') }}">	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->
		<div class="row">
			<div class="col-12">
				@if (Session::has('status'))
					<div class="alert alert-success alert-block">
						<strong>{{ Session::get('status') }}</strong>
					</div>
				@endif
				@if (Session::has('error'))
					<div class="alert alert-danger alert-block">
						<strong>{{ Session::get('error') }}</strong>
					</div>
				@endif
			</div>
		</div>
		<div class="row" style="background-color: red">
			<a href="{{ URL::to('googleLogin') }}">
				<img src="/images/ftr-latestpost-1.jpg" alt="dasdasdsa">
			</a>
		</div>

		<!-- Header -->
		<header class="header-section container-fluid no-padding">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="col-md-7 col-sm-7 col-xs-7 dropdown-bar">
						<h5>Welcome To Max Shop</h5>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="languages" id="language" type="button" class="btn dropdown-toggle">English <span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Danish</a></li>
								<li><a title="German" href="#">German</a></li>
								<li><a title="French" href="#">French</a></li>
							</ul>
						</div>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="currency" id="currency" type="button" class="btn dropdown-toggle">US Dollar<span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Usd</a></li>
								<li><a title="German" href="#">Ora</a></li>
								<li><a title="French" href="#">Riyal</a></li>
							</ul>
						</div>
					</div>
					<!-- Social -->
					<div class="col-md-5 col-sm-5 col-xs-5 header-social"> 
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
							<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</div><!-- Social /- -->
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
			<!-- Menu Block -->
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.html" class="navbar-brand">Max <span>shop</span></a>
						</div>
						<!-- Menu Icon -->
						<div class="menu-icon">
							<div class="search">	
								<a href="#" id="search" title="Search"><i class="icon icon-Search"></i></a>
							</div>
							<ul class="cart">
								<li>
									<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Add To Cart" href="#"><i class="icon icon-ShoppingCart"></i></a>
									<ul class="dropdown-menu no-padding">
										<li class="mini_cart_item">
											<a title="Remove this item" class="remove" href="#">&#215;</a>
											<a href="#" class="shop-thumbnail">
												<img alt="poster_2_up" class="attachment-shop_thumbnail" src="images/product-wishlist-1.jpg">Flying Ninja
											</a>
											<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
										</li>
										<li class="mini_cart_item">
											<a title="Remove this item" class="remove" href="#">&#215;</a>
											<a href="#" class="shop-thumbnail">
												<img alt="poster_2_up" class="attachment-shop_thumbnail" src="images/product-wishlist-2.jpg">Flying Ninja
											</a>
											<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
										</li>
										<li class="button">
											<a href="#" title="View Cart">View Cart</a>
											<a href="#" title="Check Out">Check out</a>
										</li>
									</ul>
								</li>
								<li><a href="#" title="Like"><i class="icon icon-Heart"></i></a></li>
								<li><a href="#" title="User"><i class="icon icon-User"></i></a></li>
							</ul>
						</div><!-- Menu Icon /- -->
						<div class="navbar-collapse collapse navbar-right" id="navbar">
							<ul class="nav navbar-nav">
								<li class="active dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="index.html" title="home 1">home 1</a></li>
										<li><a href="index2.html" title="home 2">home 2</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Categories </a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="cart.html" title="Cart">Cart</a></li>
										<li><a href="checkout.html" title="Checkout">Checkout</a></li>
										<li><a href="404.html" title="404">404</a></li>
									</ul>
								</li>
								<li><a href="#product-section" title="Products">Products</a></li>
								<li class="dropdown">
									<a href="shop.html" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="shop-single.html" title="Shop Single">Shop Single</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
									</ul>
								</li>
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</nav><!-- nav /- -->
					<!-- Search Box -->
					<div class="search-box">
						<span><i class="icon_close"></i></span>
						<form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
					</div><!-- Search Box /- -->
				</div><!-- Container /- -->
			</div><!-- Menu Block /- -->
		</header><!-- Header /- -->

		<main>
			<!-- Slider Section 1 -->
			<div id="home-revslider" class="slider-section container-fluid no-padding">
				<!-- START REVOLUTION SLIDER 5.0 -->
				<div class="rev_slider_wrapper">
					<div id="home-slider1" class="rev_slider" data-version="5.0">
						<ul>
							<li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
								<img src="images/slider-1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-200','-130','-110','-80']" 
									data-fontsize="['38','30','25','16']"
									data-lineheight="['24','24','24','24']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="y:-50px;opacity:0;s:1000;e:Power4.easeOut;" 
									data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">new way to purchase your products
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-2" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-135','-80','-60','-50']" 
									data-fontsize="['18','18','18','14']"
									data-lineheight="['26','26','26','26']"
									data-width="['750','750','738','450']"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;">The weather started getting rough the tiny ship was tossed. If not for the courage of the fearless
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-3" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-110','-50','-35','-30']" 
									data-fontsize="['18','18','18','14']"
									data-lineheight="['26','26','26','26']"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;">crew the Minnow would be lost. our dreams come true for me and you.
								</div>
								<div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-4" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-30','20','40','30']" 
									data-fontsize="['14','14','14','12']"
									data-lineheight="['24','24','24','24']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;"
									data-style_hover="c:rgb(255, 255, 255);bg:rgba(182, 121, 95);"
									data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
									data-responsive_offset="on" 
									data-responsive="off"
									style="z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Shop Now
								</div>
							</li>
							
							<li data-transition="zoomout" data-slotamount="default"  data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
								<img src="images/slider-1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-5" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-200','-130','-110','-80']" 
									data-fontsize="['38','30','25','16']"
									data-lineheight="['24','24','24','24']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="y:-50px;opacity:0;s:1000;e:Power4.easeOut;" 
									data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 3.04px; color:#333; font-weight: 700; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">new way to purchase your products
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-6" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-135','-80','-60','-50']" 
									data-fontsize="['18','18','18','14']"
									data-lineheight="['26','26','26','26']"
									data-width="['750','750','738','450']"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;">The weather started getting rough the tiny ship was tossed. If not for the courage of the fearless
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-7" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-110','-50','-35','-30']" 
									data-fontsize="['18','18','18','14']"
									data-lineheight="['26','26','26','26']"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.5px; color:#777; font-weight: normal; font-family: 'Lato', sans-serif;">crew the Minnow would be lost. our dreams come true for me and you.
								</div>
								<div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-layer-8" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-30','20','40','30']" 
									data-fontsize="['14','14','14','12']"
									data-lineheight="['24','24','24','24']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:100;e:Power1.easeInOut;"
									data-style_hover="c:rgb(255, 255, 255);bg:rgba(182, 121, 95);"
									data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
									data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
									data-responsive_offset="on" 
									data-responsive="off"
									style="z-index: 10; padding:8px 38px; letter-spacing:0.56px; color: #b6795f; border-color: #b6795f; font-family: 'Montserrat', sans-serif; text-transform:uppercase; background-color:transparent; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Shop Now
								</div>
							</li>
						</ul>
					</div><!-- END REVOLUTION SLIDER -->
				</div><!-- END OF SLIDER WRAPPER -->
				<div class="goto-next"><a href="#category-section"><i class="icon icon-Mouse bounce"></i></a></div>
			</div><!-- Slider Section 1 /- -->
			
			<!-- Services Section -->
			<div class="services-section container-fluid">
				<!-- Container -->
				<div class="container">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Truck"></i><h5>Free delivery</h5><i class="icon icon-Dollar"></i>
							<span class="icon_close"></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Goto"></i><h5>Money Back</h5><i class="icon icon-Dollars"></i>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Headset"></i><h5>24/7 support</h5><i class="icon icon-Timer"></i>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Services Section /- -->
			
			<!-- Category Section -->
			<div id="category-section" class="category-section container-fluid no-padding">
				<div class="category-carousel">
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="category-box layout-1">
							<img src="images/category-1.jpg" alt="category" />
							<div class="category-content">
								<p>shop the latest technologies</p>
								<h5>save upto 40%</h5>
								<a href="#" title="Shop Now">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="category-box layout-2">
							<img src="images/category-2.jpg" alt="category" />
							<div class="category-content">
								<p>New arrivals</p>
								<h5>15 stylish bags here save upto 25%</h5>
								<a href="#" title="Shop Now">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="category-box layout-3">
							<img src="images/category-3.jpg" alt="category" />
							<div class="category-content">
								<p>special offers for men's</p>
								<h5>save upto 60%</h5>
								<a href="#" title="Shop Now">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="category-box layout-3 layout-4">
							<img src="images/category-4.jpg" alt="category" />
							<div class="category-content">
								<p>new homemade Products</p>
								<h5>big offers On</h5>
								<a href="#" title="Shop Now">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Category Section /- -->
			
			<!-- Product Section -->
			<div id="product-section" class="product-section container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Section Header -->
						<div class="section-header">
							<h3>Our Products</h3>
							<p>our vision is to be Earth's most customer centric company</p>
							<img src="images/section-seprator.png" alt="section-seprator" />
						</div><!-- Section Header /- -->
						<ul id="filters" class="products-categories no-left-padding">
							<li><a data-filter="*" class="active" href="#">All Products</a></li>
							<li><a data-filter=".design" href="#">jewellery</a></li>
							<li><a data-filter=".video" href="#">books</a></li>
							<li><a data-filter=".photography" href="#">watches</a></li>
							<li><a data-filter=".web" href="#">shoes</a></li>
							<li><a data-filter=".design" href="#">electronics</a></li>
							<li><a data-filter=".photography" href="#">mobiles</a></li>
							<li><a data-filter=".video" href="#">more<i class="fa fa-angle-down"></i></a></li>
						</ul>
						<div class="input-group">
							<input class="form-control" placeholder="Search You Wants" type="text">
							<span class="input-group-btn">
								<button class="btn btn-search" title="Search" type="button"><i class="icon icon-Search"></i></button>
							</span>
						</div>
						<!-- Products -->
						<ul class="products">
							<!-- Product -->
							<li class="product design">
								<a href="#">
									<img src="images/product-1.jpg" alt="Product" />
									<h5>Stylish Chair</h5>
									<span class="price"><del>$200</del>$139</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product video">
								<a href="#">
									<img src="images/product-2.jpg" alt="Product" />
									<h5>men's casual shoes</h5>
									<span class="price"><del>$150</del>$85</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product photography">
								<a href="#">
									<img src="images/product-3.jpg" alt="Product" />
									<h5>Sun glass</h5>
									<span class="price"><del>$100</del>$35</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product web">
								<a href="#">
									<img src="images/product-4.jpg" alt="Product" />
									<h5>tourist bags</h5>
									<span class="price"><del>$350</del>$279</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product design">
								<a href="#">
									<img src="images/product-5.jpg" alt="Product" />
									<h5>mobile phone</h5>
									<span class="price"><del>$450</del>$359</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product video">
								<a href="#">
									<img src="images/product-6.jpg" alt="Product" />
									<h5>men's winter coat</h5>
									<span class="price"><del>$220</del>$129</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product photography">
								<a href="#">
									<img src="images/product-7.jpg" alt="Product" />
									<h5>Model x12 computer</h5>
									<span class="price"><del>$850</del>$550</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product web">
								<a href="#">
									<img src="images/product-8.jpg" alt="Product" />
									<h5>Stylish headset</h5>
									<span class="price"><del>$50</del>$29</span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
						</ul><!-- Products /- -->
					</div><!-- Row /- -->
					<nav class="ow-pagination">
						<ul class="pager">
							<li class="number"><a href="#">4</a></li>
							<li class="load-more"><a href="#">Load More</a></li>
							<li class="previous"><a href="#"><i class="fa fa-angle-right"></i></a></li>
							<li class="next"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						</ul>
					</nav>
				</div><!-- Container /- -->
			</div><!-- Product Section /- -->
			
			<!-- Collection Section1 -->
			<div id="collection" class="collection-section collection-section1 container-fluid no-padding">
				<div class="collection-carousel">
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="collection-box layout1">
							<img src="images/collection-3.jpg" alt="collection" />
							<div class="collection-content">
								<h5>mens collectios</h5>
								<p>new looks arrivad</p>
								<a href="#" title="Shop Now">shop Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="collection-box layout1 layout2">
							<img src="images/collection-4.jpg" alt="collection" />
							<div class="collection-content">
								<h5>accessories</h5>
								<p>new brands arrivad</p>
								<a href="#" title="Shop Now">shop Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="collection-box layout1 layout3">
							<img src="images/collection-5.jpg" alt="collection" />
							<div class="collection-content">
								<h5>kids collections</h5>
								<p>new looks arrivad</p>
								<a href="#" title="Shop Now">shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Collection Section1 -->
			
			<!-- Dealing Section2 -->
			<div id="dealing" class="dealing-section2 shop-single dealing-section container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Deals Of The Day</h3>
						<p>our vision is to be Earth's most customer centric company</p>
						<img src="images/section-seprator.png" alt="section-seprator" />
					</div><!-- Section Header /- --> 
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="accessories-block">
							<h5>mens accessories</h5>
							<p>The weather started getting rough the tossed. If not for the courage of the fearless crew the Minnow would be lost. would be lost.</p>
							<ul>
								<li><a href="#"><img src="images/deal-3.jpg" alt="deal"></a></li>
								<li><a href="#"><img src="images/deal-4.jpg" alt="deal"></a></li>
								<li><a href="#"><img src="images/deal-5.jpg" alt="deal"></a></li>
								<li><a href="#"><img src="images/deal-6.jpg" alt="deal"></a></li>
								<li><a href="#"><img src="images/deal-7.jpg" alt="deal"></a></li>
								<li><a href="#"><img src="images/deal-8.jpg" alt="deal"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 saleup-img">
						<div class="carousel-item">
							<div class="item">
								<img src="images/deal-9.jpg" alt="deal" />
								<a href="#" class="product-del">
									<h5>mens casual shoes</h5>
									<span class="price"><del>$850</del>$550</span>
								</a>
							</div>
							
							<div class="item">
								<img src="images/deal-9.jpg" alt="deal" />
								<a href="#" class="product-del">
									<h5>mens casual shoes</h5>
									<span class="price"><del>$850</del>$550</span>
								</a>
							</div>
							
							<div class="item">
								<img src="images/deal-9.jpg" alt="deal" />
								<a href="#" class="product-del">
									<h5>mens casual shoes</h5>
									<span class="price"><del>$850</del>$550</span>
								</a>
							</div>
						</div>
						<div data-date="2017/04/04" id="clock-2" class="clock"></div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Dealing Section2 -->
			
			<!-- Testimonial Section -->
			<div class="testimonial-section testimonial-section1 container-fluid">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Clients Testimonials</h3>
						<p>our vision is to be Earth's most customer centric company</p>
						<img src="images/section-seprator.png" alt="section-seprator" />
					</div><!-- Section Header /- -->
					<!-- Main Carousel -->
					<div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#main-carousel1" data-slide-to="0" class="active"></li>
							<li data-target="#main-carousel1" data-slide-to="1"></li>
							<li data-target="#main-carousel1" data-slide-to="2"></li>
						</ol>
						<div role="listbox" class="carousel-inner">
							<div class="item active">
								<div class="testimonial-content">
									<img src="images/testi-1.png" alt="testi" />
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The final frontier. These are the voyages of the Starship Enterprise? As long as we live its you and me baby. There ain't nothin'  Beats all you've ever saw been in trouble with the law since the day. </p>
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Strahow stuart</h3>
									<h5>Web Designer</h5>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-content">
									<img src="images/testi-1.png" alt="testi" />
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The final frontier. These are the voyages of the Starship Enterprise? As long as we live its you and me baby. There ain't nothin'  Beats all you've ever saw been in trouble with the law since the day. </p>
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Strahow stuart</h3>
									<h5>Web Designer</h5>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-content">
									<img src="images/testi-1.png" alt="testi" />
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>The final frontier. These are the voyages of the Starship Enterprise? As long as we live its you and me baby. There ain't nothin'  Beats all you've ever saw been in trouble with the law since the day. </p>
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Strahow stuart</h3>
									<h5>Web Designer</h5>
								</div>
							</div>
						</div>
					</div><!-- Main Carousel /-  -->
				</div><!-- Container /- -->
			</div><!-- Testimonial Section /- -->
			
			<!-- Latest Blog -->
			<div class="blog-section latest-blog container-fluid">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Latest News</h3>
						<p>our vision is to be Earth's most customer centric company</p>
						<img src="images/section-seprator.png" alt="section-seprator" />
					</div><!-- Section Header /- -->
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="type-post">
							<div class="entry-cover">
								<a href="blog-post.html"><img src="images/blog-1.jpg" alt="blog"></a>
								<span class="post-date"><a href="#"><i class="fa fa-calendar-o"></i>July 20</a></span>
							</div>
							<div class="blog-content">
								<h3 class="entry-title"><a href="blog-post.html" title="new Collectios are imported In Our shop.">new Collectios are<span>imported</span> In Our shop.</a></h3>
								<div class="entry-meta">
									<span class="post-like"><a href="#" title="224 Likes"><i class="fa fa-heart-o"></i>224 Likes</a></span>
									<span class="post-admin"><i class="fa fa-user"></i>Posted By <a href="#" title="Max">Max</a></span>
								</div>
								<div class="entry-content">
									<p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost.</p>
									<a href="blog-post.html" title="Read More" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="type-post">
							<div class="entry-cover">
								<a href="blog-post.html"><img src="images/blog-3.jpg" alt="blog"></a>
								<span class="post-date"><a href="#"><i class="fa fa-calendar-o"></i>march 14</a></span>
							</div>
							<div class="blog-content">
								<h3 class="entry-title"><a href="blog-post.html" title="buyers are saying it's good shop">buyers are saying it's <span>good shop</span></a></h3>
								<div class="entry-meta">
									<span class="post-like"><a href="#" title="150 Likes"><i class="fa fa-heart-o"></i>150 Likes</a></span>
									<span class="post-admin"><i class="fa fa-user"></i>Posted By <a href="#" title="Max">Max</a></span>
								</div>
								<div class="entry-content">
									<p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost.</p>
									<a href="blog-post.html" title="Read More" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="type-post">
							<div class="entry-cover">
								<a href="blog-post.html"><img src="images/blog-2.jpg" alt="blog"></a>
								<span class="post-date"><a href="#"><i class="fa fa-calendar-o"></i>june 26</a></span>
							</div>
							<div class="blog-content">
								<h3 class="entry-title"><a title="Best Solds in the this year was watches" href="blog-post.html">Best Solds in the this year was <span>watches</span></a></h3>
								<div class="entry-meta">
									<span class="post-like"><a href="#" title="85 Likes"><i class="fa fa-heart-o"></i>85 Likes</a></span>
									<span class="post-admin"><i class="fa fa-user"></i>Posted By <a href="#" title="Max">Max</a></span>
								</div>
								<div class="entry-content">
									<p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost.</p>
									<a href="blog-post.html" title="Read More" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Latest Blog /- -->
			
			<!-- Selling -->
			<div id="selling" class="container-fluid no-left-padding no-right-padding woocommerce-selling">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Best Selling</h3>
						<p> our vision is to be Earth's most customer centric company</p>
						<img src="images/section-seprator.png" alt="section-seprator" />
					</div><!-- Section Header /- -->
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-1.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">mens casual belts</a></h6>
								<span class="price"><del>$75</del> $49</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-2.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">attractive chains</a></h6>
								<span class="price"><del>$220</del> $149</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-3.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">ladies bags</a></h6>
								<span class="price"><del>$325</del> $249</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-4.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">casual shirts</a></h6>
								<span class="price"><del>$240</del> $179</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-5.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">ladies wallets</a></h6>
								<span class="price"><del>$120</del> $79</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div  class="selling-box">
							<img src="images/selling-6.jpg" alt="selling" />
							<div class="selling-content">
								<h6><a href="#">huvai chappals</a></h6>
								<span class="price"><del>$850</del> $550</span>
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<div class="icon-list">
								<a href="#"><i class="fa fa-arrows-alt"></i></a>
								<a href="#"><i class="fa fa-heart-o"></i></a>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Selling /- -->
			
			<!-- Clients -->
			<div class="clients container-fluid">
				<!-- Container -->
				<div class="container">
					<div class="clients-carousel">
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-1.png" alt="client-1"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-2.png" alt="client-2"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-3.png" alt="client-3"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-4.png" alt="client-4"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-5.png" alt="client-5"/></a></div>
						
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-1.png" alt="client-1"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-2.png" alt="client-2"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-3.png" alt="client-3"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-4.png" alt="client-4"/></a></div>
						<div class="col-md-12 item"><a href="#" title="client"><img src="images/client-5.png" alt="client-5"/></a></div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Clients /- -->
		</main>
		
		<!-- Footer Main -->
		<footer id="footer-main" class="footer-main container-fluid">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Widget About -->
					<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_about">
						<a href="index.html" title="Max Shop">Max <span>Shop</span></a>
						<div class="info">
							<p><i class="icon icon-Pointer"></i>Max Shop, 65 Huge Street Melbourne, 2850 Australia.</p>
							<p><i class="icon icon-Phone2"></i><a href="tel:(11)1234567890" title="Phone" class="phone">(11) 123 456 7890</a></p>
							<p><i class="icon icon-Imbox"></i><a href="mailto:info@maxshop.com" title="info@maxshop.com">info@maxshop.com</a></p>
						</div>
					</aside><!-- Widget About /- -->
					<!-- Widget Links -->
					<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links">
						<h3 class="widget-title">Popular Links</h3>
						<ul>
							<li><a href="#product-section" title="Popular Products">Popular Products</a></li>
							<li><a href="#selling" title="Best Selling">Best Selling</a></li>
							<li><a href="about.html" title="About Us">About Us</a></li>
							<li><a href="#dealing" title="Deal Of The Day">Deal Of The Day</a></li>
							<li><a href="#collection" title="Product Collections">Product Collections</a></li>
							<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
						</ul>
					</aside><!-- Widget Links /- -->
					<!-- Widget Account -->
					<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links widget_account">
						<h3 class="widget-title">my account</h3>
						<ul>
							<li><a href="#" title="My Order Details">My Order Details</a></li>
							<li><a href="#" title="My credit Offers">My credit Offers</a></li>
							<li><a href="#" title="My addresses">My addresses</a></li>
							<li><a href="#" title="My Personal Details">My Personal Details</a></li>
							<li><a href="#" title="My Account Details">My Account Details</a></li>
						</ul>
					</aside><!-- Widget Account /- -->
					<!-- Widget Newsletter -->
					<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_newsletter">
						<h3 class="widget-title">newsletter</h3>
						<div class="input-group">
							<input class="form-control" placeholder="email address" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-paper-plane-o"></i></button>
							</span>
						</div>
						<h5>Get New Updates From Our Collections</h5>
						<h3 class="widget-title widget-title-1">Follow Us</h3>
						<ul class="social">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</aside><!-- Widget Newsletter /- -->
				</div>
				<div class="copyright-section">
					<div class="coyright-content">
						<p>&copy; Max shop. all rights reserved</p>
					</div>	
					<ul>
						<li><a href="#" title="Delivery Information">Delivery Information</a></li>
						<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
						<li><a href="#" title="Terms & Condition">Terms & Condition</a></li>
					</ul>
				</div>
			</div><!-- Container /- -->
		</footer><!-- Footer Main /- -->

	</div>

	
	<!-- JQuery v1.12.4 -->
	<script src="{{ asset('../asset/js/jquery.min.js') }}"></script>

	<!-- Library - Js -->
	<script src="{{ asset('../asset/libraries/lib.js') }}"></script>
	
	<script src="{{ asset('../asset/libraries/jquery.countdown.min.js') }}"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('../asset/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>

	<!-- Library - Theme JS -->
	<script src="{{ asset('../asset/js/functions.js') }}"></script>
	
</body>
</html>
