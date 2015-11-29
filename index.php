<?php
session_start();
$_SESSION['ref'] = $_SERVER['REQUEST_URI'];//$_SERVER['HTTP_REFERER'];
//echo "string";/home/u420578/r-septik.ru/www
include_once($_SERVER['DOCUMENT_ROOT']."/bx24/ilevel.data.php");
setcookie('creffer', base64_encode($_SERVER['HTTP_REFERER']),time()+3600);
header('Content-type: text/html; charset=UTF-8');

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Новое место — Инженерные системы</title>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/plugins.js"></script>
	<script src="js/common.js"></script>

    <script type="text/javascript">
        //alert($.cookie('roistat_visit'));
        var _alloka = {
            objects: {
                '377ad62f715936ba': {
                    block_class: 'phone_alloka'
                }
            },
            trackable_source_types: ['typein', 'referrer', 'utm'],
            last_source: false
        };
    </script>
    <script src="http://call.potok-klientov.ru/v4/alloka.js" type="text/javascript"></script>

</head>
<body>

<script type="text/javascript" src="http://vk.com/js/api/openapi.js?117"></script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5R5TN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5R5TN');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
	(w[c] = w[c] || []).push(function() {
		try {
			w.yaCounter32793735 = new Ya.Metrika({id:32793735,
					webvisor:true,
					clickmap:true,
					trackLinks:false,
					accurateTrackBounce:true});
		} catch(e) { }
	});

	var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
	s.type = "text/javascript";
	s.async = true;
	s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

	if (w.opera == "[object Opera]") {
		d.addEventListener("DOMContentLoaded", f, false);
	} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/32793735" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class="wrap" id="top">
	<div class="header">
		<div class="contacts  container_960  clearfix">
			<a class="contacts-logo" href="/"><img src="img/logo.png" alt="Новое место — Инженерные системы"></a>
			<div class="contacts-data">
				Есть вопросы? Звоните!
				<br><span class="contacts-phone phone_alloka">+7 (499) 301-61-82</span>
				<br>ул. Верейская 19, бизнес-центр «Верейская плаза»
			</div>
			<div class="contacts-feedback_btn_wr">
				<button class="contacts-feedback_btn  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Получить консультацию</button>
			</div>
		</div>
		<ul class="header-nav">
			<li class="header-nav_item--onlyfixed">
				<a class="contacts-logo" href="#top"><img src="img/logo.png" alt="Новое место — Инженерные системы"></a>
			</li>
			<li>
				<a href="#products">Ассортимент</a>
			</li>
			<li>
				<a href="#correct_installation">Монтаж септиков</a>
			</li>
			<li>
				<a href="#trust_the_professionals">О нас</a>
			</li>
			<li>
				<a href="#reviews">Отзывы</a>
			</li>
			<li class="header-nav_item--onlyfixed">
				<button class="contacts-feedback_btn  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Получить консультацию</button>
			</li>
		</ul>

		<h1 class="site_title  wow  slideInLeft">Подберём и установим cептик</h1>
		<p class="site_sub_title  wow  slideInRight"><i class="ico ico-check"></i> Наиболее подходящий для вашего дома</p>
		<button class="btn-gotop  js-gotop"></button>
	</div><!-- /header -->
	<div class="main">
		<div class="main_gall">
			<div class="main_gall-big_img">
				<!-- <img src="img/montage08.jpg" alt=""> -->
				<ul class="js-maingall-big">
					<li><img src="img/montage00.jpg" alt=""></li>
                    <li><img src="img/montage01.jpg" alt=""></li>
					<li><img src="img/montage02.jpg" alt=""></li>
					<li><img src="img/montage03.jpg" alt=""></li>
					<li><img src="img/montage04.jpg" alt=""></li>
					<li><img src="img/montage05.jpg" alt=""></li>
					<li><img src="img/montage06.jpg" alt=""></li>
					<li><img src="img/montage07.jpg" alt=""></li>
					<li><img src="img/montage08.jpg" alt=""></li>
					<li><img src="img/montage09.jpg" alt=""></li>
					<li><img src="img/montage10.jpg" alt=""></li>
					<li><img src="img/montage11.jpg" alt=""></li>
					<li><img src="img/montage12.jpg" alt=""></li>
				</ul>
			</div>

			<div class="main_gall-thubms_carousel js-scrollable" id="bx-pager">
				<a class="js-setimg" data-slide-index="0" href=""><img src="img/montage00-small.jpg" alt=""></a>
                <a class="js-setimg" data-slide-index="1" href=""><img src="img/montage01-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="2" href=""><img src="img/montage02-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="3" href=""><img src="img/montage03-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="4" href=""><img src="img/montage04-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="5" href=""><img src="img/montage05-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="6" href=""><img src="img/montage06-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="7" href=""><img src="img/montage07-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="8" href=""><img src="img/montage08-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="9" href=""><img src="img/montage09-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="10" href=""><img src="img/montage10-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="11" href=""><img src="img/montage11-small.jpg" alt=""></a>
				<a class="js-setimg" data-slide-index="12" href=""><img src="img/montage12-small.jpg" alt=""></a>
			</div>
		</div>

		<div class="section winter">
        	<h2 class="section-title_blue  wow  fadeInDown">Установить септик зимой ДЕШЕВЛЕ!</h2>
            <div class="container_960">
                <div class="winter_sub_title"><img src="img/number1.jpg" alt=""> 
                    Весной <b>происходит рост цен</b> и <b>снижение скидок</b> на станции
                </div>
                <p>На примере прошлогодней стоимости септика на 5 человек:</p>
                <table>
                    <tbody>
                        <tr>
                            <td width="300px">
                                <div class="winter_list-zima">
                                  <p class="winter_sub_infoL">цена: <span class="winter_sub_price_B">78 800 Р</span></p>
                                  <p class="winter_sub_infoL">+ сезонная скидка <span class="winter_sub_sell_B">15%</span></p>
                                  <p class="winter_sub_price_Wl">= 66 980 Р</p>
                                </div>
                            </td>
                            <td width="80px" align="center">
                                <br><img src="img/arrow_blue.png" alt=""> <p class="winter_sub_price_B2">Зима<br>2014</p>
                            </td>
                            <td width="20%">
                                <div class="winter_price">&nbsp;</div>
                            </td>
                            <td width="80px" align="center">
                                <br><img src="img/arrow_red.png" alt=""> <p class="winter_sub_price_R2">Весна<br>2015</p>
                            </td>
                            <td width="300px">
                                <div class="winter_list-vesna">
                                  <p class="winter_sub_infoR">цена: <span class="winter_sub_price_R">85 500 Р</span></p>
                                  <p class="winter_sub_infoR">+ сезонная скидка <span class="winter_sub_sell_R">5%</span></p>
                                  <p class="winter_sub_price_Wr">= 81 225 Р</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="winter-title_center">
                	<span class="winter-label">Доплата <b>за станцию</b> составит от <b>14 245 руб!</b></span>
                </div>

		        <div class="winter_sub_title"><img src="img/number2.jpg" alt=""> 
                	Весной из за обилия талых вод <b>вероятность возникновения "плывуна"</b> достигает 35% 
                </div>
                
                <table>
                    <tbody>
                        <tr>
                            <td width="300px">
                                <div class="winter_list-pesok">
                                <p class="winter_sub_infoL">Стоимость зимнего<br> монтажа</p>
                                <p class="winter_sub_price_Wl">= 22 000 Р</p>
                                </div>
                            </td>
                            <td width="80px" align="center">
                                <br><img src="img/arrow_blue.png" alt=""> <p class="winter_sub_price_B2">Зима<br>2014</p>
                            </td>
                            <td width="20%">
                                <div class="winter_plivun">&nbsp;</div>
                            </td>
                            <td width="80px" align="center">
                                <br><img src="img/arrow_red.png" alt=""> <p class="winter_sub_price_R2">Весна<br>2015</p>
                            </td>
                            <td width="300px">
                                <div class="winter_list-plivun">
                                <p class="winter_sub_infoR">Стоимость весеннего <br>монтажа в “плывун”</p>
                                <p class="winter_sub_price_Wr">= 40 000 Р</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="winter-title_center">
                	<span class="winter-label">Доплата <b>за монтаж</b> составит от <b>18 000 руб!</b></span>
                </div>
        	
            	<h4 class="section-title_blue_h4"><b>ОТКЛАДЫВАЯ ПОКУПКУ</b> на весну вы <b>ПЕРЕПЛАТИТЕ</b> в среднем <b>25 000</b> рублей</h4>
				<div class="section-title_blue">
                <button class="btn-blue2  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Хочу сэкономить</button>
                </div>
            </div>
		</div>

		<div class="section  section-benefits  benefits" id="benefits">
			<h2 class="section-title  wow  fadeInDown">Наши преимущества</h2>
			<div class="benefits-puzzle">
				<ul class="benefits-list">
					<li class="benefits-list-item  benefits-list-1">Установка оборудования <br> 365 дней в году</li>
					<li class="benefits-list-item  benefits-list-2">12 лет с вами</li>
					<li class="benefits-list-item  benefits-list-3">Монтаж 6 часов</li>
					<li class="benefits-list-item  benefits-list-4">3877 <br> довольных клиента</li>
					<li class="benefits-list-item  benefits-list-5">Лидер продаж <br> 2014 по ЦФО</li>
					<li class="benefits-list-item  benefits-list-6">3 года гарантии</li>
					<li class="benefits-list-item  benefits-list-7"></li>
				</ul>
                
                <!--
             <div class="benefits-puzzle  wow  fadeIn">
                <ul class="benefits-list">
					<li class="benefits-list-item  benefits-list-1  wow  slideInLeft">Установка оборудования <br> 365 дней в году</li>
					<li class="benefits-list-item  benefits-list-2  wow  slideInRight">12 лет с вами</li>
					<li class="benefits-list-item  benefits-list-3  wow  slideInLeft">Монтаж 6 часов</li>
					<li class="benefits-list-item  benefits-list-4  wow  slideInRight">3877 <br> довольных клиента</li>
					<li class="benefits-list-item  benefits-list-5  wow  slideInLeft">Лидер продаж <br> 2014 по ЦФО</li>
					<li class="benefits-list-item  benefits-list-6  wow  slideInRight">3 года гарантии</li>
					<li class="benefits-list-item  benefits-list-7  wow  fadeIn"></li>
				</ul>


				<img class="benefits-map" width="1067" height="414" usemap="#benefits-map" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA3NCSVQICAjb4U/gAAAABlBMVEX///////9VfPVsAAAAAnRSTlMA/1uRIrUAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAAAFnRFWHRDcmVhdGlvbiBUaW1lADA5LzI2LzE1vZ9rwQAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=">


				<map name="benefits-map" id="benefits-map" class="js-imap">
					<area shape="poly" coords="158,11,99,128,359,137,548,128,548,0,158,11" href="javascript:;" data-id="1" alt="1" />
					<area shape="poly" coords="963,1,1005,109,708,120,555,126,555,0,963,1" href="javascript:;" data-id="2" alt="2" />
					<area shape="poly" coords="351,148,380,265,46,339,0,134,351,148" href="javascript:;" data-id="3" alt="3" />
					<area shape="poly" coords="1021,326,688,249,697,213,719,131,738,130,1067,122,1021,326,1021,326" href="javascript:;" data-id="4" alt="4" />
					<area shape="poly" coords="158,398,131,329,382,274,558,264,550,413,158,398" href="javascript:;" data-id="5" alt="5" />
					<area shape="poly" coords="965,397,988,327,685,255,565,264,558,414,965,397" href="javascript:;" data-id="6" alt="6" />
				</map>-->

			</div>
		</div>



		<div class="section summer">
            <h2 class="section-title_red  wow  fadeInDown">Производители уже подняли цены в среднем на 15 000 рублей</h2>
			<!--<h2 class="section-title_suboffer  wow  fadeInDown">Купи септик по летним ценам уже сейчас!</h2>-->
			<h2 class="section-title_suboffer">На складе сохранился остаток станций по ценам лета 2015 г. 
            <br><span class="section-title_subofferR"><b>В наличии 38 септиков. Успейте сэкономить!</b></span></h2>     
            
       
            <div class="container_960">
                <table class="summer_table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="summer-label">Заморозка цен до весны 2016</div>
                                <div class="summer_list">
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Вы оплачиваете станцию по старым ценам</p>
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Септик будет храниться на нашем складе</p>
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Доставим по первому требованию</p>
                                	<p class="summer-economy">Ваша экономия от <b>14 245 руб!</b></p>
                                    
                                    <div class="call  js-call" id="call">
                                      <form action="mail.php" class="formS">
                                          <div class="formS-fields">
                                              <div class="formS-row  clearfix">
                                                  <label class="formS-label" for="form_name">Имя:</label>
                                                  <input class="formS-input" type="text" name="form_name" id="form_name">
                                              </div>
                                              <div class="formS-row  clearfix">
                                                  <label class="formS-label" for="form_phone">Тел:</label>
                                                  <input class="formS-input  js-maskphone" type="text" name="form_phone" id="form_phone">
                                              </div>
                                              <div class="formS-row  clearfix">
                                                  <div class="formS-label"></div>
                                                  <button class="formS-send btn-green" data-target="economy" onclick="yaCounter32793735.reachGoal('economy'); return true;">Хочу сэкономить</button>
  
                                              </div>
                                          </div>
                                          <div class="formS-status" style="display:none;">
                                              <div class="formS-status-big">Спасибо!</div>
                                              <div class="formS-status-small">Ваша заявка принята. Мы перезвоним Вам <br>в самое ближайшее время.</div>
                                          </div>
                                  
                                      </form>
                                	</div>
                                </div>
                            </td>
                            <td>
                                <div class="summer-label">Зимний монтаж</div>
                                <div class="summer_list">
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Вы оплачиваете станцию по старым ценам</p>
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Получаете БОЛЬШУЮ скидку</p>
                                    <p class="summer_sub_info"><img src="img/icon_red.png" alt=""> &nbsp;Консервация на зиму в ПОДАРОК!</p>
                                    <p class="summer-economy">Ваша экономия от <b>22 645 руб!</b></p>
                                    <div class="call  js-call" id="call">
                                      <form action="mail.php" class="formS">
                                          <div class="formS-fields">
                                              <div class="formS-row  clearfix">
                                                  <label class="formS-label" for="form_name">Имя:</label>
                                                  <input class="formS-input" type="text" name="form_name" id="form_name">
                                              </div>
                                              <div class="formS-row  clearfix">
                                                  <label class="formS-label" for="form_phone">Тел:</label>
                                                  <input class="formS-input  js-maskphone" type="text" name="form_phone" id="form_phone">
                                              </div>
                                              <div class="formS-row  clearfix">
                                                  <div class="formS-label"></div>
                                                  <button class="formS-send btn-green" data-target="economy" onclick="yaCounter32793735.reachGoal('economy'); return true;">Хочу сэкономить</button>
  
                                              </div>
                                          </div>
                                      <div>
                                          <div class="formS-status" style="display:none;">
                                              <div class="formS-status-big">Спасибо!</div>
                                              <div class="formS-status-small">Ваша заявка принята. Мы перезвоним Вам <br>в самое ближайшее время.</div>
                                          </div>
                                      </div>
                                      </form>
                                	</div>
								</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>

		<div class="section  section-video  video-star">
        <h2 class="section-title  wow  fadeInDown">Нам доверяют Звезды!</h2>
            <div class="container_990">
                <table class="star_table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <strong class="company_benefits-star"><i>Я выбрал компанию <br>«Новое Место» потому что мне очень понравилось отношение…</i></strong>
                                <p class="site_sub2_title">Егор Кончаловский</p>
                                <p><i>российский режиссер, актер, <br>сценарист и продюсер</i><p>
                            </td>
                            <td>
                              <div class="video-star_wr">
                                  <iframe  width="490" height="274" src="http://www.youtube.com/embed/D4ovHriQlH8"></iframe>
                              </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>


		<div class="section  section-septic_list  septic_list" id="products">
            <h1 class="section-title2_red  wow  fadeInDown">Нам исполнилось 13 лет! Максимальные скидки на станции!</h1>
            <!--<h2 class="section-title_offer  wow  fadeInDown">АКЦИЯ:</h2>-->
            <h2 class="section-title_black  wow  fadeInDown">Топас + Доставка + Монтаж и шеф-монтаж</h2>
			<h2 class="section-title_offer  wow  fadeInDown">всего за 89 300 руб!</h2>            
			<div class="septic_list-tabs_wr  container_960">					
                    <div class="tabs-tabs">
						<div class="tabs-item  clearfix active">
							<div class="offer_list-item">
								<div class="offer_list-item_label">Топас 4</div>
                                <div class="offer_list-item_img">
                                    <img src="img/topas-4.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 10%</div>
                                <div class="offer_list-item_params">+ бесплатная доставка</div>
								<div class="offer_list-item_price">
									<strong>69 200 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
							<div class="offer_list-item">
								<div class="offer_list-item_label">Топас 5</div>
                                <div class="offer_list-item_img">
                                    <img src="img/topas-5.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 10%</div>
                                <div class="offer_list-item_params">+ бесплатная доставка</div>
								<div class="offer_list-item_price">
									<strong>76 950 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
							<div class="offer_list-item">
								<div class="offer_list-item_label">Топас 8</div>
                                <div class="offer_list-item_img">
                                    <img src="img/topas-8.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 10%</div>
                                <div class="offer_list-item_params">+ бесплатная доставка</div>
								<div class="offer_list-item_price">
									<strong>96 200 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
							<div class="offer_list-item">
								<div class="offer_list-item_label">Астра 3</div>
                                <div class="offer_list-item_img">
                                    <img src="img/astra-3.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 15%</div>
                                <div class="offer_list-item_params">&nbsp;</div>
								<div class="offer_list-item_price">
									<strong>58 905 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
							<div class="offer_list-item">
								<div class="offer_list-item_label">Астра 5</div>
                                <div class="offer_list-item_img">
                                    <img src="img/astra-5.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 15%</div>
                                <div class="offer_list-item_params">&nbsp;</div>
								<div class="offer_list-item_price">
									<strong>71 230 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
							<div class="offer_list-item">
								<div class="offer_list-item_label">Астра 8</div>
                                <div class="offer_list-item_img">
                                    <img src="img/astra-8.jpg" alt="">
                                </div>
								<div class="offer_list-item_discount">Скидка 15%</div>
                                <div class="offer_list-item_params">&nbsp;</div>
								<div class="offer_list-item_price">
									<strong>89 590 Р</strong>
								</div>
								<div class="offer_list-item_btn_wr">
									<button class="offer_list-item_btn  js-fancymodal" data-target="offer" data-fancybox-href="#callback">Цена по акции</button>
								</div>
							</div>
					</div>

				</div>
                
            </div>

            <h3 class="section-title2_black  wow  fadeInDown">Свяжитесь с нами и <span class="section-title2_red">получите более выгодное предложение </span>от нашего менеджера!</h3>
            <br>

			<div class="fullw_carousel js-scrollable">
				<a class="fullw_carousel-item  js-fancy" href="img/sklad01.jpg" data-fancybox-group="sklad"><img src="img/sklad01-small.jpg" alt=""></a>
				<img class="fullw_carousel-item" src="img/textslide.jpg" alt="">
				<a class="fullw_carousel-item  js-fancy" href="img/sklad02.jpg" data-fancybox-group="sklad"><img src="img/sklad02-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad03.jpg" data-fancybox-group="sklad"><img src="img/sklad03-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad04.jpg" data-fancybox-group="sklad"><img src="img/sklad04-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad05.jpg" data-fancybox-group="sklad"><img src="img/sklad05-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad06.jpg" data-fancybox-group="sklad"><img src="img/sklad06-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad07.jpg" data-fancybox-group="sklad"><img src="img/sklad07-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad08.jpg" data-fancybox-group="sklad"><img src="img/sklad08-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad09.jpg" data-fancybox-group="sklad"><img src="img/sklad09-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad10.jpg" data-fancybox-group="sklad"><img src="img/sklad10-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad11.jpg" data-fancybox-group="sklad"><img src="img/sklad11-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad12.jpg" data-fancybox-group="sklad"><img src="img/sklad12-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/sklad13.jpg" data-fancybox-group="sklad"><img src="img/sklad13-small.jpg" alt=""></a>
			</div>
		</div>

		<div class="section  section-company_benefits  company_benefits" id="about">
			<h2 class="section-title  wow  fadeInDown">Более 200 монтажей септиков в месяц!</h2>

			<div class="container_960">
				<ul class="company_benefits-accordion responsive-accordion">
					<li>
						<div class="responsive-accordion-head  open">
							<i class="ico ico-book"></i>
							<span class="company_benefits-accordion_label">Склад и служба доставки</span>
						</div>
						<div class="responsive-accordion-panel  open">
							<table class="company_benefits-compare_table">
								<thead>
									<tr>
										<td>Наша компания</td>
										<td>Сезонные спекулянты</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Собственный склад</strong>
											<p>В наличии все модели септиков. Готовы отгрузить со склада сразу после предоплаты.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Септики только под заказ</strong>
											<p>После внесения предоплаты ваш септик только закажут у производителя.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Склад в МО</strong>
											<p>С нашего склада в Подольске в любую точку Московской области мы доедем в течение дня.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Склады в соседних областях</strong>
											<p>Доставка может занять длительное время.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Собственный автопарк</strong>
											<p>Планируем график доставок на каждый день и соблюдаем его.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Частные водители</strong>
											<p>Срок доставки зависит от настроения водителя и его автомобиля.</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>

				</ul>

				<!--<div class="company_benefits-callback_info">С вами свяжется наш специалист и проконсультирует по всем имеющимся маркам септиков</div>
				<div class="company_benefits-btn_wr">
					<button class="company_benefits-btn  btn-blue  wow  fadeInUp  js-fancymodal" data-fancybox-href="#callback" type="button">Узнать больше</button>
				</div>-->
			</div>

		</div>

		<div class="section  section-choose_septic  choose_septic" id="choose_septic">

			<div class="container_960">
				<h2 class="section-title  wow  fadeInDown">Какой септик лучше подходит для моего загородного дома?</h2>
				<div class="tabs">
					<div class="tabs-index  clearfix  js-tabs">
						<div class="tabs-index_item  active" data-tab="1">
							<span class="tabs-index_item_label">Септик глубокой очистки</span>
						</div>
						<div class="tabs-index_item" data-tab="2">
							<span class="tabs-index_item_label">Септик <br> почвенной доочисткой</span>
						</div>
						<div class="tabs-index_item" data-tab="3">
							<span class="tabs-index_item_label">Септик <br>накопительный</span>
						</div>
						<div class="tabs-index_item" data-tab="4">
							<span class="tabs-index_item_label">Бетонные кольца</span>
						</div>
					</div>
					<div class="tabs-tabs">
						<div class="tabs-item  active  clearfix" data-tab="1">
							<div class="choose_septic-left">
								<h3>Септик глубокой очистки</h3>

								<p>Такие станции работают по полному циклу очистки стоков, они многокамерные и содержат как аэробные, так и анаэробные бактерии.</p>

								<p>Очистка сточных вод с помощью них происходит в три стадии с использованием аэрационных установок попеременно.</p>

								<p>Они компактны, потребляют незначительное количество электричества, просты в установке, не выделяют неприятного запаха, не требуют устройства почвенной очистки и долговечны.</p>

								<p>Стоит отметить, что очищенную техническую воду из таких станций можно использовать для полива растений и кустарников.</p>

								<div class="clearfix">
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Мнение эксперта:</span>
									</div>
									<div class="choose_septic-text">
										<p class="choose_septic-expert_text">Монтаж производится в течение одного дня без использования спецтехники. Запах отсутствует. Сточные воды не загрязняют водоносный слой земли. Не требует вызова ассенизатора. Срок службы более 50 лет.</p>
									</div>
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Общие расходы за первые 5 лет:</span>
									</div>
									<div class="choose_septic-text">
										<span class="choose_septic-price">107 000 Р</span>
										<span class="choose_septic-grey_block">
											Стоимость септика: 85 000 р.
											<br>Стоимость монтажа: 22 000 р.
										</span>
										<span class="choose_septic-grey_block">
											Вызов ассинезатора: нет
											<br>Досыпка бактерий: нет
										</span>
									</div>
								</div>
							</div>
							<div class="choose_septic-right">
								<div class="choose_septic-img">
									<img src="img/product_img1.jpg" alt="Септик глубокой очистки">
								</div>
								<button class="choose_septic-compare_btn"><i class="ico ico-list"></i> Сравнительная таблица</button>
							</div>
						</div>
						<div class="tabs-item  clearfix" data-tab="2">
							<div class="choose_septic-left">
								<h3>Септик почвенной доочисткой</h3>
								<p>Основное отличие такого септика состоит в отсутствии энергопотребления и автономности за счет разложения микроорганизмами, которые не нуждаются в кислороде воздуха.</p>
								<p>Отходы утилизируются путем отстаивания и брожения в камерах септика. Характеризует септики такого вида недорогая стоимость и возможность самостоятельного конструирования емкости для очистки стоков.</p>
								<p>Таким септикам присущ дорогостоящий монтаж и огромные габариты, а так же наличие неприятного запаха и ассенизация больше двух раз в год, не смотря на наличие емкости для очистки. </p>

								<div class="clearfix">
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Мнение эксперта:</span>
									</div>
									<div class="choose_septic-text">
										<p class="choose_septic-expert_text">Загрязняет водоносный слой земли. Дорогой и сложный монтаж. Со временем происходит заиливание полей фильтрации. Их замена сопровождается перекапыванием всего участка.</p>
									</div>
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Общие расходы за первые 5 лет:</span>
									</div>
									<div class="choose_septic-text">
										<span class="choose_septic-price">165 000 Р</span>
										<span class="choose_septic-grey_block">
											Стоимость септика: 30 000 р.
											<br>Стоимость монтажа: 50 000 р.
										</span>
										<span class="choose_septic-grey_block">
											Вызов ассинезатора: да
											<br>Досыпка бактерий: да
										</span>
									</div>
								</div>
							</div>
							<div class="choose_septic-right">
								<div class="choose_septic-img">
									<img src="img/product_img2.jpg" alt="Септик почвенной доочисткой">
								</div>
								<button class="choose_septic-compare_btn"><i class="ico ico-list"></i> Сравнительная таблица</button>
							</div>
						</div>
						<div class="tabs-item  clearfix" data-tab="3">
							<div class="choose_septic-left">
								<h3>Септик накопительный</h3>
								<p>Данный вид септиков подойдёт для людей, которые являются нечастыми гостями на даче. Это однокамерный септик, который может быть дополнительно оборудован датчиком уровня заполнения емкости сточными водами.</p>
								<p>Преимущественно это металлическая, железобетонная или пластмассовая бочка, не наносящая вреда окружающей среде. Достаточно обеспечить подъезд ассенизаторской машины для откачки отходов.</p>
								<p>К минусам такого септика можно отнести высокую стоимость и частоту периодичности вызова ассенизаторской машины, что характерно денежными затратами. Такой септик не блокирует неприятный запах канализационных вод. </p>

								<div class="clearfix">
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Мнение эксперта:</span>
									</div>
									<div class="choose_septic-text">
										<p class="choose_septic-expert_text">Дорогой и сложный монтаж. Занимает много места на участке. При постоянном использовании требуется регулярная откачка отходов, сопровождаемая едким запахом загниения.</p>
									</div>
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Общие расходы за первые 5 лет:</span>
									</div>
									<div class="choose_septic-text">
										<span class="choose_septic-price">170 000 Р</span>
										<span class="choose_septic-grey_block">
											Стоимость септика: 30 000 р.
											<br>Стоимость монтажа: 40 000 р.
										</span>
										<span class="choose_septic-grey_block">
											Вызов ассинезатора: да
											<br>Досыпка бактерий: нет
										</span>
									</div>
								</div>
							</div>
							<div class="choose_septic-right">
								<div class="choose_septic-img">
									<img src="img/product_img3.jpg" alt="Септик накопительный">
								</div>
								<button class="choose_septic-compare_btn"><i class="ico ico-list"></i> Сравнительная таблица</button>
							</div>
						</div>
						<div class="tabs-item  clearfix" data-tab="4">
							<div class="choose_septic-left">
								<h3>Бетонные кольца</h3>
								<p>Самым простым и относительно недорогим решением для канализационной системы является установка бетонных колец. Однако стоит отметить их большую массу, в связи с чем возникает проблема транспортировки и установки такой системы канализации. </p>
								<p>Следующим минусом такой системы является непосредственный процесс отстаивания, брожения и натуральной фильтрации в почву через слои гравия и песка, что в свою очередь характеризуется стойким неприятным запахом отходов человеческой жизнедеятельности на дачном участке и серьезно ударяет по кошельку за счет потребности в ассенизации таких колодцев свыше 5 раз в год.</p>

								<div class="clearfix">
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Мнение эксперта:</span>
									</div>
									<div class="choose_septic-text">
										<p class="choose_septic-expert_text">Стойкий неприятный запах, загрязнение грунтовых вод, регулярные затраты на вызов ассенизатора и на покупку бактерий. Со временем бетон разрушается.</p>
										<p class="choose_septic-expert_text">Если вы все еще хотите сэкономить, вас не беспокоит неприятный запах и возможность уплаты штрафа (в соответствии с ФЗ 416 о водоснабжении и водоотведении) — выбор за вами.</p>
									</div>
									<div class="choose_septic-labels">
										<span class="choose_septic-label">Общие расходы за первые 5 лет:</span>
									</div>
									<div class="choose_septic-text">
										<span class="choose_septic-price">105 000 Р</span>
										<span class="choose_septic-grey_block">
											Стоимость септика: 12 000 р.
											<br>Стоимость монтажа: 15 000 р.
										</span>
										<span class="choose_septic-grey_block">
											Вызов ассинезатора: да
											<br>Досыпка бактерий: да
										</span>
									</div>
								</div>
							</div>
							<div class="choose_septic-right">
								<div class="choose_septic-img">
									<img src="img/bet_koltsa.jpg" alt="Бетонные кольца">
								</div>
								<button class="choose_septic-compare_btn"><i class="ico ico-list"></i> Сравнительная таблица</button>
							</div>
						</div>
					</div>


				</div>

			</div>

		</div>

		<div class="section  section-septic_compare  septic_compare" id="septic_compare">
			<div class="container_960">
				<h2 class="section-title  wow  fadeInDown">Чем отличаются септики</h2>
				<table class="table">
					<thead>
						<tr class="table-nobg">
							<td></td>
							<td class="septic_compare-img"><img src="img/product_img1.jpg" alt="Септик глубокой очистки"></td>
							<td class="septic_compare-img"><img src="img/product_img2.jpg" alt="Септик почвенной доочисткой"></td>
							<td class="septic_compare-img"><img src="img/product_img3.jpg" alt="Септик накопительный"></td>
							<td class="septic_compare-img"><img src="img/bet_koltsa.jpg" alt="Бетонные кольца"></td>
						</tr>
						<tr>
							<td></td>
							<td>Септик биологической очистки</td>
							<td>Септик почвенной доочистки (танк)</td>
							<td>Септик накопительный (бочка)</td>
							<td>Бетонные кольца</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>Стоимость септика</b></td>
							<td>85 000 Р</td>
							<td>30 000 Р</td>
							<td>30 000 Р</td>
							<td>20 000 Р</td>
						</tr>
						<tr>
							<td><b>Стоимость монтажа</b></td>
							<td>22 000 Р</td>
							<td>50 000 Р</td>
							<td>40 000 Р</td>
							<td>25 000 Р</td>
						</tr>
						<tr>
							<td><b>Вызов ассинезатора</b></td>
							<td>0 Р</td>
							<td>4 раза в год</td>
							<td>до 12 раз в год</td>
							<td>4 раза в год</td>
						</tr>
						<tr>
							<td><b>Досыпка бактерий</b></td>
							<td>0 Р</td>
							<td>4 раза в год</td>
							<td>не нужны</td>
							<td>4 раза в год</td>
						</tr>
						<tr>
							<td><b>Степень очистки</b></td>
							<td>99%</td>
							<td>60%</td>
							<td>0%</td>
							<td>50%</td>
						</tr>
						<tr>
							<td><b>Запах</b></td>
							<td>отсутствует</td>
							<td>присутствует</td>
							<td>сильный стойкий <br> запах на участке</td>
							<td>сильный стойкий <br> запах на участке</td>
						</tr>
						<tr>
							<td><b>Влияние на экологию</b></td>
							<td>никак не влияеет</td>
							<td>сильное</td>
							<td>никак не влияет</td>
							<td>сильное</td>
						</tr>
						<tr>
							<td><b>Общие расходы в первые 5 лет*</b></td>
							<td>107 000 Р</td>
							<td>165 000 Р</td>
							<td>170 000 Р</td>
							<td>105 000 Р</td>
						</tr>
					</tbody>
				</table>
				<p class="septic_compare-footnote">* Усредненное значение. Может меняться в зависимости от условий эксплуатации.</p>
			</div>
		</div>

		<div class="section  section-certificate  certificate" id="certificate">

			<p class="certificate-text  wow  slideInLeft">У нас в ассортименте только качественные автономные канализации от известных производителей.</p>
			<p class="certificate-text  wow  slideInRight">Будьте уверены, что мы предложим для вас лучший вариант, подходящий для вашего загородного дома!</p>

			<div class="certificate-brands">
				<img src="img/brands.jpg" alt="">
			</div>

			<h2 class="section-title  wow  fadeInDown">Сертификаты качества</h2>

			<div class="container_1060">
            	<div class="horizontal_slider">
                    <ul class="js-cert  certificate-slider">
                        <li><a class="js-fancy" href="img/cert02_big.jpg" data-fancybox-group="cert"><img src="img/cert02.png" alt=""></a></li>
                        <li></li>
                        <li><a class="js-fancy" href="img/cert06_big.jpg" data-fancybox-group="cert"><img src="img/cert06.png" alt=""></a></li>
                        <li><a class="js-fancy" href="img/cert08_big.jpg" data-fancybox-group="cert"><img src="img/cert08.png" alt=""></a></li>
                        <li><a class="js-fancy" href="img/cert04_big.jpg" data-fancybox-group="cert"><img src="img/cert04.png" alt=""></a></li>
                        
                        <li><a class="js-fancy" href="img/cert05_big.jpg" data-fancybox-group="cert"><img src="img/cert05.png" alt=""></a></li>
                        <li></li>
                        <li><a class="js-fancy" href="img/cert03_big.jpg" data-fancybox-group="cert"><img src="img/cert03.png" alt=""></a></li>
                        <li><a class="js-fancy" href="img/cert07_big.jpg" data-fancybox-group="cert"><img src="img/cert07.png" alt=""></a></li>
                        <li><a class="js-fancy" href="img/cert00_big.jpg" data-fancybox-group="cert"><img src="img/cert00.png" alt=""></a></li>
                    </ul>
                </div>
			</div>
		</div>

		<div class="section  section-range_of_services  range_of_services" id="range_of_services">
			<h2 class="section-title  wow  fadeInDown">Если вам нужны работы в комплексе, то ... это предложение для вас!</h2>
			<div class="range_of_services-discount    wow  fadeInDown"><span class="range_of_services-discount_in">Получите <b>скидку 20%</b> при заказе комплекса услуг:</span></div>

			<div class="range_of_services-credit">
				<p class="range_of_services-big  wow  slideInLeft">Нет возможности заплатить сейчас?</p>
				<p class="  wow  slideInRight">
					Не откладывай важные решения на завтра — оформи
					<br><b>беспроцентную рассрочку</b> и забудь о своих проблемах.
					<br><br>Оформи <b>рассрочку 0% или кредит</b>.
				</p>
			</div>
			<div class="range_of_services-btn_wr">
				<button class="range_of_services-btn  wow  fadeInUp  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Узнать цену и стоимость услуг</button>
			</div>
		</div>


            <div class="container_990">
                <table class="banner_double">
                    <tbody>
                        <tr>
                            <td>
                        		<a target:"_blank" href="http://ros-burenie.ru/?utm_source=rseptik&utm_medium=ref"><img src="img/banner_burenie.png" alt=""></a>
                                    
                            </td>
                            <td>
                        		<a target:"_blank" href="http://new-mesto.ru/otoplenie/?utm_source=rseptik&utm_medium=ref"><img src="img/banner_otoplenie.png" alt=""></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>

        <!--
		<div class="range_of_services-banner  wow  fadeIn">
			<span class="js-fancymodal" data-fancybox-href="#callback"><img src="img/banner.jpg" alt=""></span>
		</div>
        -->

