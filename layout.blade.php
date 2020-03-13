<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>

	<link href="{{asset('http://fonts.googleapis.com/css?family=Dosis:300,400')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('assets/dest/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('assets/dest/css/huong-style.css')}}">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	@yield('css')
</head>
<body>
<div id="home">
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i>53 đường 144 ,phường Tân Phú, Quận 9</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0382 484 093</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="#">Đăng kí</a></li>
						<li><a href="#">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('home')}}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('home')}}">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="product_type.html">Sản phẩm 1</a></li>
								<li><a href="product_type.html">Sản phẩm 2</a></li>
								<li><a href="product_type.html">Sản phẩm 4</a></li>
							</ul>
						</li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	
	@yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Instagram Feed</h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Chi nhánh</h4>
						<div>
							<ul>
								<li><a href=""><i class="fa fa-chevron-right"></i> Alley Bakery 1 (Chi nhánh Nguyễn Trãi)</a></li>
								<li><a href=""><i class="fa fa-chevron-right"></i> Alley Bakery 2 (Chi nhánh Võ Văn Ngân)</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>129/15,đường 154,khu phố 3,phường Tân Phú,Quận 9,Tp.HCM,Số điện thoại:0382.484.093</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Design website. (&copy;) 2020</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->

</div>
	<!-- include js files -->
	
	<script src="{{asset('assets/dest/js/jquery.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/animo/Animo.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/dug/dug.js')}}"></script>
	<script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>
	<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('assets/dest/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/dest/js/wow.min.js')}}"></script>
	

	<!--customjs-->
	<script src="{{asset('assets/dest/js/custom2.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	@yield('js')
</body>
</html>
