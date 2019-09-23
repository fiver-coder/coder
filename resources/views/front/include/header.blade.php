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
									<a class="popup-login" href="{{route('front.login.by')}}"
										title="Login / Register">ورود / ثبت نام</a>
									<!-- popup-content mfp-with-anim mfp-hide -->
									<div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_01">
										<h4 class="title">ورود</h4>
										<button type="submit" name="login-phone" data-toggle="modal"
											data-target="#popup_01" class="button login-phone">
											ورود با شماره تماس <i class="fa-li fa fa-spinner fa-spin hide"></i>
										</button>
										<button type="submit" name="login-email" class="button login-email">
											ورود با ایمیل <i class="fa-li fa fa-spinner fa-spin hide"></i>
										</button>
										<!-- popup-content mfp-with-anim mfp-hide -->
										<div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_01">
											<h4 class="title">ورود</h4>
											<form class="login-member-container">
												<div class="login-member-wrap">
													<div class="register-member-left">
														<div class="item-wrap">
															<label>نام کاربری</label>
															<input type="text" id="user_name_login"
																name="user_name_login" value="" class="required">
														</div>
														<div class="item-wrap">
															<label>رمز عبور</label>
															<input type="password" id="password_login"
																name="password_login" value="" class="required">
														</div>
													</div>
													<div class="login-member-action">
														<button type="submit" name="login-account" class="button">
															ورود <i class="fa-li fa fa-spinner fa-spin hide"></i>
														</button>
														<p>
															<span>حساب کاربری ندارید؟</span>
															<a class="color" href="#" title="Register now!">هم اکنون ثبت
																نام کنید!</a>
														</p>
													</div>
												</div>
											</form>
										</div>
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
									<a href="#" class="meta-property button">
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
										<a href="#">ملک ها</a>
										<ul class="sub-menu">
											<li><a href="properties.html">لیست ملک ها</a></li>
											<li><a href="property-fullwidth.html">ملک تمام عرض</a></li>
											<li><a href="property-left-sidebar.html">ملک با نوار کناری راست</a></li>
											<li><a href="property-boxed-layout.html">ملک طرح جعبه ای</a></li>
											<li><a href="property-tab-style.html">ملک حالت تب</a></li>
											<li><a href="property-right-sidebar.html">ملک با نوار کناری چپ</a></li>
											<li><a href="property-landing-page.html">ملک با توضیحات تکمیلی</a></li>
										</ul>
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
										<a href="#">صفحات</a>
										<ul class="sub-menu">
											<li><a href="header-search-form.html">سرصفحه با فرم جستجو</a></li>
											<li><a href="header-below-map.html">سرصفحه زیر نقشه</a></li>
											<li><a href="header-toggle-menu.html">سر صفحه با دکمه منو</a></li>
											<li><a href="blog.html">لیست مطالب بلاگ</a></li>
											<li><a href="blog-mansory.html">بلاگ حالت کاشی</a></li>
											<li><a href="blog-detail-fullwidth.html">جزئیات بلاگ تمام عرض</a></li>
											<li><a href="blog-detail-sidebar.html">جزئیات بلاگ با نوار کناری</a></li>
											<li><a href="agent-package.html">پکیج نماینده</a></li>
											<li><a href="about-us.html">درباره ما</a></li>
											<li><a href="contact-us.html">تماس با ما</a></li>
											<li><a href="404.html">خطای 404</a></li>
										</ul>
										<i class="fa fa-angle-down"></i>
									</li>
									<li class="megamenu mega-col-4">
										<a href="#">فروشگاه</a>
										<ul class="sub-menu">
											<li>
												<a href="#">خدمات فروشگاه</a>
												<ul class="sub-menu">
													<li><a href="shop-grid.html">فروشگاه توری</a></li>
													<li><a href="shop-list.html">فروشگاه سطری</a></li>
													<li><a href="shop-detail.html">جزئیات فروشگاه</a></li>
													<li><a href="cart-empty.html">سبد خرید خالی</a></li>
													<li><a href="cart.html">سبد خرید</a></li>
													<li><a href="checkout.html">پرداخت</a></li>
													<li><a href="my-account.html">حساب کاربری</a></li>
												</ul>
												<i class="fa fa-angle-down"></i>
											</li>
											<li>
												<div class="megamenu-widget-area">
													<div class="widget widget-products">
														<h3 class="widget-title">جدیدترین ها</h3>
														<ul class="product-list-widget">
															<li>
																<a href="shop-detail.html">
																	<img src="images/placeholder.png" alt="Placeholder">
																	<span class="product-title">رایگان</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_1.png" alt="">
																	<span class="product-title">لورم ایپسوم متن
																		ساختگی</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_2.png" alt="">
																	<span class="product-title">لورم ایپسوم</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="megamenu-widget-area">
													<div class="widget widget-products">
														<h3 class="widget-title">فروش‌ها</h3>
														<ul class="product-list-widget">
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_3.jpg"
																		alt="Placeholder">
																	<span class="product-title">لورم ایپسوم متن</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_4.jpg" alt="">
																	<span class="product-title">لورم ایپسوم متن</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_5.jpg" alt="">
																	<span class="product-title">لورم ایپسوم متن
																		ساختگی</span>
																</a>
																<span class="amount">560,000,000 تومان</span>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="megamenu-widget-area">
													<div class="widget widget-products">
														<h3 class="widget-title">بالاترین امتیاز</h3>
														<ul class="product-list-widget">
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_6.jpg"
																		alt="Placeholder">
																	<span class="product-title">لورم ایپسوم متن</span>
																</a>
																<div class="star-rating">
																	<span style="width:100%"></span>
																</div>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_7.jpg" alt="">
																	<span class="product-title">لورم ایپسوم متن</span>
																</a>
																<div class="star-rating">
																	<span style="width:100%"></span>
																</div>
																<span class="amount">560,000,000 تومان</span>
															</li>
															<li>
																<a href="shop-detail.html">
																	<img src="images/shop/thumb/shop_1.png" alt="">
																	<span class="product-title">لورم ایپسوم</span>
																</a>
																<div class="star-rating">
																	<span style="width:100%"></span>
																</div>
																<span class="amount">560,000,000 تومان</span>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
										<i class="fa fa-angle-down"></i>
									</li>
									<li class="megamenu mega-col-4">
										<a href="#">ویژگی ها</a>
										<ul class="sub-menu">
											<li>
												<a href="#">صفحات</a>
												<ul class="sub-menu">
													<li><a href="advanced-search-property.html">جستجوی ملک پیشرفته</a>
													</li>
													<li><a href="ads-banner.html">بنر تبلیغات</a></li>
													<li><a href="faq.html">سوالات متداول</a></li>
													<li><a href="floor-plan.html">نقشه ملک</a></li>
												</ul>
												<i class="fa fa-angle-down"></i>
											</li>
											<li>
												<a href="#">صفحات</a>
												<ul class="sub-menu">
													<li><a href="gallery.html">گالری</a></li>
													<li><a href="partner.html">شرکا</a></li>
													<li><a href="progress.html">نوار پیشرفت</a></li>
												</ul>
												<i class="fa fa-angle-down"></i>
											</li>
											<li>
												<a href="#">صفحات</a>
												<ul class="sub-menu">
													<li><a href="service.html">خدمات</a></li>
													<li><a href="properties-list.html">لیست ملک ها</a></li>
													<li><a href="single-agent-contact.html">تماس با نماینده</a></li>
													<li><a href="single-property.html">درباره ملک</a></li>
												</ul>
												<i class="fa fa-angle-down"></i>
											</li>
											<li>
												<a href="#">صفحات</a>
												<ul class="sub-menu">
													<li><a href="single-property-banner.html">درباره ملک طرح بنر</a>
													</li>
													<li><a href="single-property-fullwidth.html">درباره ملک با
															جزئیات</a></li>
													<li><a href="single-property-featured.html">درباره ملک ویژه</a></li>
													<li><a href="single-property-map.html">درباره ملک با نقشه</a></li>
												</ul>
												<i class="fa fa-angle-down"></i>
											</li>
										</ul>
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