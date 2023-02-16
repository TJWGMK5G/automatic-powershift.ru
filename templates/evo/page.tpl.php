<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<!-- Global site tag (gtag.js) - Google Ads: 1014093726 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1014093726"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-1014093726');
</script>
<!-- Google Tag Manager clickfraud -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFMC8P4');</script>
<!-- End Google Tag Manager clickfraud-->

<meta http-equiv="content-type" content="text/html; charset=<?=$this->page_encoding; ?>" />
<title><?=$this->seoData['title']; ?></title>
<meta name="keywords" content="<?=$this->seoData['keywords']; ?>"/>
<meta name="description" content="<?=$this->seoData['description']; ?>"/>
<meta name="revisit-after" content="<?=$this->seoData['revisit-after']; ?>"/>
<meta name="author" content="<?=$this->seoData['author']; ?>"/>
<meta name="geo.country" content="<?=$this->seoData['geo.country']; ?>"/>
<meta name="geo.placename" content="<?=$this->seoData['geo.placename']; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link href="/templates/evo/style.css" rel="stylesheet" type="text/css" media="screen" />-->
<link rel="icon" href="https://automatic-moskva.ru/favicon.svg" type="image/svg+xml">

<!--Подключение иконок    -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


  <link href="/templates/evo/media.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="/templates/evo/media.css" />

<!-- фансибокс-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
<!--    отложенная загрузка изображений-->
<script src="/scripts/lazyload.js"></script>
    <style>
	img[data-src] {
		opacity: 0 !important;
	}

	img[src] {
		opacity: 1 !important;
	}
</style>

</head>

