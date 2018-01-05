<?php
use yii\helpers\Url;


 ?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo Url::to('@aboutme') ?>/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            .sticky-side-element {
                    position: fixed;
                    top: 50%;
                    margin-top: -24px;
                    left: auto;
                    right: -31px;
                    height: 48px;
                    line-height: 48px;
                    padding: 0 15px;
                    background-color: #EEE;
                    color: #222;
                    font-weight: 700;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    font-size: 14px;
                    -webkit-transform: rotate(270deg);
                    -ms-transform: rotate(270deg);
                    -o-transform: rotate(270deg);
                    transform: rotate(270deg);
            }
        </style>
	<!-- Document Title
	============================================= -->
	<title><?php foreach ($model as $value) {
	# code...
		echo $value['pole1'];

	} ?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header semi-transparent full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo Url::to('@aboutme') ?>/images/logo-dark.png"><img src="<?php echo Url::to('@aboutme') ?>/images/logo.png" alt="coderx Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo Url::to('@aboutme') ?>/images/logo-dark@2x.png"><img src="<?php echo Url::to('@aboutme') ?>/images/logo@2x.png" alt="coderx Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="<?php echo Url::home(); ?>"><div><?php foreach ($model as $value) {
																				# code...
																					echo $value['pole2'];

																				} ?></div></a>
								
							</li>
							<li><a href="#content"><div><?php foreach ($model as $value) {
															# code...
																echo $value['pole3'];

															} ?></div></a>
								
							</li>
							<li class="mega-menu"><a href="#actions"><div><?php foreach ($model as $value) {
																				# code...
																					echo $value['pole2'];

																				} ?></div></a>
								
							</li>
							<li><a href="#content"><div><?php foreach ($model as $value) {
	# code...
		echo $value['pole4'];

	} ?></div></a>
								
							</li>
							<li class="mega-menu"><a href="<?php echo Url::toRoute('site/about'); ?>"><div><?php foreach ($model as $value) {
	# code...
		echo $value['pole5'];

	} ?></div></a>
								
							</li>
							<li class="mega-menu"><a href="#contacts"><div><?php foreach ($model as $value) {
								# code...
									echo $value['pole6'];
							
								} ?></div></a>
								
							</li>
							<li><a href="#apps"><div> <?php foreach ($model as $value) {
								# code...
									echo $value['pole7'];
							
								} ?></div></a>
								<!-- <ul>
									<li><a href="shop.html"><div>4 Columns</div></a></li>
									<li><a href="shop-3.html"><div>3 Columns</div></a>
										<ul>
											<li><a href="shop-3.html"><div>Full Width</div></a></li>
											<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-2.html"><div>2 Columns</div></a>
										<ul>
											<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-1.html"><div>1 Columns</div></a>
										<ul>
											<li><a href="shop-1.html"><div>Full Width</div></a></li>
											<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>
									<li><a href="shop-combination-filter.html"><div>Combination Filter</div></a></li>
									<li><a href="shop-single.html"><div>Single Product</div></a>
										<ul>
											<li><a href="shop-single.html"><div>Full Width</div></a></li>
											<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>
											<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
											<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>
										</ul>
									</li>
									<li><a href="cart.html"><div>Cart</div></a></li>
									<li><a href="checkout.html"><div>Checkout</div></a></li>
								</ul> -->
							<!-- </li>
							<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
								
							</li> -->
						</ul>

						<!-- Top Cart
						============================================= -->
						<!-- <div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div> --><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax" style="background-color: #222;">

			<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

				<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/slider/full/1.jpg" alt="Slider"></a>
				<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/slider/full/2.jpg" alt="Slider"></a>
				<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/slider/full/3.jpg" alt="Slider"></a>
				<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/slider/full/4.jpg" alt="Slider"></a>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
                            <div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?php echo Url::to('@aboutme') ?>/images/services/iphone6.png" alt="Iphone">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3><?php foreach ($model as $value) {
echo $value['pole10'];

} ?></h3>
						</div>

						<p><?php foreach ($model as $value) {
						echo $value['pole8'];
						
						} ?></p>

						<p><?php foreach ($model as $value) {
echo $value['pole9'];

} ?></p>

						<!-- <a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Читать далее</a> -->

					</div>

				</div>

                <div class="section topmargin nobottommargin nobottomborder" id="actions">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3 id=""><?php foreach ($model as $value) {

echo $value['pole11'];

} ?></h3>
						</div>
					</div>
				</div>

				<div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">

					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/1.jpg" alt="Open Imagination">
							</a>
							<div class="portfolio-overlay">
								<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html"><?php foreach ($model as $value) {
								