<div class="section  section-septic_list  septic_list" id="products">
			<h2 class="section-title  wow  fadeInDown">У нас одни из самых низких цен на рынке!</h2>
			<div class="septic_list-tabs_wr  container_960">
				<div class="tabs">
					<div class="tabs-index  clearfix  js-tabs">
						<div class="tabs-index_item  active" data-tab="1">
							<span class="tabs-index_item_label">Септики глубокой очистки</span>
							от 58 900 Р
						</div>
						<div class="tabs-index_item" data-tab="2">
							<span class="tabs-index_item_label">Септики почвенной доочисткой</span>
							от 30 500 Р
						</div>
						<div class="tabs-index_item" data-tab="3">
							<span class="tabs-index_item_label">Септики накопительные</span>
							от 32 600 Р
						</div>
					</div>
					<div class="tabs-tabs">
						<div class="tabs-item  clearfix active" data-tab="1">
							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 3-х человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic-1.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 600 л</b>
									<br><br>
									Макс. залповый сброс
									<br><b>до 130 л</b>
									<br><br>
									Астра 3, Эко-гранд 3, Евробион 3, Тверь 0,75П и т.д.
								</div>
								<div class="septic_list-item_price">
									от 58 900 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 5-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic-2.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 1000 л</b>
									<br><br>
									Макс. залповый сброс
									<br><b>до 220 л</b>
									<br><br>
									Астра 5, Топас 5, Эко-гранд 5, Евробион 5, Тверь 1П и т.д.
								</div>
								<div class="septic_list-item_price">
									от 71 200 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 8-ми человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic-3.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 1500 л</b>
									<br><br>
									Макс. залповый сброс
									<br><b>до 440 л</b>
									<br><br>
									Астра 8, Топас 8, Эко-гранд 8, Евробион 8, Тверь 1,5П и т.д.
								</div>
								<div class="septic_list-item_price">
									от 89 500 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 10-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic-4.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-shower"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 2000 л</b>
									<br><br>
									Макс. залповый сброс
									<br><b>до 760 л</b>
									<br><br>
									Астра 10, Топас 10, Эко-гранд 10, Евробион 10, Тверь 2П и т.д.
								</div>
								<div class="septic_list-item_price">
									от 107 900 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>
						</div>

						<div class="tabs-item  clearfix" data-tab="2">
							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 3-х человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic01.png" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 600 л</b>
									<br><br>
									Барс, Чисток, Танк, Флотенк, и т.д.
								</div>
								<div class="septic_list-item_price">
									от 30 500 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 5-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic03.png" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-shower"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 1000 л</b>
									<br><br>
									Барс, Чисток, Танк, Флотенк, и т.д.
								</div>
								<div class="septic_list-item_price">
									от 51 300 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 8-ми человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic05.png" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-shower"></i>
										<i class="ico ico-bath"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 1500 л</b>
									<br><br>
									Барс, Чисток, Танк, Флотенк, и т.д.
								</div>
								<div class="septic_list-item_price">
									от 64 800 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 10-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic06.png" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-shower"></i>
										<i class="ico ico-bath"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Суточная переработка
									<br><b>до 2000 л</b>
									<br><br>
									Барс, Чисток, Танк, Флотенк, и т.д.
								</div>
								<div class="septic_list-item_price">
									от 75 700 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>
						</div>

						<div class="tabs-item  clearfix" data-tab="3">
							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 3-х человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic07.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Объём
									<br><b>до 2000 л</b>
									<br><br>
									Барс-Н, Флотенк, Вставка в бетонные кольца
								</div>
								<div class="septic_list-item_price">
									от 30 500 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 5-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic02.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Объём
									<br><b>до 5000 л</b>
									<br><br>
									Барс-Н, Флотенк, Вставка в бетонные кольца
								</div>
								<div class="septic_list-item_price">
									от 51 300 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 8-ми человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic04.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Объём
									<br><b>до 8000 л</b>
									<br><br>
									Барс-Н, Флотенк, Вставка в бетонные кольца
								</div>
								<div class="septic_list-item_price">
									от 64 800 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>

							<div class="septic_list-item">
								<div class="septic_list-item_label">Дo 10-ти человек</div>
								<div class="septic_list-item_pics  clearfix">
									<div class="septic_list-item_img">
										<img src="img/septic07.jpg" alt="">
									</div>
									<div class="septic_list-item_icons">
										<i class="ico ico-toilet"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-sink"></i>
										<i class="ico ico-washer"></i>
										<i class="ico ico-shower"></i>
									</div>
								</div>
								<div class="septic_list-item_params">
									Объём
									<br><b>до 10 000 л</b>
									<br><br>
									Барс-Н, Флотенк, Вставка в бетонные кольца
								</div>
								<div class="septic_list-item_price">
									от 139 500 Р
								</div>
								<div class="septic_list-item_btn_wr">
									<button class="septic_list-item_btn  js-fancymodal" data-target="callback" data-fancybox-href="#callback">Заказать</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="section  section-company_benefits  company_benefits" id="about">
			<h2 class="section-title  wow  fadeInDown">Как выбрать надёжную компанию</h2>

			<div class="container_960">
				<ul class="company_benefits-accordion responsive-accordion">
					<li>
						<div class="responsive-accordion-head  open">
							<i class="ico ico-book"></i>
							<span class="company_benefits-accordion_label">Прозрачная и полная смета</span>
						</div>
						<div class="responsive-accordion-panel  open">
							<table class="company_benefits-compare_table">
								<thead>
									<tr>
										<td>Наша компания</td>
										<td>Сезонные спекулянты</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Честная стоимость доставки</strong>
											<p>Мы не прячем в смете значительную сумму ради красивого предложения.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> «Бесплатная доставка»</strong>
											<p>Как правило, стоимость доставки разбросана по остальным позициям сметы.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Полное количество материалов</strong>
											<p>Вы ничего не доплачиваете «на месте», все необходимые материалы учтены в смете.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Минимальное количество</strong>
											<p>Остальное вам предложат купить при монтаже, когда септик закопан и деваться вам некуда.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Качественные комплектующие</strong>
											<p>Мы используем проверенные качественные материалы. Например, немецкие трубы Solex степени жесткости SN4.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Дешёвые комплектующие</strong>
											<p>Стоимость рассчитана с самыми дешевыми китайскими комплектующими, которые наверняка придется менять.</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
					<li>
						<div class="responsive-accordion-head">
							<i class="ico ico-man"></i>
							<span class="company_benefits-accordion_label">Собственные монтажные бригады</span>
						</div>
						<div class="responsive-accordion-panel">
							<table class="company_benefits-compare_table">
								<thead>
									<tr>
										<td>Наша компания</td>
										<td>Сезонные спекулянты</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> 20 профессиональных бригад</strong>
											<p>Мы справимся с потоком установок в сезон и смонитруем септик на следующий день.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> 1-2 бригады</strong>
											<p>После предоплаты вы можете несколько недель прождать своей очереди на монтаж.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Штатные сотрудники</strong>
											<p>Мы несем отвественность за качество установки септика.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Бригады на подряде</strong>
											<p>В случае возникновения проблем с установкой трудно найти ответственных</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
					<li>
						<div class="responsive-accordion-head">
							<i class="ico ico-hand"></i>
							<span class="company_benefits-accordion_label">Сервисное и гарантийное обслуживание</span>
						</div>
						<div class="responsive-accordion-panel">
							<table class="company_benefits-compare_table">
								<thead>
									<tr>
										<td>Наша компания</td>
										<td>Сезонные спекулянты</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Аварийная служба</strong>
											<p>Решим все проблемы с автономной канализацией. Срочный выезд в день обращения.</p>
										</td>
										<td>
											<strong class="company_benefits-red"><i class="ico ico-del"></i> Только отдел продаж</strong>
											<p>После получения денег вы становитесь неинтересны.</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong class="company_benefits-blue"><i class="ico ico-check_small"></i> Сервисное обслуживание</strong>
											<p>Мы не оставляем вас после установки, и готовы взять на себя полное обслуживание автономной канализации.</p>
										</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</li>
				</ul>

				<div class="company_benefits-callback_info">С вами свяжется наш специалист и проконсультирует по всем имеющимся маркам септиков</div>
				<div class="company_benefits-btn_wr">
					<button class="company_benefits-btn  btn-blue  wow  fadeInUp  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Узнать больше</button>
				</div>
			</div>

		</div>

		<div class="section  section-correct_installation  correct_installation" id="correct_installation">
			<h2 class="section-title  wow  fadeInDown">В выборе септика важно, как его будут монтировать!</h2>
			<div class="horizontal_slider  container_960">
				<ul class="js-slider">
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">1</span>
							Обратите внимание, какими материалами рабочие засыпают котлован станции
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left  wow  slideInLeft">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-1-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Засыпаем котлован песком и проливаем водой</strong></p>
								<p>Песок дает быструю усадку, станция ровно и надежно закреплена в песчаной “подушке”.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section  wow  slideInRight">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-1-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Засыпают котлован грунтом</strong></p>
								<p>Возможно сдавливание станции твердым грунтом, смещение и наклон — как следствие, неправильное функционирование.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>100 000 руб</b></span>
							</div>
						</div>

					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">2</span>
							Следите за тем, как закапывают трубы
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-2-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Укладываем трубы в траншеи с песком</strong></p>
								<p>Песчаная подушка оберегает трубы от движений грунта. Трубы сохраняют наклон и правильную геометрию.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-2-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Закапывают трубы прямо в грунт</strong></p>
								<p>Сдвиг грунта может изменить наклон труб или даже согнуть их. В местах сгибов могут образовываться наледь и засоры.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>6000 руб</b></span>
							</div>
						</div>
					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">3</span>
							Наблюдайте за тем, как происходит прокладка проводов
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-3-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Используем гермоввод для аварийной сигнализации</strong></p>
								<p>Блок управления остается герметичным.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-3-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Продевают провода в проделанное отверстие</strong></p>
								<p>По временем влага проникает в блок управления, провода окисляются и блок приходит в негодность.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>21 000 руб</b></span>
							</div>
						</div>
					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">4</span>
							Обратите внимание на закрепление проводов
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-4-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Аккуратно закрепляем провода на блоке управления</strong></p>
								<p>Изолированные друг от друга провода не перегреваются.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-4-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Бросают провода «как придётся»</strong></p>
								<p>Провода могут попасть на электромагнитный клапан и вызвать пожар в станции.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>8000 руб</b></span>
							</div>
						</div>
					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">5</span>
							Следите за аккуратностью прокладки труб
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-5-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Выпрямляем трубу, надеваем утеплитель и помещаем в жесткую трубу большего диаметра</strong></p>
								<p>В ровной трубе нет препятствий для движения жидкости.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-5-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Укладывают трубу сразу после размотки</strong></p>
								<p>В неровностях может скапливается мусор и наледь, стоки могут затопить станцию и вывести из строя.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>22 000 руб</b></span>
							</div>
						</div>
					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">6</span>
							Пронаблюдайте, как происходит процесс фиксирования погружного насоса
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-6-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Надежно фиксируем погружной насос</strong></p>
								<p>При подаче воды насос неподвижен.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-6-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Просто опускают насос в станцию</strong></p>
								<p>При подаче воды насос начинает болтать, вода может залить блок управления станцией и электромагнитный клапан.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>6000 руб</b></span>
							</div>
						</div>
					</li>
					<li class="correct_installation-slide">
						<h3 class="correct_installation-slide_title  wow  slideInLeft">
							<span class="correct_installation-slide_number">7</span>
							Обратите внимание на фиксацию поплавка аварийной сигнализации
						</h3>

						<div class="correct_installation-slide_section  correct_installation-slide_section--left">
							<h5 class="correct_installation-slide_subtitle">Как монтируем мы:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-7-2.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Фиксируем поплавок аварийной сигнализации</strong></p>
								<p>Поплавок двигается в допустимых пределах, выполняя свою функцию.</p>
							</div>
						</div>

						<div class="correct_installation-slide_section">
							<h5 class="correct_installation-slide_subtitle">Как монтируют сезонные рабочие:</h5>
							<div class="correct_installation-slide_img">
								<img src="img/correct_install-7-1.jpg" alt="">
							</div>
							<div class="correct_installation-slide_text">
								<p><strong>Опускают поплавок внутрь станции без фиксации</strong></p>
								<p>Поплавок мотает по большому диаметру. Он может заблокировать работу других элементов или сам разбиться.</p>
								<span class="correct_installation-repair_cost">Цена ремонта: <b>10 000 руб</b></span>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>

		<div class="section  section-trust_the_professionals  trust_the_professionals" id="trust_the_professionals">
			<h2 class="section-title  wow  fadeInDown">Доверяй профессионалам</h2>

			<div class="tabs">
				<div class="container_960">
					<div class="tabs-index  clearfix  js-tabs">
						<div class="tabs-index_item  active" data-tab="1" data-p_taken="true">
							<span class="tabs-index_item_label">О компании</span>
						</div>
						<div class="tabs-index_item" data-tab="2" data-p_taken="true">
							<span class="tabs-index_item_label">Наша команда</span>
						</div>
						<div class="tabs-index_item" data-tab="3" data-p_taken="true">
							<span class="tabs-index_item_label">Монтажные бригады</span>
						</div>
					</div>
					<div class="tabs-tabs">
						<div class="tabs-item  active clearfix" data-tab="1">
							<div class="trust_the_professionals-tab_left   wow  slideInLeft">
								<div class="trust_the_professionals-img_wr">
									<img src="img/group_photo.jpg" alt="">
								</div>
							</div>
							<div class="trust_the_professionals-tab_right   wow  slideInRight">
								<p>
									<br>
									<br>
									<br>
									Компания «Новое – место» имеет 12-ти летний опыт установки и обслуживания автономных канализаций для загородных домов и дач. За прошедший год специалистами компании было установлено более 2000 септиков в загородных домах. Мы постоянно совершенствуем свои навыки и знания в области автономных систем канализации.
								</p>
							</div>
						</div>
						<div class="tabs-item  clearfix" data-tab="2">
							<div class="trust_the_professionals-team  horizontal_slider">
								<ul class="people_slider  js-people_slider">
									<!--<li class="people_slider-item">
										<img src="img/nm_face01.jpg" alt="Сергей Голубцов">
										<div class="people_slider-name">Сергей Голубцов</div>
										<div class="people_slider-post">Генеральный директор</div>
									</li>-->
									<li class="people_slider-item">
										<img src="img/nm_face02.jpg" alt="Алексей Воронцов">
										<div class="people_slider-name">Алексей Воронцов</div>
										<div class="people_slider-post">Коммерческий директор</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face03.jpg" alt="Алексей Чуриков">
										<div class="people_slider-name">Алексей Чуриков</div>
										<div class="people_slider-post">Финансовый директор</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face04.jpg" alt="Татьяна Максимова">
										<div class="people_slider-name">Татьяна Максимова</div>
										<div class="people_slider-post">Бухгалтер </div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face05.jpg" alt="Артём Аверин">
										<div class="people_slider-name">Артём Аверин</div>
										<div class="people_slider-post">Руководитель отдела маркетинга</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face06.jpg" alt="Вячеслав Сильницкий">
										<div class="people_slider-name">Вячеслав Сильницкий</div>
										<div class="people_slider-post">Руководитель отдела доставки</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face07.jpg" alt="Юрий Чернов">
										<div class="people_slider-name">Юрий Чернов</div>
										<div class="people_slider-post">Руководитель сервисного отдела</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face08.jpg" alt="Алёна Гошовская">
										<div class="people_slider-name">Алёна Гошовская</div>
										<div class="people_slider-post">Логист</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face09.jpg" alt="Екатерина Федина">
										<div class="people_slider-name">Екатерина Федина</div>
										<div class="people_slider-post">Логист</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face10.jpg" alt="Юрий Добровецкий">
										<div class="people_slider-name">Юрий Добровецкий</div>
										<div class="people_slider-post">Менеджер отдела продаж</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face11.jpg" alt="Алексей Нечаев">
										<div class="people_slider-name">Алексей Нечаев</div>
										<div class="people_slider-post">Менеджер отдела продаж</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face12.jpg" alt="Сергей Репин">
										<div class="people_slider-name">Сергей Репин</div>
										<div class="people_slider-post">Менеджер отдела продаж</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face13.jpg" alt="Николай Тупицын">
										<div class="people_slider-name">Николай Тупицын</div>
										<div class="people_slider-post">Старший менеджер корпоративного отдела</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face14.jpg" alt="Александр Васильев">
										<div class="people_slider-name">Александр Васильев</div>
										<div class="people_slider-post">Менеджер корпоративного отдела</div>
									</li>
									<li class="people_slider-item">
										<img src="img/nm_face15.jpg" alt="Илья Железнов">
										<div class="people_slider-name">Илья Железнов</div>
										<div class="people_slider-post">Менеджер корпоративного отдела</div>
									</li>
                                    <li class="people_slider-item">
									</li>
								</ul>
							</div>
						</div>
						<div class="tabs-item  clearfix" data-tab="3">

							<div class="trust_the_professionals-team  horizontal_slider">
								<ul class="people_slider  js-man_slider">
									<li class="people_slider-item">
										<div class="people_slider-man">
											<img src="img/nm_montag01.jpg" alt="Андрей Нерян">
											<div class="people_slider-name">Андрей Нерян</div>
											<div class="people_slider-post">Монтажник</div>
										</div>
										<ul class="people_slider-decr">
											<li>Опыт работы в крупнейших производственных компаниях</li>
											<li>Разработал и внедрил уникальную технику установки канализаций</li>
											<li>За 5 лет работы лично установил более 800 канализаций</li>
											<li>Осуществляет подробное консультирование по вопросам эксплуатации канализации </li>
										</ul>
									</li>
									<li class="people_slider-item">
										<div class="people_slider-man">
											<img src="img/nm_montag02.jpg" alt="Андрей Годорожа">
											<div class="people_slider-name">Андрей Годорожа</div>
											<div class="people_slider-post">Монтажник</div>
										</div>
										<ul class="people_slider-decr">
											<li>Мастер качества и скорости выполнения работ любой сложности.</li>
											<li>Инженер-строитель, имеющий колоссальный опыт работы в промышленной сфере коммуникаций внутренних сетей, от завода до частного строительства</li>
											<li>За 5 лет работы в компании лично установил около 700 канализационных систем</li>
											<li>Многие клиенты готовы ждать несколько месяцев, чтобы работа на их участке производилась под руководством этого монтажника </li>
										</ul>
									</li>
									<li class="people_slider-item">
										<div class="people_slider-man">
											<img src="img/nm_montag03.jpg" alt="Сергей Тугузов ">
											<div class="people_slider-name">Сергей Тугузов</div>
											<div class="people_slider-post">Монтажник</div>
										</div>
										<ul class="people_slider-decr">
											<li>Высококвалифицированный специалист-практик, постоянно внедряющий новые технологии на объектах загородного и малоэтажного строительства</li>
											<li>За 5 лет работы смонтировал более 450 канализационных систем по Центральному Административному Округу России</li>
											<li>В своей работе использует инновационные технические решения </li>
										</ul>
									</li>
									<li class="people_slider-item">
										<div class="people_slider-man">
											<img src="img/nm_montag04.jpg" alt="Александр Гедин">
											<div class="people_slider-name">Александр Гедин </div>
											<div class="people_slider-post">Монтажник</div>
										</div>
										<ul class="people_slider-decr">
											<li>Прошел путь от простого рабочего до бригадира монтажной группы</li>
											<li>Опыт работы в компании 5 лет</li>
											<li>Легко находит общий язык с заказчиками </li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="fullw_carousel  js-scrollable">
				<a class="fullw_carousel-item  js-fancy" href="img/office01.jpg" data-fancybox-group="office"><img src="img/office01-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office02.jpg" data-fancybox-group="office"><img src="img/office02-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office03.jpg" data-fancybox-group="office"><img src="img/office03-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office04.jpg" data-fancybox-group="office"><img src="img/office04-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office05.jpg" data-fancybox-group="office"><img src="img/office05-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office06.jpg" data-fancybox-group="office"><img src="img/office06-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office07.jpg" data-fancybox-group="office"><img src="img/office07-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office08.jpg" data-fancybox-group="office"><img src="img/office08-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office09.jpg" data-fancybox-group="office"><img src="img/office09-small.jpg" alt=""></a>
				<a class="fullw_carousel-item  js-fancy" href="img/office10.jpg" data-fancybox-group="office"><img src="img/office10-small.jpg" alt=""></a>
			</div>
		</div>

		<div class="section  section-video  video" id="video">
			<h2 class="section-title  wow  fadeInDown">Посмотрите видео об основных ошибках при монтаже</h2>
			<div class="video-video_wr   wow  fadeIn">
				<iframe src="https://www.youtube.com/embed/QUqfGZUsHrA" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>


		<div class="section  section-useful_tips  useful_tips" id="useful_tips">
			<h2 class="section-title  wow  fadeInDown">Полезные советы</h2>
			<div class="container_960">
				<div class="useful_tips-slider_wr   wow  fadeIn">
					<ul class="js-verticalslider">
						<li class="useful_tips-slide">
							<h3>Дешёвые серые трубы — первый признак недобросовестного монтажа</h3>
							<p>Если дешёвая серая труба имеет низкую степень жесткости и используется для внутренней канализации дома, то в 90% случаев герметичность такой трубы нарушается. При желании ее можно сдавить руками!</p>

							<h4>Чем это грозит?</h4>
							<p>Поломка подводящей трубы обеспечивает попадание отходов человеческой жизнедеятельности в грунт, а далее в скважину или в колодец на вашем участке. А в зимнее время такое удешевление грозит затоплением станции или затоплением дома сточными водами из-за поломки отводящей или подводящей трубы соответственно.</p>
							<ul>
								<li>Экономия сейчас: 3000-5000 рублей</li>
								<li>Стоимость ремонта потом: 12 000-15 000 рублей</li>
							</ul>

							<h4>Что делаем мы?</h4>
							<p>Используем трубы SOLEX, предназначенные исключительно для прокладки под землёй (рыжего цвета). Степень жёсткости SN4, это означает, что труба не деформируется при движении грунта и выдерживает нагрузку размером с грузовик.</p>
						</li>
						<li class="useful_tips-slide">
							<h3>Как процесс установки труб влияет на долговечность эксплуатации станции</h3>
							<p>Во избежание продавливания труб из-за подвижек грунта необходима песчаная подушка. Делается это для того, чтобы трубы не подвергались значительной деформации. Недобросовестные монтажники зарывают трубы прямо в грунт, который сдавливает и ломает и без того непрочные трубы.</p>

							<h4>Чем это грозит?</h4>
							<p>Под давлением грунта труба деформируется, меняет наклон. В результате чего происходит подтопление станции из-за неправильного функционирования станции. Стоки могут даже разорвать трубу изнутри, а на местах нарушения целостности стенок могут образоваться засоры.</p>
							<ul>
								<li>Экономия сейчас: 3000-5000 рублей</li>
								<li>Стоимость ремонта потом: 13 000-15 000 рублей</li>
							</ul>

							<h4>Что делаем мы?</h4>
							<p>Делаем песчаную подушку для труб, а так же засыпаем трубы песком и проливаем водичкой. Это даёт быструю усадку песка и трубы надёжно закрепляются в грунте.</p>
						</li>
						<li class="useful_tips-slide">
							<h3>Китайский дренажный насос или как ломаются станции</h3>
							<p>Стоимость такого насоса от 1500 до 2000 рублей. Очень выгодно с первого взгляда. Поплавковый датчик такого насоса в большинстве случаев имеет свойство «залипать». Казалось бы, кого заботит залипание поплавка. Но это приводит к серьезным последствиям, и насос выходит из строя.</p>

							<h4>Чем это грозит?</h4>
							<p>Происходит затопление станции, выход из строя блока управления и электромагнитного клапана. Очистное сооружение перестает функционировать. Китайский насос вывел из строя всю автономную канализацию.</p>
							<ul>
								<li>Экономия сейчас: 3000 рублей</li>
								<li>Стоимость ремонта потом: 20 000 рублей</li>
							</ul>

							<h4>Что делаем мы?</h4>
							<p>Используем рычаговый дренажный насос DAB NOVA или качественный поплавковый насос PEDROLLO TOP.</p>
						</li>
					</ul>
				</div>

                <div class="company_benefits-btn_wr">
					<button class="company_benefits-btn  btn-blue  wow  fadeInUp  js-changeslide" data-target="callback" type="button">Узнать больше</button>
				</div>

				<div class="useful_tips-email">
                	<h3><br>Остерегайтесь сезонных спекулянтов!</h3>
                    <h4>Узнайте как избежать обмана и продлить срок службы септика до 50 лет!</h4>
                        <!-- Begin MailChimp Signup Form -->
                        <link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
							#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif;  width:360px;}
							/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
                        <div id="mc_embed_signup">
                        <form action="http://bio-septiks.us11.list-manage.com/subscribe/post?u=ca1952c327eb4be415044b226&amp;id=2c98f6442c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Ваш Email</label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="clear">
                                	<input type="submit" value="Подписаться" name="subscribe" id="mc-embedded-subscribe" data-target="subscribe" onclick="yaCounter32793735.reachGoal('subscribe'); return true;" class="btn-email">
                                </div>
                             </div>
                        </form>
                        </div>
                        <script type='text/javascript' src='http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'; /*
                         * Translated default messages for the $ validation plugin.
                         * Locale: RU
                         */
                        $.extend($.validator.messages, {
                                required: "Это поле необходимо заполнить.",
                                remote: "Пожалуйста, введите правильное значение.",
                                email: "Пожалуйста, введите корректный адрес электронной почты.",
                                url: "Пожалуйста, введите корректный URL.",
                                date: "Пожалуйста, введите корректную дату.",
                                dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
                                number: "Пожалуйста, введите число.",
                                digits: "Пожалуйста, вводите только цифры.",
                                creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
                                equalTo: "Пожалуйста, введите такое же значение ещё раз.",
                                accept: "Пожалуйста, выберите файл с правильным расширением.",
                                maxlength: $.validator.format("Пожалуйста, введите не больше {0} символов."),
                                minlength: $.validator.format("Пожалуйста, введите не меньше {0} символов."),
                                rangelength: $.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),
                                range: $.validator.format("Пожалуйста, введите число от {0} до {1}."),
                                max: $.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),
                                min: $.validator.format("Пожалуйста, введите число, большее или равное {0}.")
                        });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
				</div>
			</div>
		</div>
                        
                        
		<div class="section  section-reviews  reviews" id="reviews">
			<div class="container_1260">
				<div class="reviews-in">
					<h2 class="section-title  wow  fadeInDown">Мы гордимся отзывами о нас</h2>
					<div class="reviews-change_type  js-change_type  wow  fadeIn">
						<button class="reviews-change_type_btn  reviews-type_text"><span class="reviews-change_type_btn_in">Отзывы</span></button>
						<button class="reviews-change_type_btn  reviews-type_video active"><span class="reviews-change_type_btn_in">Видео-отзывы</span></button>
					</div>
					<div class="reviews-slider_wr  review-text_review  horizontal_slider">
						<ul class="js-slider text_review">
                        	<li class="reviews-slider_item">
								<div class="reviews-slider_item_img  wow  fadeInDown">
									<img src="img/review-0.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text  wow  fadeIn">
									<div class="reviews-slider_item_resp_name">Егор Кончаловский</div>
									<h3 class="reviews-slider_item_title">«Я остановился на компании «Новое Место» потому что мне очень понравилось отношение…»</h3>
									<p class="reviews-slider_item_text"> Здравствуйте, меня зовут Егор Кончаловский и я бы хотел сказать несколько хороших слов в адрес компании «Новое Место».<br>