<body>
    <!-- Google Tag Manager clickfraud (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFMC8P4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager clickfraud (noscript) -->


<!-- BEGIN JIVOSITE CODE {literal} -->
    <?php if ( !isset($_SESSION['jivoLazy']) ) { ?>
		<?php $_SESSION['jivoLazy'] = 'ready'; ?>

		<script>
    		function jivoAsync()
    		{
        		if ( typeof window.jivoLazyReady === 'undefined' )
            {
            		window.jivoLazyReady = true;
              	window.jivoLazyTimeout = setTimeout(function()
                {
                  (function(){ var widget_id = 'icFYzNu2ys';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();

                  console.log('jivosite load from lazy');
                  clearTimeout(window.jivoLazyTimeout);
                },
                1000);
            }
        }

      	['mouseover','click','scroll'].forEach(function(event)
				{
          	var elm = event == 'click' ? document.getElementsByTagName('body')[0] : window;

            if ( typeof window.addEventListener === 'undefined' ) {
              elm.addEvent(event, jivoAsync);
            } else {
              elm.addEventListener(event, jivoAsync, false);
            }
				});
		</script>
<?php } else { ?>
		<script src="//code.jivosite.com/widget.js" jv-id="icFYzNu2ys" async></script>
<?php } ?>

<!--
<script >
(function(){ var widget_id = 'icFYzNu2ys';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
-->
<!-- {/literal} END JIVOSITE CODE -->

<!--    <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script defer src="../templates/evo/script.js"></script>

    <!-- <div class="null"> -->
    <header class="header">
      <div class="header-wrapper">
    <div class="container">
      <div class="header-content">
          <!-- <div class="header-content-logo"><a href="#"><img src="/pictureNEW/header/logo-re.png" alt="TEXT"></a></div> -->
          <div class="header-content-tel"><a onclick="ym(23396941,'reachGoal','clicktel'); event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74953748819"><img src="/templates/evo/images/Icon/3325016_phone_icon.svg" alt="alt"></a></div>
          <div class="header-content-logo"><a href="https://automatic-powershift.ru/index.php?page=index"><img src="/pictur/logo PS v3.png" alt="alt"></a></div>

              <ul class="header-content-list">
                  <li><a href="https://automatic-powershift.ru/index.php?page=index">Главная</a></li>
                  <li><a href="https://automatic-powershift.ru/index.php?page=remont">Ремонт</a></li>
                  <!-- <li><a href="#">Диагностика</a></li> -->
                  <li><a href="https://automatic-powershift.ru/index.php?page=servis">Обслуживание</a></li>
                  <!-- <li><a href="#">Замена</a></li> -->
                  <li><a href="https://automatic-powershift.ru/index.php?page=price">Цена</a></li>
                  <li><a href="https://automatic-powershift.ru/index.php?page=contacts">Контакты</a></li>
              </ul>
              <div class="header-content-telinfo">
              <a onclick="ym(23396941,'reachGoal','clicktel'); event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74953748819">+7 (495) 374-88-19</a>
              <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+79151508841">+7 (915) 150-88-41</a>
              </div>
              <input type="checkbox" id="menu_checkbox">
                  <label for="menu_checkbox" class="menu_checkbox_label">
                      <div></div>
                      <div></div>
                      <div></div>
                  </label>
          </div>
      </div>
  </div>
  </div>
</header>

                  <main class="main">
                    <div class="container">
        <div class="main-content-info">
          <h1 class="main-content-info-title">Ремонт PowerShift</h1>
          <h2 class="main-content-info-subtitle">Сеть специализированных сервисов по ремонту и обслуживанию PowerShift</h2>
          <div class="row">
            <div class="col-xl-5 col-md-12">
              <div class="main-content-info-tel">
                <ul class="main-content-info-tel-list">
                  <li><a onclick="ym(23396941,'reachGoal','clicktel'); event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74953748819">+7 (495) 374-88-19 </a><br></li>
                  <li>
                    <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74996537188">+7 (499) 653-71-88  </a>(24ч)<br>
                  </li>
                  <li><a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+79151508841">+7 (915) 150-88-41  </a>(МТС)<br></li>
                  <li>
                    <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:88003337152">8 (800) 333-71-52 </a>(Для регионов)<br>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-5 col-md-12">
              <div class="main-content-info-display">
              <div class="main-content-info-display-bottom">
                <a class="whatsapp" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://wa.me/79151508841" target="_blank"><img alt="Ремонт вариатора"
                    src="../templates/evo/images/Icon/wh132.png"/></a>

                  <a class="viber" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="viber://chat?number=79151508841" target="_blank"><img alt="Ремонт ДСГ"
                      src="../templates/evo/images/Icon/vb132.png"/></a>
                    </div>
                      <div class="main-content-info-display-bottom">
                  <a class="telegram" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://t.me/RemontAKPP" target="_blank"><img alt="Ремонт АКПП"
                      src="../templates/evo/images/Icon/tg132.png" /></a>
                  <a class="applechat"
                    onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://bcrw.apple.com/sms:open?service=iMessage&recipient=urn:biz:5e6cadc4-da68-451c-b6e9-f6eaac913b48" target="_blank"><img
                      alt="Ремонт вариаторов" src="../templates/evo/images/Icon/ime132.png" /></a>
                </div>

              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
      <div class="main-block-offer">
        <div class="container">
          <div class="row">
            <div class="col-3 col-md-4 col-sm-6 col-xs-12">
        <a href="#adress" class="main-block-offer-price">
          <img src="/pictur/2023-01-28_13-32-53.png" alt="Ремонт акпп, вариаторов, ДСГ" />
          <div class="main-block-offer-link1" data-href="index.php?page=region_akpp">Наши подразделения
          </div>
        </a>
      </div>
      <div class="col-3 col-md-4 col-sm-6 col-xs-12">
        <a href="#" class="main-block-offer-price">
          <img src="/pictur/5e193634-0ae4-4873-b84e-3d49bd3f05db.jpg" alt="Ремонт акпп, вариаторов, ДСГ" />
          <div class="main-block-offer-link1" data-href="index.php?page=region_akpp">Профильный сервис
          </div>
        </a>
      </div>
      <div class="col-3 col-md-4 col-sm-6 col-xs-12">
        <a href="#" class="main-block-offer-price">
          <img src="/pictur/XXXL.jpg" alt="Ремонт акпп, вариаторов, ДСГ" />
          <div class="main-block-offer-link1" data-href="index.php?page=region_akpp">Открытая ремзона
          </div>
        </a>
      </div>
      <div class="col-3 col-md-4 col-sm-6 col-xs-12">
        <a href="#" class="main-block-offer-price">
          <img src="/pictur/157257c7-37ef-47c5-bf0a-60ca86138570.jpg"  alt="Ремонт акпп, вариаторов, ДСГ" />
          <div class="main-block-offer-link1" data-href="index.php?page=prais">Современное оборудование
          </div>
        </a>
      </div>
      </div>
      </div>
        </div>

                            <?=$this->content;?>

     <div class="main-content-info-title"><div class="container"><h2>Сеть специализированных сервисов по ремонту и обслуживанию роботизированных коробок PowerShift</h2>  </div></div>
      <div class="main-info">
        <div class="container">
          <div class="main-info-contact">
            <div class="row">
              <div class="col-4 col-md-12">
                <div class="main-info-contact-num">
                  <div class="main-info-contact-num-title">
                    Эвакуация на охраняемую, бесплатную парковку Техцентра круглосуточно.
                  </div>
                  <div class="main-info-contact-num-text">
                    <div class="main-info-contact-num-text-margin">
                      <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74953748819">+7 (495) 374-88-19</a><br>

                    </div>
                      <div class="main-info-contact-num-text-margin">
                      <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:88003337152">8 (800) 333-71-52</a> (для звонков из
                      регионов)<br>
                    </div>
                    <div class="main-info-contact-num-text-margin">
                      <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+74996537188">+7 (499) 653-71-88 </a>(круглосуточно)<br>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-4 col-md-12">
                <div class="main-info-contact-display">
                <div class="main-location-contact-display-bottom">
                  <a class="whatsapp" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://wa.me/79151508841" target="_blank"><img alt="Ремонт вариатора"
                      src="../templates/evo/images/Icon/wh132.png" /></a>

                    <a class="viber" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="viber://chat?number=79151508841" target="_blank"><img alt="Ремонт ДСГ"
                        src="../templates/evo/images/Icon/vb132.png" /></a>
</div>
                        <div class="main-location-contact-display-bottom">
                    <a class="telegram" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://t.me/RemontAKPP" target="_blank"><img alt="Ремонт АКПП"
                        src="../templates/evo/images/Icon/tg132.png" /></a>
                    <a class="applechat" onclick="yaCounter23396941.reachGoal('social'); ga('send', 'event', 'request', 'social');" href="https://bcrw.apple.com/sms:open?service=iMessage&recipient=urn:biz:5e6cadc4-da68-451c-b6e9-f6eaac913b48" target="_blank"><img
                        alt="Ремонт вариаторов" src="../templates/evo/images/Icon/ime132.png" /></a>
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-12">
                <div class="main-info-contact-network">
                  <div class="main-info-contact-network-text">
                    Сеть специализированных сервисов по ремонту и обслуживанию роботизированных коробок PowerShift Автоматик-Москва.
                    Консультация и запись 24/7:</div>
                  <div class="main-info-contact-network-tel">

                    <div class="main-info-contact-network-tel-margin"> <a onclick="ym(23396941,'reachGoal','clicktel');  event.stopPropagation(); window.event.cancelBubble = true; ga('send', 'event', 'request', 'tel');" href="tel:+79151508841" target="_blank">+7 (915) 150-88-41</a> (МТС, Telegram; WhatsApp;
                      Viber)<br></div>    <p><a id="adress"></a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="borderline"></div>
          </div>
        </div>
      </div>

      <div class="main-adress">
        <div class="container">
          <div class="main-margin">
            <div class="main-adress-title">Восточный АО:</div>
            <div class="main-adress-text">
            <ul>
              <li>ул. Амурская д.7 стр.1 (ст.м. Щелковская);</li>
              <!-- <li>ул. Дворникова д.7 (ст.м. Лефортово);</li>
              <li>Старообрядческая улица, 28Ас1 (ст.м. Авиамоторная);</li> -->
              <li>г.Люберцы, ул. Смирновская д.30 (ст.м. Жулебино, Котельники);</li>
            </ul>
              </div>
          </div>
          <div class="main-margin">
            <div class="main-adress-title">Юго-Восточный и Южный АО:</div>
            <div class="main-adress-text">
            <ul>
              <li>Каширское шоссе д.41 (ст.м. Кантемировская-Каширская) ;</li>
              <li>ул. Москворечье д.12 с.2 (ст.м. Кантемировская);</li>
                <li> Ул.Дорожная д.21А (cт.м.Аннино, Лесопарковая);</li>
              <!-- <li> 33-й киллометр МКАД вл.10 (Варшавсое шоссе 170Г) (cт.м.Аннино, Лесопарковая);</li>
              <li> Россия, Московская область, Ленинский городской округ, садовое товарищество Берёзка-2, 238 (ст.м.
              Красногвардейская);</li>
                      <li>Симферопольское шоссе д.3;</li> -->

            </ul>
               </div>
          </div>
          <div class="main-margin">
            <div class="main-adress-title">Юго-Западный и Западный АО:</div>
            <div class="main-adress-text">
            <ul>
              <!-- <li>Верейская улица, 29с35 (ст. м. Кунцевская);</li> -->
              <li>Ул. Василисы Кожиной владение 7А (ст. м. Фили, Славянский бульвар, Парк Победы);</li>
              <!-- <li>Ул. Дмитрия Ульянова д.20 (ст. м. Академическая);</li>
              <li>Можайское шоссе д.159 корп. 9;</li> -->
            </ul>
              </div>
          </div>
          <div class="main-margin">
            <div class="main-adress-title">Северо-Западный и Северный АО:</div>

            <div class="main-adress-text">
            <ul>
              <li>ул. Добролюбова д.1 с.5 (ст.м. Дмитровская);</li>
              <li>ул. Комдива Орлова д.3 (ст.м. Петровско-Разумовская);</li>
              <li>ул. 1-я Магистральная д.12 (ст.м.Хорошёвская, Зорге);</li>
              <li>4-й Лихачевский пер. д.2 стр.3 (ст.м. Лихоборы);</li>
              <li>ул. Беломорская д.40 с.18 (ст.м. Беломорская, Речной вокзал, Ховрино);</li>
              <!-- <li>4-й Лихачевский пер. д.3 стр.2 (ст.м. Лихоборы);</li>
              <li>Пятницкое шоссе д.20 (ст. м. Митино);</li>
              <li> г. Химки, Шереметьевское шоссе д.2 (аэропорт Шереметьево);</li> -->
            </ul>
              </div>
          </div>
          <!-- <div class="main-margin">
            <div class="main-adress-title">Северо-Восточный АО:</div>
            <div class="main-adress-text">
            <ul>
              <li>Мытищи, Хлебозаводская улица, 6 ;</li>
              <li>Ярославское шоссе д.26 (ст.м. Свиблово);</li>
              <li>Большая Почтовая д.36 с.2 (ст.м. Электрозаводская);</li>
            </ul>
              </div>
          </div> -->
            <div class="main-margin">
                <div class="main-adress-title"><div class="main-location-map"><a  href="http://akpp-neva.ru/">Адреса в Санкт-Петербурге</a>  <br><br></div></div>

          </div>
        </div>
      </div>
 <div class="map-center"><div class="col-xl-4 col-l-7 col-md-12"><div class="main-location-map"><div  class="container map-style">
 <div onclick="yaCounter23396941.reachGoal('clickmap');  event.stopPropagation(); window.event.cancelBubble = true;  ga('send', 'event', 'request', 'map');" class="alig">
                  <a target="_blank" href="index.php?page=maps"><img src="../templates/evo/images/Icon/229.png" alt="Карта ремонт акпп" /></a>
                        <a href="index.php?page=maps" target="_blank">(Для активации карты нажмите на неё)</a></div>
     </div>
    </div>
  </div>
</div>
 <div class="main-block-info">
        <div class="container">
        <div class="borderline"></div>
      <span>
      <strong> Сегодняшний уровень оснащения и квалификации позволяет нам устранять поломки любой сложности.
Звоните – мы уверены, что после подробной консультации, у Вас не останется неразрешенных вопросов.</strong>
      </span>

    </div>

</div>
 </main>

</div>

			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>


    <footer class="footer">
    <div class="container">
      <div class="footer-logo">
<!--
        <a onclick="ym(23396941,'reachGoal','social1'); ga('send', 'event', 'request', 'social');" target="_blank" href="https://instagram.com/remont_akpp_automatic"><img src="../templates/evo/images/Icon/IM.png"
            alt="Автосервис по АКПП"></a>
-->
        <a onclick="ym(23396941,'reachGoal','social1'); ga('send', 'event', 'request', 'social');" target="_blank" href="https://ok.ru/group/57864030847193"><img src="../templates/evo/images/Icon/ok.png"
            alt="Автосервис по Вариаторам"></a>
        <a onclick="ym(23396941,'reachGoal','social1'); ga('send', 'event', 'request', 'social');" target="_blank" href="https://vk.com/remont_akpp_automatic"><img src="../templates/evo/images/Icon/VK.png"
            alt="Автосервис по ДСГ"></a>
<!--
        <a onclick="ym(23396941,'reachGoal','social1'); ga('send', 'event', 'request', 'social');" target="_blank" href="https://www.facebook.com/remont.akpp.automatic"><img src="../templates/evo/images/Icon/FB.png"
            alt="Автосервис по PowerShift"></a>
-->
        <a onclick="ym(23396941,'reachGoal','social1'); ga('send', 'event', 'request', 'social');" target="_blank" href="https://www.youtube.com/channel/UCASnzzQrvOhFk1koAfaKQTw"><img
            src="../templates/evo/images/Icon/yt.png" alt="Автосервис по ремонту акпп"></a>
      </div>

      <div class="footer-avtomatic">Автоматик-Москва: ремонт ркпп PowerShift 1997 - 2023</div>
    </div>
  </footer>


<!-- Yandex.Metrika counter -->
<script >
var yaParams = {/*Здесь параметры визита*/};
</script>

<!-- Yandex.Metrika counter -->
<script  >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(23396941, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/23396941" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75493202-1', 'auto');
  ga('send', 'pageview');

</script>



<script>
 function downloadJSAtOnload() {
   var element = document.createElement("script");
   element.src = "https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js";
   document.body.appendChild(element);
 }
 if (window.addEventListener)
   window.addEventListener("load", downloadJSAtOnload, false);
 else if (window.attachEvent)
   window.attachEvent("onload", downloadJSAtOnload);
 else window.onload = downloadJSAtOnload;
</script>

    <noscript>

	<style>
		img[data-src] {
			display: none !important;
		}
	</style>

</noscript>

<script>
	let images = document.querySelectorAll("img");

	lazyload(images);
</script>

<script>
  // BURGER-MENU
$('.menu_checkbox_label').click(function () {
  $('.header').toggleClass('header-burger')
  $('body').toggleClass('body-hidden')
  $('.header-content-telinfo').toggleClass('header-content-telinfo-visible')
  $('.header-content-list').toggleClass('header-content-list-burger')
  $('.body-hidden').removeClass("header-burger")
  $('.header-content-logo').toggleClass('header-content-logo-hidden')
  $('.container-wrap').toggleClass('container-wrap-hidden')
  $('.footer').toggleClass('container-wrap-hidden')
  $('.main-content-info-tel-list').toggleClass('container-wrap-hidden')
  $('.main-content-info-display').toggleClass('container-wrap-hidden')
  $('.main-addinfo-section-addresses').toggleClass('container-wrap-hidden')
  $('.main-block-offer').toggleClass('container-wrap-hidden')
  $('.main-block-text').toggleClass('container-wrap-hidden')
  $('.main-block-info').toggleClass('container-wrap-hidden')
  $('.main-block-reviews').toggleClass('container-wrap-hidden')
  $('.main-block-media').toggleClass('container-wrap-hidden')
  $('.main-block-adress').toggleClass('container-wrap-hidden')
  $('.main-block-offer').toggleClass('container-wrap-hidden')
  $('.main-location').toggleClass('container-wrap-hidden')
  $('.main-block-2').toggleClass('container-wrap-hidden')
  $('.main-block-3').toggleClass('container-wrap-hidden')
  $('.main-block-4').toggleClass('container-wrap-hidden')
  $('.main-block-5').toggleClass('container-wrap-hidden')
  $('.main-block-offer').toggleClass('container-wrap-hidden')
  $('.main-info-contact').toggleClass('container-wrap-hidden')
  $('.main-adress-title').toggleClass('container-wrap-hidden')
  $('.main-location-map').toggleClass('container-wrap-hidden')
  $('.header-content-tel').toggleClass('header-content-tel-hidden')

})

const checkId = document.getElementById('menu_checkbox')

$("body").click(function (e) {
  if(e.target.classList.value === "container") {
    $('.header').removeClass('header-burger')
    $('body').removeClass('body-hidden')
    $('.header-content-list').removeClass('header-content-list-burger')
    $('.body-hidden').removeClass("header-burger")
    $('.header-content-logo').removeClass('header-content-logo-hidden')
    $('.container-wrap').removeClass('container-wrap-hidden')
    $('.footer').removeClass('container-wrap-hidden')
    checkId.checked = false
  }
})
</script>

</body>
</html>