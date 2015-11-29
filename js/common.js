$(function(){

	wow = new WOW({
		offset: 100,
		mobile: false,
	});
	wow.init();

	$('.header-nav a').on('click', function(){
		$('html,body').scrollTo(this.hash, this.hash, {offset: 0});
		return false;
	});

	$('.js-fancy').fancybox({
		type        : 'image',
		openEffect: 'fade',
		closeEffect: 'fade',
		nextEffect: 'fade',
		prevEffect: 'fade',
		helpers: {
			overlay: {
				locked: false
			}
		}
	});

	$('.js-cert').bxSlider({
		slideWidth: 220,
		minSlides: 5,
		maxSlides: 5,
		slideMargin: 10,
		controls: true,
		pager: false,
		moveSlides: 5,
		prevText: '',
		nextText: '',
		hideControlOnEnd: true,
		infiniteLoop: false,
		responsive: false,
	});

	$('.js-map_obj_carousel').bxSlider({
		slideWidth: 190,
		minSlides: 4,
		maxSlides: 4,
		slideMargin: 75,
		controls: true,
		pager: false,
		moveSlides: 4,
		prevText: '',
		nextText: '',
		hideControlOnEnd: true,
		infiniteLoop: false,
		responsive: false,
	});

	$('.js-maingall-big').bxSlider({
		pagerCustom: '#bx-pager',
		controls: false,
		mode: 'fade',
	});

	$('.js-slider').bxSlider({
		prevText: '',
		nextText: '',
		hideControlOnEnd: true,
		responsive: false,
		infiniteLoop: false,
		onSliderLoad: function(){
			if (this.hasClass('text_review')) {
				$('.review-text_review').hide();
			}
		},
	});

	var vSlider = $('.js-verticalslider').bxSlider({
		prevText: '',
		nextText: '',
		controls: false,
		mode: 'fade',
		responsive: false,
	});
	$('.js-changeslide').on('click', function(){
		vSlider.goToNextSlide();
	});

	$('.js-people_slider').bxSlider({
		slideWidth: 184,
		minSlides: 5,
		maxSlides: 5,
		slideMargin: 10,
		controls: true,
		pager: false,
		moveSlides: 5,
		prevText: '',
		nextText: '',
		hideControlOnEnd: true,
		infiniteLoop: false,
		responsive: false,
	});

	$('.js-man_slider').bxSlider({
		slideWidth: 475,
		minSlides: 2,
		maxSlides: 2,
		slideMargin: 10,
		controls: true,
		pager: false,
		moveSlides: 2,
		prevText: '',
		nextText: '',
		hideControlOnEnd: true,
		infiniteLoop: false,
		responsive: false,
	});

	//	Responsive Accordion v1.3, Copyright 2014, Joe Mottershaw, https://github.com/joemottershaw/
	//	============================================================================================
	$('.responsive-accordion').each(function() {

		$('.responsive-accordion-panel', this).hide();
		// Hide panels
		$(this).find('.open').each(function(){
			$(this).show().addClass('active')
		});

		// Bind the click event handler
		$('.responsive-accordion-head', this).click(function(e) {
			// Get elements
			var	thisAccordion = $(this).parent().parent(),
				thisHead = $(this),
				thisPlus = thisHead.find('.responsive-accordion-plus'),
				thisMinus = thisHead.find('.responsive-accordion-minus'),
				thisPanel = thisHead.siblings('.responsive-accordion-panel');

			// Reset all plus/mins symbols on all headers
				thisAccordion.find('.responsive-accordion-plus').show();
				thisAccordion.find('.responsive-accordion-minus').hide();

			// Reset all head/panels active statuses except for current
				thisAccordion.find('.responsive-accordion-head').not(this).removeClass('active');
				thisAccordion.find('.responsive-accordion-panel').not(this).removeClass('active').slideUp();

			// Toggle current head/panel active statuses
				if (thisHead.hasClass('active')) {
					thisHead.removeClass('active');
					thisPlus.show();
					thisMinus.hide();
					thisPanel.removeClass('active').slideUp();
				} else {
					thisHead.addClass('active');
					thisPlus.hide();
					thisMinus.show();
					thisPanel.addClass('active').slideDown();
				}
		});
	});

	$('.js-change_type').on('click', 'button', function(){
		var btn = $(this);
		if (btn.hasClass('reviews-type_text') && !btn.hasClass('active')) {
			btn.addClass('active');
			$('.reviews-type_video').removeClass('active');
			blockShowHide($('.review-text_review'), $('.review-video_review'));
		} else if (btn.hasClass('reviews-type_video') && !btn.hasClass('active')) {
			btn.addClass('active');
			$('.reviews-type_text').removeClass('active');
			blockShowHide($('.review-video_review'), $('.review-text_review'));
		}
	});

	$('.tabs').each(function(){
		var tabs  = $(this);
		var maxH = [];
		tabs.find('.tabs-item').each(function(){
			var item  = $(this);
			maxH.push(item.height());
			if (!item.hasClass('active')) {
				item.hide();
			}
		});
		tabs.find('.tabs-tabs').height(Math.max.apply(null, maxH));

	});
	$('.js-tabs').on('click', '.tabs-index_item', function(){
		var tab = $(this);
		if (tab.hasClass('active')) {
			return
		}
		var tabsWr = tab.closest('.tabs');

		tab.parent().find('.active').removeClass('active');
		tab.addClass('active');
		blockShowHide(tabsWr.find('.tabs-item[data-tab=' + tab.data('tab') + ']'), tabsWr.find('.tabs-tabs .active'));

	});


	ymaps.ready(function () {
		var myMap = new ymaps.Map('map', {
				center: [55.734658, 37.624534],
				zoom: 10,
				behaviors: ['default', 'scrollZoom'],
			}),
				clusterer = new ymaps.Clusterer({
				preset: 'islands#blueClusterIcons',
				groupByCoordinates: false,
				clusterDisableClickZoom: false,
				hasBalloon: true,
				maxZoom:11,
				clusterHideIconOnBalloonOpen: false,
				geoObjectHideIconOnBalloonOpen: false,
				gridSize: 30,
			}),
				getPointData = function (index, id, status) {
				var nornd = false;
				if (status == 'work') {
					nornd = true;
				}
				return {
					balloonContentBody: rndMapObgInfo(nornd),
					clusterCaption: rndMapObgInfo(nornd)
				};
			},
				getPointOptions = function () {
				return {
					balloonShadow: false,
					balloonPanelMaxMapArea: 0,
					hideIconOnBalloonOpen: false,
					balloonOffset: [15, 0],
					iconLayout: 'default#image',
					iconImageHref: 'img/map_' + item.status + '.png',
					iconImageSize: [30, 34],
					iconImageOffset: [-0, -0]
				};
			},
			geoObjects = [];
			var objects = [{"id": 1, "coord":[54.658657, 37.46942230000002], "status": "done"},{"id": 2, "coord":[54.7983462, 37.35544010000001], "status": "done"},{"id": 3, "coord":[54.8978259, 37.32639489999997], "status": "done"},{"id": 4, "coord":[54.9179562, 37.42299630000002], "status": "done"},{"id": 5, "coord":[54.9323452, 37.45048259999999], "status": "done"},{"id": 6, "coord":[54.9881417, 37.87522100000001], "status": "done"},{"id": 7, "coord":[55.01135610000001, 36.41226519999998], "status": "done"},{"id": 8, "coord":[55.0724343, 37.98951999999997], "status": "done"},{"id": 9, "coord":[55.07603810000001, 37.93579569999997], "status": "done"},{"id": 10, "coord":[55.0914347, 36.67095449999999], "status": "done"},{"id": 11, "coord":[55.096368, 37.42959840000003], "status": "done"},{"id": 12, "coord":[55.1249003, 37.95015030000002], "status": "done"},{"id": 13, "coord":[55.1997205, 37.22841560000006], "status": "done"},{"id": 14, "coord":[55.2079847, 37.56770419999998], "status": "done"},{"id": 15, "coord":[55.2990657, 39.091300899999965], "status": "done"},{"id": 16, "coord":[55.308435, 37.8271881], "status": "done"},{"id": 17, "coord":[55.3229996, 37.160275100000035], "status": "done"},{"id": 18, "coord":[55.3422342, 37.24232089999998], "status": "done"},{"id": 19, "coord":[55.3817725, 36.362211900000034], "status": "done"},{"id": 20, "coord":[55.3851413, 39.03232230000003], "status": "done"},{"id": 21, "coord":[55.4277387, 37.5316883], "status": "done"},{"id": 22, "coord":[55.4291023, 37.5358083], "status": "done"},{"id": 23, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 24, "coord":[55.4403174, 36.71433769999999], "status": "done"},{"id": 25, "coord":[55.4414977, 35.83522500000004], "status": "done"},{"id": 26, "coord":[55.4511152, 37.51449200000002], "status": "done"},{"id": 27, "coord":[55.4654985, 36.94140870000001], "status": "done"},{"id": 28, "coord":[55.4707549, 38.89564859999996], "status": "done"},{"id": 29, "coord":[55.485720099999995, 37.89060990000007], "status": "done"},{"id": 30, "coord":[55.5268992, 38.13473509999994], "status": "done"},{"id": 31, "coord":[55.5482773, 37.05915630000005], "status": "done"},{"id": 32, "coord":[55.561013100000004, 36.189751], "status": "done"},{"id": 33, "coord":[55.57135719999999, 37.44559159999994], "status": "work"},{"id": 34, "coord":[55.5905149, 37.11805340000001], "status": "done"},{"id": 35, "coord":[55.5974912, 38.11325620000002], "status": "done"},{"id": 36, "coord":[55.605478, 37.23355370000002], "status": "done"},{"id": 37, "coord":[55.6123588, 36.97793039999999], "status": "done"},{"id": 38, "coord":[55.6141169, 38.43919370000003], "status": "done"},{"id": 39, "coord":[55.61761989999999, 36.863824900000054], "status": "done"},{"id": 40, "coord":[55.6480977, 37.10605940000005], "status": "done"},{"id": 41, "coord":[55.649073, 37.407647999999995], "status": "done"},{"id": 42, "coord":[55.6496964, 36.632653300000015], "status": "done"},{"id": 43, "coord":[55.67337449999999, 37.28185689999998], "status": "done"},{"id": 44, "coord":[55.6784421, 38.246871000000056], "status": "done"},{"id": 45, "coord":[55.6851517, 37.31719029999999], "status": "done"},{"id": 46, "coord":[55.7185681, 38.30722639999999], "status": "done"},{"id": 47, "coord":[55.725345, 36.26644799999997], "status": "done"},{"id": 48, "coord":[55.73737569999999, 38.009539099999984], "status": "done"},{"id": 49, "coord":[55.7450777, 38.57904200000007], "status": "done"},{"id": 50, "coord":[55.74561150000001, 38.12143820000006], "status": "done"},{"id": 51, "coord":[55.7493091, 37.429503100000034], "status": "done"},{"id": 52, "coord":[55.7711348, 37.39753930000006], "status": "done"},{"id": 53, "coord":[55.7910897, 38.3764978], "status": "done"},{"id": 54, "coord":[55.8263313, 37.326297000000075], "status": "done"},{"id": 55, "coord":[55.8757731, 37.98385669999993], "status": "done"},{"id": 56, "coord":[55.8849502, 36.68464779999999], "status": "done"},{"id": 57, "coord":[55.941252, 37.29311000000007], "status": "done"},{"id": 58, "coord":[55.9442271, 38.153530899999964], "status": "done"},{"id": 59, "coord":[55.949711, 37.29822899999999], "status": "done"},{"id": 60, "coord":[55.96034719999999, 36.2271399], "status": "done"},{"id": 61, "coord":[56.0326472, 37.169850999999994], "status": "done"},{"id": 62, "coord":[56.05293340000001, 37.48573859999999], "status": "done"},{"id": 63, "coord":[56.071894, 37.06253240000001], "status": "done"},{"id": 64, "coord":[56.1195299, 38.67909129999999], "status": "done"},{"id": 65, "coord":[56.1649498, 37.944942699999956], "status": "work"},{"id": 66, "coord":[56.17363409999999, 37.499744899999996], "status": "done"},{"id": 67, "coord":[56.228548700000005, 38.0876529], "status": "done"},{"id": 68, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 69, "coord":[56.31812369999999, 36.55731270000001], "status": "done"},{"id": 70, "coord":[56.3242317, 38.14521149999996], "status": "done"},{"id": 71, "coord":[56.3457226, 38.07787099999996], "status": "done"},{"id": 72, "coord":[56.35271359999999, 38.1188439], "status": "done"},{"id": 73, "coord":[56.3803265, 37.62731740000004], "status": "done"},{"id": 74, "coord":[56.444787299999994, 38.23088050000002], "status": "done"},{"id": 75, "coord":[56.4595728, 37.44978649999996], "status": "done"},{"id": 76, "coord":[56.6066087, 37.57459169999993], "status": "done"},{"id": 77, "coord":[56.64674789999999, 37.13864179999996], "status": "done"},{"id": 78, "coord":[57.8991523, 38.83886329999996], "status": "done"},{"id": 79, "coord":[59.93428020000001, 30.33509860000004], "status": "done"},{"id": 80, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 81, "coord":[55.47878170000001, 37.396440600000005], "status": "done"},{"id": 82, "coord":[55.5159563, 36.16454120000004], "status": "done"},{"id": 83, "coord":[55.5974912, 38.11325620000002], "status": "done"},{"id": 84, "coord":[55.7928384, 38.695862600000055], "status": "done"},{"id": 85, "coord":[55.8651083, 36.60183660000007], "status": "done"},{"id": 86, "coord":[57.195623, 39.41315269999996], "status": "done"},{"id": 87, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 88, "coord":[44.952117, 34.10241700000007], "status": "done"},{"id": 89, "coord":[54.155556, 36.95833300000004], "status": "done"},{"id": 90, "coord":[54.163768, 37.564950700000054], "status": "done"},{"id": 91, "coord":[54.5518584, 36.28509729999997], "status": "done"},{"id": 92, "coord":[54.5943825, 35.87197270000001], "status": "done"},{"id": 93, "coord":[54.668041, 38.17681210000001], "status": "done"},{"id": 94, "coord":[54.6943977, 37.171998099999996], "status": "done"},{"id": 95, "coord":[54.7261141, 37.3200905], "status": "done"},{"id": 96, "coord":[54.735024, 37.401051999999936], "status": "work"},{"id": 97, "coord":[54.7515193, 37.44757979999997], "status": "done"},{"id": 98, "coord":[54.758532, 38.8817871], "status": "done"},{"id": 99, "coord":[54.7807748, 37.5597626], "status": "done"},{"id": 100, "coord":[54.78664999999999, 37.267471500000056], "status": "done"},{"id": 101, "coord":[54.8007032, 38.267614099999946], "status": "done"},{"id": 102, "coord":[54.820833, 39.33361100000002], "status": "done"},{"id": 103, "coord":[54.8438311, 38.186220700000035], "status": "done"},{"id": 104, "coord":[54.8594162, 37.55561639999996], "status": "done"},{"id": 105, "coord":[54.8983859, 37.65896079999993], "status": "done"},{"id": 106, "coord":[54.9040441, 38.080350899999985], "status": "done"},{"id": 107, "coord":[54.9159828, 37.4147565], "status": "done"},{"id": 108, "coord":[54.92679889999999, 37.48705999999993], "status": "done"},{"id": 109, "coord":[54.9402436, 39.027959099999975], "status": "done"},{"id": 110, "coord":[54.949086599999994, 37.53451540000003], "status": "work"},{"id": 111, "coord":[54.9497574, 41.397405299999946], "status": "done"},{"id": 112, "coord":[54.9661337, 37.9888643], "status": "done"},{"id": 113, "coord":[54.9699091, 39.10856680000006], "status": "done"},{"id": 114, "coord":[54.9744948, 37.99629709999999], "status": "done"},{"id": 115, "coord":[54.97499999999999, 37.21944400000007], "status": "done"},{"id": 116, "coord":[54.9841727, 38.0255515], "status": "done"},{"id": 117, "coord":[54.9911188, 37.56523870000001], "status": "done"},{"id": 118, "coord":[55.0055468, 37.838620499999934], "status": "done"},{"id": 119, "coord":[55.0161351, 37.653677], "status": "done"},{"id": 120, "coord":[55.01725279999999, 37.92265610000004], "status": "done"},{"id": 121, "coord":[55.023056, 37.38861099999997], "status": "done"},{"id": 122, "coord":[55.026563100000004, 37.426696600000014], "status": "done"},{"id": 123, "coord":[55.0280221, 36.293335], "status": "done"},{"id": 124, "coord":[55.028195399999994, 36.72316950000004], "status": "done"},{"id": 125, "coord":[55.0319476, 36.73580190000007], "status": "done"},{"id": 126, "coord":[55.031996, 37.35329249999995], "status": "done"},{"id": 127, "coord":[55.0396474, 37.89347190000001], "status": "done"},{"id": 128, "coord":[55.0576044, 36.96776130000001], "status": "done"},{"id": 129, "coord":[55.0594024, 37.76172389999999], "status": "done"},{"id": 130, "coord":[55.062525, 37.98823300000004], "status": "done"},{"id": 131, "coord":[55.0675508, 37.69705929999998], "status": "done"},{"id": 132, "coord":[55.0723913, 37.43805240000006], "status": "done"},{"id": 133, "coord":[55.0724343, 37.98951999999997], "status": "work"},{"id": 134, "coord":[55.0735092, 38.4016216], "status": "done"},{"id": 135, "coord":[55.07603810000001, 37.93579569999997], "status": "done"},{"id": 136, "coord":[55.08218729999999, 37.215131799999995], "status": "done"},{"id": 137, "coord":[55.0846241, 37.415206200000064], "status": "done"},{"id": 138, "coord":[55.090349, 37.02031629999999], "status": "done"},{"id": 139, "coord":[55.09079180000001, 37.458564300000035], "status": "done"},{"id": 140, "coord":[55.090796, 36.693376899999976], "status": "done"},{"id": 141, "coord":[55.0937517, 38.76886179999997], "status": "done"},{"id": 142, "coord":[55.09402559999999, 37.48765040000001], "status": "done"},{"id": 143, "coord":[55.107111, 37.4686874], "status": "done"},{"id": 144, "coord":[55.113822, 37.647331500000064], "status": "work"},{"id": 145, "coord":[55.120934, 37.96094900000003], "status": "done"},{"id": 146, "coord":[55.1232323, 37.96400199999994], "status": "done"},{"id": 147, "coord":[55.13463580000001, 37.5986944], "status": "done"},{"id": 148, "coord":[55.1392444, 37.56804239999997], "status": "done"},{"id": 149, "coord":[55.1461195, 37.15746850000005], "status": "done"},{"id": 150, "coord":[55.1526207, 37.460475599999995], "status": "done"},{"id": 151, "coord":[55.1557672, 37.654149200000006], "status": "done"},{"id": 152, "coord":[55.1644419, 61.436843100000026], "status": "done"},{"id": 153, "coord":[55.165605, 38.5357243], "status": "done"},{"id": 154, "coord":[55.1663457, 37.488320499999986], "status": "done"},{"id": 155, "coord":[55.167554, 38.36901899999998], "status": "done"},{"id": 156, "coord":[55.1679476, 36.2821596], "status": "done"},{"id": 157, "coord":[55.178478000000005, 37.9852914], "status": "done"},{"id": 158, "coord":[55.179113, 37.48406399999999], "status": "done"},{"id": 159, "coord":[55.183333000000005, 36.64999999999998], "status": "done"},{"id": 160, "coord":[55.1835721, 37.96912169999996], "status": "done"},{"id": 161, "coord":[55.1894982, 37.8735595], "status": "done"},{"id": 162, "coord":[55.1897056, 37.25652439999999], "status": "done"},{"id": 163, "coord":[55.191752, 37.86823800000002], "status": "done"},{"id": 164, "coord":[55.1986018, 38.5821581], "status": "done"},{"id": 165, "coord":[55.1993257, 38.01466549999998], "status": "done"},{"id": 166, "coord":[55.2, 36.5], "status": "done"},{"id": 167, "coord":[55.2033165, 36.4840078], "status": "done"},{"id": 168, "coord":[55.204103, 37.020605], "status": "done"},{"id": 169, "coord":[55.2049181, 37.38757680000003], "status": "done"},{"id": 170, "coord":[55.20683450000001, 36.93821200000002], "status": "done"},{"id": 171, "coord":[55.2090761, 36.484658800000034], "status": "done"},{"id": 172, "coord":[55.213724, 37.08022499999993], "status": "done"},{"id": 173, "coord":[55.215522400000005, 37.937142600000016], "status": "done"},{"id": 174, "coord":[55.2312986, 38.368742399999974], "status": "done"},{"id": 175, "coord":[55.24021740000001, 37.21643700000004], "status": "done"},{"id": 176, "coord":[55.240539, 37.01123600000005], "status": "done"},{"id": 177, "coord":[55.2439909, 38.4017541], "status": "done"},{"id": 178, "coord":[55.2461235, 38.76632399999994], "status": "done"},{"id": 179, "coord":[55.247611, 37.6091537], "status": "done"},{"id": 180, "coord":[55.252419499999995, 36.64323830000001], "status": "done"},{"id": 181, "coord":[55.2549607, 38.28065319999996], "status": "done"},{"id": 182, "coord":[55.25791230000001, 37.17458260000001], "status": "done"},{"id": 183, "coord":[55.26155, 37.09979199999998], "status": "done"},{"id": 184, "coord":[55.264618, 37.88699159999999], "status": "done"},{"id": 185, "coord":[55.264618, 37.8869916], "status": "done"},{"id": 186, "coord":[55.2661533, 37.76912289999996], "status": "done"},{"id": 187, "coord":[55.2700733, 38.46281750000003], "status": "done"},{"id": 188, "coord":[55.284126, 38.39317319999998], "status": "done"},{"id": 189, "coord":[55.295939, 37.19323600000007], "status": "done"},{"id": 190, "coord":[55.2990657, 39.091300899999965], "status": "done"},{"id": 191, "coord":[55.3006821, 37.73641999999995], "status": "done"},{"id": 192, "coord":[55.310108, 37.540864000000056], "status": "done"},{"id": 193, "coord":[55.317667, 39.825000000000045], "status": "done"},{"id": 194, "coord":[55.3180847, 35.93961609999997], "status": "done"},{"id": 195, "coord":[55.3196634, 37.1622661], "status": "done"},{"id": 196, "coord":[55.32022199999999, 38.315943999999945], "status": "done"},{"id": 197, "coord":[55.3228942, 37.8451539], "status": "done"},{"id": 198, "coord":[55.3234307, 37.34330590000002], "status": "done"},{"id": 199, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 200, "coord":[55.3238424, 38.68151309999996], "status": "done"},{"id": 201, "coord":[55.3253723, 38.4785713], "status": "done"},{"id": 202, "coord":[55.3268993, 38.22683310000002], "status": "done"},{"id": 203, "coord":[55.32894049999999, 37.74785670000006], "status": "done"},{"id": 204, "coord":[55.34145299999999, 37.15104199999996], "status": "done"},{"id": 205, "coord":[55.3416904, 37.902517999999986], "status": "done"},{"id": 206, "coord":[55.3487978, 38.37259990000007], "status": "done"},{"id": 207, "coord":[55.3488147, 36.180891299999985], "status": "done"},{"id": 208, "coord":[55.34999999999999, 36.200000000000045], "status": "done"},{"id": 209, "coord":[55.3503485, 35.37315139999998], "status": "done"},{"id": 210, "coord":[55.350761, 37.63334699999996], "status": "done"},{"id": 211, "coord":[55.35410299999999, 37.232849999999985], "status": "done"},{"id": 212, "coord":[55.35909299999999, 37.521041500000024], "status": "done"},{"id": 213, "coord":[55.359944500000005, 39.0584554], "status": "done"},{"id": 214, "coord":[55.3600236, 36.550408699999934], "status": "done"},{"id": 215, "coord":[55.3614554, 38.43964080000001], "status": "done"},{"id": 216, "coord":[55.3622995, 37.988493800000015], "status": "done"},{"id": 217, "coord":[55.362936, 39.24277499999994], "status": "done"},{"id": 218, "coord":[55.36973170000001, 39.026107499999966], "status": "done"},{"id": 219, "coord":[55.36980879999999, 36.79890399999999], "status": "done"},{"id": 220, "coord":[55.3703776, 37.3517518], "status": "done"},{"id": 221, "coord":[55.3718723, 37.74903419999998], "status": "done"},{"id": 222, "coord":[55.37911040000001, 38.1719971], "status": "done"},{"id": 223, "coord":[55.3808726, 36.54577740000002], "status": "done"},{"id": 224, "coord":[55.3817725, 36.362211900000034], "status": "done"},{"id": 225, "coord":[55.3827252, 36.31521980000002], "status": "done"},{"id": 226, "coord":[55.398894, 38.75541350000003], "status": "done"},{"id": 227, "coord":[55.4020378, 37.24263730000007], "status": "done"},{"id": 228, "coord":[55.4025103, 37.6281738], "status": "done"},{"id": 229, "coord":[55.406764, 38.6623022], "status": "done"},{"id": 230, "coord":[55.408061, 37.217130999999995], "status": "work"},{"id": 231, "coord":[55.408457, 37.009678899999926], "status": "done"},{"id": 232, "coord":[55.412597, 36.862716399999954], "status": "done"},{"id": 233, "coord":[55.4165436, 38.4301758], "status": "done"},{"id": 234, "coord":[55.4189703, 37.5715128], "status": "done"},{"id": 235, "coord":[55.419458199999994, 37.40684340000007], "status": "done"},{"id": 236, "coord":[55.4195186, 38.26281370000004], "status": "done"},{"id": 237, "coord":[55.422779, 38.9245605], "status": "done"},{"id": 238, "coord":[55.4234516, 37.5210455], "status": "done"},{"id": 239, "coord":[55.425011, 37.5237923], "status": "done"},{"id": 240, "coord":[55.4263746, 37.554691], "status": "done"},{"id": 241, "coord":[55.4277384, 37.5601842], "status": "done"},{"id": 242, "coord":[55.4279334, 37.5512579], "status": "done"},{"id": 243, "coord":[55.4283232, 37.556751], "status": "done"},{"id": 244, "coord":[55.4292971, 37.5382115], "status": "done"},{"id": 245, "coord":[55.4294919, 37.5371816], "status": "done"},{"id": 246, "coord":[55.4296868, 37.5358083], "status": "done"},{"id": 247, "coord":[55.429961, 37.597289000000046], "status": "done"},{"id": 248, "coord":[55.4310505, 37.5570944], "status": "done"},{"id": 249, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 250, "coord":[55.4314401, 37.5457647], "status": "done"},{"id": 251, "coord":[55.432257, 37.54335500000002], "status": "done"},{"id": 252, "coord":[55.4328037, 37.5557212], "status": "done"},{"id": 253, "coord":[55.43749279999999, 36.96608889999993], "status": "done"},{"id": 254, "coord":[55.4413369, 37.2487322], "status": "done"},{"id": 255, "coord":[55.4414794, 37.2766113], "status": "done"},{"id": 256, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 257, "coord":[55.4430234, 37.7533102], "status": "done"},{"id": 258, "coord":[55.4431017, 36.117770500000006], "status": "done"},{"id": 259, "coord":[55.4443716, 37.54456000000005], "status": "done"},{"id": 260, "coord":[55.44472290000001, 37.097660099999985], "status": "done"},{"id": 261, "coord":[55.4454814, 35.8637098], "status": "done"},{"id": 262, "coord":[55.4477108, 37.7016449], "status": "done"},{"id": 263, "coord":[55.4484311, 37.73522609999998], "status": "done"},{"id": 264, "coord":[55.4511152, 37.51449200000002], "status": "done"},{"id": 265, "coord":[55.4534165, 36.863347100000055], "status": "done"},{"id": 266, "coord":[55.45427800000001, 37.39814999999999], "status": "done"},{"id": 267, "coord":[55.4558467, 38.30139899999995], "status": "done"},{"id": 268, "coord":[55.4562859, 37.586605299999974], "status": "done"},{"id": 269, "coord":[55.4639561, 37.69956309999998], "status": "done"},{"id": 270, "coord":[55.4675519, 38.26743290000002], "status": "done"},{"id": 271, "coord":[55.471315999999995, 38.2583204], "status": "done"},{"id": 272, "coord":[55.471316, 38.2638136], "status": "done"},{"id": 273, "coord":[55.477694, 38.151133500000014], "status": "done"},{"id": 274, "coord":[55.4789265, 35.94527610000001], "status": "done"},{"id": 275, "coord":[55.4790271, 37.53151109999999], "status": "done"},{"id": 276, "coord":[55.479819, 36.924244000000044], "status": "done"},{"id": 277, "coord":[55.483588, 38.398923999999965], "status": "done"},{"id": 278, "coord":[55.4841691, 37.01438510000003], "status": "done"},{"id": 279, "coord":[55.491389, 37.309167], "status": "done"},{"id": 280, "coord":[55.4919096, 37.855654800000025], "status": "done"},{"id": 281, "coord":[55.5005584, 37.55731990000004], "status": "done"},{"id": 282, "coord":[55.500905, 38.33852939999997], "status": "done"},{"id": 283, "coord":[55.50437609999999, 36.02459509999994], "status": "done"},{"id": 284, "coord":[55.506774699999994, 37.326982000000044], "status": "done"},{"id": 285, "coord":[55.5070589, 37.7532549], "status": "done"},{"id": 286, "coord":[55.509285, 38.11161949999996], "status": "done"},{"id": 287, "coord":[55.5104, 36.69099600000004], "status": "done"},{"id": 288, "coord":[55.5146252, 38.162433], "status": "done"},{"id": 289, "coord":[55.5154146, 38.195343], "status": "done"},{"id": 290, "coord":[55.51773859999999, 37.01295440000001], "status": "done"},{"id": 291, "coord":[55.520556, 36.53344400000003], "status": "done"},{"id": 292, "coord":[55.5241609, 37.0695877], "status": "done"},{"id": 293, "coord":[55.5248737, 36.99266620000003], "status": "done"},{"id": 294, "coord":[55.524974099999994, 37.552530899999965], "status": "done"},{"id": 295, "coord":[55.527778, 37.148056], "status": "done"},{"id": 296, "coord":[55.530278, 35.60500000000002], "status": "done"},{"id": 297, "coord":[55.5395334, 37.87676499999998], "status": "done"},{"id": 298, "coord":[55.540556, 38.42777799999999], "status": "done"},{"id": 299, "coord":[55.5407601, 38.427428599999985], "status": "done"},{"id": 300, "coord":[55.544103, 37.58593300000007], "status": "done"},{"id": 301, "coord":[55.5446684, 37.356912100000045], "status": "done"},{"id": 302, "coord":[55.55, 37.700000000000045], "status": "done"},{"id": 303, "coord":[55.5530578, 36.375541699999985], "status": "done"},{"id": 304, "coord":[55.556161, 37.628236000000015], "status": "done"},{"id": 305, "coord":[55.560763, 37.685392999999976], "status": "done"},{"id": 306, "coord":[55.5628158, 36.477356], "status": "done"},{"id": 307, "coord":[55.56345300000001, 37.821803000000045], "status": "done"},{"id": 308, "coord":[55.56744440000001, 38.22568609999996], "status": "done"},{"id": 309, "coord":[55.5674751, 38.15002440000001], "status": "done"},{"id": 310, "coord":[55.5685727, 38.22126920000005], "status": "done"},{"id": 311, "coord":[55.569444, 37.48888899999997], "status": "done"},{"id": 312, "coord":[55.5711355, 37.355338000000074], "status": "done"},{"id": 313, "coord":[55.5733452, 38.54034709999996], "status": "done"},{"id": 314, "coord":[55.573969, 37.35476900000003], "status": "done"},{"id": 315, "coord":[55.5754272, 36.57757609999999], "status": "done"},{"id": 316, "coord":[55.57952179999999, 38.40000409999993], "status": "done"},{"id": 317, "coord":[55.580454, 37.58341199999995], "status": "done"},{"id": 318, "coord":[55.584397, 35.86758299999997], "status": "done"},{"id": 319, "coord":[55.5883722, 37.442199800000026], "status": "done"},{"id": 320, "coord":[55.5906156, 38.521399700000075], "status": "done"},{"id": 321, "coord":[55.595833, 37.20833300000004], "status": "done"},{"id": 322, "coord":[55.5970843, 36.86258870000006], "status": "done"},{"id": 323, "coord":[55.597222, 38.46194400000002], "status": "done"},{"id": 324, "coord":[55.597547, 36.9434476], "status": "done"},{"id": 325, "coord":[55.5980703, 36.97080570000003], "status": "done"},{"id": 326, "coord":[55.59891, 38.513390399999935], "status": "done"},{"id": 327, "coord":[55.5992928, 36.932118], "status": "done"},{"id": 328, "coord":[55.60109869999999, 37.26645559999997], "status": "done"},{"id": 329, "coord":[55.602065, 38.41867890000003], "status": "done"},{"id": 330, "coord":[55.6071768, 37.18989940000006], "status": "done"},{"id": 331, "coord":[55.6091709, 36.82798580000008], "status": "done"},{"id": 332, "coord":[55.61, 36.584722000000056], "status": "done"},{"id": 333, "coord":[55.6119265, 37.0799564], "status": "done"},{"id": 334, "coord":[55.612247, 38.29473729999995], "status": "done"},{"id": 335, "coord":[55.614722, 36.98722199999998], "status": "done"},{"id": 336, "coord":[55.616667, 36.856667000000016], "status": "done"},{"id": 337, "coord":[55.6173796, 38.00529759999995], "status": "done"},{"id": 338, "coord":[55.61761989999999, 36.863824900000054], "status": "done"},{"id": 339, "coord":[55.6179212, 36.795967399999995], "status": "done"},{"id": 340, "coord":[55.6185639, 37.0008921], "status": "done"},{"id": 341, "coord":[55.6186804, 37.0992546], "status": "done"},{"id": 342, "coord":[55.6211454, 37.62463530000002], "status": "done"},{"id": 343, "coord":[55.6216776, 37.431785200000036], "status": "done"},{"id": 344, "coord":[55.6255879, 36.199916400000006], "status": "done"},{"id": 345, "coord":[55.626435699999995, 36.25172550000002], "status": "done"},{"id": 346, "coord":[55.6290251, 35.878276099999994], "status": "done"},{"id": 347, "coord":[55.6311971, 37.22262550000005], "status": "done"},{"id": 348, "coord":[55.63581929999999, 37.214138700000035], "status": "done"},{"id": 349, "coord":[55.641997, 37.096933000000035], "status": "done"},{"id": 350, "coord":[55.6453032, 38.011450500000024], "status": "done"},{"id": 351, "coord":[55.64554099999999, 38.14715320000005], "status": "done"},{"id": 352, "coord":[55.646083999999995, 37.31617700000004], "status": "done"},{"id": 353, "coord":[55.646389, 36.971389000000045], "status": "done"},{"id": 354, "coord":[55.6478434, 36.99302490000002], "status": "done"},{"id": 355, "coord":[55.6480977, 37.10605940000005], "status": "done"},{"id": 356, "coord":[55.6526043, 37.8621483], "status": "done"},{"id": 357, "coord":[55.652961, 38.09112289999996], "status": "done"},{"id": 358, "coord":[55.6559233, 36.286366499999986], "status": "done"},{"id": 359, "coord":[55.6564442, 37.2533717], "status": "done"},{"id": 360, "coord":[55.6576812, 37.98295959999996], "status": "done"},{"id": 361, "coord":[55.6601589, 37.18650409999998], "status": "done"},{"id": 362, "coord":[55.661714800000006, 35.7211713], "status": "done"},{"id": 363, "coord":[55.6653826, 38.13978769999994], "status": "done"},{"id": 364, "coord":[55.666667, 37.266666999999984], "status": "done"},{"id": 365, "coord":[55.667222, 37.20944399999996], "status": "done"},{"id": 366, "coord":[55.682816, 37.31520499999999], "status": "done"},{"id": 367, "coord":[55.686159399999994, 37.14150930000005], "status": "done"},{"id": 368, "coord":[55.686462, 37.8981554], "status": "done"},{"id": 369, "coord":[55.6872956, 35.611522000000036], "status": "done"},{"id": 370, "coord":[55.6911049, 36.874422], "status": "done"},{"id": 371, "coord":[55.6975, 37.33194400000002], "status": "done"},{"id": 372, "coord":[55.7, 36.20000000000001], "status": "done"},{"id": 373, "coord":[55.70003350000001, 37.6460266], "status": "done"},{"id": 374, "coord":[55.7029765, 37.383415600000035], "status": "done"},{"id": 375, "coord":[55.7051269, 36.1883271], "status": "done"},{"id": 376, "coord":[55.706667, 37.36750000000007], "status": "done"},{"id": 377, "coord":[55.7132291, 37.19441380000001], "status": "done"},{"id": 378, "coord":[55.7145098, 36.3543362], "status": "done"},{"id": 379, "coord":[55.71561089999999, 38.2093205], "status": "done"},{"id": 380, "coord":[55.7173957, 37.000945], "status": "done"},{"id": 381, "coord":[55.7190981, 37.36316940000007], "status": "done"},{"id": 382, "coord":[55.7195246, 38.35099560000003], "status": "done"},{"id": 383, "coord":[55.720903, 37.170164], "status": "done"},{"id": 384, "coord":[55.72321250000001, 37.283009799999945], "status": "done"},{"id": 385, "coord":[55.725345, 36.26644799999997], "status": "done"},{"id": 386, "coord":[55.72658029999999, 37.340718700000025], "status": "done"},{"id": 387, "coord":[55.72943300000001, 38.29067149999992], "status": "done"},{"id": 388, "coord":[55.7313524, 36.85520339999994], "status": "done"},{"id": 389, "coord":[55.7329624, 36.93342280000002], "status": "done"},{"id": 390, "coord":[55.73325, 37.04103639999994], "status": "done"},{"id": 391, "coord":[55.7376273, 36.7595756], "status": "done"},{"id": 392, "coord":[55.7394817, 37.0458984], "status": "done"},{"id": 393, "coord":[55.7429808, 38.61342830000001], "status": "done"},{"id": 394, "coord":[55.745106, 37.864014999999995], "status": "done"},{"id": 395, "coord":[55.74561150000001, 38.12143820000006], "status": "done"},{"id": 396, "coord":[55.7461472, 36.94194470000002], "status": "done"},{"id": 397, "coord":[55.74710600000001, 35.635227999999984], "status": "done"},{"id": 398, "coord":[55.7477964, 38.20044340000004], "status": "done"},{"id": 399, "coord":[55.7487578, 37.633667], "status": "done"},{"id": 400, "coord":[55.7503036, 38.020935], "status": "done"},{"id": 401, "coord":[55.75136, 37.922775], "status": "done"},{"id": 402, "coord":[55.75717, 37.242042699999956], "status": "done"},{"id": 403, "coord":[55.7625, 36.858333000000016], "status": "done"},{"id": 404, "coord":[55.7642094, 36.862468300000046], "status": "done"},{"id": 405, "coord":[55.7703969, 37.19772119999993], "status": "done"},{"id": 406, "coord":[55.7721448, 37.25339239999994], "status": "done"},{"id": 407, "coord":[55.78078, 37.84265800000003], "status": "done"},{"id": 408, "coord":[55.783333, 38.46666700000003], "status": "done"},{"id": 409, "coord":[55.7934973, 36.095692299999996], "status": "done"},{"id": 410, "coord":[55.7981391, 37.114395100000024], "status": "done"},{"id": 411, "coord":[55.8051963, 35.92454950000001], "status": "done"},{"id": 412, "coord":[55.80674110000001, 36.0660762], "status": "done"},{"id": 413, "coord":[55.814167, 38.64611100000002], "status": "done"},{"id": 414, "coord":[55.816667, 37.96666700000003], "status": "done"},{"id": 415, "coord":[55.8245504, 37.42464210000003], "status": "done"},{"id": 416, "coord":[55.82994140000001, 36.57747799999993], "status": "done"},{"id": 417, "coord":[55.8315883, 38.28007660000003], "status": "done"},{"id": 418, "coord":[55.8315883, 38.2800766], "status": "done"},{"id": 419, "coord":[55.8322431, 36.98604160000002], "status": "done"},{"id": 420, "coord":[55.8399857, 37.0090232], "status": "done"},{"id": 421, "coord":[55.8433256, 37.2354126], "status": "done"},{"id": 422, "coord":[55.8442117, 37.13317710000001], "status": "done"},{"id": 423, "coord":[55.8445991, 38.338414599999965], "status": "done"},{"id": 424, "coord":[55.8455666, 37.170790700000005], "status": "done"},{"id": 425, "coord":[55.846006, 37.36136399999999], "status": "done"},{"id": 426, "coord":[55.847778, 35.50805600000001], "status": "done"},{"id": 427, "coord":[55.8509728, 37.36676569999997], "status": "done"},{"id": 428, "coord":[55.851111, 38.610277999999994], "status": "done"},{"id": 429, "coord":[55.8544902, 36.7726148], "status": "done"},{"id": 430, "coord":[55.855275, 38.4658813], "status": "done"},{"id": 431, "coord":[55.855876, 37.354180999999926], "status": "done"},{"id": 432, "coord":[55.85925390000001, 38.25713110000004], "status": "done"},{"id": 433, "coord":[55.8628407, 37.12170519999995], "status": "done"},{"id": 434, "coord":[55.8652536, 37.98581469999999], "status": "done"},{"id": 435, "coord":[55.8668354, 36.855011], "status": "done"},{"id": 436, "coord":[55.8672985, 36.8230054], "status": "done"},{"id": 437, "coord":[55.8701062, 37.58379400000001], "status": "done"},{"id": 438, "coord":[55.8761163, 38.466659400000026], "status": "done"},{"id": 439, "coord":[55.883084, 36.8296554], "status": "done"},{"id": 440, "coord":[55.8858889, 36.93100049999998], "status": "done"},{"id": 441, "coord":[55.8923876, 36.698180200000024], "status": "done"},{"id": 442, "coord":[55.8940553, 37.443948699999964], "status": "done"},{"id": 443, "coord":[55.8940833, 37.28402900000003], "status": "done"},{"id": 444, "coord":[55.895833, 35.502778000000035], "status": "done"},{"id": 445, "coord":[55.89748299999999, 35.86150799999996], "status": "done"},{"id": 446, "coord":[55.9055068, 37.4152667], "status": "done"},{"id": 447, "coord":[55.905556, 36.934721999999965], "status": "done"},{"id": 448, "coord":[55.9089555, 37.4744111], "status": "done"},{"id": 449, "coord":[55.9103487, 37.8018951], "status": "done"},{"id": 450, "coord":[55.9107335, 36.9030762], "status": "done"},{"id": 451, "coord":[55.911453, 36.79714999999999], "status": "done"},{"id": 452, "coord":[55.91251159999999, 36.80571859999998], "status": "done"},{"id": 453, "coord":[55.9134511, 36.79602399999999], "status": "done"},{"id": 454, "coord":[55.916667, 36.86666700000001], "status": "done"},{"id": 455, "coord":[55.916667, 38.0], "status": "done"},{"id": 456, "coord":[55.917038, 38.036934700000074], "status": "done"},{"id": 457, "coord":[55.9180886, 39.17843740000001], "status": "done"},{"id": 458, "coord":[55.9197247, 36.33340559999999], "status": "done"},{"id": 459, "coord":[55.9224666, 39.40369599999997], "status": "done"},{"id": 460, "coord":[55.9225107, 37.90918149999993], "status": "done"},{"id": 461, "coord":[55.9230764, 36.611676699999975], "status": "done"},{"id": 462, "coord":[55.9230933, 36.866065599999956], "status": "done"},{"id": 463, "coord":[55.924517, 37.432011999999986], "status": "done"},{"id": 464, "coord":[55.9251242, 39.44890540000006], "status": "done"},{"id": 465, "coord":[55.92620800000001, 37.86119499999995], "status": "done"},{"id": 466, "coord":[55.9273682, 37.1920217], "status": "done"},{"id": 467, "coord":[55.92811, 37.02569530000001], "status": "done"},{"id": 468, "coord":[55.9290032, 37.61800040000003], "status": "done"},{"id": 469, "coord":[55.9311, 39.465799999999945], "status": "done"},{"id": 470, "coord":[55.931389, 36.36916700000006], "status": "done"},{"id": 471, "coord":[55.9317024, 39.4628906], "status": "done"},{"id": 472, "coord":[55.93183999999999, 37.19082000000003], "status": "done"},{"id": 473, "coord":[55.93184000000001, 37.19082], "status": "done"},{"id": 474, "coord":[55.932778, 37.922777999999994], "status": "done"},{"id": 475, "coord":[55.9333914, 37.28546499999993], "status": "done"},{"id": 476, "coord":[55.938056, 38.09416699999997], "status": "done"},{"id": 477, "coord":[55.941667, 36.77499999999998], "status": "done"},{"id": 478, "coord":[55.9463764, 36.56279070000005], "status": "done"},{"id": 479, "coord":[55.9472563, 37.4992755], "status": "done"},{"id": 480, "coord":[55.9479137, 37.5355151], "status": "done"},{"id": 481, "coord":[55.9480204, 37.64730780000002], "status": "done"},{"id": 482, "coord":[55.949711, 37.29822899999999], "status": "done"},{"id": 483, "coord":[55.95, 38.049999999999955], "status": "done"},{"id": 484, "coord":[55.9534259, 36.72270249999997], "status": "done"},{"id": 485, "coord":[55.9551419, 37.53377649999993], "status": "done"},{"id": 486, "coord":[55.96025969999999, 38.04414369999995], "status": "done"},{"id": 487, "coord":[55.9621693, 37.11609580000004], "status": "done"},{"id": 488, "coord":[55.9622808, 37.1148798], "status": "done"},{"id": 489, "coord":[55.970682, 37.504638], "status": "done"},{"id": 490, "coord":[55.9730625, 38.42217019999998], "status": "done"},{"id": 491, "coord":[55.97412400000001, 37.74965999999995], "status": "done"},{"id": 492, "coord":[55.975556, 37.310277999999926], "status": "done"},{"id": 493, "coord":[55.9757652, 36.949729299999944], "status": "done"},{"id": 494, "coord":[55.97825839999999, 37.55581129999996], "status": "done"},{"id": 495, "coord":[55.9814648, 37.41134260000001], "status": "done"},{"id": 496, "coord":[55.98715259999999, 37.20215140000005], "status": "done"},{"id": 497, "coord":[55.989669, 36.21825000000001], "status": "done"},{"id": 498, "coord":[55.9910382, 38.19828570000004], "status": "done"},{"id": 499, "coord":[55.99366699999999, 36.47277800000006], "status": "done"},{"id": 500, "coord":[56.0, 37.83333300000004], "status": "done"},{"id": 501, "coord":[56.0, 38.36666700000001], "status": "done"},{"id": 502, "coord":[56.00020460000001, 37.49532810000005], "status": "done"},{"id": 503, "coord":[56.0045539, 35.64621869999996], "status": "done"},{"id": 504, "coord":[56.007738, 35.8698617], "status": "done"},{"id": 505, "coord":[56.0085211, 37.5441055], "status": "done"},{"id": 506, "coord":[56.009621, 37.12897410000005], "status": "done"},{"id": 507, "coord":[56.0096238, 38.38530859999992], "status": "done"},{"id": 508, "coord":[56.01022219999999, 37.353430300000014], "status": "done"},{"id": 509, "coord":[56.0158338, 38.63177500000006], "status": "done"},{"id": 510, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 511, "coord":[56.0202371, 37.682675700000004], "status": "done"},{"id": 512, "coord":[56.027298, 37.42131199999994], "status": "done"},{"id": 513, "coord":[56.028333, 40.388056000000006], "status": "done"},{"id": 514, "coord":[56.0283975, 37.9201305], "status": "done"},{"id": 515, "coord":[56.02880140000001, 36.808890399999996], "status": "done"},{"id": 516, "coord":[56.032778, 35.50861099999997], "status": "done"},{"id": 517, "coord":[56.0336398, 35.9408333], "status": "done"},{"id": 518, "coord":[56.0342126, 37.352354200000036], "status": "done"},{"id": 519, "coord":[56.03564859999999, 39.48784239999998], "status": "done"},{"id": 520, "coord":[56.0363252, 35.957313200000044], "status": "done"},{"id": 521, "coord":[56.03681760000001, 36.07028500000001], "status": "done"},{"id": 522, "coord":[56.03749999999999, 37.233333000000016], "status": "done"},{"id": 523, "coord":[56.0390987, 36.905986299999995], "status": "done"},{"id": 524, "coord":[56.0480053, 38.16128600000002], "status": "done"},{"id": 525, "coord":[56.0523234, 38.55315139999993], "status": "done"},{"id": 526, "coord":[56.0536635, 37.10068369999999], "status": "done"},{"id": 527, "coord":[56.055173, 37.857223999999974], "status": "done"},{"id": 528, "coord":[56.064722, 37.81305599999996], "status": "done"},{"id": 529, "coord":[56.066485, 36.852119899999934], "status": "done"},{"id": 530, "coord":[56.0681701, 37.10334799999998], "status": "done"},{"id": 531, "coord":[56.0703559, 36.21759789999999], "status": "done"},{"id": 532, "coord":[56.072, 37.07060000000001], "status": "done"},{"id": 533, "coord":[56.0724979, 36.890843399999994], "status": "done"},{"id": 534, "coord":[56.07281889999999, 38.22160370000006], "status": "done"},{"id": 535, "coord":[56.08490560000001, 37.54036550000001], "status": "done"},{"id": 536, "coord":[56.0880225, 39.073666199999934], "status": "done"},{"id": 537, "coord":[56.0885311, 37.73611649999998], "status": "done"},{"id": 538, "coord":[56.0889456, 36.5021418], "status": "done"},{"id": 539, "coord":[56.090861, 36.50205600000004], "status": "done"},{"id": 540, "coord":[56.0913225, 36.554951399999936], "status": "done"},{"id": 541, "coord":[56.0921512, 36.60434570000007], "status": "done"},{"id": 542, "coord":[56.0925734, 38.027235099999984], "status": "done"},{"id": 543, "coord":[56.096505, 37.91201799999999], "status": "done"},{"id": 544, "coord":[56.1002398, 37.6506613], "status": "done"},{"id": 545, "coord":[56.10115160000001, 37.4468994], "status": "done"},{"id": 546, "coord":[56.10284, 36.83849520000001], "status": "done"},{"id": 547, "coord":[56.1045586, 38.1364956], "status": "done"},{"id": 548, "coord":[56.1060776, 37.25945920000004], "status": "done"},{"id": 549, "coord":[56.11817259999999, 36.655765599999995], "status": "done"},{"id": 550, "coord":[56.121285099999994, 37.216231600000015], "status": "done"},{"id": 551, "coord":[56.133333, 37.9319597], "status": "done"},{"id": 552, "coord":[56.133333, 38.44166700000005], "status": "done"},{"id": 553, "coord":[56.1336967, 37.0356684], "status": "done"},{"id": 554, "coord":[56.133889, 36.87416699999995], "status": "done"},{"id": 555, "coord":[56.13594380000001, 35.8345696], "status": "done"},{"id": 556, "coord":[56.1424893, 36.9030761], "status": "done"},{"id": 557, "coord":[56.1443173, 37.492047100000036], "status": "done"},{"id": 558, "coord":[56.1466471, 36.7766554], "status": "done"},{"id": 559, "coord":[56.1498337, 37.45865630000003], "status": "done"},{"id": 560, "coord":[56.15, 38.86666700000001], "status": "done"},{"id": 561, "coord":[56.1526507, 37.04541519999998], "status": "done"},{"id": 562, "coord":[56.1570737, 39.28643349999993], "status": "done"},{"id": 563, "coord":[56.162510999999995, 36.25742200000002], "status": "done"},{"id": 564, "coord":[56.1633347, 37.89937080000004], "status": "done"},{"id": 565, "coord":[56.17363409999999, 37.499744899999996], "status": "done"},{"id": 566, "coord":[56.1742451, 37.079057000000034], "status": "done"},{"id": 567, "coord":[56.176759, 36.98212000000001], "status": "done"},{"id": 568, "coord":[56.1773772, 37.908181499999955], "status": "done"},{"id": 569, "coord":[56.185167, 36.41274999999996], "status": "done"},{"id": 570, "coord":[56.1852039, 36.977617099999975], "status": "done"},{"id": 571, "coord":[56.185848, 37.86641180000004], "status": "done"},{"id": 572, "coord":[56.1968417, 34.636778700000036], "status": "done"},{"id": 573, "coord":[56.2071072, 37.550440200000025], "status": "done"},{"id": 574, "coord":[56.2101378, 37.35273489999997], "status": "done"},{"id": 575, "coord":[56.2128141, 41.1547852], "status": "done"},{"id": 576, "coord":[56.2148304, 37.261829000000034], "status": "done"},{"id": 577, "coord":[56.2189232, 36.7163086], "status": "done"},{"id": 578, "coord":[56.2258249, 37.4481184], "status": "done"},{"id": 579, "coord":[56.2283249, 38.482594500000005], "status": "done"},{"id": 580, "coord":[56.22861100000001, 36.80694399999993], "status": "done"},{"id": 581, "coord":[56.2456667, 36.5003123], "status": "done"},{"id": 582, "coord":[56.24589049999999, 37.94116389999999], "status": "done"},{"id": 583, "coord":[56.246073200000005, 37.15768149999997], "status": "done"},{"id": 584, "coord":[56.25, 38.0], "status": "done"},{"id": 585, "coord":[56.2518829, 36.761882900000046], "status": "done"},{"id": 586, "coord":[56.2529117, 37.08920080000007], "status": "done"},{"id": 587, "coord":[56.259276, 38.21078220000004], "status": "done"},{"id": 588, "coord":[56.2610034, 37.25226799999996], "status": "done"},{"id": 589, "coord":[56.2615379, 36.65726100000006], "status": "done"},{"id": 590, "coord":[56.2692285, 38.281825600000055], "status": "done"},{"id": 591, "coord":[56.2702585, 37.34426289999999], "status": "done"},{"id": 592, "coord":[56.2706452, 37.44960170000002], "status": "done"},{"id": 593, "coord":[56.2754819, 37.59048389999999], "status": "done"},{"id": 594, "coord":[56.2797918, 38.2023325], "status": "done"},{"id": 595, "coord":[56.2814679, 38.4197583], "status": "done"},{"id": 596, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 597, "coord":[56.2868498, 36.8248517], "status": "done"},{"id": 598, "coord":[56.2891081, 38.2104492], "status": "done"},{"id": 599, "coord":[56.2915274, 37.476065500000004], "status": "done"},{"id": 600, "coord":[56.3, 37.46666700000003], "status": "done"},{"id": 601, "coord":[56.3, 38.13333299999999], "status": "done"},{"id": 602, "coord":[56.30146269999999, 37.62561589999996], "status": "done"},{"id": 603, "coord":[56.3032, 37.480621799999994], "status": "done"},{"id": 604, "coord":[56.31730349999999, 37.668549100000064], "status": "done"},{"id": 605, "coord":[56.32277149999999, 38.454586800000016], "status": "done"},{"id": 606, "coord":[56.3230894, 38.1565411], "status": "done"},{"id": 607, "coord":[56.32866259999999, 37.47049870000001], "status": "done"},{"id": 608, "coord":[56.333333, 36.733333000000016], "status": "done"},{"id": 609, "coord":[56.3386003, 38.24628940000002], "status": "done"},{"id": 610, "coord":[56.3427702, 37.52884160000008], "status": "done"},{"id": 611, "coord":[56.3568171, 37.58393139999998], "status": "done"},{"id": 612, "coord":[56.3596825, 38.738331499999966], "status": "done"},{"id": 613, "coord":[56.3947309, 38.71203700000001], "status": "done"},{"id": 614, "coord":[56.395833, 38.29833299999996], "status": "done"},{"id": 615, "coord":[56.398175, 38.705017999999995], "status": "done"},{"id": 616, "coord":[56.4076247, 37.36027379999996], "status": "done"},{"id": 617, "coord":[56.4128431, 36.80898239999999], "status": "done"},{"id": 618, "coord":[56.4144618, 37.46854819999999], "status": "done"},{"id": 619, "coord":[56.4350185, 41.48834320000003], "status": "done"},{"id": 620, "coord":[56.444787299999994, 38.23088050000002], "status": "done"},{"id": 621, "coord":[56.4543484, 38.10198259999993], "status": "done"},{"id": 622, "coord":[56.4555546, 37.95918699999993], "status": "done"},{"id": 623, "coord":[56.4624905, 38.4631347], "status": "done"},{"id": 624, "coord":[56.4744, 37.43328670000005], "status": "done"},{"id": 625, "coord":[56.47488910000001, 37.282861300000036], "status": "done"},{"id": 626, "coord":[56.48686739999999, 36.897726000000034], "status": "done"},{"id": 627, "coord":[56.4973679, 36.97931259999996], "status": "done"},{"id": 628, "coord":[56.5028528, 37.75347319999992], "status": "done"},{"id": 629, "coord":[56.5074751, 36.26745499999993], "status": "done"},{"id": 630, "coord":[56.5275, 38.07861100000002], "status": "done"},{"id": 631, "coord":[56.5286, 36.52610000000004], "status": "done"},{"id": 632, "coord":[56.542500000000004, 37.56111099999998], "status": "done"},{"id": 633, "coord":[56.613611, 37.62888900000007], "status": "done"},{"id": 634, "coord":[56.6375226, 38.625557999999955], "status": "done"},{"id": 635, "coord":[56.6493438, 37.56990369999994], "status": "done"},{"id": 636, "coord":[56.680277999999994, 36.369722000000024], "status": "done"},{"id": 637, "coord":[56.6914811, 38.94693719999998], "status": "done"},{"id": 638, "coord":[56.6972672, 37.189954899999975], "status": "done"},{"id": 639, "coord":[56.7, 36.75], "status": "done"},{"id": 640, "coord":[56.71048810000001, 38.12407540000004], "status": "done"},{"id": 641, "coord":[56.7268599, 37.51747190000003], "status": "done"},{"id": 642, "coord":[56.7320202, 37.16689740000004], "status": "done"},{"id": 643, "coord":[56.7500627, 38.8895771], "status": "done"},{"id": 644, "coord":[56.7502346, 38.68927970000004], "status": "done"},{"id": 645, "coord":[56.7756079, 37.657222899999965], "status": "done"},{"id": 646, "coord":[56.83892609999999, 60.605702500000014], "status": "done"},{"id": 647, "coord":[57.0050671, 40.97664529999997], "status": "done"},{"id": 648, "coord":[57.14026819999999, 33.12851569999998], "status": "done"},{"id": 649, "coord":[57.1612975, 65.52501719999998], "status": "done"},{"id": 650, "coord":[57.52478960000001, 38.33083609999995], "status": "done"},{"id": 651, "coord":[57.53333299999999, 38.33333300000004], "status": "done"},{"id": 652, "coord":[57.61257499999999, 39.881853], "status": "done"},{"id": 653, "coord":[57.61778460000001, 39.90484719999995], "status": "done"},{"id": 654, "coord":[57.6185829, 39.9478707], "status": "done"},{"id": 655, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 656, "coord":[57.6465541, 39.765737599999966], "status": "done"},{"id": 657, "coord":[57.662616, 39.89887780000004], "status": "done"},{"id": 658, "coord":[57.8991523, 38.83886329999996], "status": "done"},{"id": 659, "coord":[59.327778, 30.038889000000044], "status": "done"},{"id": 660, "coord":[59.6660653, 30.359500600000047], "status": "done"},{"id": 661, "coord":[59.93428020000001, 30.33509860000004], "status": "done"},{"id": 662, "coord":[54.155556, 36.95833300000004], "status": "done"},{"id": 663, "coord":[54.7721774, 37.2601318], "status": "done"},{"id": 664, "coord":[54.8140827, 38.021786399999996], "status": "done"},{"id": 665, "coord":[54.8804802, 38.11702479999997], "status": "done"},{"id": 666, "coord":[54.924136, 36.479840599999996], "status": "done"},{"id": 667, "coord":[55.038056, 37.477777999999944], "status": "done"},{"id": 668, "coord":[55.0382175, 37.40769810000006], "status": "done"},{"id": 669, "coord":[55.0519326, 37.57755599999996], "status": "done"},{"id": 670, "coord":[55.130824000000004, 37.387447000000066], "status": "done"},{"id": 671, "coord":[55.1797619, 36.75033659999997], "status": "done"},{"id": 672, "coord":[55.2514897, 37.493937200000005], "status": "done"},{"id": 673, "coord":[55.269441, 37.89600100000007], "status": "done"},{"id": 674, "coord":[55.320344, 37.160078], "status": "done"},{"id": 675, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 676, "coord":[55.34333299999999, 38.231667000000016], "status": "done"},{"id": 677, "coord":[55.3827252, 36.31521980000002], "status": "done"},{"id": 678, "coord":[55.383333, 36.766666999999984], "status": "done"},{"id": 679, "coord":[55.3881182, 38.12230539999996], "status": "done"},{"id": 680, "coord":[55.4271542, 37.5310016], "status": "done"},{"id": 681, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 682, "coord":[55.44575, 35.888443999999936], "status": "done"},{"id": 683, "coord":[55.47190459999999, 36.690563399999974], "status": "done"},{"id": 684, "coord":[55.5098376, 36.24105580000003], "status": "done"},{"id": 685, "coord":[55.533333, 38.03333299999997], "status": "done"},{"id": 686, "coord":[55.53818219999999, 36.982339499999966], "status": "done"},{"id": 687, "coord":[55.5407601, 38.427428599999985], "status": "done"},{"id": 688, "coord":[55.5557958, 36.172168599999964], "status": "done"},{"id": 689, "coord":[55.5970843, 36.86258870000006], "status": "done"},{"id": 690, "coord":[55.59999999999999, 37.16666699999996], "status": "done"},{"id": 691, "coord":[55.6093841, 36.2658691], "status": "done"},{"id": 692, "coord":[55.623583, 39.49868760000004], "status": "done"},{"id": 693, "coord":[55.6541367, 37.146273199999996], "status": "done"},{"id": 694, "coord":[55.6541797, 38.13804600000003], "status": "done"},{"id": 695, "coord":[55.6576812, 37.98295959999996], "status": "done"},{"id": 696, "coord":[55.6820689, 36.91032080000002], "status": "done"},{"id": 697, "coord":[55.7622885, 36.33362379999994], "status": "done"},{"id": 698, "coord":[55.766226, 37.74241200000006], "status": "done"},{"id": 699, "coord":[55.8437112, 37.1131897], "status": "done"},{"id": 700, "coord":[55.866778, 36.99091699999997], "status": "done"},{"id": 701, "coord":[55.8829816, 38.278500399999984], "status": "done"},{"id": 702, "coord":[55.8876354, 36.7987061], "status": "done"},{"id": 703, "coord":[55.9234711, 37.60652440000001], "status": "done"},{"id": 704, "coord":[55.941667, 36.84027800000001], "status": "done"},{"id": 705, "coord":[55.947222, 36.87361099999998], "status": "done"},{"id": 706, "coord":[55.949711, 37.29822899999999], "status": "done"},{"id": 707, "coord":[55.95920090000001, 37.74587220000001], "status": "done"},{"id": 708, "coord":[55.96765010000001, 36.97448730000001], "status": "done"},{"id": 709, "coord":[55.9814542, 36.79829100000006], "status": "done"},{"id": 710, "coord":[55.9978448, 35.98065989999998], "status": "done"},{"id": 711, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 712, "coord":[56.02739570000001, 37.32327540000006], "status": "done"},{"id": 713, "coord":[56.05592180000001, 35.9485212], "status": "done"},{"id": 714, "coord":[56.0569094, 37.35725809999997], "status": "done"},{"id": 715, "coord":[56.071894, 37.06253240000001], "status": "done"},{"id": 716, "coord":[56.0724979, 36.890843399999994], "status": "done"},{"id": 717, "coord":[56.2073915, 38.0008139], "status": "done"},{"id": 718, "coord":[56.2495808, 37.07075170000007], "status": "done"},{"id": 719, "coord":[56.268531, 35.79456189999996], "status": "done"},{"id": 720, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 721, "coord":[56.3583186, 36.35615180000002], "status": "done"},{"id": 722, "coord":[56.62849560000001, 36.5716956], "status": "done"},{"id": 723, "coord":[56.7557344, 38.8311768], "status": "done"},{"id": 724, "coord":[57.4933116, 38.16416149999998], "status": "done"},{"id": 725, "coord":[57.61651830000001, 39.8542588], "status": "done"},{"id": 726, "coord":[57.617462700000004, 39.9064637], "status": "done"},{"id": 727, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 728, "coord":[54.45334519999999, 37.43988630000001], "status": "done"},{"id": 729, "coord":[54.7086888, 36.9153523], "status": "done"},{"id": 730, "coord":[54.84999999999999, 38.549999999999955], "status": "done"},{"id": 731, "coord":[54.8565869, 38.61242140000002], "status": "done"},{"id": 732, "coord":[54.8652358, 37.5793117], "status": "done"},{"id": 733, "coord":[54.9780246, 37.714225], "status": "done"},{"id": 734, "coord":[54.9962342, 36.810187499999984], "status": "done"},{"id": 735, "coord":[55.0657869, 37.5567627], "status": "done"},{"id": 736, "coord":[55.07603810000001, 37.93579569999997], "status": "done"},{"id": 737, "coord":[55.094444, 37.83611100000007], "status": "done"},{"id": 738, "coord":[55.1170375, 36.5970818], "status": "done"},{"id": 739, "coord":[55.1181975, 37.129737699999964], "status": "done"},{"id": 740, "coord":[55.18670860000001, 37.6556396], "status": "done"},{"id": 741, "coord":[55.196956300000004, 36.5287548], "status": "done"},{"id": 742, "coord":[55.2049181, 37.38757680000003], "status": "done"},{"id": 743, "coord":[55.2101857, 37.40888659999996], "status": "done"},{"id": 744, "coord":[55.2898691, 37.1272659], "status": "done"},{"id": 745, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 746, "coord":[55.3290543, 37.852525199999945], "status": "done"},{"id": 747, "coord":[55.3827252, 36.31521980000002], "status": "done"},{"id": 748, "coord":[55.3881182, 38.12230539999996], "status": "done"},{"id": 749, "coord":[55.4103468, 37.18908899999997], "status": "done"},{"id": 750, "coord":[55.42618, 37.5320316], "status": "done"},{"id": 751, "coord":[55.4304659, 37.5512577], "status": "done"},{"id": 752, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 753, "coord":[55.4817141, 37.0167778], "status": "done"},{"id": 754, "coord":[55.48543669999999, 37.72546820000002], "status": "done"},{"id": 755, "coord":[55.4949727, 38.354594099999986], "status": "done"},{"id": 756, "coord":[55.5084162, 37.048645], "status": "done"},{"id": 757, "coord":[55.5093083, 37.16496059999997], "status": "done"},{"id": 758, "coord":[55.524024, 37.642630000000054], "status": "done"},{"id": 759, "coord":[55.5496305, 36.6543044], "status": "done"},{"id": 760, "coord":[55.5590105, 37.1040161], "status": "done"},{"id": 761, "coord":[55.5671695, 37.01006080000002], "status": "done"},{"id": 762, "coord":[55.5906156, 38.521399700000075], "status": "done"},{"id": 763, "coord":[55.59999999999999, 36.46666700000003], "status": "done"},{"id": 764, "coord":[55.603988, 36.6231638], "status": "done"},{"id": 765, "coord":[55.6575844, 37.9831313], "status": "done"},{"id": 766, "coord":[55.671314100000004, 38.16040959999998], "status": "done"},{"id": 767, "coord":[55.72935769999999, 38.04503360000001], "status": "done"},{"id": 768, "coord":[55.7438716, 37.06147379999993], "status": "done"},{"id": 769, "coord":[55.75, 38.016666999999984], "status": "done"},{"id": 770, "coord":[55.85439299999999, 37.70028000000002], "status": "done"},{"id": 771, "coord":[55.8581454, 37.323610099999996], "status": "done"},{"id": 772, "coord":[55.8844572, 37.3276459], "status": "done"},{"id": 773, "coord":[55.88583300000001, 37.04083300000002], "status": "done"},{"id": 774, "coord":[55.9198471, 37.765498500000035], "status": "done"},{"id": 775, "coord":[55.944424, 37.9753677], "status": "done"},{"id": 776, "coord":[55.947222, 36.87361099999998], "status": "done"},{"id": 777, "coord":[55.99700300000001, 35.98149699999999], "status": "done"},{"id": 778, "coord":[56.009621, 37.12897410000005], "status": "done"},{"id": 779, "coord":[56.012696, 37.48594700000001], "status": "done"},{"id": 780, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 781, "coord":[56.0235861, 37.1856465], "status": "done"},{"id": 782, "coord":[56.0527512, 36.0945195], "status": "done"},{"id": 783, "coord":[56.0590711, 37.187206100000026], "status": "done"},{"id": 784, "coord":[56.1467857, 37.254867999999995], "status": "done"},{"id": 785, "coord":[56.192917, 36.28461100000004], "status": "done"},{"id": 786, "coord":[56.2643856, 37.21707409999999], "status": "done"},{"id": 787, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 788, "coord":[56.46388899999999, 37.44861100000003], "status": "done"},{"id": 789, "coord":[56.542500000000004, 37.56111099999998], "status": "done"},{"id": 790, "coord":[56.7268599, 37.51747190000003], "status": "done"},{"id": 791, "coord":[56.8603977, 37.35989159999997], "status": "done"},{"id": 792, "coord":[56.9180705, 39.174142000000074], "status": "done"},{"id": 793, "coord":[57.1214829, 40.476430400000034], "status": "done"},{"id": 794, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 795, "coord":[54.5208139, 37.847644599999974], "status": "done"},{"id": 796, "coord":[54.816667, 39.35000000000002], "status": "done"},{"id": 797, "coord":[54.872449, 37.42380520000006], "status": "done"},{"id": 798, "coord":[54.9699091, 39.10856680000006], "status": "done"},{"id": 799, "coord":[54.99361099999999, 38.69611099999997], "status": "done"},{"id": 800, "coord":[54.9962342, 36.810187499999984], "status": "done"},{"id": 801, "coord":[55.023299, 37.4880981], "status": "done"},{"id": 802, "coord":[55.0519298, 37.985848100000005], "status": "done"},{"id": 803, "coord":[55.1311575, 37.92844], "status": "done"},{"id": 804, "coord":[55.14472640000001, 36.46037430000001], "status": "done"},{"id": 805, "coord":[55.15595080000001, 37.371278200000006], "status": "done"},{"id": 806, "coord":[55.1663457, 37.488320499999986], "status": "done"},{"id": 807, "coord":[55.2014047, 37.9136671], "status": "done"},{"id": 808, "coord":[55.2509462, 37.515564], "status": "done"},{"id": 809, "coord":[55.264618, 37.88699159999999], "status": "done"},{"id": 810, "coord":[55.26898989999999, 37.62486949999993], "status": "done"},{"id": 811, "coord":[55.284126, 38.39317319999998], "status": "done"},{"id": 812, "coord":[55.3088258, 37.818948399999954], "status": "done"},{"id": 813, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 814, "coord":[55.341053, 36.93910200000005], "status": "done"},{"id": 815, "coord":[55.34999999999999, 36.200000000000045], "status": "done"},{"id": 816, "coord":[55.3503485, 35.37315139999998], "status": "done"},{"id": 817, "coord":[55.4289075, 37.5251654], "status": "done"},{"id": 818, "coord":[55.4302747, 37.59731590000001], "status": "done"},{"id": 819, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 820, "coord":[55.43305849999999, 37.270635500000026], "status": "done"},{"id": 821, "coord":[55.4392236, 38.49185680000005], "status": "done"},{"id": 822, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 823, "coord":[55.4519538, 37.2783579], "status": "done"},{"id": 824, "coord":[55.4533912, 37.919164799999976], "status": "done"},{"id": 825, "coord":[55.4534165, 36.863347100000055], "status": "done"},{"id": 826, "coord":[55.4689556, 38.4116927], "status": "done"},{"id": 827, "coord":[55.4992801, 36.970166399999925], "status": "done"},{"id": 828, "coord":[55.503333, 38.377222000000074], "status": "done"},{"id": 829, "coord":[55.50690299999999, 37.44303100000002], "status": "done"},{"id": 830, "coord":[55.5177203, 37.223332400000004], "status": "done"},{"id": 831, "coord":[55.530278, 35.60500000000002], "status": "done"},{"id": 832, "coord":[55.5307659, 37.23099309999998], "status": "done"},{"id": 833, "coord":[55.5751285, 37.12501520000001], "status": "done"},{"id": 834, "coord":[55.61416699999999, 38.534167000000025], "status": "done"},{"id": 835, "coord":[55.61751, 36.86499230000004], "status": "done"},{"id": 836, "coord":[55.6179212, 36.795967399999995], "status": "done"},{"id": 837, "coord":[55.6198387, 39.086466299999984], "status": "done"},{"id": 838, "coord":[55.6542035, 37.2860918], "status": "done"},{"id": 839, "coord":[55.659867, 37.99104699999998], "status": "done"},{"id": 840, "coord":[55.666667, 37.266666999999984], "status": "done"},{"id": 841, "coord":[55.7313524, 36.85520339999994], "status": "done"},{"id": 842, "coord":[55.7369602, 36.22422540000002], "status": "done"},{"id": 843, "coord":[55.7461472, 36.94194470000002], "status": "done"},{"id": 844, "coord":[55.7835532, 38.45516109999994], "status": "done"},{"id": 845, "coord":[55.7864855, 38.54928760000007], "status": "done"},{"id": 846, "coord":[55.8315883, 38.28007660000003], "status": "done"},{"id": 847, "coord":[55.883333, 38.799999999999955], "status": "done"},{"id": 848, "coord":[55.9251242, 39.44890540000006], "status": "done"},{"id": 849, "coord":[55.975927, 37.91951990000007], "status": "done"},{"id": 850, "coord":[55.98715259999999, 37.20215140000005], "status": "done"},{"id": 851, "coord":[55.997778, 37.190278000000035], "status": "done"},{"id": 852, "coord":[56.0089334, 38.70148940000002], "status": "done"},{"id": 853, "coord":[56.018677, 36.216125000000034], "status": "done"},{"id": 854, "coord":[56.0205902, 38.1118506], "status": "done"},{"id": 855, "coord":[56.11607570000001, 37.816684500000065], "status": "done"},{"id": 856, "coord":[56.1708498, 37.5628091], "status": "done"},{"id": 857, "coord":[56.17363409999999, 37.499744899999996], "status": "done"},{"id": 858, "coord":[56.1742231, 37.0255396], "status": "done"},{"id": 859, "coord":[56.2754819, 37.59048389999999], "status": "done"},{"id": 860, "coord":[56.3040955, 37.6596303], "status": "done"},{"id": 861, "coord":[56.305334, 37.42401199999995], "status": "done"},{"id": 862, "coord":[56.34559609999999, 37.41330479999999], "status": "done"},{"id": 863, "coord":[56.3697295, 36.83958940000002], "status": "done"},{"id": 864, "coord":[56.3798735, 37.532697600000006], "status": "done"},{"id": 865, "coord":[56.83892609999999, 60.605702500000014], "status": "done"},{"id": 866, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 867, "coord":[57.8991523, 38.83886329999996], "status": "done"},{"id": 868, "coord":[54.494541, 36.15570290000005], "status": "done"},{"id": 869, "coord":[54.6897094, 37.1942139], "status": "done"},{"id": 870, "coord":[54.73074159999999, 36.34049879999998], "status": "done"},{"id": 871, "coord":[54.8035578, 37.60329360000003], "status": "done"},{"id": 872, "coord":[54.914444, 37.485000000000014], "status": "done"},{"id": 873, "coord":[54.9433916, 38.0852562], "status": "done"},{"id": 874, "coord":[54.95348809999999, 36.41596849999996], "status": "done"},{"id": 875, "coord":[55.0437618, 37.3974609], "status": "done"},{"id": 876, "coord":[55.1214526, 37.3484148], "status": "done"},{"id": 877, "coord":[55.135947, 37.26955499999997], "status": "done"},{"id": 878, "coord":[55.1993257, 38.01466549999998], "status": "done"},{"id": 879, "coord":[55.3080128, 38.209632899999974], "status": "done"},{"id": 880, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 881, "coord":[55.3290543, 37.852525199999945], "status": "done"},{"id": 882, "coord":[55.34999999999999, 36.200000000000045], "status": "done"},{"id": 883, "coord":[55.388082000000004, 37.4180603], "status": "done"},{"id": 884, "coord":[55.406764, 38.6623022], "status": "done"},{"id": 885, "coord":[55.4131491, 37.61563690000003], "status": "done"},{"id": 886, "coord":[55.4269592, 37.5244784], "status": "done"},{"id": 887, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 888, "coord":[55.4815449, 36.624663000000055], "status": "done"},{"id": 889, "coord":[55.5215291, 37.79746649999993], "status": "done"},{"id": 890, "coord":[55.54296, 37.26831190000001], "status": "done"},{"id": 891, "coord":[55.548446, 37.0651245], "status": "done"},{"id": 892, "coord":[55.55288580000001, 34.99665379999999], "status": "done"},{"id": 893, "coord":[55.556387, 38.81413840000005], "status": "done"},{"id": 894, "coord":[55.5929848, 37.0422569], "status": "done"},{"id": 895, "coord":[55.6093954, 36.82817890000001], "status": "done"},{"id": 896, "coord":[55.6303969, 37.4514857], "status": "done"},{"id": 897, "coord":[55.638771, 38.17651000000001], "status": "done"},{"id": 898, "coord":[55.6493827, 36.830609200000026], "status": "done"},{"id": 899, "coord":[55.7058949, 38.13621480000006], "status": "done"},{"id": 900, "coord":[55.783566, 38.641403999999966], "status": "done"},{"id": 901, "coord":[55.7980077, 37.24121560000003], "status": "done"},{"id": 902, "coord":[55.8017282, 35.97645979999993], "status": "done"},{"id": 903, "coord":[55.8046568, 38.22617349999996], "status": "done"},{"id": 904, "coord":[55.83137260000001, 38.261261], "status": "done"},{"id": 905, "coord":[55.8605715, 35.5179748], "status": "done"},{"id": 906, "coord":[55.869269, 38.47790199999997], "status": "done"},{"id": 907, "coord":[55.9008494, 36.9391789], "status": "done"},{"id": 908, "coord":[55.916667, 36.86666700000001], "status": "done"},{"id": 909, "coord":[55.9197247, 36.33340559999999], "status": "done"},{"id": 910, "coord":[55.92670529999999, 37.00199680000003], "status": "done"},{"id": 911, "coord":[55.947222, 36.73888899999998], "status": "done"},{"id": 912, "coord":[55.9476655, 37.541412], "status": "done"},{"id": 913, "coord":[55.9686633, 36.08267430000001], "status": "done"},{"id": 914, "coord":[55.988711, 36.12725799999998], "status": "done"},{"id": 915, "coord":[55.9965293, 38.04123809999999], "status": "done"},{"id": 916, "coord":[55.997778, 37.190278000000035], "status": "done"},{"id": 917, "coord":[56.0, 38.608333000000016], "status": "done"},{"id": 918, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 919, "coord":[56.020289, 37.00109889999999], "status": "done"},{"id": 920, "coord":[56.0412755, 38.48263440000005], "status": "done"},{"id": 921, "coord":[56.063889, 35.90277800000001], "status": "done"},{"id": 922, "coord":[56.083333, 36.70277799999997], "status": "done"},{"id": 923, "coord":[56.1395073, 37.726234799999936], "status": "done"},{"id": 924, "coord":[56.1729652, 37.5112462], "status": "done"},{"id": 925, "coord":[56.1886235, 36.92112539999994], "status": "done"},{"id": 926, "coord":[56.2548521, 36.973851800000034], "status": "done"},{"id": 927, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 928, "coord":[56.29528699999999, 37.56929230000003], "status": "done"},{"id": 929, "coord":[56.4076247, 37.36027379999996], "status": "done"},{"id": 930, "coord":[56.46766239999999, 37.84511870000006], "status": "done"},{"id": 931, "coord":[56.598494, 37.628889], "status": "done"},{"id": 932, "coord":[56.6493438, 37.56990369999994], "status": "done"},{"id": 933, "coord":[56.7225943, 37.902832], "status": "done"},{"id": 934, "coord":[57.2365343, 37.840130300000055], "status": "done"},{"id": 935, "coord":[57.52478960000001, 38.33083609999995], "status": "done"},{"id": 936, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 937, "coord":[54.20699759999999, 35.69317339999998], "status": "done"},{"id": 938, "coord":[54.6865658, 36.1909094], "status": "done"},{"id": 939, "coord":[54.720001100000005, 38.77859190000004], "status": "done"},{"id": 940, "coord":[54.7253267, 37.9229377], "status": "done"},{"id": 941, "coord":[54.8438311, 38.186220700000035], "status": "done"},{"id": 942, "coord":[54.9181758, 36.45343819999994], "status": "done"},{"id": 943, "coord":[54.96870389999999, 37.386273200000005], "status": "done"},{"id": 944, "coord":[55.0585708, 38.1264868], "status": "done"},{"id": 945, "coord":[55.0718392, 37.22837470000002], "status": "done"},{"id": 946, "coord":[55.1387115, 36.62718470000004], "status": "done"},{"id": 947, "coord":[55.1392444, 37.56804239999997], "status": "done"},{"id": 948, "coord":[55.22799509999999, 37.476185699999974], "status": "done"},{"id": 949, "coord":[55.2698075, 36.532151999999996], "status": "done"},{"id": 950, "coord":[55.2884482, 37.78356899999994], "status": "done"},{"id": 951, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 952, "coord":[55.3238424, 38.68151309999996], "status": "done"},{"id": 953, "coord":[55.4027367, 36.04858360000003], "status": "done"},{"id": 954, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 955, "coord":[55.4312453, 37.5512579], "status": "done"},{"id": 956, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 957, "coord":[55.4445952, 37.5292969], "status": "done"},{"id": 958, "coord":[55.4484311, 37.73522609999998], "status": "done"},{"id": 959, "coord":[55.49361099999999, 36.30694399999993], "status": "done"},{"id": 960, "coord":[55.5120667, 38.434273899999994], "status": "done"},{"id": 961, "coord":[55.530278, 35.60500000000002], "status": "done"},{"id": 962, "coord":[55.5392243, 36.365781500000026], "status": "done"},{"id": 963, "coord":[55.55, 37.06666700000005], "status": "done"},{"id": 964, "coord":[55.551641, 38.18291769999996], "status": "done"},{"id": 965, "coord":[55.55288580000001, 34.99665379999999], "status": "done"},{"id": 966, "coord":[55.563056, 36.46555599999999], "status": "done"},{"id": 967, "coord":[55.57823200000001, 37.109913000000006], "status": "done"},{"id": 968, "coord":[55.614722, 36.98722199999998], "status": "done"},{"id": 969, "coord":[55.630833, 37.45388900000001], "status": "done"},{"id": 970, "coord":[55.636063, 38.27647000000002], "status": "done"},{"id": 971, "coord":[55.714167, 35.54666700000007], "status": "done"},{"id": 972, "coord":[55.733333, 37.25], "status": "done"},{"id": 973, "coord":[55.73737569999999, 38.009539099999984], "status": "done"},{"id": 974, "coord":[55.79220369999999, 37.214026200000035], "status": "done"},{"id": 975, "coord":[55.7995403, 37.259826100000055], "status": "done"},{"id": 976, "coord":[55.8, 38.96666700000003], "status": "done"},{"id": 977, "coord":[55.80277800000001, 37.02777800000001], "status": "done"},{"id": 978, "coord":[55.806947, 38.9687266], "status": "done"},{"id": 979, "coord":[55.8179262, 37.31027100000006], "status": "done"},{"id": 980, "coord":[55.8192764, 37.8605069], "status": "done"},{"id": 981, "coord":[55.85108300000001, 36.96650599999998], "status": "done"},{"id": 982, "coord":[55.868754, 36.76405009999996], "status": "done"},{"id": 983, "coord":[55.8966633, 38.2090352], "status": "done"},{"id": 984, "coord":[55.91249999999999, 36.79166699999996], "status": "done"},{"id": 985, "coord":[55.916667, 36.81666700000005], "status": "done"},{"id": 986, "coord":[55.916667, 37.81666700000005], "status": "done"},{"id": 987, "coord":[55.920248, 37.09449840000002], "status": "done"},{"id": 988, "coord":[55.9251242, 39.44890540000006], "status": "done"},{"id": 989, "coord":[55.947222, 36.87361099999998], "status": "done"},{"id": 990, "coord":[55.949711, 37.29822899999999], "status": "done"},{"id": 991, "coord":[55.9830471, 37.73176030000002], "status": "done"},{"id": 992, "coord":[55.9856161, 37.194255], "status": "done"},{"id": 993, "coord":[55.9866405, 37.20092100000001], "status": "done"},{"id": 994, "coord":[55.9913526, 37.0397237], "status": "done"},{"id": 995, "coord":[56.0347196, 37.281783099999984], "status": "done"},{"id": 996, "coord":[56.0684805, 35.72171149999997], "status": "done"},{"id": 997, "coord":[56.1238648, 37.54788589999998], "status": "done"},{"id": 998, "coord":[56.12963870000001, 37.06939169999998], "status": "done"},{"id": 999, "coord":[56.1519524, 37.97414290000006], "status": "done"},{"id": 1000, "coord":[56.2288484, 36.831665], "status": "done"},{"id": 1001, "coord":[56.2830102, 36.7327881], "status": "done"},{"id": 1002, "coord":[56.31730349999999, 37.668549100000064], "status": "done"},{"id": 1003, "coord":[56.3251929, 38.07207740000001], "status": "done"},{"id": 1004, "coord":[56.3427702, 37.52884160000008], "status": "done"},{"id": 1005, "coord":[56.613611, 37.62888900000007], "status": "done"},{"id": 1006, "coord":[56.7268599, 37.51747190000003], "status": "done"},{"id": 1007, "coord":[56.747048, 38.89026030000002], "status": "done"},{"id": 1008, "coord":[57.6231549, 39.8386861], "status": "done"},{"id": 1009, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 1010, "coord":[54.5518584, 36.28509729999997], "status": "done"},{"id": 1011, "coord":[54.8344499, 38.621633900000006], "status": "done"},{"id": 1012, "coord":[54.9497574, 41.397405299999946], "status": "done"},{"id": 1013, "coord":[55.1643063, 37.80885910000006], "status": "done"},{"id": 1014, "coord":[55.1815078, 37.70133929999997], "status": "done"},{"id": 1015, "coord":[55.191997, 37.8636031], "status": "done"},{"id": 1016, "coord":[55.2222505, 37.0857428], "status": "done"},{"id": 1017, "coord":[55.2312986, 38.368742399999974], "status": "done"},{"id": 1018, "coord":[55.3088258, 37.818948399999954], "status": "done"},{"id": 1019, "coord":[55.34914699999999, 37.21098600000005], "status": "done"},{"id": 1020, "coord":[55.38257189999999, 38.46408930000007], "status": "done"},{"id": 1021, "coord":[55.38909049999999, 38.18392749999998], "status": "done"},{"id": 1022, "coord":[55.398894, 38.75541350000003], "status": "done"},{"id": 1023, "coord":[55.41966140000001, 37.5622559], "status": "done"},{"id": 1024, "coord":[55.4212203, 37.53479], "status": "done"},{"id": 1025, "coord":[55.4261798, 37.537868], "status": "done"},{"id": 1026, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 1027, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 1028, "coord":[55.458628, 37.61264200000005], "status": "done"},{"id": 1029, "coord":[55.485720099999995, 37.89060990000007], "status": "done"},{"id": 1030, "coord":[55.515136, 38.33700699999997], "status": "done"},{"id": 1031, "coord":[55.542389, 39.138443999999936], "status": "done"},{"id": 1032, "coord":[55.5469321, 38.2401797], "status": "done"},{"id": 1033, "coord":[55.5551667, 36.39410399999997], "status": "done"},{"id": 1034, "coord":[55.56744440000001, 38.22568609999996], "status": "done"},{"id": 1035, "coord":[55.5674751, 38.1747437], "status": "done"},{"id": 1036, "coord":[55.5727025, 37.03334760000007], "status": "done"},{"id": 1037, "coord":[55.585361, 36.9330185], "status": "done"},{"id": 1038, "coord":[55.5856463, 36.752155000000016], "status": "done"},{"id": 1039, "coord":[55.58756959999999, 37.78679710000006], "status": "done"},{"id": 1040, "coord":[55.5970843, 36.86258870000006], "status": "done"},{"id": 1041, "coord":[55.61761989999999, 36.863824900000054], "status": "done"},{"id": 1042, "coord":[55.6198387, 39.086466299999984], "status": "done"},{"id": 1043, "coord":[55.621261, 37.30077200000005], "status": "done"},{"id": 1044, "coord":[55.715278, 38.36833300000001], "status": "done"},{"id": 1045, "coord":[55.7313524, 36.85520339999994], "status": "done"},{"id": 1046, "coord":[55.75136, 37.922775], "status": "done"},{"id": 1047, "coord":[55.756486300000006, 37.2903442], "status": "done"},{"id": 1048, "coord":[55.783333, 38.4611738], "status": "done"},{"id": 1049, "coord":[55.833333, 37.31666700000005], "status": "done"},{"id": 1050, "coord":[55.850361, 36.942214000000035], "status": "done"},{"id": 1051, "coord":[55.892705, 36.52170639999997], "status": "done"},{"id": 1052, "coord":[55.916667, 36.86666700000001], "status": "done"},{"id": 1053, "coord":[55.9270952, 38.299119099999984], "status": "done"},{"id": 1054, "coord":[55.9399167, 36.152151799999956], "status": "done"},{"id": 1055, "coord":[55.9842315, 37.52990109999996], "status": "done"},{"id": 1056, "coord":[56.0091364, 36.912129999999934], "status": "done"},{"id": 1057, "coord":[56.029722, 37.169167000000016], "status": "done"},{"id": 1058, "coord":[56.0337254, 36.0085049], "status": "done"},{"id": 1059, "coord":[56.0598821, 36.6134707], "status": "done"},{"id": 1060, "coord":[56.0689693, 37.4578857], "status": "done"},{"id": 1061, "coord":[56.0784774, 37.01347480000004], "status": "done"},{"id": 1062, "coord":[56.083333, 37.49583299999995], "status": "done"},{"id": 1063, "coord":[56.096505, 37.91201799999999], "status": "done"},{"id": 1064, "coord":[56.172222, 36.13333299999999], "status": "done"},{"id": 1065, "coord":[56.1773793, 37.06310050000002], "status": "done"},{"id": 1066, "coord":[56.2372447, 35.85388180000001], "status": "done"},{"id": 1067, "coord":[56.381944, 36.92916700000001], "status": "done"},{"id": 1068, "coord":[56.3940932, 38.1212519], "status": "done"},{"id": 1069, "coord":[56.5149354, 38.16021449999994], "status": "done"},{"id": 1070, "coord":[56.542500000000004, 37.56111099999998], "status": "done"},{"id": 1071, "coord":[57.52478960000001, 38.33083609999995], "status": "done"},{"id": 1072, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 1073, "coord":[54.8624958, 36.36615710000001], "status": "done"},{"id": 1074, "coord":[54.9181747, 37.9506714], "status": "done"},{"id": 1075, "coord":[55.0746396, 36.31454580000002], "status": "done"},{"id": 1076, "coord":[55.085165, 37.596272], "status": "done"},{"id": 1077, "coord":[55.114228600000004, 36.76818609999998], "status": "done"},{"id": 1078, "coord":[55.120934, 37.96094900000003], "status": "done"},{"id": 1079, "coord":[55.1369058, 37.6527375], "status": "done"},{"id": 1080, "coord":[55.1412096, 37.1530151], "status": "done"},{"id": 1081, "coord":[55.1756135, 37.96825020000006], "status": "done"},{"id": 1082, "coord":[55.2754414, 37.84390189999999], "status": "done"},{"id": 1083, "coord":[55.30583919999999, 37.86061470000004], "status": "done"},{"id": 1084, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 1085, "coord":[55.3423948, 36.42534929999999], "status": "done"},{"id": 1086, "coord":[55.3651414, 38.64676650000001], "status": "done"},{"id": 1087, "coord":[55.3681858, 38.9053345], "status": "done"},{"id": 1088, "coord":[55.373664, 37.376716999999985], "status": "done"},{"id": 1089, "coord":[55.3797084, 37.4039979], "status": "done"},{"id": 1090, "coord":[55.39557400000001, 38.139687500000036], "status": "done"},{"id": 1091, "coord":[55.4000042, 37.7435022], "status": "done"},{"id": 1092, "coord":[55.429681, 37.14030600000001], "status": "done"},{"id": 1093, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 1094, "coord":[55.4315459, 37.5490379], "status": "done"},{"id": 1095, "coord":[55.4390099, 37.57295870000007], "status": "done"},{"id": 1096, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 1097, "coord":[55.470615800000004, 36.00632380000002], "status": "done"},{"id": 1098, "coord":[55.477183, 37.635546999999974], "status": "done"},{"id": 1099, "coord":[55.4992801, 36.970166399999925], "status": "done"},{"id": 1100, "coord":[55.5250144, 36.32586730000003], "status": "done"},{"id": 1101, "coord":[55.5283945, 36.0938755], "status": "done"},{"id": 1102, "coord":[55.5330012, 36.3657848], "status": "done"},{"id": 1103, "coord":[55.546111, 37.54416700000002], "status": "done"},{"id": 1104, "coord":[55.5624291, 38.06434139999999], "status": "done"},{"id": 1105, "coord":[55.5970843, 36.86258870000006], "status": "done"},{"id": 1106, "coord":[55.599722, 36.94361100000003], "status": "done"},{"id": 1107, "coord":[55.6091709, 36.82798580000008], "status": "done"},{"id": 1108, "coord":[55.6141169, 38.43919370000003], "status": "done"},{"id": 1109, "coord":[55.6155021, 36.85538830000001], "status": "done"},{"id": 1110, "coord":[55.6198387, 39.086466299999984], "status": "done"},{"id": 1111, "coord":[55.6228808, 36.8566753], "status": "done"},{"id": 1112, "coord":[55.641667, 37.204166999999984], "status": "done"},{"id": 1113, "coord":[55.6450491, 37.9879761], "status": "done"},{"id": 1114, "coord":[55.646393, 37.170497599999976], "status": "done"},{"id": 1115, "coord":[55.6576812, 37.98295959999996], "status": "done"},{"id": 1116, "coord":[55.6948427, 36.90381350000007], "status": "done"},{"id": 1117, "coord":[55.711944, 38.60583299999996], "status": "done"},{"id": 1118, "coord":[55.71766419999999, 37.28036559999998], "status": "done"},{"id": 1119, "coord":[55.729583, 37.2108912], "status": "done"},{"id": 1120, "coord":[55.7313524, 36.85520339999994], "status": "done"},{"id": 1121, "coord":[55.75136, 37.922775], "status": "done"},{"id": 1122, "coord":[55.7515225, 38.53067280000005], "status": "done"},{"id": 1123, "coord":[55.766667, 38.64999999999998], "status": "done"},{"id": 1124, "coord":[55.76764380000001, 36.5717684], "status": "done"},{"id": 1125, "coord":[55.7705062, 37.10314719999997], "status": "done"},{"id": 1126, "coord":[55.7760589, 36.18488189999994], "status": "done"},{"id": 1127, "coord":[55.849933, 37.18547799999999], "status": "done"},{"id": 1128, "coord":[55.8857932, 37.39826100000005], "status": "done"},{"id": 1129, "coord":[55.895047, 35.81734699999993], "status": "done"},{"id": 1130, "coord":[55.9180886, 39.17843740000001], "status": "done"},{"id": 1131, "coord":[55.9251242, 39.44890540000006], "status": "done"},{"id": 1132, "coord":[55.98783299999999, 37.84117730000003], "status": "done"},{"id": 1133, "coord":[56.0095335, 36.18901389999996], "status": "done"},{"id": 1134, "coord":[56.01972199999999, 38.16750000000002], "status": "done"},{"id": 1135, "coord":[56.1144571, 37.13367440000002], "status": "done"},{"id": 1136, "coord":[56.18119859999999, 38.17329330000007], "status": "done"},{"id": 1137, "coord":[56.269266, 36.76123400000006], "status": "done"},{"id": 1138, "coord":[56.2754819, 37.59048389999999], "status": "done"},{"id": 1139, "coord":[56.31730349999999, 37.668549100000064], "status": "done"},{"id": 1140, "coord":[56.3251956, 36.58641579999994], "status": "done"},{"id": 1141, "coord":[56.3489288, 38.21560169999998], "status": "done"},{"id": 1142, "coord":[56.3595712, 38.35395900000003], "status": "done"},{"id": 1143, "coord":[56.47488910000001, 37.282861300000036], "status": "done"},{"id": 1144, "coord":[56.59488769999999, 37.92888110000001], "status": "done"},{"id": 1145, "coord":[57.55092999999998, 39.92030210000007], "status": "done"},{"id": 1146, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 1147, "coord":[54.6706805, 36.6900564], "status": "done"},{"id": 1148, "coord":[54.8379065, 37.86243289999993], "status": "done"},{"id": 1149, "coord":[54.869471, 37.38745719999997], "status": "done"},{"id": 1150, "coord":[54.8776637, 39.15966219999996], "status": "done"},{"id": 1151, "coord":[54.9696425, 37.61569399999996], "status": "done"},{"id": 1152, "coord":[55.0411927, 37.44421030000001], "status": "done"},{"id": 1153, "coord":[55.0660373, 37.522842800000035], "status": "done"},{"id": 1154, "coord":[55.0857645, 37.0491269], "status": "done"},{"id": 1155, "coord":[55.141944, 37.798944000000006], "status": "done"},{"id": 1156, "coord":[55.1897056, 37.25652439999999], "status": "done"},{"id": 1157, "coord":[55.19115739999999, 36.50397709999993], "status": "done"},{"id": 1158, "coord":[55.19364060000001, 37.0764786], "status": "done"},{"id": 1159, "coord":[55.2991938, 36.18117559999996], "status": "done"},{"id": 1160, "coord":[55.3239138, 37.266608599999934], "status": "done"},{"id": 1161, "coord":[55.3290543, 37.852525199999945], "status": "done"},{"id": 1162, "coord":[55.3614554, 38.43964080000001], "status": "done"},{"id": 1163, "coord":[55.3901591, 36.7350811], "status": "done"},{"id": 1164, "coord":[55.3955642, 37.70706480000001], "status": "done"},{"id": 1165, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 1166, "coord":[55.4558467, 38.30139899999995], "status": "done"},{"id": 1167, "coord":[55.49361099999999, 36.30694399999993], "status": "done"},{"id": 1168, "coord":[55.5042139, 38.77923839999994], "status": "done"},{"id": 1169, "coord":[55.5073401, 36.3258373], "status": "done"},{"id": 1170, "coord":[55.523883, 37.370900000000006], "status": "done"},{"id": 1171, "coord":[55.535, 37.16583300000002], "status": "done"},{"id": 1172, "coord":[55.5634899, 36.702445799999964], "status": "done"},{"id": 1173, "coord":[55.566667, 36.700000000000045], "status": "done"},{"id": 1174, "coord":[55.5848041, 37.19827329999998], "status": "done"},{"id": 1175, "coord":[55.6085539, 37.744439599999964], "status": "done"},{"id": 1176, "coord":[55.614722, 36.98722199999998], "status": "done"},{"id": 1177, "coord":[55.6293291, 37.9164045], "status": "done"},{"id": 1178, "coord":[55.6311971, 37.22262550000005], "status": "done"},{"id": 1179, "coord":[55.63231039999999, 37.42292999999995], "status": "done"},{"id": 1180, "coord":[55.6576812, 37.98295959999996], "status": "done"},{"id": 1181, "coord":[55.7313524, 36.85520339999994], "status": "done"},{"id": 1182, "coord":[55.7329624, 36.93342280000002], "status": "done"},{"id": 1183, "coord":[55.733056, 37.04250000000002], "status": "done"},{"id": 1184, "coord":[55.8, 38.96666700000003], "status": "done"},{"id": 1185, "coord":[55.820556, 37.807222000000024], "status": "done"},{"id": 1186, "coord":[55.9468929, 39.4670105], "status": "done"},{"id": 1187, "coord":[55.9529782, 35.507126200000016], "status": "done"},{"id": 1188, "coord":[55.960577, 37.246457899999996], "status": "done"},{"id": 1189, "coord":[55.9614647, 37.59145149999995], "status": "done"},{"id": 1190, "coord":[55.9720913, 36.11416859999997], "status": "done"},{"id": 1191, "coord":[55.975927, 37.91951990000007], "status": "done"},{"id": 1192, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 1193, "coord":[56.0205864, 37.0020213], "status": "done"},{"id": 1194, "coord":[56.0206827, 37.002879], "status": "done"},{"id": 1195, "coord":[56.0398289, 36.2878418], "status": "done"},{"id": 1196, "coord":[56.0569094, 37.35725809999997], "status": "done"},{"id": 1197, "coord":[56.071894, 37.06253240000001], "status": "done"},{"id": 1198, "coord":[56.0885311, 37.73611649999998], "status": "done"},{"id": 1199, "coord":[56.2075, 36.92750000000001], "status": "done"},{"id": 1200, "coord":[56.2183968, 35.81455679999999], "status": "done"},{"id": 1201, "coord":[56.2434385, 36.26783969999997], "status": "done"},{"id": 1202, "coord":[56.2656633, 39.13945250000006], "status": "done"},{"id": 1203, "coord":[56.2665804, 37.47725430000003], "status": "done"},{"id": 1204, "coord":[56.2786534, 38.2212237], "status": "done"},{"id": 1205, "coord":[56.3167639, 37.46714099999997], "status": "done"},{"id": 1206, "coord":[56.3409012, 38.268127400000004], "status": "done"},{"id": 1207, "coord":[56.3711169, 37.2421568], "status": "done"},{"id": 1208, "coord":[56.3833, 38.56669999999997], "status": "done"},{"id": 1209, "coord":[56.5367423, 37.5033002], "status": "done"},{"id": 1210, "coord":[57.414381, 39.8183384], "status": "done"},{"id": 1211, "coord":[57.8991523, 38.83886329999996], "status": "done"},{"id": 1212, "coord":[54.7547158, 36.94986819999997], "status": "done"},{"id": 1213, "coord":[54.7815664, 38.88636999999994], "status": "done"},{"id": 1214, "coord":[54.8098373, 36.31162740000002], "status": "done"},{"id": 1215, "coord":[54.8997438, 38.577511200000004], "status": "done"},{"id": 1216, "coord":[55.016667, 36.46666700000003], "status": "done"},{"id": 1217, "coord":[55.0472635, 38.20754950000003], "status": "done"},{"id": 1218, "coord":[55.0937517, 38.76886179999997], "status": "done"},{"id": 1219, "coord":[55.096386, 37.54616699999997], "status": "done"},{"id": 1220, "coord":[55.1609645, 37.59731769999996], "status": "done"},{"id": 1221, "coord":[55.215522400000005, 37.937142600000016], "status": "done"},{"id": 1222, "coord":[55.26277, 37.8291991], "status": "done"},{"id": 1223, "coord":[55.264618, 37.88699159999999], "status": "done"},{"id": 1224, "coord":[55.3235874, 37.33769110000003], "status": "done"},{"id": 1225, "coord":[55.3448291, 37.92063630000007], "status": "done"},{"id": 1226, "coord":[55.3817725, 36.362211900000034], "status": "done"},{"id": 1227, "coord":[55.383333, 36.766666999999984], "status": "done"},{"id": 1228, "coord":[55.3910026, 36.42374589999997], "status": "done"},{"id": 1229, "coord":[55.428916, 37.5490379], "status": "done"},{"id": 1230, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 1231, "coord":[55.443023399999994, 37.74781699999994], "status": "done"},{"id": 1232, "coord":[55.491389, 37.309167], "status": "done"},{"id": 1233, "coord":[55.508056, 36.33777800000007], "status": "done"},{"id": 1234, "coord":[55.515136, 38.33700699999997], "status": "done"},{"id": 1235, "coord":[55.5245552, 37.45866530000001], "status": "done"},{"id": 1236, "coord":[55.56127799999999, 36.54875820000007], "status": "done"},{"id": 1237, "coord":[55.56744440000001, 38.22568609999996], "status": "done"},{"id": 1238, "coord":[55.5866879, 37.3050854], "status": "done"},{"id": 1239, "coord":[55.6123588, 36.97793039999999], "status": "done"},{"id": 1240, "coord":[55.6372986, 37.199707], "status": "done"},{"id": 1241, "coord":[55.6851517, 37.31719029999999], "status": "done"},{"id": 1242, "coord":[55.68777799999999, 37.36861099999999], "status": "done"},{"id": 1243, "coord":[55.69805599999999, 38.637778000000026], "status": "done"},{"id": 1244, "coord":[55.6988936, 37.285195], "status": "done"},{"id": 1245, "coord":[55.6995987, 37.148153200000024], "status": "done"},{"id": 1246, "coord":[55.70122460000001, 38.01244399999996], "status": "done"},{"id": 1247, "coord":[55.76055599999999, 38.205556], "status": "done"},{"id": 1248, "coord":[55.856944, 36.9332712], "status": "done"},{"id": 1249, "coord":[55.874396000000004, 36.911103000000026], "status": "done"},{"id": 1250, "coord":[55.9197356, 36.27077059999999], "status": "done"},{"id": 1251, "coord":[55.9682962, 37.6784284], "status": "done"},{"id": 1252, "coord":[55.9980079, 37.56902489999993], "status": "done"},{"id": 1253, "coord":[56.0015333, 37.625418800000034], "status": "done"},{"id": 1254, "coord":[56.016667, 37.483333000000016], "status": "done"},{"id": 1255, "coord":[56.0518255, 37.37163129999999], "status": "done"},{"id": 1256, "coord":[56.058875, 36.199732999999924], "status": "done"},{"id": 1257, "coord":[56.07388899999999, 37.55888900000002], "status": "done"},{"id": 1258, "coord":[56.0885311, 37.73611649999998], "status": "done"},{"id": 1259, "coord":[56.10693610000001, 36.589587800000004], "status": "done"},{"id": 1260, "coord":[56.11105490000001, 35.554777100000024], "status": "done"},{"id": 1261, "coord":[56.1479015, 36.98911989999999], "status": "done"},{"id": 1262, "coord":[56.15569619999999, 37.45938690000003], "status": "done"},{"id": 1263, "coord":[56.2424556, 37.55680480000001], "status": "done"},{"id": 1264, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 1265, "coord":[56.3568171, 37.58393139999998], "status": "done"},{"id": 1266, "coord":[56.3596825, 38.738331499999966], "status": "done"},{"id": 1267, "coord":[56.4659363, 37.39454419999993], "status": "done"},{"id": 1268, "coord":[56.4941404, 36.557804199999964], "status": "done"},{"id": 1269, "coord":[57.62607440000001, 39.88447080000003], "status": "done"},{"id": 1270, "coord":[54.9402436, 39.027959099999975], "status": "done"},{"id": 1271, "coord":[54.9492311, 37.6940918], "status": "done"},{"id": 1272, "coord":[55.01725279999999, 37.92265610000004], "status": "done"},{"id": 1273, "coord":[55.1134959, 38.17533930000002], "status": "done"},{"id": 1274, "coord":[55.1757672, 37.89320550000003], "status": "done"},{"id": 1275, "coord":[55.1796746, 37.894419200000016], "status": "done"},{"id": 1276, "coord":[55.2369119, 37.53223419999995], "status": "done"},{"id": 1277, "coord":[55.264618, 37.88699159999999], "status": "done"},{"id": 1278, "coord":[55.2900646, 37.1179962], "status": "done"},{"id": 1279, "coord":[55.3115388, 37.3427439], "status": "done"},{"id": 1280, "coord":[55.3238424, 38.68151309999996], "status": "done"},{"id": 1281, "coord":[55.3423948, 36.42534929999999], "status": "done"},{"id": 1282, "coord":[55.3539419, 37.1817602], "status": "done"},{"id": 1283, "coord":[55.383333, 36.766666999999984], "status": "done"},{"id": 1284, "coord":[55.3851413, 39.03232230000003], "status": "done"},{"id": 1285, "coord":[55.3947106, 37.6336672], "status": "done"},{"id": 1286, "coord":[55.4038469, 37.4123333], "status": "done"},{"id": 1287, "coord":[55.4312453, 37.54576470000006], "status": "done"},{"id": 1288, "coord":[55.4353128, 38.706301199999984], "status": "done"},{"id": 1289, "coord":[55.4558467, 38.30139899999995], "status": "done"},{"id": 1290, "coord":[55.4678419, 38.197946900000034], "status": "done"},{"id": 1291, "coord":[55.4684732, 38.3339706], "status": "done"},{"id": 1292, "coord":[55.4688248, 38.33476870000004], "status": "done"},{"id": 1293, "coord":[55.4700874, 37.567630099999974], "status": "done"},{"id": 1294, "coord":[55.4894018, 36.992639199999985], "status": "done"},{"id": 1295, "coord":[55.54343920000001, 36.0668138], "status": "done"},{"id": 1296, "coord":[55.546111, 37.54416700000002], "status": "done"},{"id": 1297, "coord":[55.56744440000001, 38.22568609999996], "status": "done"},{"id": 1298, "coord":[55.5774907, 38.184869700000036], "status": "done"},{"id": 1299, "coord":[55.5905877, 36.64758759999995], "status": "done"},{"id": 1300, "coord":[55.614722, 36.98722199999998], "status": "done"},{"id": 1301, "coord":[55.61618060000001, 36.8571048], "status": "done"},{"id": 1302, "coord":[55.62790330000001, 38.962680399999954], "status": "done"},{"id": 1303, "coord":[55.6820689, 36.91032080000002], "status": "done"},{"id": 1304, "coord":[55.6942179, 37.97787100000005], "status": "done"},{"id": 1305, "coord":[55.6975, 37.33194400000002], "status": "done"},{"id": 1306, "coord":[55.7085453, 37.2930908], "status": "done"},{"id": 1307, "coord":[55.7240505, 36.353723400000035], "status": "done"},{"id": 1308, "coord":[55.7423684, 38.84418549999998], "status": "done"},{"id": 1309, "coord":[55.75136, 37.922775], "status": "done"},{"id": 1310, "coord":[55.7793741, 38.8153849], "status": "done"},{"id": 1311, "coord":[55.8, 38.16666699999996], "status": "done"},{"id": 1312, "coord":[55.801389, 37.213333000000034], "status": "done"},{"id": 1313, "coord":[55.8161763, 38.7757675], "status": "done"},{"id": 1314, "coord":[55.846006, 37.36136399999999], "status": "done"},{"id": 1315, "coord":[55.8645236, 37.1392822], "status": "done"},{"id": 1316, "coord":[55.8811493, 37.05339230000004], "status": "done"},{"id": 1317, "coord":[55.883333, 38.799999999999955], "status": "done"},{"id": 1318, "coord":[55.916958, 37.77093000000002], "status": "done"},{"id": 1319, "coord":[55.930556, 36.57361100000003], "status": "done"},{"id": 1320, "coord":[55.957845, 36.93836220000003], "status": "done"},{"id": 1321, "coord":[55.979, 36.50199999999995], "status": "done"},{"id": 1322, "coord":[55.982194, 36.365879800000016], "status": "done"},{"id": 1323, "coord":[56.0172312, 37.48526370000002], "status": "done"},{"id": 1324, "coord":[56.105, 37.09500000000003], "status": "done"},{"id": 1325, "coord":[56.2147128, 37.96618599999999], "status": "done"},{"id": 1326, "coord":[56.2214905, 36.6934544], "status": "done"},{"id": 1327, "coord":[56.2311218, 38.10481400000004], "status": "done"},{"id": 1328, "coord":[56.2363623, 35.59580600000004], "status": "done"},{"id": 1329, "coord":[56.2839541, 36.82190230000003], "status": "done"},{"id": 1330, "coord":[56.3427702, 37.52884160000008], "status": "done"},{"id": 1331, "coord":[56.4744, 37.43328670000005], "status": "done"},{"id": 1332, "coord":[56.48327039999999, 37.838261200000034], "status": "done"},{"id": 1333, "coord":[56.5988146, 37.5512695], "status": "done"},{"id": 1334, "coord":[56.747048, 38.89026030000002], "status": "done"},{"id": 1335, "coord":[57.62607440000001, 39.88447080000003], "status": "done"}];

		for (var i = 0, len = objects.length; i < len; i++) {
			var item = objects[i];
			geoObjects[i] = new ymaps.Placemark(objects[i].coord, getPointData(i, objects[i].id, objects[i].status), getPointOptions());
		}


		function rndMapObgInfo(nornd) {
			var septic = [{"models":["Астра 3 ПР","Астра 3","Астра 3 Миди ПР","Астра 3 Лонг ПР"],"modelsTotal":4,"img":"astra3.jpg"},{"models":["Астра 5 ПР","Астра 5 ","Астра 5 Миди ПР","Астра 5 Лонг ПР"],"modelsTotal":4,"img":"astra5.jpg"},{"models":["Астра 8 ПР","Астра 8 ","Астра 8 Миди ПР","Астра 8 Лонг ПР"],"modelsTotal":4,"img":"astra8.jpg"},{"models":["Топас 5 ПР","Топас 5 Лонг ПР","Топас 5 Лонг"],"modelsTotal":3,"img":"topas5.jpg"},{"models":["Топас 8 ПР","Топас 8 Лонг ПР","Топас 8 Лонг"],"modelsTotal":3,"img":"topas8.jpg"},{"models":["Евробион 5","Евробион 5 ПР","Евробион 5 Long"],"modelsTotal":3,"img":"evrobizon5.jpg"},{"models":["Евробион 8","Евробион 8 ПР","Евробион 8 Long"],"modelsTotal":1,"img":"evrobizon8.jpg"},{"models":["Терра 3"],"modelsTotal":1,"img":"terra.jpg"},{"models":["Терра 5"],"modelsTotal":1,"img":"terra.jpg"},{"models":["Терра 8"],"modelsTotal":1,"img":"terra.jpg"}];
			function getRandomInt(min, max)	{
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			var total = 9;
			if (nornd) {
				total = 1;
			}
			var cSept = septic[getRandomInt(0, total)];
			var model = cSept.models[getRandomInt(0, cSept.modelsTotal-1)];
			return '<div style="text-align:center;"><img src="img/' + cSept.img + '" alt="' + model + '"><p>' + model + '</p></div>';
		}


		clusterer.add(geoObjects);
		myMap.behaviors.disable('scrollZoom');
		myMap.geoObjects.add(clusterer);

		// myMap.setBounds(clusterer.getBounds(), {
		//     checkZoomRange: true
		// });

		$('.js-showonmap').on('click', function() {
			var did = $(this).data('id')-1;
			$('html,body').scrollTo('#map_obj', 300, {
				offset: -40,
				onAfter: function(){
					myMap.setCenter(geoObjects[did].geometry.getBounds()[1], 12);
					setTimeout(function(){
						geoObjects[did].balloon.open();
					}, 400);
				}
			});
			return false
		});
	});



	$('.js-maskphone').mask('9 (999) 999-99-99');

	$.mask.definitions['h']=/[0-2]/;
	$.mask.definitions['m']=/[0-5]/;
	$.mask.definitions['M']=/[0-1]/;
	$.mask.definitions['d']=/[0-3]/;

	$(".mask-time").mask('h9:m9');
	$('.mask-date').mask('d9/M9/9999');

	$(".mask-time").on('change', function(){
		var value = this.value;
		if (value[0]+value[1] > 23) {
			var newVal = '23' + value[2] + value[3] + value[4]
			$(this).val(newVal);
		}
	});

	$(".mask-date").on('change', function(){

		var value = this.value;
		if (value[0]+value[1] > 31) {
			var newVal = '31' + value[2] + value[3] + value[4] + value[5] + value[6] + value[7] + value[8] + value[9];
			$(this).val(newVal);
		}

		value = newVal;
		if (value[3]+value[4] > 12) {
			var newVal =  value[0] + value[1] + value[2] + '12' + value[5] + value[6] + value[7] + value[8] + value[9];
			$(this).val(newVal);
		}
	});

	$('.js-fancymodal').fancybox({
		openEffect: 'fade',
		closeEffect: 'fade',
		nextEffect: 'fade',
		prevEffect: 'fade',
		helpers: {
			overlay: {
				locked: false
			}
		},
		beforeLoad: function () {
			var thisElement = $(this.element);
			var thisContent = $(this.content);
			if (thisContent.hasClass('callback')) {
				thisContent.find('.error').removeClass('error');
				thisContent.find('.form-fields').show();
				thisContent.find('.form-status').hide();
			}
			yandexReachGoal(thisElement.data('target'));
		}
	});



	$('.js-gotop').on('click', function(){
		$('html,body').scrollTo('#top', '#top');
	});

	$('.choose_septic-compare_btn').on('click', function(){
		$('html,body').scrollTo('#septic_compare', '#septic_compare', {offset: -60});
	});

	// $.cookie('achievementScore', 0, { expires: 365 });
	var achievementScore = 0;
	var sections = new Object();
	var sectionsName = ['#benefits', '#products', '#choose_septic', '#correct_installation', '#useful_tips'];

	for (var i=0; i < sectionsName.length; i++) {
		sections[sectionsName[i]] = 0;
	}


	$(".header-nav a").on('click', function(){
		var offset = -60;
		if (this.hash == '#reviews') {
			var offset = -95;
		}
		$('html,body').scrollTo(this.hash, this.hash, {offset: offset});
		return false;
	});

	$('.tabs-index_item').on('click', function(){
		var that = $(this);
		if (!that.data('p_taken')) {
			addScore(1);
			that.data('p_taken', true);
		}
	});

	$('.js-achievement-unlock-close').on('click', function(){
		$('.achievement').fadeOut();
	});


	var aChildren = $(".header-nav a");
	var aArray = [];
	for (var i=0; i < aChildren.length; i++) {
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}

	function highlightNav(windowPos) {
		var windowHeight = $(window).height();
		var docHeight = $(document).height();
		for (var i=0; i < aArray.length; i++) {
			var theID = aArray[i];
			var divPos = $(theID).offset().top - 180;
			var divHeight = $(theID).height();
			if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
				$("a[href='" + theID + "']").addClass("nav-active");
			} else {
				$("a[href='" + theID + "']").removeClass("nav-active");
			}
		}

		for (var i=0; i < sectionsName.length; i++) {
			var achievementTheID = sectionsName[i];
			var achievementDivPos = $(achievementTheID).offset().top;
			var achievementDivHeight = $(achievementTheID).height();
			if (windowPos >= (achievementDivPos + 300) && windowPos < (achievementDivPos + achievementDivHeight)) {
				if (sections[achievementTheID] != 1) {
					sections[achievementTheID] = 1;
					addScore(1);
				}
			}
		}


		if (windowPos + windowHeight == docHeight) {
			if (!$(".header-nav li:last-child a").hasClass("nav-active")) {
				var navActiveCurrent = $(".nav-active").attr("href");
				$("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
				$(".header-nav li:last-child a").addClass("nav-active");
			}
		}
	}

	function addScore(value) {
		achievementScore = achievementScore + value;
		if (achievementScore >= 1 ) {
			blockShowHide($('.achievement-label, .achievement-total_score'), $('.achievement-lock'));
		} else {
			$('.achievement').fadeIn();
		}
		if (achievementScore >= 6) {
			setTimeout(function(){
				blockShowHide($('.achievement-unlock'), $('.achievement-progress'));
				yandexReachGoal('achievement');
			}, 1000);
		}
		setTimeout(function(){
			$('.achievement-change_score').fadeIn(300, function(){
				setTimeout(function(){
					$('.achievement-change_score').fadeOut()
				}, 1200);
			});
			$('.achievement-change_score_value').html('+1');
			$('.achievement-total_score').html(achievementScore);
		}, 800);
	}

	function fixedHeader(windowPos) {
		if ( windowPos > 300 ) {
			$('.header').addClass('fixed');
			$('.header-nav').addClass('animated').css({
				'visibility': 'visible',
				'animation-name': 'fadeInDown'
			});
		} else {
			$('.header').removeClass('fixed');
		}
	}

	$(window).on('scroll', function() {
		var windowPos = $(window).scrollTop();
		fixedHeader(windowPos);
		highlightNav(windowPos);
	});

	$('.js-imap area')
		.mouseover(function(){
			$('.benefits-list-item').removeClass('wow slideInLeft slideInRight').removeAttr('style');
			$('.benefits-list').addClass('blur');
			$('.benefits-list-' + $(this).data('id')).addClass('zoom');
		})
		.mouseleave(function(){
			$('.benefits-list').removeClass('blur');
			$('.benefits-list-' + $(this).data('id')).removeClass('zoom');
		});


	$(".js-scrollable").smoothDivScroll({
		autoScrollingMode: "onStart"
	});


	$('.js-callback').on('submit', function() {
		var form = $(this).find('form');
		var formFieldsWr = form.find('.form-fields');
		var sendStatus = form.find('.form-status');
		form.find('.form-send').prop('disabled', true);
		$.post(form.attr('action'), form.serialize(), function(data){
			var result = $.parseJSON(data);
			if (result.status) {
				blockShowHide(sendStatus, formFieldsWr);
				form.find('.form-send').prop('disabled', false);
			} else {
				form.find('.form-input').removeClass('error');
				$.each(result, function(i, val) {
					form.find('#'+val).addClass('error');
				});
				form.find('.form-send').prop('disabled', false);
			}
		});
		return false;
	});

	$('.js-call').on('submit', function() {
		var form = $(this).find('form');
		var formFieldsWr = form.find('.formS-fields');
		var sendStatus = form.find('.formS-status');
		form.find('.form-send').prop('disabled', true);
		$.post(form.attr('action'), form.serialize(), function(data){
			var result = $.parseJSON(data);
			if (result.status) {
				blockShowHide(sendStatus, formFieldsWr);
				form.find('.form-send').prop('disabled', false);
			} else {
				form.find('.formS-input').removeClass('error');
				$.each(result, function(i, val) {
					form.find('#'+val).addClass('error');
				});
				form.find('.form-send').prop('disabled', false);
			}
		});
		return false;
	});

	function yandexReachGoal(target) {
		var yandexCounter = yaCounter32793735;
		if ( typeof yandexCounter !== 'undefined' ) {
			yandexCounter.reachGoal(target);
		}
	}

	function blockShowHide(toShow, toHide) {
		toHide.fadeOut(300, function() {
			toHide.removeClass('active');
			toShow.fadeIn(300).addClass('active');
		});
	}
});

function check2send(){
    email = $('#mce-EMAIL').val();
    if(email!=""){

        $.post("mail.php", {form_name: email, form_phone: email}, function (data) {
        }, 'json');

    }
} //check2send