echo $value['pole12'];

} ?></a></h3>
							<span><a href="#">Media</a>, <a href="#">Icons</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
							</a>
							<div class="portfolio-overlay">
								<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html"><?php foreach ($model as $value) {
echo $value['pole13'];

} ?></a></h3>
							<span><a href="#">Illustrations</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-graphics pf-uielements">
						<div class="portfolio-image">
							<a href="#">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
							</a>
							<div class="portfolio-overlay">
								<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
								<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single-video.html"><?php foreach ($model as $value) {
echo $value['pole14'];

} ?></a></h3>
							<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-icons pf-illustrations">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/4.jpg" alt="Open Imagination">
							</a>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single-gallery.html"><?php foreach ($model as $value) {
echo $value['pole15'];

} ?></a></h3>
							<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-uielements pf-media">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/5.jpg" alt="Console Activity">
							</a>
							<div class="portfolio-overlay">
								<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html"><?php foreach ($model as $value) {
echo $value['pole16'];

} ?></a></h3>
							<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-graphics pf-illustrations">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/6.jpg" alt="Open Imagination">
							</a>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single-gallery.html"><?php foreach ($model as $value) {
echo $value['pole17'];

} ?></a></h3>
							<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-uielements pf-icons">
						<div class="portfolio-image">
							<a href="portfolio-single-video.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/7.jpg" alt="Backpack Contents">
							</a>
							<div class="portfolio-overlay">
								<a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
								<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single-video.html"><?php foreach ($model as $value) {
echo $value['pole18'];

} ?></a></h3>
							<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
						</div>
					</article>

					<article class="portfolio-item pf-graphics">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="<?php echo Url::to('@aboutme') ?>/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
							</a>
							<div class="portfolio-overlay">
								<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html"><?php foreach ($model as $value) {
echo $value['pole19'];

} ?></a></h3>
							<span><a href="#">Graphics</a></span>
						</div>
					</article>

				</div>

				<div class="container clearfix" id="apps">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center">
							<h2><?php foreach ($model as $value) {
echo $value['pole20'];

} ?></h2>
							<span class="divcenter"><?php foreach ($model as $value) {
echo $value['pole21'];

} ?></span>
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole22'];

} ?></h3>
								<p><?php foreach ($model as $value) {
echo $value['pole23'];

} ?></p>
							</div>

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-paper"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole24'];

} ?></h3>
								<p><?php foreach ($model as $value) {
echo $value['pole25'];

} ?></p>
							</div>

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-layers"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole26'];

} ?></h3>
								<p><?php foreach ($model as $value) {
echo $value['pole27'];

} ?></p>
							</div>

						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="<?php echo Url::to('@aboutme') ?>/images/services/iphone7.png" alt="iphone 2">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-power"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole28'];

} ?></h3>
								<p><?php foreach ($model as $value) {
echo $value['pole29'];

} ?></p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole30'];

} ?></h3>
								<p><?php foreach ($model as $value) {
echo $value['pole31'];

} ?></p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bulb"></i></a>
								</div>
								<h3><?php foreach ($model as $value) {
echo $value['pole32'];

} ?></h3>
								<!-- <p>не заходя в казино</p> -->
							</div>

						</div>

					</div>

				</div>

				
				


				<div class="clear"></div>

				<a href="portfolio.html" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						Доступен в <strong>AppStore</strong> и <strong>PlayMarket</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?php echo Url::to('@aboutme') ?>/images/services/iphone6.png" alt="Iphone">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3><?php foreach ($model as $value) {
