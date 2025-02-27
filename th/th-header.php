<?php
// th-header.php
?>
	<link rel="shortcut icon" type="image/svg+xml" href="/favicon.svg"/>

	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.modal.min.css"/>
	<link rel="stylesheet" type="text/css" href="/css/intlTelInput.css"/>
	<link rel="stylesheet" href="/uikit/uikit.min.css" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="FMF เป็น บริษัท SEO ที่ให้บริการ SEO ครบวงจรในกรุงเทพฯ และทั่วประเทศไทย มีความเชี่ยวชาญในการวางกลยุทธ์เพื่อเพิ่มการมองเห็นเว็บไซต์และนำ Traffic คุณภาพสู่ธุรกิจของคุณ สอบถามเพิ่มเติมได้ที่ (+66) 083-788-4484">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

	<script src="/js/lottie.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="/slick/slick.min.js"></script>
	<script src="/js/jquery.inputmask.bundle.min.js"></script>
	<script src="/js/jquery.modal.min.js"></script>
	<script src="/js/jquery.inputmask-multi.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/intl-tel-input/intlTelInput-jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

	<script src="/uikit/uikit.min.js"></script>

	<script>
	$(document).ready(function () {
		function get_name_browser() {
			var ua = navigator.userAgent;
			if (ua.search(/Chrome/) > 0) return 'Chrome';
			if (ua.search(/Firefox/) > 0) return 'Firefox';
			if (ua.search(/Opera/) > 0) return 'Opera';
			if (ua.search(/Safari/) > 0) return 'Safari';
			if (ua.search(/MSIE/) > 0) return 'IE';
			return false;
		}
		if (get_name_browser() == "Chrome") {
			var style = document.createElement('style');
			style.innerHTML = '@media screen and (min-width: 1200px) { .overlay .header-top .right-menu { padding-right: 1.1%; } }';
			document.querySelector('head').appendChild(style);
		}
		if (get_name_browser() == "Firefox") {
			var style = document.createElement('style');
			style.innerHTML = '.index-flex-portfolio { height: 100% !important; max-height: 100px !important; } @media screen and (min-width: 1200px) { .overlay .header-top .right-menu { padding-right: 1.1%; } .reviews-block .reviews-swiper { height: 376px !important; } } @media screen and (max-width: 1380px) { .reviews-block .reviews-swiper { height: 424px !important; } }';
			document.querySelector('head').appendChild(style);
		}
		if (get_name_browser() == "Safari") {
			var style = document.createElement('style');
			style.innerHTML = '.offer-item .offer-lottie { max-height: 200px; } @media screen and (min-width: 1024px) { .index-first-block .lottie-item-index { width: 100%; } .first-block.seo .lottie-index .lottie-item-index { width: 100%; max-height: 500px; } .lottie-full-engagement { height: 150px; } .lottie-regularly-showing-results { height: 150px; } .lottie-always-staying-in-touch { height: 150px; } .lottie-control-transparency { height: 150px; } } @media screen and (max-width: 1024px) { .index-first-block .lottie-item-index { width: 100%; } }';
			document.querySelector('head').appendChild(style);
		}
	});
	</script>

	<script>
	var controller = new ScrollMagic.Controller();
	</script>
	<!-- Google Tag Manager (keep only GTM-T9BZ89Q) -->
	<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
	var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
	j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T9BZ89Q');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript">
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){
			(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for(var j = 0;j<document.scripts.length;j++){
				if(document.scripts[j].src===r){return;}
			}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0];
			k.async=1;k.src=r;a.parentNode.insertBefore(k,a)
		})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
		ym(49379494, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true
		});
	</script>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BZ89Q" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/49379494" style="position:absolute; left:-9999px;" alt=""></div>
	</noscript>

	<header class="bx-header">
		<div class="top-menu default">
			<div class="wrap_container">
				<div class="header-top">
					<div class="left-menu">
						<div class="logo-fmf">
							<a href="/th/">
								<img class="logo-light" src="/img/logo-fmf-light.svg">
								<img class="logo-dark" src="/img/logo-fmf.svg">
							</a>
						</div>
						<div class="root-item">
							<a href="/th/">หน้าแรก
							<img src="/img/header-arrow-light.svg"></a>
						</div>
					</div>
					<div class="right-menu">
						<div class="block-menu">
							<ul>
								<li><a href="/th/our-work/">ผลงานของเรา</a></li>
								<li><a href="/th/reviews/">ลูกค้า & รีวิว</a></li>
								<li><a href="/th/about/">เกี่ยวกับเรา</a></li>
								<li><a href="/th/contacts/">ติดต่อ</a></li>
							</ul>
						</div>
						<div class="switch-lang">
							<?php
							$arBreadCrumbs = [
							    // ...
							];
							require_once($_SERVER['DOCUMENT_ROOT'] . '/include/switch-lang.php');
							?>
						</div>
						<a href="#feedback" rel="modal:open" class="button feedback">ส่งคำขอ</a>
						<div class="burger js-burger-mob">
							<div class="burger-icon-menu"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
