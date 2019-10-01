<script>
      function onSignIn(googleUser) {
        try {
            // Useful data for your client-side scripts:
        let profile = googleUser.getBasicProfile();
        let id = console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        let full_name = console.log('Full Name: ' + profile.getName());
        let img = console.log("Image URL: " + profile.getImageUrl());
        let email = console.log("Email: " + profile.getEmail());
        
        // The ID token you need to pass to your backend:
        let id_token = googleUser.getAuthResponse().id_token;
        
        //make ajax request in order to save in session
        $(document).ready(function(){
            $.post("ajax.save_user_data",
                {   _token: "{{ csrf_token() }}",
                    id: id,
                    full_name: full_name,
                    img:img,
                    email:email
                },
                function(data){
                    alert(data);
                }
            );
        });
            
        } catch (error) {
            console.log(error);
        }
        
      }
    </script>
<footer class="footer">
    <div class="main-footer">
        <div class="colophon wigetized">
            <div class="container">
                <div class="row">
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">لندمارک</h4>
                            <div class="textwidget">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker"></i>تبریز، ولیعصر، پلاک 896</li>
                                    <li><i class="fa fa-phone"></i><span class="ltr_text">(+1)-800-555-6789</span></li>
                                    <li><i class="fa fa-envelope"></i>contact.us@sample.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">ساعات کاری</h4>
                            <div class="textwidget">
                                <ul class="open-info">
                                    <li>شنبه تا چهارشنبه: 8AM - 10PM</li>
                                    <li>پنجشنبه: 9AM - 8PM</li>
                                    <li>جمعه: تعطیل</li>
                                    <li>ما در تعطیلات رسمی هم کار میکنیم</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">لینک های مفید</h4>
                            <ul class="menu">
                                <li><a href="#">قوانین و مقررات</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                                <li><a href="#">تماس پشتیبانی</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_recent_property">
                            <h4 class="widget-title">جدید ترین ملک ها</h4>
                            <div class="recent-property-wrap">
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="images/property/thumb/property_1.jpg"
                                                alt="Family House in Hudson">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Family House in Hudson">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="images/property/thumb/property_2.jpg" alt="Loft Above The City">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Loft Above The City">
                                                لورم ایپسوم متن ساختگی
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-property-item">
                                    <div class="thumbnail">
                                        <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                            <img src="images/property/thumb/property_3.jpg"
                                                alt="Villa on Hollywood Boulevard">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="item-title">
                                            <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                                لورم ایپسوم متن ساختگی با تولید
                                            </a>
                                        </div>
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
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
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ارائه شده در وب سایت <a href="https://www.rtl-theme.com" target="_blank">راست چین</a>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social text-right text-center-sm">
                        <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank" class="google"><i class="fa fa-telegram"></i></a>
                        <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank" class="skype"><i class="fa fa-skype"></i></a>
                        <a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank" class="telegram"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div id="go-to-top" class="go-to-top">
    <i class="fa fa-angle-up"></i>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/modernizr-2.7.1.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/off-cavnass.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/core.min.js"></script>
<script src="/js/widget.min.js"></script>
<script src="/js/mouse.min.js"></script>
<script src="/js/slider.min.js"></script>
<script src="/js/jquery.ui.touch-punch.js"></script>
<script src="/js/price-slider.js"></script>
</body>
</html>