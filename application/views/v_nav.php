<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/fonts/themify/themify-icons.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/fonts/elegant-font/html-css/style.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/animate/animate.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url();?>assets/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.instagram.com/perabotrumahtangga.murah" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					Ayo belanja di Mamatata Store banyak diskon menarik
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						mamatata@gmail.com
					</span>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url(),'web/index'?>" class="logo">
					<img src="<?php echo base_url(),'assets/images/icons/logo.png'?>" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li class="sale-noti">
								<a href="<?php echo base_url().''?>">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url().'web/product'?>">Shop</a>
							</li>

							<li>
								<a href="<?php echo base_url().'web/blog'?>">Blog</a>
							</li>

							<li>
								<a href="<?php echo base_url().'web/about'?>">About</a>
							</li>

							<li>
								<a href="<?php echo base_url().'web/contact'?>">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url().'assets/images/icons/icon-header-01.png'?>" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url().'assets/images/icons/icon-header-02.png'?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul id="detail_cart" class="header-cart-wrapitem">

							</ul>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url() ?>web/cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a id="checkout">
										<button class="check_out flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</button>
									</a>
									<!-- <a id="checkout" class="s-text13 active1">
										<button class="check_out btn btn-success btn-block">check out</button>
									</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?php echo base_url(),'web'?>" class="logo-mobile">
				<img src="<?php echo base_url().'assets/images/icons/logo.png'?>" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url().'assets/images/icons/icon-header-01.png'?>" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url().'assets/images/icons/icon-header-02.png'?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<p>empty cart</p>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								mamatata@gmail.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url().'web/index'?>">Home</a>
					</li>
					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>
					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>