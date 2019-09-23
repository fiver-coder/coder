@extends('main')
@section('content')
<div id="main">
    <!-- START MAP HORIZONTAL -->
    <section id="search_map_horizontal" class="wrap advanced_search_property horizontal mb-27">
        <div class="noo-map">
            <div id="gmap" class="fullheight"></div>
            <div class="gsearch">
                <div class="gsearch-wrap">
                    <form class="advanced-search-property">
                        <div class="advanced-search-property-wrap">
                            <div class="row">
                                <div class="item-wrap col-md-4">
                                    <input type="text" id="keyword" name="keyword" value=""
                                        placeholder="عبارت مورد جستجو ...">
                                </div>
                                <div class="item-wrap col-md-4">
                                    <select class="selection" name="status">
                                        <option value="">همه انواع قرارداد</option>
                                        <option value="">برای اجاره</option>
                                        <option value="">برای فروش</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-4">
                                    <select class="selection" name="types">
                                        <option value="">همه انواع ملک</option>
                                        <option value="">آپارتمان</option>
                                        <option value="">زمین</option>
                                        <option value="">منزل مشترک</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-4">
                                    <select class="selection" name="property_bedrooms">
                                        <option value="">هر تعداد اتاق </option>
                                        <option value="">3</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-4">
                                    <div class="price_slider_wrapper widget_price_filter">
                                        <div class="price_slider" style="display:none;"></div>
                                        <div class="price_slider_amount" data-currency="تومان" data-step="100000">
                                            <input type="hidden" id="min_price" name="min_price" value=""
                                                data-min="500000" placeholder="حداقل قیمت">
                                            <input type="hidden" id="max_price" name="max_price" value=""
                                                data-max="600000000" placeholder="حداکثر قیمت">
                                            <div class="price_label" style="display:none;">
                                                <span class="from"></span> - <span class="to"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap col-md-4">
                                    <div class="box-action">
                                        <div class="box-button">
                                            <button type="submit" class="button">
                                                <span class="ion-search"></span> جستجوی ملک
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            {{-- end of search section --}}
        </div>
    </section>
    <!-- END MAP HORIZONTAL -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">ملک های</span> ویژه
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="4"
                        data-laptop="2" data-tablet="1" data-mobile="1">
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="images/property/property_1.jpg" alt="Family House in Hudson">
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>2100</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>5</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>1</span>
                                        </span>
                                        <span class="primary-file-4">
                                            <i class="icon-bath"></i> <span>4</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                            <img src="images/property/property_2.jpg"
                                                alt="Villa on Hollywood Boulevard">
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>2075</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>3</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>1</span>
                                        </span>
                                        <span class="primary-file-4">
                                            <i class="icon-bath"></i> <span>3</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Park Avenue Apartment">
                                            <img src="images/property/property_3.jpg" alt="Park Avenue Apartment">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>3450</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>6</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>2</span>
                                        </span>
                                        <span class="primary-file-4">
                                            <i class="icon-bath"></i> <span>5</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="images/property/property_4.jpg" alt="Loft Above The City">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>2800</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>6</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Villa in Melbourne">
                                            <img src="images/property/property_5.jpg" alt="Villa in Melbourne">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>3450</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>6</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>2</span>
                                        </span>
                                        <span class="primary-file-4">
                                            <i class="icon-bath"></i> <span>5</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-3">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Store Space Greenville">
                                            <img src="images/property/property_5.jpg" alt="Store Space Greenville">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="info">
                                        <span class="primary-file-1">
                                            <i class="icon-ruler"></i> <span>100</span>
                                        </span>
                                        <span class="primary-file-2">
                                            <i class="icon-bed"></i> <span>6</span>
                                        </span>
                                        <span class="primary-file-3">
                                            <i class="icon-storage"></i> <span>2</span>
                                        </span>
                                        <span class="primary-file-4">
                                            <i class="icon-bath"></i> <span>5</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-9 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">آخرین</span> ملک ها
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-carousel row owl-carousel owl-theme" data-auto-play="false" data-desktop="2"
                        data-laptop="1" data-tablet="1" data-mobile="1">
                        <div class="item">
                            <div class="property-item style-2">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="images/property/property_7.jpg" alt="Family House in Hudson">
                                            <span></span>
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <i class="ion-bookmark">ویژه</i>
                                                <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                    طبقه</a>
                                            </h4>
                                            <span class="location">تبریز، چهارراه شهناز</span>
                                        </div>
                                        <div class="info">
                                            <span class="primary-file-1">
                                                <i class="icon-ruler"></i> <span>100 متر مربع</span>
                                            </span>
                                            <span class="primary-file-2">
                                                <i class="icon-bed"></i> <span>6 اتاق خواب</span>
                                            </span>
                                            <span class="primary-file-3">
                                                <i class="icon-storage"></i> <span>2 پارکینگ</span>
                                            </span>
                                            <span class="primary-file-4">
                                                <i class="icon-bath"></i> <span>5 سرویس بهداشتی</span>
                                            </span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">560,000,000 تومان</span>
                                            </div>
                                            <div class="action-post">
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="علاقه‌مندی‌ها" href="#">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <div class="property-sharing">
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                        <i class="ion-android-share-alt"></i>
                                                    </a>
                                                    <div class="social-property">
                                                        <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در توییتر" class="share">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                            <i class="fa fa-telegram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="مقایسه" class="compare" href="#">
                                                    <i class="ion-arrow-swap"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-item style-2">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="images/property/property_8.jpg" alt="Loft Above The City">
                                            <span></span>
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                    طبقه</a>
                                            </h4>
                                            <span class="location">تبریز، چهارراه شهناز</span>
                                        </div>
                                        <div class="info">
                                            <span class="primary-file-1">
                                                <i class="icon-ruler"></i> <span>لورم ایپسوم</span>
                                            </span>
                                            <span class="primary-file-2">
                                                <i class="icon-bed"></i> <span>3 خوابه</span>
                                            </span>
                                            <span class="primary-file-3">
                                                <i class="icon-bath"></i> <span>لورم ایپسوم</span>
                                            </span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">560,000,000 تومان</span>
                                            </div>
                                            <div class="action-post">
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="علاقه‌مندی‌ها" href="#">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <div class="property-sharing">
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                        <i class="ion-android-share-alt"></i>
                                                    </a>
                                                    <div class="social-property">
                                                        <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در توییتر" class="share">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                            <i class="fa fa-telegram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="مقایسه" class="compare" href="#">
                                                    <i class="ion-arrow-swap"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-2">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Villa in Melbourne">
                                            <img src="images/property/property_10.jpg" alt="Villa in Melbourne">
                                            <span></span>
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <i class="ion-bookmark">ویژه</i>
                                                <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                    طبقه</a>
                                            </h4>
                                            <span class="location">تبریز، چهارراه شهناز</span>
                                        </div>
                                        <div class="info">
                                            <span class="primary-file-1">
                                                <i class="icon-ruler"></i> <span>2800 متر مربع</span>
                                            </span>
                                            <span class="primary-file-2">
                                                <i class="icon-bed"></i> <span>6 اتاق خواب</span>
                                            </span>
                                            <span class="primary-file-3">
                                                <i class="icon-storage"></i> <span>2 پارکینگ</span>
                                            </span>
                                            <span class="primary-file-4">
                                                <i class="icon-bath"></i> <span>5 سرویس بهداشتی</span>
                                            </span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">560,000,000 تومان</span>
                                            </div>
                                            <div class="action-post">
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="علاقه‌مندی‌ها" href="#">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <div class="property-sharing">
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                        <i class="ion-android-share-alt"></i>
                                                    </a>
                                                    <div class="social-property">
                                                        <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در توییتر" class="share">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                            <i class="fa fa-telegram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="مقایسه" class="compare" href="#">
                                                    <i class="ion-arrow-swap"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-item style-2">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Park Avenue Apartment">
                                            <img src="images/property/property_9.jpg" alt="Park Avenue Apartment">
                                            <span></span>
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <i class="ion-bookmark">ویژه</i>
                                                <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                    طبقه</a>
                                            </h4>
                                            <span class="location">تبریز، چهارراه شهناز</span>
                                        </div>
                                        <div class="info">
                                            <span class="primary-file-1">
                                                <i class="icon-ruler"></i> <span>3450 متر مربع</span>
                                            </span>
                                            <span class="primary-file-2">
                                                <i class="icon-bed"></i> <span>6 اتاق خواب</span>
                                            </span>
                                            <span class="primary-file-3">
                                                <i class="icon-storage"></i> <span>2 پارکینگ</span>
                                            </span>
                                            <span class="primary-file-4">
                                                <i class="icon-bath"></i> <span>5 سرویس بهداشتی</span>
                                            </span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">560,000,000 تومان</span>
                                            </div>
                                            <div class="action-post">
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="علاقه‌مندی‌ها" href="#">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <div class="property-sharing">
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                        <i class="ion-android-share-alt"></i>
                                                    </a>
                                                    <div class="social-property">
                                                        <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در توییتر" class="share">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                            <i class="fa fa-telegram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="مقایسه" class="compare" href="#">
                                                    <i class="ion-arrow-swap"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item style-2">
                                <div class="property-item-wrap">
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Store Space Greenville">
                                            <img src="images/property/property_11.jpg" alt="Store Space Greenville">
                                            <span></span>
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-head">
                                            <h4 class="item-title">
                                                <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو
                                                    طبقه</a>
                                            </h4>
                                            <span class="location">تبریز، چهارراه شهناز</span>
                                        </div>
                                        <div class="info">
                                            <span class="primary-file-1">
                                                <i class="icon-ruler"></i> <span>100 متر مربع</span>
                                            </span>
                                            <span class="primary-file-2">
                                                <i class="icon-bed"></i> <span>5 خوابه</span>
                                            </span>
                                            <span class="primary-file-3">
                                                <i class="icon-storage"></i> <span>3 پارکینگ</span>
                                            </span>
                                            <span class="primary-file-4">
                                                <i class="icon-bath"></i> <span>3 سرویس بهداشتی</span>
                                            </span>
                                        </div>
                                        <div class="action">
                                            <div class="price">
                                                <span class="amount">560,000,000 تومان</span>
                                            </div>
                                            <div class="action-post">
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="علاقه‌مندی‌ها" href="#">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <div class="property-sharing">
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                        <i class="ion-android-share-alt"></i>
                                                    </a>
                                                    <div class="social-property">
                                                        <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در توییتر" class="share">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                            <i class="fa fa-telegram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <a data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="مقایسه" class="compare" href="#">
                                                    <i class="ion-arrow-swap"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-overlay section-bg-5 pt-10 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1"
                        data-laptop="1" data-tablet="1" data-mobile="1">
                        <div class="testimonial-item text-center">
                            <div class="testimonial-wrap">
                                <div class="box-user">
                                    <img width="95" height="95" src="images/avatar/avatar_1.jpg" alt="">
                                    <h3 class="testimonial-name white">جسیکا آلبا</h3>
                                    <span class="testimonial-position white">مجری فروش</span>
                                </div>
                                <p class="testimonial-content white">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و سه
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="testimonial-wrap">
                                <div class="box-user">
                                    <img width="95" height="95" src="images/avatar/avatar_2.png" alt="">
                                    <h3 class="testimonial-name white">لیونل مسی</h3>
                                    <span class="testimonial-position white">طراح وب</span>
                                </div>
                                <p class="testimonial-content white">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. کتابهای زیادی در شصت و
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="testimonial-wrap">
                                <div class="box-user">
                                    <img width="95" height="95" src="images/avatar/avatar_3.png" alt="">
                                    <h3 class="testimonial-name white">کریس رونالدو</h3>
                                    <span class="testimonial-position white">مدیر</span>
                                </div>
                                <p class="testimonial-content white">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="testimonial-wrap">
                                <div class="box-user">
                                    <img width="95" height="95" src="images/avatar/avatar_4.png" alt="">
                                    <h3 class="testimonial-name white">استیون راجرز</h3>
                                    <span class="testimonial-position white">مجری بازاریابی</span>
                                </div>
                                <p class="testimonial-content white">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mtn-16">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-index">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-featured">
                                        <div class="content-featured">
                                            <a class="content-thumb" href="blog-detail-sidebar.html">
                                                <img src="images/blog/blog_1.jpg" alt="">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wrap-entry">
                                        <div class="entry-header">
                                            <h2>
                                                <a href="blog-detail-sidebar.html">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                                </a>
                                            </h2>
                                            <span class="tag-date">
                                                <span>26</span>
                                                <span>خرداد</span>
                                            </span>
                                            <div class="item-info">
                                                <span class="author vcard">
                                                    <i class="fa fa-user"></i>
                                                    <a class="url" href="#">جاناتان</a>
                                                </span>
                                                <span class="count-comment">
                                                    <i class="fa fa-comment"></i> 0
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-featured">
                                        <div class="content-featured">
                                            <a class="content-thumb" href="blog-detail-sidebar.html">
                                                <img src="images/blog/blog_2.jpg" alt="">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wrap-entry">
                                        <div class="entry-header">
                                            <h2>
                                                <a href="blog-detail-sidebar.html">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                </a>
                                            </h2>
                                            <span class="tag-date">
                                                <span>26</span>
                                                <span>خرداد</span>
                                            </span>
                                            <div class="item-info">
                                                <span class="author vcard">
                                                    <i class="fa fa-user"></i>
                                                    <a class="url" href="#">جاناتان</a>
                                                </span>
                                                <span class="count-comment">
                                                    <i class="fa fa-comment"></i> 5
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-5 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">شرکای</span> ما
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                            </p>
                        </div>
                    </div>
                    <div class="partner-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="6"
                        data-laptop="4" data-tablet="3" data-mobile="2">
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_3.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_4.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_5.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_6.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_7.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_8.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_9.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_10.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_11.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_5.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_7.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="images/partners/partner_9.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/partners/partner_3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-6 section-overlay section-fixed mt-5 newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mailchimp">
                        <h3 class="title">عضویت در خبرنامه</h3>
                        <span class="sub-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
                        <form>
                            <div class="mailchimp-main">
                                <input type="email" name="EMAIL" placeholder="ایمیل خود را وارد کنید" required="">
                                <input type="submit" value="Subscribe">
                                <i class="ion-ios-paperplane"></i>
                            </div>
                        </form>
                        <img src="images/subscribe.png" alt="subscribe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection