function popupContent() {
	$('[data-init="magnificPopup"]').each(function (t, a) {
		var e = $(this),
			o = {
				removalDelay: 500,
				callbacks: {
					beforeOpen: function () {
						this.st.mainClass = this.st.el.attr("data-effect")
					}
				},
				midClick: !0
			},
			s = $.extend(!0, o, e.data("options"));
		e.magnificPopup(s)
	}), $(".gallery-item").length > 0 && $(".gallery-item").magnificPopup({
		tClose: 'بستن', // Alt text on close button
		tLoading: 'در حال بارگذاری ...',
		gallery: {
			enabled: !0,
			tPrev: 'قبلی', // title for left button
			tNext: 'بعدی', // title for right button
			tCounter: '<span class="mfp-counter">%curr% از %total%</span>' // markup of counter
		},
		image: {
			tError: '<a href="%url%">تصویر</a> قابل بارگذاری نیست.' // Error message when image could not be loaded
		}
	}), $(".quick-view").length > 0 && $(".quick-view").magnificPopup({
		type: "ajax"
	}), $(".popup-youtube").magnificPopup({
		type: "iframe"
	})
}

function googleMap() {
	function t1() {
		var t = {
				center: a,
				zoom: 16,
				scrollwheel: !1,
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
				}
			},
			o = new google.maps.Map(document.getElementById("googleMap"), t),
			s = new google.maps.Marker({
				position: e,
				icon: $obj.data("icon")
			});
		s.setMap(o)
	}

	function t2() {
		var t = {
				center: a,
				zoom: 16,
				scrollwheel: !1,
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
				}
			},
			o = new google.maps.Map(document.getElementById("googleMap2"), t),
			s = new google.maps.Marker({
				position: e,
				icon: $obj.data("icon")
			});
		s.setMap(o)
	}
	
	if ($("#googleMap").length > 0) {
		$obj = $("#googleMap");
		var a = new google.maps.LatLng($obj.data("lat"), $obj.data("lon")),
			e = new google.maps.LatLng($obj.data("lat"), $obj.data("lon"));
		google.maps.event.addDomListener(window, "load", t1)
	}
	
	if ($("#googleMap2").length > 0) {
		$obj = $("#googleMap2");
		var a = new google.maps.LatLng($obj.data("lat"), $obj.data("lon")),
			e = new google.maps.LatLng($obj.data("lat"), $obj.data("lon"));
		google.maps.event.addDomListener(window, "load", t2)
	}
}

function introHeight() {
	var t = $(window).height();
	$(".section-fullscreen").css({
		height: t
	}), $(".fullheight").css({
		minHeight: t
	})
}

function toggleMenu() {
	$(".menu-header3").on("click", function () {
		$(this).toggleClass("open"), $(".navbar").toggleClass("open")
	})
}

function progressBar() {
	$(".block-progressbar").each(function () {
		$(this).find(".progressbar").progressbar({
			display_text: "center"
		}), $(this).find(".progressbar").css("background-color", $(this).attr("data-color"))
	})
}

function owlCarousel() {
	$(".agent-carousel").length > 0 && $(".agent-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev-agent ion-ios-arrow-right"></i>', '<i class="next-agent ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".testimonial-carousel").length > 0 && $(".testimonial-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !1,
			dots: !0,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".partner-carousel").length > 0 && $(".partner-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev-agent ion-ios-arrow-right"></i>', '<i class="next-agent ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".properties-carousel").length > 0 && $(".properties-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev-agent ion-ios-arrow-right"></i>', '<i class="next-agent ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".properties-carousel-2").length > 0 && $(".properties-carousel-2").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !1,
			dots: !0,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".property-detail-carousel").length > 0 && $(".property-detail-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !1,
			dots: !0,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			onInitialized: makePages,
			onRefreshed: makePages,
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".blog-carousel").length > 0 && $(".blog-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev-agent ion-ios-arrow-right"></i>', '<i class="next-agent ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".floor-plan-carousel").length > 0 && $(".floor-plan-carousel").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: $(this).attr("data-desktop"),
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev ion-ios-arrow-right"></i>', '<i class="next ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	}), $(".shop-slider").length > 0 && $(".shop-slider").each(function () {
		var t = "true" === $(this).attr("data-auto-play") ? !0 : !1;
		$(this).owlCarousel({
			items: 1,
			loop: !0,
			rtl: !0,
			mouseDrag: !0,
			nav: !0,
			dots: !1,
			autoPlay: t,
			autoplayTimeout: 5e3,
			autoplayHoverPause: !0,
			smartSpeed: 1e3,
			autoplayHoverPause: !0,
			navText: ['<i class="prev ion-ios-arrow-right"></i>', '<i class="next ion-ios-arrow-left"></i>'],
			responsive: {
				0: {
					items: $(this).attr("data-mobile")
				},
				481: {
					items: $(this).attr("data-tablet")
				},
				769: {
					items: $(this).attr("data-laptop")
				},
				992: {
					items: $(this).attr("data-desktop")
				}
			}
		})
	})
}

function makePages() {
	$.each(this._items, function (t) {
		$(".owl-dots .owl-dot").eq(t).css({
			background: "url(" + $(this).find("img").attr("src") + ")",
			"background-size": "cover"
		})
	})
}! function (t, a, e) {
	"use strict";
	e(t).on("load", function () {}), e(t).on("resize", function () {}), e(t).on("scroll", function () {
		e(t).scrollTop() >= 180 ? e("#go-to-top").addClass("on") : e("#go-to-top").removeClass("on")
	}), e(a).ready(function (t) {
		popupContent(), owlCarousel(), introHeight(), progressBar(), googleMap(), toggleMenu(), t('[data-toggle="tooltip"]').tooltip(), t(".show-features").on("click", function () {
			t(".box-features").slideToggle("slow")
		}), t(".noo-main-canvas .fa-angle-down").on("click", function () {
			t(this).siblings(".sub-menu").slideToggle("slow"), t(this).toggleClass("active")
		}), t(".blog-item.style-3").each(function () {
			t(this).find(".blog-featured").css("background-image", 'url("' + t(this).find(".blog-featured").attr("data-src") + '")')
		}), t(a).on("show.bs.collapse hide.bs.collapse", ".panel-group", function (a) {
			var e = t(a.target);
			"show" == a.type && t(".panel-heading").removeClass("active"), e.prev(".panel-heading").addClass("active"), "hide" == a.type && e.prev(".panel-heading").removeClass("active")
		}), t("body").on("click", "#go-to-top", function () {
			return t("html, body").animate({
				scrollTop: 0
			}, 800), !1
		}), t(".header-sticky").length && t(".header-sticky").headroom({
			onPin: function(){
				t('body').css('padding-top', t(".header-sticky").height());
				t(".header-sticky").css('top', 0);
			},
			onUnpin: function(){
				t('body').css('padding-top', 0);
				t(".header-sticky").css('top', t(window).scrollTop());
			},
			onTop: function(){
				t('body').css('padding-top', 0);
				t(".header-sticky").css('top', 0);
			}
		});
		if( t(window).scrollTop() > 0 ){
			t(".header-sticky").addClass('headroom--unpinned');
		}
	})
}(window, document, jQuery);