echo $value['pole33'];

} ?></h3>
						</div>

						<p><?php foreach ($model as $value) {
echo $value['pole34'];

} ?></p>

						<p><?php foreach ($model as $value) {
echo $value['pole35'];

} ?></p>

						<!-- <a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Читать далее</a> -->

					</div>

				</div>

				<div class="section parallax dark nobottommargin" style="background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

					<div class="heading-block center">
						<h3><?php foreach ($model as $value) {
echo $value['pole36'];

} ?></h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p><?php foreach ($model as $value) {
echo $value['pole37'];

} ?></p>
										<div class="testi-meta">
											<?php foreach ($model as $value) {
echo $value['pole38'];

} ?>
											<span><?php foreach ($model as $value) {
echo $value['pole39'];

} ?></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p><?php foreach ($model as $value) {
echo $value['pole40'];

} ?></p>
										<div class="testi-meta">
											<?php foreach ($model as $value) {
echo $value['pole41'];

} ?>
											<span><?php foreach ($model as $value) {
echo $value['pole42'];

} ?></span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p><?php foreach ($model as $value) {
echo $value['pole43'];

} ?></p>
										<div class="testi-meta">
											<?php foreach ($model as $value) {
echo $value['pole44'];

} ?>
											<span><?php foreach ($model as $value) {
echo $value['pole45'];

} ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				
                               
		<!-- Page Sub Menu
		============================================= -->
		<div class="clear" id="contacts"></div>

				<a href="portfolio.html" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						<strong><?php foreach ($model as $value) {
echo $value['pole46'];

} ?></strong> 
					</div>
				</a>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Google Map
					============================================= -->
					<div class="col-md-6 bottommargin">

						<section id="google-map" class="gmap" style="height: 240px;"></section>

					</div><!-- Google Map End -->

					<div class="col-md-6">

						<!-- Contact Info
						============================================= -->
						<div class="col_two_fifth">

							<address>
								<strong><?php foreach ($model as $value) {
echo $value['pole47'];

} ?></strong><br>
								<?php foreach ($model as $value) {
echo $value['pole48'];

} ?><br>
								<?php foreach ($model as $value) {
echo $value['pole49'];

} ?><br>
							</address>
							<abbr title="Phone Number"><strong><?php foreach ($model as $value) {
echo $value['pole50'];

} ?></strong></abbr> <?php foreach ($model as $value) {
echo $value['pole51'];

} ?><br>
							<abbr title="Fax"><strong><?php foreach ($model as $value) {
echo $value['pole52'];

} ?></strong></abbr><?php foreach ($model as $value) {
echo $value['pole53'];

} ?><br>
							<abbr title="Email Address"><strong><?php foreach ($model as $value) {
echo $value['pole54'];

} ?></strong></abbr> <?php foreach ($model as $value) {
echo $value['pole55'];

} ?>

						</div><!-- Contact Info End -->

						<!-- Testimonials
						============================================= -->
						<div class="col_three_fifth col_last">

							<div class="widget notoppadding noborder">

								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
									<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>

						</div><!-- Testimonial End -->

						<div class="clear"></div>

						<!-- Modal Contact Form
						============================================= -->
						<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge hidden-xs center"><?php foreach ($model as $value) {
echo $value['pole56'];

} ?></a>
						<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block visible-xs center"><?php foreach ($model as $value) {
echo $value['pole57'];

} ?></a>

						<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="contactFormModalLabel"><?php foreach ($model as $value) {
echo $value['pole58'];

} ?></h4>
									</div>
									<div class="modal-body">

										<div class="contact-widget">
											<div class="contact-form-result"></div>
											<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

												<div class="form-process"></div>

												<div class="col_half">
													<label for="template-contactform-name"><?php foreach ($model as $value) {
echo $value['pole59'];

} ?><small>*</small></label>
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-email"><?php foreach ($model as $value) {
echo $value['pole60'];

} ?><small>*</small></label>
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
												</div>

												<div class="clear"></div>

												<div class="col_half">
													<label for="template-contactform-phone"><?php foreach ($model as $value) {
echo $value['pole61'];

} ?></label>
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-service"><?php foreach ($model as $value) {
echo $value['pole62'];

} ?></label>
													<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
														<option value=""><?php foreach ($model as $value) {
echo $value['pole63'];

} ?></option>
														<option value="Wordpress"><?php foreach ($model as $value) {
echo $value['pole64'];

} ?></option>
														<option value="PHP / MySQL"><?php foreach ($model as $value) {
echo $value['pole65'];

} ?></option>
														<option value="HTML5 / CSS3"><?php foreach ($model as $value) {
echo $value['pole66'];

} ?></option>
														<option value="Graphic Design"><?php foreach ($model as $value) {
echo $value['pole67'];

} ?></option>
													</select>
												</div>

												<div class="clear"></div>

												<div class="col_full">
													<label for="template-contactform-subject"> <?php foreach ($model as $value) {
echo $value['pole68'];

} ?><small>*</small></label>
													<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
												</div>

												<div class="col_full">
													<label for="template-contactform-message"><?php foreach ($model as $value) {
echo $value['pole69'];

} ?><small>*</small></label>
													<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
												</div>

												<div class="col_full hidden">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
												</div>

												<div class="col_full">
													<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><?php foreach ($model as $value) {
echo $value['pole70'];

} ?></button>
												</div>

											</form>

										</div>


									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Modal Contact Form End -->

					</div>

				</div>

			</div>

		</section><!-- #content end -->

				

				<div class="container clearfix">

					<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/1.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/2.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/3.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/4.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/5.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/6.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/7.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/8.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/9.png" alt="Clients"></a></div>
						<div class="oc-item"><a href="#"><img src="<?php echo Url::to('@aboutme') ?>/images/clients/10.png" alt="Clients"></a></div>

					</div>


				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="<?php echo Url::to('@aboutme') ?>/images/footer-widget-logo.png" alt="" class="footer-logo">

								<p><?php foreach ($model as $value) {
echo $value['pole71'];

} ?><strong><?php foreach ($model as $value) {
echo $value['pole72'];

} ?>
</strong>, <strong><?php foreach ($model as $value) {
echo $value['pole73'];

} ?></strong> &amp; <strong><?php foreach ($model as $value) {
echo $value['pole74'];

} ?></strong> <?php foreach ($model as $value) {
echo $value['pole75'];

} ?>
</p>

								<div style="background: url('<?php echo Url::to("@aboutme") ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong><?php foreach ($model as $value) {
