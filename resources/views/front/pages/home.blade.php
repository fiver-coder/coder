@extends('main')
@section('content')
<div id="main">
    <div class="section section-bg-1 pt-17 pb-17">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="property-box-meta">
                        <div class="property-box-meta-content">
                            <span class="property-status">برای اجاره</span>
                            <div class="item-head">
                                <h1 class="item-title">
                                    <a href="property-fullwidth.html" title="Store Space Greenville">
                                        منزل ویلایی دو طبقه
                                    </a>
                                </h1>
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
                                    <i class="icon-bath"></i> <span>3 <small>سرویس بهداشتی</small></span>
                                </span>
                            </div>
                            <div class="price">
                                <span class="before-price"></span>
                                <span class="amount">560,000,000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="section section-static section-bg-2 pt-9 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">جستجوی</span> ملک
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            </p>
                        </div>
                    </div>
                    <form class="advanced-search-property">
                        <div class="advanced-search-property-wrap">
                            <div class="row">
                                <div class="item-wrap col-md-3">
                                    <input type="text" id="keyword" name="keyword" value=""
                                        placeholder="عبارت مورد جستجو ...">
                                </div>
                                <div class="item-wrap col-md-3">
                                    <select class="selection" name="status">
                                        <option value="">همه انواع قرارداد</option>
                                        <option value="">برای اجاره</option>
                                        <option value="">برای فروش</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-3">
                                    <select class="selection" name="types">
                                        <option value="">همه انواع ملک</option>
                                        <option value="">آپارتمان</option>
                                        <option value="">زمین</option>
                                        <option value="">منزل مشترک</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-3">
                                    <select class="selection" name="property_bedrooms">
                                        <option value="">هر تعداد اتاق </option>
                                        <option value="">3</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-3">
                                    <select class="selection" name="property_bathrooms">
                                        <option value="">هر تعداد سرویس بهداشتی </option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-3">
                                    <select class="selection" name="property_garages">
                                        <option value="">هر تعداد پارکینگ </option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                                <div class="item-wrap col-md-3">
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
                            </div>
                            <div class="row box-action">
                                <div class="col-md-9 box-show-features">
                                    <span class="show-features">فیلتر های بیشتر</span>
                                </div>
                                <div class="col-md-3 box-button">
                                    <button type="submit" class="button">
                                        <span class="ion-search"></span> جستجوی ملک
                                    </button>
                                </div>
                            </div>
                            <div class="row box-features">
                                <div class="col-md-12 box-features-content">
                                    <div class="item-wrap">
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_basement" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">زیرزمین</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_swimming_pool" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">استخر شنا</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_cooling_system" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">سیستم سرمایش</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_fence" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">حصار</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_gas_heat" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">گرمایش گازی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_balcony" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">بالکن</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_central_vacuum" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">تهویه مرکزی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_security_system" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">سیستم امنیتی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_cable_tv_available" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">تلویزیون کابلی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_lake_view" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">منظره دریاچه</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_attic" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">اتاق زیر شیروانی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_solar_heat" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">گرمایش خورشیدی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_golf_course" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">زمین گلف</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_wet_bar" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">رخت شویی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_backyard" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">حیاط خلوت</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_skylights" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">پنجره های سقنی</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_office_den" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">دفتر کار</label>
                                        </div>
                                        <div class="item-checkbox col-md-3 col-sm-4 col-xs-6">
                                            <div class="checked">
                                                <input type="checkbox" name="property_fireplace" value="1">
                                                <label class="checkbox"></label>
                                            </div>
                                            <label class="text">جعبه آتش نشانی</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-overlay section-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ads-service">
                        <h3 class="title">بهترین خدمات ملکی</h3>
                        <span class="sub-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
                        <div class="ads-phone">
                            <i class="fa fa-phone"></i>
                            <div class="ads-desc">
                                هم اکنون تماس بگیرید <br>
                                <a href="tel:(+1)-800-555-6789" class="ltr_text">(+1)-800-555-6789</a>
                            </div>
                        </div>
                        <img src="images/best_property_service.png" alt="">
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
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <i class="ion-bookmark">ویژه</i>
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Family House in Hudson">
                                    <img src="images/property/property_1.jpg" alt="Family House in Hudson">
                                </a>
                                <span class="property-status">برای فروش</span>
                            </div>
                            <div class="info">
                                <span class="primary-file-1">
                                    <i class="icon-ruler"></i> <span>2100 متر مربع</span>
                                </span>
                                <span class="primary-file-2">
                                    <i class="icon-bed"></i> <span>5 خوابه</span>
                                </span>
                                <span class="primary-file-3">
                                    <i class="icon-storage"></i> <span>1 پارکینگ</span>
                                </span>
                                <span class="primary-file-4">
                                    <i class="icon-bath"></i> <span>4 سرویس بهداشتی</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
                                        <i class="ion-arrow-swap"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <i class="ion-bookmark">ویژه</i>
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                    <img src="images/property/property_2.jpg" alt="Villa on Hollywood Boulevard">
                                </a>
                                <span class="property-status">برای فروش</span>
                            </div>
                            <div class="info">
                                <span class="primary-file-1">
                                    <i class="icon-ruler"></i> <span>2075 متر مربع</span>
                                </span>
                                <span class="primary-file-2">
                                    <i class="icon-bed"></i> <span>3 خوابه</span>
                                </span>
                                <span class="primary-file-3">
                                    <i class="icon-storage"></i> <span>1 پارکینگ</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
                                        <i class="ion-arrow-swap"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <i class="ion-bookmark">ویژه</i>
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Park Avenue Apartment">
                                    <img src="images/property/property_3.jpg" alt="Park Avenue Apartment">
                                </a>
                                <span class="property-status">برای اجاره</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
                                        <i class="ion-arrow-swap"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Loft Above The City">
                                    <img src="images/property/property_4.jpg" alt="Loft Above The City">
                                </a>
                                <span class="property-status">برای اجاره</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
                                        <i class="ion-arrow-swap"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <i class="ion-bookmark">ویژه</i>
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Villa in Melbourne">
                                    <img src="images/property/property_5.jpg" alt="Villa in Melbourne">
                                </a>
                                <span class="property-status">برای اجاره</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
                                        <i class="ion-arrow-swap"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="property-item">
                        <div class="property-item-wrap">
                            <div class="item-head">
                                <h4 class="item-title">
                                    <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                </h4>
                                <span class="location">تبریز، چهارراه شهناز</span>
                            </div>
                            <div class="item-featured">
                                <a href="property-fullwidth.html" title="Store Space Greenville">
                                    <img src="images/property/property_6.jpg" alt="Store Space Greenville">
                                </a>
                                <span class="property-status">برای اجاره</span>
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
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه"
                                        class="compare" href="#">
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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">خدمات</span> ما
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-icon icon-mapmarker">
                            <span class="icon icon-price-house"></span>
                        </div>
                        <h4 class="service-title">خدمات فروش</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-icon icon-mapmarker">
                            <span class="icon icon-rent"></span>
                        </div>
                        <h4 class="service-title">خدمات اجاره</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-icon icon-mapmarker">
                            <span class="icon icon-painting"></span>
                        </div>
                        <h4 class="service-title">لیست ملک ها</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-icon icon-mapmarker">
                            <span class="icon icon-safe-house"></span>
                        </div>
                        <h4 class="service-title">مدیریت ملک</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btlink">
                        <a class="readmore" href="#">بیشتر بخوانید </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-overlay section-bg-4 mt-12 mb-27 featured_property">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-item">
                        <div class="featured-main">
                            <div class="meta">
                                <h3 class="title">منزل ویلایی دو طبقه</h3>
                                <span class="location">
                                    <i class="fa fa-map-marker"></i>
                                    تبریز، 17 شهریور
                                </span>
                                <span class="price">127,000,000,000 تومان</span>
                            </div>
                            <div class="info">
                                <span class="primary-file-1">
                                    <i class="icon-ruler"></i> <span>2100 متر مربع</span>
                                </span>
                                <span class="primary-file-2">
                                    <i class="icon-bed"></i> <span>5 خوابه</span>
                                </span>
                                <span class="primary-file-3">
                                    <i class="icon-storage"></i> <span>1 پارکینگ</span>
                                </span>
                                <span class="primary-file-4">
                                    <i class="icon-bath"></i> <span>4 سرویس بهداشتی</span>
                                </span>
                            </div>
                            <div class="box-image">
                                <div class="box-image-inner">
                                    <div class="box-image-content"></div>
                                </div>
                            </div>
                            <div class="view">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی</p>
                                <a class="readmore" href="#">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mb-11">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">نماینده های</span> ما
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            </p>
                        </div>
                    </div>
                    <div class="agent-carousel row owl-carousel owl-theme" data-auto-play="false" data-desktop="4"
                        data-laptop="3" data-tablet="2" data-mobile="1">
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Bruck Banner">
                                    <img src="images/team/team_1.png" alt="Bruck Banner">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Bruck Banner">بروس بنر</a>
                                </h4>
                                <span class="position">توسعه دهنده</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Kent Pather">
                                    <img src="images/team/team_2.png" alt="Kent Pather">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Kent Pather">تونی استارک</a>
                                </h4>
                                <span class="position">مجری فروش</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Henry Silver">
                                    <img src="images/team/team_3.png" alt="Henry Silver">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Henry Silver">جان اسنو</a>
                                </h4>
                                <span class="position">نماینده فروش</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Scarlet Atkinson">
                                    <img src="images/team/team_4.png" alt="Scarlet Atkinson">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Scarlet Atkinson">اسکارلت جکمن</a>
                                </h4>
                                <span class="position">مشاور املاک</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Sarah Barabova">
                                    <img src="images/team/team_5.png" alt="Sarah Barabova">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Sarah Barabova">سارا لنس</a>
                                </h4>
                                <span class="position">نماینده خرید</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="agent-detail.html" title="Barack Ocean">
                                    <img src="images/team/team_6.png" alt="Barack Ocean">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="agent-detail.html" title="Barack Ocean">استیو راجرز</a>
                                </h4>
                                <span class="position">مجری فروش</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
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