Мне нужно было установить септик. Естественно, подходя к этому вопросу серьезно, я провел определенные маркетинговые  исследования и остановился на компании «Новое Место», потому что мне очень понравилось отношение. Люди приезжали несколько раз, все очень тщательно замеряли, детально анализировали. <br><br>Комбинация цены, отношения и скорости работы меня очень устроили. Потому что был сделан огромный физический объем работ за один день. <br>И такая серьезная штука, как автономная канализация, была запущена за 12 часов. Поэтому я очень доволен работой специалистов компании «Новое Место».

									</p>
								</div>
							</li>

							<li class="reviews-slider_item">
								<div class="reviews-slider_item_img  wow  fadeInDown">
									<img src="img/review-2.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text  wow  fadeIn">
									<div class="reviews-slider_item_resp_name">Анатолий, Одинцовский район</div>
									<h3 class="reviews-slider_item_title">«Поставили быстро, хорошо. Молодцы!»</h3>
									<p class="reviews-slider_item_text">Была проблема с канализацией. <br>Знакомые рассказали про компанию «Новое место». <br><br>Мы позвонили и поговорили с менеджером, приехал инженер, замерил, проконсультировал. <br><br>Вместе определили самый подходящий для нас септик. Поставили быстро, хорошо. Молодцы!
									</p>
								</div>
							</li>
							<li class="reviews-slider_item">
								<div class="reviews-slider_item_img  wow  fadeInDown">
									<img src="img/review-3.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text  wow  fadeIn">
									<div class="reviews-slider_item_resp_name">Андрей, Подольский район</div>
									<h3 class="reviews-slider_item_title">«Сделали они свою работу очень быстро»</h3>
									<p class="reviews-slider_item_text">В интернете нашли телефон компании «Новое место», созвонились с менеджером. <br><br>Позже инженер приехал к нам и  не только помог выбрать максимально подходящий для нас септик, но и определил  оптимальное место для установки, причем бесплатно. <br><br>Мы договорились и внесли предоплату. На следующий день приехала бригада. <br><br>Сделали они свою работу очень быстро. Грамотно выкопали котлован, поставили септик, аккуратно закопали. <br><br>Не запаха, ничего нет. Большое спасибо!
									</p>
								</div>
							</li>
                            <li class="reviews-slider_item">
								<div class="reviews-slider_item_img  wow  fadeInDown">
									<img src="img/review-1.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text  wow  fadeIn">
									<div class="reviews-slider_item_resp_name">Сергей, Раменский район</div>
									<h3 class="reviews-slider_item_title">«Спокойно привезли и установили»</h3>
									<p class="reviews-slider_item_text">Очень долго искал в интернете подходящую компанию. Находил разные компании, в каждой что-то не устраивало. Но наконец-то нашел хорошую компанию. <br><br>Обратился, назвали цену, которая очень устроила. Оплатил, плюс ко всему получил подарок. По сложившимся обстоятельствам получилось так, что забрал септик не через 3 месяца, а через 8 месяцев. <br><br>Стоит отметить, что денег за хранение не взяли. Спокойно привезли и установили. Никогда не видел, чтобы так быстро и качественно делали работу. Все очень хорошо. <br><br>Рассказал соседям, уже стоит очередь  в «Новое место».
									</p>
								</div>
							</li>
						</ul>
					</div>

					<div class="reviews-slider_wr  review-video_review  horizontal_slider">
						<ul class="js-slider  video_review">
							<li class="reviews-slider_item">
								<div class="reviews-slider_item_img">
									<img src="img/review-0.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text">
									<div class="reviews-slider_item_resp_name">Егор Кончаловский</div>
									<h3 class="reviews-slider_item_title">«Я остановился на компании «Новое Место» потому что мне очень понравилось отношение…»</h3>
									<div class="reviews-slider_item_video">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/PD4ovHriQlH8" frameborder="0" allowfullscreen></iframe>
									</div>
                                 </div>
							</li>
                            <li class="reviews-slider_item">
								<div class="reviews-slider_item_img">
									<img src="img/review-2.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text">
									<div class="reviews-slider_item_resp_name">Анатолий, Одинцовский район</div>
									<h3 class="reviews-slider_item_title">«Поставили быстро, хорошо. Молодцы!»</h3>
									<div class="reviews-slider_item_video">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/rzpokzgZILM" frameborder="0" allowfullscreen></iframe>
									</div>
                                 </div>
							</li>
							<li class="reviews-slider_item">
								<div class="reviews-slider_item_img">
									<img src="img/review-3.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text">
									<div class="reviews-slider_item_resp_name">Андрей, Подольский район</div>
									<h3 class="reviews-slider_item_title">«Сделали они свою работу очень быстро»</h3>
									<div class="reviews-slider_item_video">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/LxzEYPlziJo" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</li>
                            <li class="reviews-slider_item">
								<div class="reviews-slider_item_img">
									<img src="img/review-1.jpg" alt="">
								</div>
								<div class="reviews-slider_item_text">
									<div class="reviews-slider_item_resp_name">Сергей, Раменский район</div>
									<h3 class="reviews-slider_item_title">«Спокойно привезли и установили»</h3>
									<div class="reviews-slider_item_video">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/GXTukab69dg" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</li>
						</ul>
					</div>


				</div>
			</div>
		</div>

		<div class="section  section-map_obj  map_obj" id="map_obj">
			<div class="map_obj-header">
				<h2 class="section-title  wow  fadeInDown" data-wow-offset="0">Нашими септиками пользуются свыше 2000 клиентов</h2>
				<p class="map_obj-sub_title">На этой карте отмечены наши реальные объекты. <br> Найдите свой поселок — возможно, мы уже установили автономную канализацию Вашим соседям!</p>
			</div>

			<div class="map_obj-map" id="map" style="width:100%;height:400px;"></div>
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

			<div class="map_obj-carousel  container_960  horizontal_slider">
				<ul class="js-map_obj_carousel">
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real1.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Ермилова
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="33">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real2.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Гедина
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="144">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real3.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Неряна
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="65">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real4.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Саранского
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="96">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real5.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Годорожа
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="133">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real6.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Царева
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="110">Показать</button>
					</li>
					<li class="map_obj-carousel_item">
						<div class="map_obj-carousel_item_img">
							<img src="img/montage_real7.jpg" alt="">
						</div>
						<p class="map_obj-carousel_item_text">
							Бригада Иванова
						</p>
						<p class="map_obj-carousel_item_text">
							Установка септика
						</p>
						<button class="map_obj-carousel_item_btn  js-showonmap  hvr-shutter-in-horizontal" data-id="230">Показать</button>
					</li>
                    <li class="map_obj-carousel_item">
						
					</li>
				</ul>
			</div>

			<p class="map_obj-text">Заполните заявку и к вам приедет специалист для просчёта сметы.</p>

			<div class="map_obj-btn_wr">
				<button class="map_obj-btn  btn-blue  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Заказать бесплатный выезд</button>
			</div>

		</div>


		<div class="section  social">
			<div class="container_960">

            <table class="company_social">
                <tbody>
                    <tr>
                        <td>
                          <div id="vk_groups"></div>
                          <script type="text/javascript">
                          VK.Widgets.Group("vk_groups", {mode: 0, width: "460", height: "215", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 78454249);
                          </script>                        
                        </td>
                        <td>
                          <div id="ok_group_widget"></div>
                          <script>
                          !function (d, id, did, st) {
                            var js = d.createElement("script");
                            js.src = "https://connect.ok.ru/connect.js";
                            js.onload = js.onreadystatechange = function () {
                            if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                              if (!this.executed) {
                                this.executed = true;
                                setTimeout(function () {
                                  OK.CONNECT.insertGroupWidget(id,did,st);
                                }, 0);
                              }
                            }}
                            d.documentElement.appendChild(js);
                          }(document,"ok_group_widget","54634220748814","{width:460,height:215}");
                          </script>
                      </td>
                </tbody>
            </table>
        </div>
        </div>

	</div><!-- /main -->
    

	<div class="footer">
   

		<div class="contacts  container_960  clearfix">
			<a class="contacts-logo" href="/"><img src="img/logo.png" alt="Новое место — Инженерные системы"></a>
			<div class="contacts-data">
				Остались вопросы? Звоните!
				<br><span class="contacts-phone phone_alloka">+7 (499) 301-61-82</span>
				<br>ул. Верейская 19, бизнес-центр «Верейская плаза»
			</div>
			<div class="contacts-feedback_btn_wr">
				<button class="contacts-feedback_btn  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Получить консультацию</button>
			</div>
		</div>
		        
		<div class="footer-copy">© 2015, Новое место</div>
	</div><!-- /footer -->

	<!--noindex-->
	<div class="request">
		<div class="request-text"><strong>Алексей Нечаев</strong> <br><br>Менеджер отдела продаж</div>
		<button class="request-btn  achievement-unlock_btn  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Получить консультацию</button>
		<span class="request-close"></span>
	</div>
    <div class="request2">
		<div class="request-text2"><strong>Юрий Добровецкий</strong> <br><br>Менеджер отдела продаж</div>
		<button class="request-btn  achievement-unlock_btn  js-fancymodal" data-fancybox-href="#callback" data-target="callback" type="button">Получить консультацию</button>
		<span class="request-close"></span>
	</div>
	<!--/noindex-->