echo $value['pole76'];

} ?></strong><br>
										<?php foreach ($model as $value) {
echo $value['pole77'];

} ?><br>
										<?php foreach ($model as $value) {
echo $value['pole78'];

} ?><br>
									</address>
									<abbr title="Phone Number"><strong><?php foreach ($model as $value) {
echo $value['pole79'];

} ?></strong></abbr> <?php foreach ($model as $value) {
echo $value['pole80'];

} ?><br>
									<abbr title="Fax"><strong><?php foreach ($model as $value) {
echo $value['pole81'];

} ?></strong></abbr> <?php foreach ($model as $value) {
echo $value['pole82'];

} ?><br>
									<abbr title="Email Address"><strong><?php foreach ($model as $value) {
echo $value['pole83'];

} ?></strong></abbr> <?php foreach ($model as $value) {
echo $value['pole84'];

} ?>
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4><?php foreach ($model as $value) {
echo $value['pole85'];

} ?>
</h4>

								<ul>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole86'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole87'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole88'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole89'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole90'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole91'];

} ?></a></li>
									<li><a href="#"><?php foreach ($model as $value) {
echo $value['pole92'];

} ?></a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4><?php foreach ($model as $value) {
echo $value['pole93'];

} ?></h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#"><?php foreach ($model as $value) {
echo $value['pole94'];

} ?></a></h4>
											</div>
											<ul class="entry-meta">
												<li><?php foreach ($model as $value) {
echo $value['pole95'];

} ?></li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#"><?php foreach ($model as $value) {
echo $value['pole96'];

} ?></a></h4>
											</div>
											<ul class="entry-meta">
												<li><?php foreach ($model as $value) {
echo $value['pole97'];

} ?></li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#"><?php foreach ($model as $value) {
echo $value['pole98'];

} ?></a></h4>
											</div>
											<ul class="entry-meta">
												<li><?php foreach ($model as $value) {
echo $value['pole99'];

} ?>
</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Всего скачиваний</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Клиентов</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Новости</strong> Ежедневные оповещения о новостях &amp; Акциях:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Введите ваш email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">подписаться</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Мы</strong><br>в Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Мы</strong><br><?php foreach ($model as $value) {
echo $value['pole100'];

} ?></small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 Все права защищены coderx Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> astana@7777777@gmail.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +77023531202 <span class="middot">&middot;</span> <i class="icon-skype2"></i> coderxOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>


	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/functions.js"></script>
        <script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/functions.js"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="<?php echo Url::to('@aboutme') ?>/js/jquery.gmap.js"></script>

	<script type="text/javascript">

		$('#google-map').gMap({
			address: '43.855427, 77.043372',
			maptype: 'ROADMAP',
			zoom: 15,
			markers: [
				{
					address: "43.855427, 77.043372",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>


</body>
</html>


