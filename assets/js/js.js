var base_url = window.location.origin;

function callboxopner(e) {
	e.stopPropagation(), $(".callbox").slideDown(), $(".opener").addClass("closer"), $(".opener").removeClass("opener")
}

function callboxcloser(e) {
	e.stopPropagation(), $(".callbox").slideUp(), $(".closer").addClass("opener"), $(".closer").removeClass("closer")
}
$((function () {
	$("#loader").hide()
})), jQuery(document).ready((function (e) {
	e("#frmsearch,frmrequest").delegate(".tt-input", "blur", (function () {
		var t = e(this).val();
		if ("" !== t) {
			var a = e.grep(airports, (function (e) {
				return regex = new RegExp("^" + t, "i"), regex.test(e)
			}));
			void 0 !== a[0] ? e(this).typeahead("val", a[0]) : void 0 !== (a = e.grep(airports, (function (e) {
				return e.toLowerCase().indexOf(t.toLowerCase()) >= 0
			})))[0] ? e(this).typeahead("val", a[0]) : e(this).typeahead("val", ""), e(".tt-menu").hide()
		}
	})), jQuery().owlCarousel && (jQuery("#post-list").length && jQuery("#post-list").owlCarousel({
		loop: !0,
		margin: 30,
		responsiveClass: !0,
		autoplay: !1,
		autoplayTimeout: 5e3,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 1,
				loop: !0
			},
			600: {
				items: 2,
				loop: !0
			},
			1e3: {
				items: 4,
				loop: !0
			}
		}
	}), jQuery("#offer1").length && jQuery("#offer1").owlCarousel({
		loop: !0,
		responsiveClass: !0,
		autoplay: !0,
		autoplayTimeout: 5e3,
		dots: !1,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			1e3: {
				items: 4,
				loop: !0
			}
		}
	}), jQuery("#flightoffer").length && jQuery("#flightoffer").owlCarousel({
		loop: !0,
		responsiveClass: !0,
		autoplay: !1,
		autoplayTimeout: 5e3,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 1,
				loop: !0
			}
		}
	}), jQuery("#partner").length && jQuery("#partner").owlCarousel({
		loop: !0,
		margin: 20,
		responsiveClass: !0,
		autoplay: !0,
		autoplayTimeout: 5e3,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 1,
				loop: !0
			},
			600: {
				items: 2,
				loop: !0
			},
			1e3: {
				items: 4,
				loop: !0
			}
		}
	}), jQuery("#lastminute").length && jQuery("#lastminute").owlCarousel({
		loop: !0,
		responsiveClass: !0,
		margin: 30,
		autoplay: !1,
		autoplayTimeout: 5e3,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 1,
				loop: !0
			},
			600: {
				items: 2,
				loop: !0
			},
			1e3: {
				items: 4,
				loop: !0
			}
		}
	}), jQuery("#review-customer").length && jQuery("#review-customer").owlCarousel({
		loop: !0,
		margin: 10,
		responsiveClass: !0,
		autoplay: !0,
		autoplayTimeout: 5e3,
		navigation: !1,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 1,
				loop: !0
			},
			600: {
				items: 1,
				loop: !0
			},
			1e3: {
				items: 1,
				loop: !0
			}
		}
	}), jQuery("#lowest-fare").length && jQuery("#lowest-fare").owlCarousel({
		loop: !0,
		margin: 10,
		responsiveClass: !0,
		autoplay: !0,
		autoplayTimeout: 5e3,
		navigation: !0,
		stopOnHover: !0,
		responsive: {
			0: {
				items: 2,
				loop: !0,
				navText: ["<i class='fa fa-chevron-left owl-navigation-icon-blue'>", "<i class='fa fa-chevron-right owl-navigation-icon-blue'>"],
				nav: !0
			},
			600: {
				items: 3,
				loop: !0,
				navText: ["<i class='fa fa-chevron-left owl-navigation-icon-blue'>", "<i class='fa fa-chevron-right owl-navigation-icon-blue'>"],
				nav: !0
			},
			1e3: {
				items: 5,
				loop: !0,
				navText: ["<i class='fa fa-chevron-left owl-navigation-icon-blue'>", "<i class='fa fa-chevron-right owl-navigation-icon-blue'>"],
				nav: !0
			}
		}
	}))
})), $((function () {
	"use strict";
	(new WOW).init(), $("#departure_date").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy",
		onClose: function () {
			var e = $("#departure_date").datepicker("getDate");
			null != e && e.setDate(e.getDate() + 1), $("#return_date").datepicker("option", "minDate", e)
		}
	}), $("#return_date").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy"
	}), $("#check_in").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy",
		onClose: function () {
			var e = $("#check_in").datepicker("getDate");
			null != e && e.setDate(e.getDate() + 1), $("#check_out").datepicker("option", "minDate", e)
		}
	}), $("#check_out").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy"
	}), $("#package_start").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy"
	}), $("#car_start").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy",
		onClose: function () {
			var e = $("#car_start").datepicker("getDate");
			null != e && e.setDate(e.getDate() + 1), $("#car_end").datepicker("option", "minDate", e)
		}
	}), $("#car_end").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy"
	}), $("#csdeparturedate").datepicker({
		minDate: -0,
		maxDate: "+12M",
		dateFormat: "dd-M-yy"
	}), $("#adult_count").spinner({
		min: 1,
		max: 9
	}), $("#child_count").spinner({
		min: 0,
		max: 9
	}), $("#infant_count").spinner({
		min: 0,
		max: 9
	}), $(".pax_counter_adt").spinner({
		min: 1
	}), $(".pax_counter_chd").spinner({
		min: 0
	}), $(".selectpicker").selectpicker({
		style: "custom-select-button"
	}), $(".landing_page_dep_date").on("change", (function () {
		$(".pax_contact").show(500), $(".search-button-div").removeClass("col-md-offset-9")
	}))
})), $(document).ready((function () {
	"use strict";
	$(".view-switcher a").on("click", (function (e) {
		$(this).hasClass("switchgrid") ? $(".switchable > div").removeClass("hotel-list-view").addClass("product-grid-view") : $(this).hasClass("switchlist") && $(".switchable > div").removeClass("product-grid-view").addClass("hotel-list-view")
	}))
})), $("#color-switcher ul li").on("click", (function () {
	"use strict";
	var e = $(this).data("path");
	$("#select-style").attr("href", e)
})), $("#stoggle").on("click", (function () {
	"use strict";
	var e;
	e = "slide", $("#color-switcher").toggle(e, 400)
})), $("#book-medview").click((function () {
	alert("Ok"), $("#protect").remove()
})), $(document).ready((function () {
	$("#cheapsearchButton").click((function () {
		var errMsg = "";
		"" == $("#destination_airport").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Destination Airport.<br/>"), "" == $("#departure_date").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Departure Date.<br/>"), "" == $("#departure_airport").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Departure Airport.<br/>"), "" == $("#return_date").val() && "Return" == $("input[name=flight_type]:checked", "#frmsearch").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Return Date.<br/>"), "" == $("#cname").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Your Name.<br/>"), "" == $("#cemail").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter Your Email.<br/>"), "" == $("#cphone").val() && (errMsg += "&bull;&nbsp;&nbsp;Please Enter UK Contact Number.<br/>"), "" != errMsg ? ($("#dialog").html(errMsg), $("#dialog").dialog({
			bgiframe: !0,
			modal: !0,
			title: "Reliance Travels Ltd : Flight Search",
			buttons: {
				OK: function () {
					$(this).dialog("destroy")
				}
			}
		})) : document.getElementById("frmsearch").submit()
	})), $("#departure_airport").autocomplete({
		source: "https://www.reliancetravels.co.uk/home/searchCountry/",
		minChars: 3,
		position: {
			my: "right top",
			at: "right bottom"
		}
	}), $("#destination_airport,#cust_dest").autocomplete({
		source: "https://www.reliancetravels.co.uk//home/searchCountry/",
		minChars: 3,
		position: {
			my: "right top",
			at: "right bottom"
		}
	}), $("#hdestination").autocomplete({
		source: function (request, response) {
			$.ajax({
				url: "https://webservices.travelpack.com/autocomplete/",
				dataType: "json",
				data: {
					option: "Hotel",
					term: request.term
				},
				success: function (data) {
					response($.map(data, (function (item) {
						return {
							label: item.name,
							value: item.name,
							code: item.code
						}
					})))
				}
			})
		},
		select: function (event, ui) {
			$("#Location").val(ui.item.code)
		},
		minLength: 3,
		position: {
			my: "left top",
			at: "left bottom"
		}
	}), $("#emailSubmit").click((function () {
		var nemail = $("#nemail").val(),
			dataString = "nemail1=" + nemail;
		return "" === nemail ? alert("Please Enter Your Email") : ($("#loadinggif").show(), $.ajax({
			type: "POST",
			url: "newslettersubscription.php",
			data: dataString,
			cache: !1,
			success: function (result) {
				$("#dialog").html(result), $("#dialog").dialog({
					bgiframe: !0,
					modal: !0,
					title: "Reliance Travels Ltd: Newsletter Subscription",
					buttons: {
						Ok: function () {
							$(this).dialog("destroy")
						}
					}
				}), $("#loadinggif").hide()
			}
		})), !1
	})), $(".oneway-section").click((function () {
		$(".return-date-selection").css({
			opacity: "0.2",
			"pointer-events": "none"
		})
	})), $(".return-section").click((function () {
		$(".return-date-selection").css({
			opacity: "1",
			"pointer-events": "inherit"
		})
	}))
})), $(document).on("click", ".hi-icon-effect-8 > .opener", (function (e) {
	callboxopner(e), $(".call_departure_airport").val($("#departure_airport").val()), $(".call_destination_airport").val($("#destination_airport").val()), $(".call_departure_date").val($("#departure_date").val()), $(".call_return_date").val($("#return_date").val()), $(".call_airline").val($("input[name=airline]").val()), $(".call_flight_type").val($("input[name=flight_type]").val()), $(".call_cabin_class").val($("select[name=cabin_class]").val()), $("#callBackForm").parsley()
})), $(document).on("click", ".hi-icon-effect-8 > .closer", (function (e) {
	callboxcloser(e)
})), $(document).on("submit", "#callBackForm", (function (e) {
	e.preventDefault(), $(".quickcallbtn").attr("disabled", "disabled");
	var form = $("#callBackForm").serialize();
	$.ajax({
		url: base_url + "/inquiry_mail/quickcall",
		data: form,
		type: "post",
		dataType: "json",
		success: function (output) {
			output ? ($(".quickcallbtn").removeAttr("disabled"), callboxcloser(e), $(".quickcallsuccess").show(), setTimeout((function () {
				$(".quickcallsuccess").hide()
			}), 1e4)) : ($(".quickcallbtn").removeAttr("disabled"), $(".quickcallerror").show(), setTimeout((function () {
				$(".quickcallerror").hide(), callboxopner(e)
			}), 1e4))
		}
	})
}));
var idleTimer = null,
	idleState = !1,
	idleWait = 3e5;

