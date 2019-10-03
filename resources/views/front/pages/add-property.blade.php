@extends('main')
@section('content')
<div class="container publish-page my-sm-3 my-2 mx-auto">
    <form class="announce-form" _lpchecked="1">
        <div class="row login-message login-success hidden p-0">
            <div class="col-12 p-0 mb-2"> <span></span> <i class="sh-quit"></i> </div>
        </div>
        <div class="row">
            <div class="col-12 publish-section">
                <div class="row mb-4">
                    <div class="col-12">
                        <h1>ثبت آگهی در شابش</h1>
                        <div class="publish-section-content p-3">
                            <div class="row form-elements">
                                <div class="form-group col-12"> <label class="label-title">نوع آگهی *</label>
                                    <div class="custom-control custom-radio d-inline-block"> <input id="radiosale"
                                            name="sales_type" type="radio" class="custom-control-input sales_type"
                                            value="sale" checked=""> <label class="custom-control-label"
                                            for="radiosale"> فروش </label>
                                    </div>
                                    <div class="custom-control custom-radio d-inline-block"> <input id="radiorent"
                                            name="sales_type" type="radio" class="custom-control-input sales_type"
                                            value="rent"> <label class="custom-control-label" for="radiorent"> رهن و
                                            اجاره </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-12 col-md-6 col-lg-6"> <label class="label-title">عنوان آگهی
                                        * (حداقل ۲۰ و حداکثر ۱۰۰ کاراکتر)</label> <input type="text" name="title"
                                        class="form-control has-info dirty" minlength="11" maxlength="100" value=""
                                        autocomplete="off" required="">
                                    <span class="error-input">عنوان آگهی را حداقل ۱۰ و حداکثر ۱۰۰کاراکتر وارد کنید
                                    </span>
                                    <span class="info-popover">عنوان را به شکلی انتخاب کنید که مهمترین
                                        ویژگی آگهی شما را شامل شود .ذکر محله،متراژ و نوع ملک در عنوان باعث افزایش بازدید
                                        آگهی شما می شود
                                    </span>
                                </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label class="label-title">نوع
                                        ملک *</label> <select class="form-control dirty" name="type" id="typeselect"
                                        required="">
                                        <option value=""></option>
                                        <option value="apartment">آپارتمان</option>
                                        <option value="administrative">اداری</option>
                                        <option value="commercial">تجاری</option>
                                        <option value="villa">ویلا</option>
                                        <option value="estate">مستغلات</option>
                                        <option value="land">زمین</option>
                                        <option value="old">کلنگی</option>
                                        <option value="garden">باغ و باغچه</option>
                                        <option value="niches">انبار و سوله</option>
                                    </select> <span class="error-input">نوع ملک را وارد کنید</span>
                                </div>
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label class="label-title">سال
                                        ساخت *</label> <select class="form-control dirty" name="build_year"
                                        id="exampleSelect2">
                                        <option value=""></option>
                                        <option value="1398">1398</option>
                                        <option value="1397">1397</option>
                                        <option value="1396">1396</option>
                                        <option value="1395">1395</option>
                                        <option value="1394">1394</option>
                                        <option value="1393">1393</option>
                                        <option value="1392">1392</option>
                                        <option value="1391">1391</option>
                                        <option value="1390">1390</option>
                                        <option value="1389">1389</option>
                                        <option value="1388">1388</option>
                                        <option value="1387">1387</option>
                                        <option value="1386">1386</option>
                                        <option value="1385">1385</option>
                                        <option value="1384">1384</option>
                                        <option value="1383">1383</option>
                                        <option value="1382">1382</option>
                                        <option value="1381">1381</option>
                                        <option value="1380">1380</option>
                                        <option value="1379">1379</option>
                                        <option value="1378">1378</option>
                                        <option value="1377">1377</option>
                                        <option value="1376">1376</option>
                                        <option value="1375">1375</option>
                                        <option value="1374">1374</option>
                                        <option value="1373">1373</option>
                                        <option value="1372">1372</option>
                                        <option value="1371">1371</option>
                                        <option value="1370">1370</option>
                                        <option value="1369">1369</option>
                                        <option value="1368">1368</option>
                                        <option value="1367">1367</option>
                                        <option value="1366">1366</option>
                                        <option value="1365">1365</option>
                                        <option value="1364">1364</option>
                                        <option value="1363">1363</option>
                                        <option value="1362">1362</option>
                                        <option value="1361">1361</option>
                                        <option value="1360">1360</option>
                                        <option value="1359">1359</option>
                                        <option value="1358">1358</option>
                                        <option value="1357">1357</option>
                                        <option value="1356">1356</option>
                                        <option value="1355">1355</option>
                                        <option value="1354">1354</option>
                                    </select> </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label
                                        class="label-title">متراژ *</label> <input type="text" name="size"
                                        class="form-control number-only dirty" value="" autocomplete="off" required="">
                                    <span class="error-input">متراژ را وارد کنید</span> <span
                                        class="right-info">متر</span> </div>
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label
                                        class="label-title">تعداد اتاق خواب</label> <select class="form-control dirty"
                                        name="bedroom" id="exampleSelect1">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select> <span class="error-input">تعداد خواب را وارد کنید .</span>
                                </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label
                                        class="label-title">طبقه</label> <input type="text" name="floor"
                                        class="form-control number-only dirty" value="" autocomplete="off">
                                </div>
                                <div class="form-group col-6 col-sm-6 col-md-4 col-lg-2"> <label
                                        class="label-title">تعداد طبقات</label> <input type="text" name="sum_floor"
                                        class="form-control number-only dirty" value="" autocomplete="off">
                                </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-12 col-md-6 col-lg-6 "> <label class="label-title">توضیحات *
                                        (حداقل ۳۰ کاراکتر)</label> <textarea name="description"
                                        class="form-control has-info has-counter" minlength="31" rows="20"
                                        required=""></textarea> <span class="error-input">توضیحات را حداقل 30 کاراکتر
                                        وارد کنید</span> <span class="info-popover">ویژگی ها و نکاتی که مربوط به ملکتان
                                        می شود را با جزئیات دقیق در این بخش بنویسید ، این کار باعث می شود تا مشتریان
                                        آگاهی بیشتری به ملک شما پیدا کنند و احتمال موفقیت آگهی شما را بیشتر می
                                        کند.</span> <span class="item-counter">300 / 0</span>
                                </div>
                            </div>
                            <div class="row form-elements ">
                                <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 sale-price"> <label
                                        class="label-title">قیمت کل *</label> <span class="price-text"></span> <input
                                        type="text" name="price" class="form-control number-only to-string has-info"
                                        value="" autocomplete="off" required=""> <span class="error-input">مبلغ را وارد
                                        نمایید</span> <span class="info-popover">با وارد کردن قیمت امکان دیده شدن آگهی
                                        خود در نتایج جستجو بر اساس معیار قیمت را افزایش می دهید.</span>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 rent-price hidden"> <label
                                        class="label-title">اجاره (ماهانه) *</label> <span class="price-text"></span>
                                    <input type="text" name="rent" class="form-control number-only to-string" value=""
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="row form-elements ">
                                <div class="form-group col-12 col-md-9 col-lg-6"> <label class="label-title">امکانات
                                        *</label>
                                    <div class="multiple-select-box" data-default="امکانات"> <span> </span>
                                        <div class="checkboxes">
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radioparking" class="custom-control-input search-checkbox"
                                                    name="props" value="parking"> <label class="custom-control-label"
                                                    for="radioparking">پارکینگ</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiobalcony" class="custom-control-input search-checkbox"
                                                    name="props" value="balcony"> <label class="custom-control-label"
                                                    for="radiobalcony">بالکن</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radioelevator" class="custom-control-input search-checkbox"
                                                    name="props" value="elevator"> <label class="custom-control-label"
                                                    for="radioelevator">آسانسور</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiojanitor" class="custom-control-input search-checkbox"
                                                    name="props" value="janitor"> <label class="custom-control-label"
                                                    for="radiojanitor">سرایدار</label>

                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiolobby" class="custom-control-input search-checkbox"
                                                    name="props" value="lobby"> <label class="custom-control-label"
                                                    for="radiolobby">لابی</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiopool" class="custom-control-input search-checkbox"
                                                    name="props" value="pool"> <label class="custom-control-label"
                                                    for="radiopool">استخر</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiowarehouse" class="custom-control-input search-checkbox"
                                                    name="props" value="warehouse"> <label class="custom-control-label"
                                                    for="radiowarehouse">انباری</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radioyard" class="custom-control-input search-checkbox"
                                                    name="props" value="yard"> <label class="custom-control-label"
                                                    for="radioyard">حیاط</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiosauna_jacuzzi" class="custom-control-input search-checkbox"
                                                    name="props" value="sauna_jacuzzi"> <label
                                                    class="custom-control-label" for="radiosauna_jacuzzi">سونا و
                                                    جکوزی</label>
                                            </div>
                                            <div class="custom-control custom-checkbox m-2"> <input type="checkbox"
                                                    id="radiosport_hall" class="custom-control-input search-checkbox"
                                                    name="props" value="sport_hall"> <label class="custom-control-label"
                                                    for="radiosport_hall">سالن ورزشی</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-elements gallery-section">
                                <div class="form-group col-12 col-md-9 col-lg-6"> <label class="label-title">تصاویر
                                        *</label>
                                    <div class="dropzone dropzone-previews dz-clickable" id="my-awesome-dropzone">
                                        <div class="dz-default dz-message"><span><button type="button"
                                                    class="clickable"><i class="sh-camera"></i> <span>افزودن
                                                        تصاویر</span></button><span
                                                    class="or-text d-none d-sm-block">یا</span>
                                                <div class="drop-text"><i class="sh-gallery d-none d-sm-block"></i><span
                                                        class="d-none d-sm-block">تصاویر را اینجا بکشید</span>
                                                </div>
                                                <span class="uploading hidden">در حال بارگزاری تصویر</span>
                                            </span>
                                        </div>
                                    </div> <span class="info-popover visible"> با کلیک روی تصاویر ، تصویر کاور را انتخاب
                                        نمایید . </span>
                                </div>
                            </div>
                            <div class="row form-elements">
                                <div class="form-group col-12 col-md-6 col-lg-6"> <label class="label-title">ویدئو (لینک
                                        از آپارات)</label> <input type="text" name="video" class="form-control has-info"
                                        value="" autocomplete="off"> <span class="info-popover"> ویدئو را در سایت آپارات
                                        بارگزاری نمایید و لینک ویدئو را در این فسمت وارد کنید . <br> مثال :
                                        https://www.aparat.com/v/6SIBV <br> ویدئو باید حداقل 30 ثانیه باشد و از قرار
                                        دادن لوگو و شماره تماس در ویدئو خودداری نمایید . </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 form-elements">
                    <div class="col-12">
                        <h2>موقعیت ملک</h2>
                        <div class="publish-section-content p-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group"> <label class="label-title">محله *</label>
                                        <div class="searchform search-input clearfix " style="position: relative;">
                                            <div class="w-100 result-box more-padding single"> </div> <input
                                                id="searchtext" name="location"
                                                class=" form-control searchtext search-location form-input float-right "
                                                type="text" autocomplete="off" value="" data-area="true">
                                            <div class="search-box"> </div> <input type="hidden" id="location_ids"
                                                name="location_ids" class="area-input" value="" required="">
                                        </div> <span class="error-input area-important">نام محله را وارد نمایید .</span>
                                    </div>
                                    <div class="form-group"> <label class="label-title">آدرس *</label> <input
                                            type="text" name="address" value="" class="form-control"> <span
                                            class="info-popover visible"> ابتدا محله ای را که ملکتان در آن قرار دارد
                                            انتخاب کنید سپس شما می توانید از روی نقشه محل دقیق ملک را مشخص کنید ، نمایش
                                            محل دقیق ملک شانس موفقیت آگهی شما را بیشتر می کند. </span> </div>
                                </div>
                                <div class="col-12 col-md-6 select-location">
                                    <div class="publish-map leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                                        id="publish-map" data-lat="" data-lng="" data-sync="true" tabindex="0">
                                        <div class="leaflet-pane leaflet-map-pane"
                                            style="transform: translate3d(-23px, 0px, 0px);">
                                            <div class="leaflet-pane leaflet-tile-pane">
                                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                        style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                        <img alt="" role="presentation"
                                                            src=""
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(106px, -77px, 0px); opacity: 1;"><img
                                                            alt="" role="presentation"
                                                            src=""
                                                            style="width: 256px; height: 256px; transform: translate3d(106px, 179px, 0px); opacity: 1;"><img
                                                            alt="" role="presentation"
                                                            src=""
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-150px, -77px, 0px); opacity: 1;"><img
                                                            alt="" role="presentation"
                                                            src=""
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(362px, -77px, 0px); opacity: 1;"><img
                                                            alt="" role="presentation"
                                                            src=""
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(-150px, 179px, 0px); opacity: 1;"><img
                                                            alt="" role="presentation"
                                                            src=""
                                                            class="leaflet-tile leaflet-tile-loaded"
                                                            style="width: 256px; height: 256px; transform: translate3d(362px, 179px, 0px); opacity: 1;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                                            <div class="leaflet-pane leaflet-marker-pane"></div>
                                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                            <div class="leaflet-pane leaflet-popup-pane"></div>
                                            <div class="leaflet-proxy leaflet-zoom-animated"
                                                style="transform: translate3d(2.69609e+06px, 1.65063e+06px, 0px) scale(8192);">
                                            </div>
                                        </div>
                                        <div class="leaflet-control-container">
                                            <div class="leaflet-top leaflet-left">
                                                <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                                        class="leaflet-control-zoom-in" href="#" title="Zoom in"
                                                        role="button" aria-label="Zoom in">+</a><a
                                                        class="leaflet-control-zoom-out" href="#" title="Zoom out"
                                                        role="button" aria-label="Zoom out">-</a></div>
                                                <div class="leaflet-control-fullscreen leaflet-bar leaflet-control"><a
                                                        class="leaflet-control-fullscreen-button leaflet-bar-part"
                                                        href="#" title="View Fullscreen"></a></div>
                                            </div>
                                            <div class="leaflet-top leaflet-right">
                                                <div class="leaflet-control-grid map-tooltip leaflet-control"
                                                    style="display: none;"><a class="close" href="#"
                                                        title="close">close</a>
                                                    <div class="map-tooltip-content"></div>
                                                </div>
                                            </div>
                                            <div class="leaflet-bottom leaflet-left">
                                                <div class="mapbox-logo leaflet-control"></div>
                                            </div>
                                            <div class="leaflet-bottom leaflet-right"><a
                                                    class="cedarmaps-logo leaflet-control cedarmaps-logo-true"
                                                    href="https://www.cedarmaps.com" target="_blank"></a></div>
                                        </div><img src="img/locationselect.png" class="marker-icon marker-locate"
                                            title="انتخاب محل آگهی" alt="انتخاب محل آگهی">
                                    </div> <button type="button" class="select-marker"> <i class="sh-location"></i>
                                        انتخاب محل دقیق روی نقشه </button>
                                    <div class="hover-area"> <span></span> </div> <input type="hidden" name="latitude">
                                    <input type="hidden" name="longitude">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 form-elements">
                    <div class="col-12">
                        <h2>اطلاعات تماس</h2>
                        <div class="publish-section-content p-3">
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-lg-4"> <label class="label-title">نام و نام
                                        خانوادگی *</label> <input type="text" id="select_owner" name="owner"
                                        class="form-control popover-dismiss " value="" autocomplete="off" required="">
                                    <span class="error-input ">نام و نام خانوادگی را وارد نمایید</span> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-lg-4"> <label class="label-title">شماره تماس
                                        *</label> <input type="text" id="select_mobile" name="mobile"
                                        class="form-control number-only popover-dismiss " pattern="09[0-9]{9}" value=""
                                        autocomplete="off" required=""> <span class="error-input">شماره تماس را با دقت
                                        وارد نمایید</span> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-md-6 col-lg-4"> <label class="label-title">شماره تماس
                                        (whatsapp)</label> <input type="text" id="select_whatsapp" name="whatsapp"
                                        class="form-control number-only has-info" pattern="0[0-9]{4,}[0-9]" value=""
                                        autocomplete="off"> <span class="error-input">شماره تماس را با دقت وارد
                                        نمایید</span> <span class="info-popover"> در صورت داشتن حساب کاربری whatsapp و
                                        فعال بودن آن ، شماره ثبت شده در whatsapp را وارد نمایید . <br> مثال :09121234567
                                    </span> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox"> <input type="checkbox"
                                                class="custom-control-input" name="roles" id="roles" required=""> <label
                                                class="custom-control-label" for="roles"> <a
                                                    href="https://shabesh.com/terms" class="blue-link"
                                                    target="_blank">ضوابط و قوانین</a> شابش را مطالعه کرده و با آن
                                                موافقم. </label> <span class="error-input">موافقط با شرایط و قوانین شابش
                                                الزامی می باشد.</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="special-offer" class="row mb-4 form-elements">
                    <div class="col-12">
                        <h2>نوع آگهی</h2>
                        <div class="publish-section-content px-3 py-0">
                            <div class="row">
                                <div class="form-group w-100">
                                    <div class="announce-inner-type pb-3"> <input type="radio" name="special_type"
                                            value="" class="announce-type-input" id="special_0"> <label for="special_0">
                                            <span class="color-free color-type">آگهی ساده</span> ( 5 جایگاه مانده)
                                        </label> <span class="announce-create-desc hidden pt-2">نمایش در صفحات داخلی
                                            نتایج جستجوی محلات</span> </div>
                                    <div class="announce-inner-type pb-3"> <input type="radio" name="special_type"
                                            value="special" class="announce-type-input" id="special_1"> <label
                                            for="special_1"> <span class="color-special color-type">آگهی ویژه</span> 7
                                            روزه (40,000 هزار تومان) </label> <span
                                            class="announce-create-desc hidden pt-2">نمایش در بالای نتایج جستجوی محله
                                            مورد نظر</span> <span class="announce-create-desc hidden pt-2">۲ برابر
                                            بازخورد بشتر نسبت به آگهی ساده</span> </div>
                                    <div class="announce-inner-type pb-3"> <input type="radio" name="special_type"
                                            value="gold" class="announce-type-input" id="special_2"> <label
                                            for="special_2"> <span class="color-gold color-type">آگهی طلایی</span> 14
                                            روزه (150,000 هزار تومان) </label> <span
                                            class="announce-create-desc hidden pt-2">نمایش در صدر نتایج جستجو با کادر
                                            بزرگتر</span> <span class="announce-create-desc hidden pt-2">۴ برابر بازخورد
                                            بشتر نسبت به آگهی ساده</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5 col-sm-3 text-center text-lg-right"> <button type="submit"
                    class="btn submit-form btn-block shabesh-button green haveloading"> ثبت آگهی </button> </div>
        </div>
    </form>
</div>
@endsection