</div><!-- /wrap -->

<!--noindex-->
<div class="callback  js-callback" id="callback" style="display:none;">
	<form action="mail.php" class="form">
		<div class="form-fields">
			<div class="section-title">Узнайте специальную цену у менеджера</div>
            <div class="offer_list-item_price"><strong>Заполните форму</strong> и мы свяжемся с вами в ближайшее время</div>
			<br>
			<div class="form-row  clearfix">
				<label class="form-label" for="form_name">Ваше имя:</label>
				<input class="form-input" type="text" name="form_name" id="form_name">
			</div>
			<div class="form-row  clearfix">
				<label class="form-label" for="form_phone">Номер телефона:</label>
				<input class="form-input  js-maskphone" type="text" name="form_phone" id="form_phone">
			</div>
			<div class="form-row  clearfix">
				<label class="form-label" for="form_phone">Комментарий:</label>
				<textarea class="form-input" name="form_comment" id="form_comment"></textarea>
			</div>
			<div class="form-row  clearfix">
				<div class="form-label"></div>
				<div class="form-input">
					<button class="form-send btn-blue" data-target="mailsend" onclick="yaCounter32793735.reachGoal('mailsend'); return true;">Отправить</button>
				</div>
			</div>
		</div>
		<div class="form-status">
			<div class="form-status-big">Спасибо!</div>
			<div class="form-status-small">Ваша заявка принята. Мы перезвоним Вам в самое ближайшее время.</div>
		</div>

	</form>
