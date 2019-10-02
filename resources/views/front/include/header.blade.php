<!DOCTYPE html>
<html lang="fa-IR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link rel="shortcut icon" href="images/favicon.ico">
	<title> مشاور املاک </title>
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/ionicons.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/icon-moon.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/magnific-popup.min.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/custom.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/all.css">
	<meta name="google-signin-scope" content="profile email">
	<meta name="google-signin-client_id"
		content="87419844016-9ptgqgs06qp10uj97sih6otq373bjomr.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<link rel="stylesheet" href="css/landmark-map.css" media="all">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			<script src="js/html5shiv.min.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<div class="site">
		<header class="header header-desktop">
			<div class="navbar-wrapper">
				<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 hidden-xs">
								<div class="topmeta">
									<i class="fa fa-mobile"></i>
									هم اکنون تماس بگیرید <a href="tel:(+1)-800-555-6789"
										class="ltr_text">(+1)-800-555-6789</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="topmeta topmeta-right pull-right">
									<a class="popup-login" href="#popup_01" data-init="magnificPopup"
										data-options='{"type":"inline","removalDelay":700}' data-effect="mfp-3d-unfold"
										title="ورود">ورود
									</a>
									<a class="popup-login" href="#popup_02" data-init="magnificPopup"
										data-options='{"type":"inline","removalDelay":700}' data-effect="mfp-3d-unfold"
										title="ثبت نام">ثبت نام
									</a>

									<!-- popup-content mfp-with-anim mfp-hide -->
									<div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_01">
										<h4 class="title">ورود</h4>
										@include('front.include.errors')
										<form class="login-member-container" method="post"
											action="{{route('user.login')}}">
											{{csrf_field()}}
											<div class="social-login-widget">
												<div class="social-login-connect-with">ورود با:</div>
												<div class="social-login-provider-list">
													<a rel="nofollow" href="javascript:void(0);" title="ورود با فیسبوک"
														data-provider="Facebook">
														<i class="fa fa-facebook"></i>
													</a>
													<a rel="nofollow" href="javascript:void(0);" title="ورود با گوگل"
														data-provider="Google">
														<div class="g-signin2" data-onsuccess="onSignIn"
															data-theme="dark"></div>
															<i class="fa fa-google"></i>

													</a>
													<a rel="nofollow" href="javascript:void(0);" title="ورود با توییتر"
														data-provider="Twitter">
														<img alt="Twitter" title="ورود با توییتر"
															src="images/icons/twitter.png">
													</a>
												</div>
											</div>
											<div class="login-member-wrap">
												<div class="row">
													<div class="col-lg-12">
														<div class="register-member-left">
															<div class="item-wrap">
																<label>شماره تماس</label>
																<input type="text" id="user_name_login" name="phone"
																	class="required" placeholder="********07" required
																	value="{{old('phone')}}">
															</div>
															<div class="item-wrap">
																<label>رمز عبور</label>
																<input type="password" id="password_login"
																	name="password" value="" class="required" required>
															</div>
														</div>
														<div class="login-member-action">
															<button type="submit" name="login-account"
																class="button btn-block">
																ورود <i class="fa-li fa fa-spinner fa-spin hide"></i>
															</button>
															<p>
																<span>حساب کاربری ندارید؟</span>
																<a class="color" href="#" title="Register now!">هم اکنون
																	ثبت نام
																	کنید!</a>
															</p>
														</div>
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
										</form>
									</div><!-- End / popup-content mfp-with-anim mfp-hide -->
									<!-- popup-content mfp-with-anim mfp-hide -->
									<div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_02">
										<h4 class="title">ثبت نام</h4>
										@include('front.include.errors')
										<form class="login-member-container" method="post"
											action="{{route('user.login')}}">
											{{csrf_field()}}
											<div class="login-member-wrap">
												<div class="row">
													<div class="col-lg-12">
														<div class="register-member-left">
															<div class="item-wrap form-group">
																<label>نام:</label>
																<input type="text" id="user_name_login" name="phone"
																	class="required" required value="{{old('phone')}}">
															</div>
															<div class="item-wrap">
																<label>تخلص:</label>
																<input type="text" id="password_login" name="password"
																	value="" class="required" required>
															</div>
															<div class="item-wrap form-group">
																<label>شماره تماس:</label>
																<input type="text" id="user_name_login" name="phone"
																	class="required" placeholder="********07" required
																	value="{{old('phone')}}">
															</div>
															<div class="item-wrap">
																<label>رمز عبور:</label>
																<input type="password" id="password_login"
																	name="password" value="" class="required" required>
															</div>
														</div>
														<div class="login-member-action">
															<button type="submit" name="login-account"
																class="button btn-block">
																ثبت نام <i class="fa-li fa fa-spinner fa-spin hide"></i>
															</button>
															<p>
																<span>حساب کاربری دارید؟</span>
																<a class="color" href="#" title="ورود">
																	ورود!
																</a>
															</p>
														</div>
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
										</form>
									</div><!-- End / popup-content mfp-with-anim mfp-hide -->
									<div class="widget widget-social">
										<div class="social">
											<div class="social-all">
												<a href="#" target="_blank" class="facebook"><i
														class="fa fa-facebook"></i></a>
												<a href="#" target="_blank" class="google"><i
														class="fa fa-telegram"></i></a>
												<a href="#" target="_blank" class="twitter"><i
														class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default">
					<div class="container">
						<div class="navbar-content">
							<div class="navbar-header pull-left">
								<button data-target=".nav-collapse" class="btn-navbar icon-menu" type="button">
									<i class="fa fa-bars"></i>
								</button>
								<a href="./" class="navbar-brand" title="Real Estate HTML Template">
									<img class="logo-img logo-normal" src="images/logo.png"
										alt="Real Estate HTML Template">
								</a>
							</div>
							<div class="pull-right navbar-meta meta-property">
								<div class="meta-content">
									<a href="{{route('front.addProperty')}}" class="meta-property button">
										<span><i class="fa fa-plus-circle"></i></span>افزودن ملک
									</a>
								</div>
							</div>
							<div class="pull-right header-minicart">
								<div class="widget-shopping-cart-content">
									<a class="minicart-link-hover" title="View cart" href="cart.html">
										<i class="ion-android-cart"></i><span>0</span>
									</a>
									<div class="wrap-minicart">
										<ul class="cart_list product_list_widget">
											<li class="empty">محصولی در سبد خرید وجود ندارد.</li>
										</ul><!-- end product list -->
									</div> <!-- /.wrap_minicart -->
								</div>
							</div>
							<nav class="pull-right main-menu">
								<ul class="nav-collapse navbar-nav">
									<li class="current">
										<a href="./">خانه</a>
										<ul class="sub-menu">
											<li class="current"><a href="index.html">خانه با جستجوی پیشرفته</a></li>
											<li><a href="index-2.html">خانه با نقشه عمودی</a></li>
											<li><a href="index-3.html">خانه با نقشه افقی</a></li>
											<li><a href="index-4.html">خانه با نقشه نصف</a></li>
											<li><a href="index-5.html">خانه با جستجوی نقشه</a></li>
											<li><a href="index-6.html">خانه با یک ملک</a></li>
											<li><a href="index-7.html">خانه سفارشی 1</a></li>
											<li><a href="index-8.html">خانه سفارشی 2</a></li>
											<li><a href="index-9.html">خانه سفارشی 3</a></li>
										</ul>
										<i class="fa fa-angle-down"></i>
									</li>
									<li>
										<a href="{{route('front.properties-list')}}">ملک ها</a>
										<i class="fa fa-angle-down"></i>
									</li>
									<li>
										<a href="#">نمایندگان</a>
										<ul class="sub-menu">
											<li><a href="agent-list.html">لیست نمایندگان</a></li>
											<li><a href="agent-detail.html">جزئیات نماینده</a></li>
										</ul>
										<i class="fa fa-angle-down"></i>
									</li>
									<li>
										<a href="{{route('front.blog')}}">بلاگ</a>
										<i class="fa fa-angle-down"></i>
									</li>
									<li class="megamenu mega-col-4">
										<a href="{{route('front.about-us')}}">درباره ما</a>
										<i class="fa fa-angle-down"></i>
									</li>
									<li class="megamenu mega-col-4">
										<a href="{{route('front.contact-us')}}">تماس باما</a>
										<i class="fa fa-angle-down"></i>
									</li>
								</ul>
							</nav>
							<div class="pull-right navbar-meta meta-property show_on_mobile">
								<div class="meta-content">
									<a href="#" class="meta-property button">
										<span><i class="fa fa-plus-circle"></i></span>افزودن ملک
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>