function init() {
	window.addEventListener("scroll", (function (e) {
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 80,
			header = document.querySelector(".transparent-menu-top");
		distanceY > 80 ? classie.add(header, "sticky_header") : classie.has(header, "sticky_header") && classie.remove(header, "sticky_header")
	}))
}
$("*").bind("mousemove keydown scroll", (function () {
	clearTimeout(idleTimer), idleState = !1, idleTimer = setTimeout((function () {
		$(".bg-overlay").show(), idleState = !0
	}), idleWait)
})), $(".btnlook").click((function (e) {
	e.preventDefault(), $(".bg-overlay").hide()
})), window.onload = init(), $(document).ready((function () {
	$(document).on("mouseover", ".h_flightdetails", (function () {
		var maindiv = $(this).next(),
			loader = '<div class="close_details"><i class="fa fa-times"></i></div><div class="lds-facebook"><div></div><div></div><div></div></div>';
		maindiv.css({
			display: "block"
		}).html(loader);
		var fareid = $(this).data("fareid"),
			dept_date = $(this).data("deptdate"),
			rtrn_date = $(this).data("rtndate"),
			flt_type = $(this).data("ftype");
		$.ajax({
			url: base_url + "/onlinesearchresults/ajaxflightdetails",
			data: {
				fareid: fareid,
				dept_date: dept_date,
				rtrn_date: rtrn_date,
				flt_type: flt_type
			},
			type: "post",
			dataType: "json",
			success: function (output) {
				output.status && (maindiv.html(output.html), $(document).on("click", ".close_details", (function () {
					maindiv.css({
						display: "none"
					})
				})))
			}
		}), $(document).on("click", ".close_details", (function () {
			maindiv.css({
				display: "none"
			})
		}))
	})), $(document).on("click", ".pax", (function () {
		$(".passengers_details").show(500)
	})), $(document).on("click", ".close_pax", (function () {
		$(".passengers_details").hide(500)
	})), $(document).mouseup((function (e) {
		var container = $(".passengers_details");
		container.is(e.target) || 0 !== container.has(e.target).length || container.hide(500)
	})), $(document).on("click", ".hpax", (function () {
		$(".hpassengers_details").show(500)
	})), $(document).on("click", ".hclose_pax", (function () {
		$(".hpassengers_details").hide(500)
	})), $(document).mouseup((function (e) {
		var container = $(".hpassengers_details");
		container.is(e.target) || 0 !== container.has(e.target).length || container.hide(500)
	})), $(document).on("click", ".premium_economy_fetch", (function () {
		var loader_html = '<div class="fetch" id="fetching-data" style="text-align: center;padding-top: 20px;"><div class="lds-facebook"><div></div><div></div><div></div></div><p style="text-align: center;">Please Wait Fetching Flights....</p></div>',
			form = $("#frmsearch").serialize();
		form += "&cabin_class=" + encodeURIComponent("Premium Economy"), $("#premium_economy").html(loader_html), $.ajax({
			url: base_url + "/Onlinesearchresults/search_ajax",
			data: form,
			type: "post",
			dataType: "json",
			success: function (output) {
				$("#premium_economy").html(output), $(".premium_economy_fetch").removeClass("premium_economy_fetch")
			}
		})
	})), $(document).on("click", ".business_class_fetch", (function () {
		var loader_html = '<div class="fetch" id="fetching-data" style="text-align: center;padding-top: 20px;"><div class="lds-facebook"><div></div><div></div><div></div></div><p style="text-align: center;">Please Wait Fetching Flights....</p></div>',
			form = $("#frmsearch").serialize();
		form += "&cabin_class=" + encodeURIComponent("Business Class"), $("#business_class").html(loader_html), $.ajax({
			url: base_url + "/Onlinesearchresults/search_ajax",
			data: form,
			type: "post",
			dataType: "json",
			success: function (output) {
				$("#business_class").html(output), $(".business_class_fetch").removeClass("business_class_fetch")
			}
		})
	})), $(document).on("click", ".first_class_fetch", (function () {
		var loader_html = '<div class="fetch" id="fetching-data" style="text-align: center;padding-top: 20px;"><div class="lds-facebook"><div></div><div></div><div></div></div><p style="text-align: center;">Please Wait Fetching Flights....</p></div>',
			form = $("#frmsearch").serialize();
		form += "&cabin_class=" + encodeURIComponent("First Class"), $("#first_class").html(loader_html), $.ajax({
			url: base_url + "/Onlinesearchresults/search_ajax",
			data: form,
			type: "post",
			dataType: "json",
			success: function (output) {
				$("#first_class").html(output), $(".first_class_fetch").removeClass("first_class_fetch")
			}
		})
	})), $(document).on("change", ".no_rooms", (function () {
		var num_rooms = $(this).val();
		if (num_rooms > 1) {
			for (var html = "", i = 2; i <= num_rooms; i++) html += '<div class="col-lg-4 clear-padding room_pax room_' + i + '"><div class="col-lg-12 search-col-padding"><div class="row"><div class="col-lg-12 clear-padding"><label>Room ' + i + ' Occupancy</label></div></div><div class="row"><div class="col-lg-6 room_' + i + '_adt_div custom_padding"><div class="input-group"><span class="input-group-addon"><small>Adult</small></span> <select class="form-control" name="room_' + i + '_adult" id="room_' + i + '_adult"><option value="1" selected>1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></div></div><div class="col-lg-6 room_' + i + '_kid_div custom_padding"><div class="input-group"><span class="input-group-addon"><small>Kids</small></span> <select class="room_kids form-control" name="room_' + i + '_kid" id="room_' + i + '_kid" data-room-number="' + i + '"><option value="0" selected>0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></div></div><div class="col-lg-0 room_' + i + '_age_div clear-padding"><div class="row room_' + i + '_kid_ages"></div></div></div></div></div>';
			$(".room_details").html(html)
		} else 1 == num_rooms && $(".room_details").html("")
	})), $(document).on("change", ".room_kids", (function () {
		var room_kids = $(this).val(),
			room_num = $(this).attr("data-room-number"),
			div = ".room_" + room_num + "_kid_ages";
		if (room_kids > 0) {
			var html = "";
			$(".room_" + room_num + "_adt_div").removeClass("col-lg-6"), $(".room_" + room_num + "_kid_div").removeClass("col-lg-6"), $(".room_" + room_num + "_age_div").removeClass("col-lg-0"), $(".room_" + room_num + "_adt_div").addClass("col-lg-3"), $(".room_" + room_num + "_kid_div").addClass("col-lg-3"), $(".room_" + room_num + "_age_div").addClass("col-lg-6");
			for (var i = 1; i <= room_kids; i++) html += '<div class="col-lg-3 custom_padding"><input type="number" name="room_' + room_num + "_kid_" + i + '_age" class="form-control" placeholder="Age" required></div>';
			$(div).html(html)
		} else $(div).html("")
	})), $(document).on("change", ".no_rooms_search_again", (function () {
		var num_rooms = $(this).val();
		if (num_rooms > 1) {
			for (var html = "", i = 2; i <= num_rooms; i++) html += '<div class="col-xs-12 clear-padding room_pax room_' + i + '"><div class="col-lg-12 search-col-padding"><div class="row"><div class="col-xs-12 clear-padding"><label>Room ' + i + ' Occupancy</label></div></div><div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 room_' + i + '_adt_div custom_padding"><div class="input-group"><select class="form-control" name="room_' + i + '_adult" id="room_' + i + '_adult"><option value="1" selected>1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><span class="input-group-addon"><small>Adult</small></span> </div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 room_' + i + '_kid_div custom_padding"><div class="input-group"><select class="room_kids_search_again form-control" name="room_' + i + '_kid" id="room_' + i + '_kid" data-room-number="' + i + '"><option value="0" selected>0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><span class="input-group-addon"><small>Kids</small></span> </div></div><div class="col-xs-12 room_' + i + '_age_div clear-padding"><div class="row room_' + i + '_kid_ages"></div></div></div></div></div>';
			$(".room_details").html(html)
		} else 1 == num_rooms && $(".room_details").html("")
	})), $(document).on("change", ".room_kids_search_again", (function () {
		var room_kids = $(this).val(),
			room_num = $(this).attr("data-room-number"),
			div = ".room_" + room_num + "_kid_ages";
		if (room_kids > 0) {
			for (var html = "", i = 1; i <= room_kids; i++) html += '<div class="col-lg-3 search-col-padding"><input type="number" name="room_' + room_num + "_kid_" + i + '_age" class="form-control" placeholder="Age" required></div>';
			$(div).html(html)
		} else $(div).html("")
	})), $("#check_in").on("change", (function () {
		$(".searchHotel").removeClass("col-lg-4 col-md-4 col-sm-4"), $(".searchHotel").addClass("col-lg-3 col-md-3 col-sm-3"), $(".hcontact_details").show(100)
	})), $(document).on("click", ".expand_hotel_desc", (function () {
		$(this).text("show less"), $(this).removeClass("expand_hotel_desc"), $(this).addClass("collapse_hotel_desc");
		var exp_area = $(this).attr("data-exp-area");
		exp_area = "." + exp_area, $(exp_area).show(500)
	})), $(document).on("click", ".collapse_hotel_desc", (function () {
		$(this).text("show more"), $(this).addClass("expand_hotel_desc"), $(this).removeClass("collapse_hotel_desc");
		var exp_area = $(this).attr("data-exp-area");
		exp_area = "." + exp_area, $(exp_area).hide(500)
	})), $(document).on("click", ".subs_button", (function () {
		var email = $("#nemail").val();
		$("#cust_email").val(email), $("#subscriber_model").modal("show")
	})), $(document).on("submit", "#subscriber_form", (function (e) {
		var base_url, url = window.location.origin + "/Inquiry_mail/subscriber";
		if (!e.isDefaultPrevented()) return $("#submit_form_btn").attr("disabled", !0), $.ajax({
			type: "POST",
			url: url,
			data: $(this).serialize(),
			success: function (response) {
				$("#formmessage").html(response).show().delay(2e3).fadeOut("slow"), $("#submit_form_btn").removeAttr("disabled"), $("#subscriber_form")[0].reset(), setTimeout((function () {
					$("#subscriber_model").modal("hide")
				}), 4e3)
			}
		}), !1
	}))
}));