</div>
<div class="achievement">
	<div class="achievement-lock">Изучайте сайт. Повышайте свой уровень знания септиков. И вас ждёт приятный сюрприз.</div>
	<div class="achievement-progress">
		<div class="achievement-label">Повышайте Ваши <br>знания о септиках</div>
		<div class="achievement-total_score">1</div>
		<div class="achievement-change_score">
			<span class="achievement-change_score_value">+1</span>
			<span class="achievement-change_score_text">к знаниям <br>о септиках</span>
		</div>
	</div>
	<div class="achievement-unlock">
		<div class="achievement-unlock_title">Поздравляем!</div>
		<div class="achievement-unlock_text">Вы многое узнали об автономных канализациях. <br> Получите 10% скидку за Ваши старания.</div>
		<button class="achievement-unlock_btn  js-fancymodal" data-fancybox-href="#callback" data-target="discount">Получить скидку</button>
		<span class="achievement-unlock-close  js-achievement-unlock-close" title="Закрыть">&times;</span>
	</div>
</div>



<!--/noindex-->


<script type="text/javascript">
	function proc(el) {
		if ( typeof yaCounter32793735 !== 'undefined' ) {
				yaCounter32793735.extLink(el.href);
		}
		setTimeout(function(){
			window.location = el.href;
		}, 350);
	}
</script>


<!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- END OF SCRIPT -->


<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 955472381;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/955472381/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body>
</html>