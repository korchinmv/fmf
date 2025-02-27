<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creating a web-service HPromise to provide users with a catalog of used Hyundai cars</title>
    <link rel="shortcut icon" type="image/svg+xml" href="/favicon.svg"/>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.modal.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/intlTelInput.css"/>
    <!--<link rel="stylesheet" href="/uikit/uikit.css" />-->
    <link rel="stylesheet" href="/uikit/uikit.min.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    
    <!-- UIkit JS -->
    <!--<script src="/uikit/uikit.js"></script>-->
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T9BZ89Q');</script>
    <!-- End Google Tag Manager -->
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(49379494, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true
		});
		</script>
	<!-- /Yandex.Metrika counter -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KSTDN7TT');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSTDN7TT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<noscript><div><img src="https://mc.yandex.ru/watch/49379494" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BZ89Q"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="bx-header">
        <div class="top-menu default">
            <div class="wrap_container">
                <div class="header-top">
                    <div class="left-menu">
                        <div class="logo-fmf">
                            <a href="/">
                                <img class="logo-light" src="/img/logo-fmf-light.svg">
                                <img class="logo-dark" src="/img/logo-fmf.svg">
                            </a>
                        </div>
                        <div class="root-item">
                            <a>Services & Prices
                            <img src="/img/header-arrow-light.svg"></a>
                        </div>
                    </div>
                    <div class="right-menu">
                        <div class="block-menu">
                            <ul>
                                <li><a href="/our-work/">Our Work</a></li>
                                <li><a href="/reviews/">Reviews</a></li>
                                <li><a href="/about/">About Us</a></li>
                                <li><a href="/contacts/">Contact</a></li>
                            </ul>
                        </div>
                        <div class="switch-lang">
                            <!--<img class="switch-lang-light" src="/img/switch-lang-light.svg">
                            <img class="switch-lang-dark" src="/img/switch-lang.svg">
                            <div class="case-lang">
                                <div class="lang-wrapper">
                                    <div class="text-lang1 front-link">En</div>
                                    <div class="text-lang2 back-link">Th</div>
                                </div>
                            </div>-->
                        </div>
                        <a href="#feedback" rel="modal:open" class="button feedback">Send Request</a>
                        <div class="burger js-burger-mob">
                            <div class="burger-icon-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="top-sub-menu">
        <div class="wrap_container">
            <div class="sub-menu-items">
                <div class="sub-menu-item">
                    <div class="items-number">
                        <div class="item-number"></div>
                        <div class="item-number">01</div>
                    </div>
                    <div class="item-title"><a href="/seo/">SEO</a><img class="img" src="/img/company-arrow-dark.svg"></div>
                    <div class="item-arrow"></div>
                </div>
                <div class="sub-menu-item">
                    <div class="items-number">
                        <div class="item-number"></div>
                        <div class="item-number">02</div>
                    </div>
                    <div class="item-title"><a href="/context-ad/">Contextual Ad</a><img class="img" src="/img/company-arrow-dark.svg"></div>
                    <div class="item-arrow"></div>
                </div>
                <div class="sub-menu-item">
                    <div class="items-number">
                        <div class="item-number"></div>
                        <div class="item-number">03</div>
                    </div>
                    <div class="item-title">
                        <a href="/social-media-ad/">Social Media</a>
                        <img class="img" src="/img/company-arrow-dark.svg">
                    </div>
                    <div class="item-arrow"></div>
                </div>
                <div class="sub-menu-item">
                    <div class="items-number">
                        <div class="item-number"></div>
                        <div class="item-number">04</div>
                    </div>
                    <div class="item-title"><a href="/analytics/">Analytics</a><img class="img" src="/img/company-arrow-dark.svg"></div>
                    <div class="item-arrow"></div>
                </div>
                <div class="sub-menu-item">
                    <div class="items-number">
                        <div class="item-number"></div>
                        <div class="item-number">05</div>
                    </div>
                    <div class="item-title"><a href="/development/">Development</a><img class="img" src="/img/company-arrow-dark.svg"></div>
                    <div class="item-arrow"></div>
                </div>
            </div>
            <div class="sub-menu-bottom">
                <div class="menu-mail">
                    <div class="menu-mail-empty"></div>
                    <a href="mailto:info@fmf.co.th" class="icon-mail"><img src="/img/icon-mail.svg">info@fmf.co.th</a>
                </div>
                <div class="menu-tel">
                    <a href="tel:+660970346625" class="icon-tel"><img src="/img/icon-tel.svg" alt="">(+66) 097-034-6625</a>, <a href="tel:(+66) 083-788-4484">(+66) 083-788-4484</a>
                </div>
                <div class="menu-social">
                    <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img src="/img/line-it.svg">LINE it!</a>
                    <!--<a href="#"><img src="/img/button-line.png"></a>-->
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-nav-mobile">
        <div class="wrap_container">
            <ul class="nav-list-mobile menu-mobile">
                <li><a href="/seo/">SEO</a></li>
                <li><a href="/context-ad/">Contextual Ad</a></li>
                <li><a href="/social-media-ad/">Social Media</a></li>
                <li><a href="/analytics/">Analytics</a></li>
                <li><a href="/development/">Development</a></li>
            </ul>
            
            <ul class="nav-list-mobile sub-menu-mobile">
                <li><a href="/our-work/">Our Work</a></li>
                <li><a href="/reviews/">Reviews</a></li>
                <li><a href="/about/">About Us</a></li>
                <li><a href="/contacts/">Contact</a></li>
            </ul>
            
            <div class="list-mobile-contact">
				<a href="mailto:info@fmf.co.th" class="icon-mail"><img class="img-icon-mail" src="/img/icon-mail.svg">info@fmf.co.th</a>
				<a href="tel:+660970346625" class="icon-tel"><img class="img-icon-tel" src="/img/icon-tel.svg" alt="">(+66) 097-034-6625</a>
				<a href="tel:+660837884484" class="icon-tel phone-second">(+66) 083-788-4484</a>
				<a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img src="/img/line-it.svg">LINE it!</a>
				<!--<a href="#"><img class="img-icon-line" src="/img/button-line.png"></a>-->
			</div>
        </div>
    </div>

    <main id="case__detailed" class="case">
        <div class="case__banner" style="background-image: url(/img/hpromise-first-screen.jpg);">
            <div class="case__banner-overlay">
                <div class="wrap_container">
                    <div class="case__banner-iner">
                        <div class="case__banner-breadcrumbs">
                            <ul class="breadcrumbs__list">
                                <li><a href="/">Home</a></li>
                                <li><a href="/our-work.html">Our Work</a></li>
                                <li>H-Promise trading platform</li>
                            </ul>
                        </div>
                        <h1 class="case__title">Creating a web-service HPromise to provide users with a catalog of used Hyundai cars</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="case__property">
            <div class="wrap_container">
                <ul class="case__property-list">
                    <li class="case__property-item">
                        <div class="case__property-name">Customer</div>
                        <div class="case__property-more">
                            <div class="case__property-text">“Hyundai Motor” is the distributor of South Korea car manufacturer «Hyundai Motor Company». The leading positions of Hyundai in the national automobile market are mainly achieved due to “Hyundai Motor”.</div>
                            <div class="case__property-img"><img src="/img/brands/hyundai-2.svg" alt="H-Promise"></div>
                        </div>
                    </li>
                    <li class="case__property-item">
                        <div class="case__property-name">Goals</div>
                        <div class="case__property-more">
                            <div class="case__property-text">
                                <ul class="_list">
                                    <li>To increase sales of automobiles by H-Promise programme;</li>
                                    <li>To increase customers’ involvement in the trade-in mechanism;</li>
                                    <li>To automatize reporting on H-Promise programme and trade-in mechanism.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="case__property-item">
                        <div class="case__property-name">Tasks</div>
                        <div class="case__property-more">
                            <div class="case__property-text">
                                <ul class="_list">
                                    <li>To provide a customer with the catalogue on cars with mileage all over Thailand;</li>
                                    <li>To provide a customer with an opportunity to put a request for evaluating his/her car for sale without leaving their houses;</li>
                                    <li>To provide a dealer with an opportunity to enlarge the catalogue on cars with mileage;</li>
                                    <li>To provide a dealer with an opportunity to instantly get requests for evaluating a customer’s car for sale;</li>
                                    <li>To create the system of automatic reports on H-promise programme and Trade-in mechanism.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="case__property-item">
                        <div class="case__property-name">Solution</div>
                        <div class="case__property-more">
                            <div class="case__property-text">Creating a web-service HPromise</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="case__content">
            <div class="wrap_container">
                <div class="case__content-inner">
                    <ul class="case__content-list">
                        <li class="case__content-item">
                            <h2>Service description</h2>
                            <div class="case__content-more">
                                <div class="case__content-more-wraper">
                                    <img src="/img/cases/hpromise-1.jpg" alt="">
                                    <p class="_mt-40">After thorough testing, website optimization and marketing strategy, we provide technical support for the website and recommendations for website 
                                        improvement in accordance with client's requirements and market changes.</p>
                                </div>
                            </div>
                        </li>
                        <li class="case__content-item">
                            <h2>Content</h2>
                            <div class="case__content-more">
                                <div class="case__content-more-wraper">
                                    <div class="case__content-section">
                                        <h3>Customer’s Interface</h3>
                                        <p class="_bold _mb-30">H-Promise Programme</p>
                                        <div class="case__content-img _mb-30">
                                            <img src="/img/cases/hpromise-2.jpg" alt="">
                                        </div>
                                        <p>A customer can find an automobile certified by H-Promise programme all over Thailand by filtering prices, mileage, automobile characteristics. 
                                            The service provides a possibility to compare indicators of several cars with one another.</p>
                                        <p>The service allows a customer to ask a dealer, to book a car or plan its test-drive.</p>
                                        <p>The service contains a Credit calculator for a customer to count loan terms:</p>
                                        <ul class="_list">
                                            <li>To choose the sum of his/her first payment;</li>
                                            <li>To define the loan period.</li>
                                        </ul>
                                        <p>To choose a bank in the list of banks – Hyundai partners. A customer can print out a loan agreement for each bank or send it to e-mail.</p>
                                        <p class="_bold _mb-30">Trade-in Mechanism</p>
                                        <div class="case__content-img _mb-30">
                                            <img src="/img/cases/hpromise-3.jpg" alt="">
                                        </div>
                                        <p class="_mb-30">A customer can send online data on his/her automobile to be evaluated. To do that it is necessary to indicate:</p>
                                        <ul class="_list">
                                            <li>A dealer;</li>
                                            <li>Contact data;</li>
                                            <li>Information on the automobile.</li>
                                        </ul>
                                        <p class="_mt-30">The data to be evaluated will be automatically sent to the dealer.</p>
                                    </div>
                                    <div class="case__content-section">
                                        <h3>Dealer’s Interface</h3>
                                        <p>Each dealer can put automobiles for sale by H-Promise programme:</p>
                                        <ul class="_list">
                                            <li>Manually (file upload - xml+jpg, xls+jpg, zip);</li>
                                            <li>Automatically (SOAP or POST protocols).</li>
                                        </ul>
                                        <p>Using his/her personal account dealer can work with:</p>
                                        <ul class="_list">
                                            <li>Evaluation requests;</li>
                                            <li>Booking a purchase;</li>
                                            <li>Customers’ questions.</li>
                                        </ul>
                                    </div>
                                    <div class="case__content-section">
                                        <h3>Distributor’s interface</h3>
                                        <p>The service provides a distributor with the module depicting reports that can be uploaded.</p>
                                        <p>Report list:</p>
                                        <ul class="_list">
                                            <li>Dealers’ activity in updating portal data;</li>
                                            <li>Total number of automobiles on sale;</li>
                                            <li>The number of sold automobiles with mileage within the period;</li>
                                            <li>Total number of automobile in stock;</li>
                                            <li>Statistics on upload errors made by dealers;</li>
                                            <li>Statistics on requests processed by a dealer;</li>
                                            <li>Statistics on customers’ viewing automobiles on the portal;</li>
                                            <li>An average sale price for an automobile with mileage;</li>
                                            <li>An average purchase price for an automobile with mileage;</li>
                                            <li>Revenue from selling automobiles with mileage;</li>
                                            <li>Gross profit;</li>
                                            <li>Efficiency;</li>
                                            <li>Automobile share on sales;</li>
                                            <li>Warehouse turnover in months;</li>
                                            <li>An average cost per one automobile on sale;</li>
                                            <li>Profit percentage on investments;</li>
                                            <li>Changing an automobile price in the sale process;</li>
                                            <li>Cars sold (payment justifications).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="case__content case-section case__content--white">
            <div class="wrap_container">
                <div class="case__content-inner">
                    <ul class="case__content-list">
                        <li class="case__content-item">
                            <h2 class="_mt-0">Results</h2>
                            <div class="case__content-more">
                                <div class="case__content-more-wraper">
                                    <div class="case__content-section">
                                        <div class="case-result case-result-top">
                                            <div class="case-result__item">
                                                <div class="case-result__title">
                                                    <span>300</span>
                                                    <span class="case-result__small">/month</span>
                                                </div>
                                                <div class="case-result__text">
                                                    Average number of sales through the service
                                                </div>
                                            </div>
                                            <div class="case-result__item">
                                                <div class="case-result__title">
                                                    <span>800</span>
                                                    <span class="case-result__small">/month</span>
                                                </div>
                                                <div class="case-result__text">
                                                    Average number of requests through the portal
                                                </div>
                                            </div>
                                            <div class="case-result__item">
                                                <div class="case-result__title">
                                                    <span>8h</span>
                                                    <svg width="31" height="15" viewBox="0 0 31 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M30.7071 8.2071C31.0976 7.81658 31.0976 7.18341 30.7071 6.79289L24.3431 0.42893C23.9526 0.0384057 23.3195 0.0384058 22.9289 0.42893C22.5384 0.819455 22.5384 1.45262 22.9289 1.84314L28.5858 7.5L22.9289 13.1569C22.5384 13.5474 22.5384 14.1805 22.9289 14.5711C23.3195 14.9616 23.9526 14.9616 24.3431 14.5711L30.7071 8.2071ZM8.74228e-08 8.5L30 8.5L30 6.5L-8.74228e-08 6.5L8.74228e-08 8.5Z" fill="#707070"/>
                                                    </svg>
                                                    <span>1h</span>
                                                </div>
                                                <div class="case-result__text">
                                                    Reduced time spent on collecting reports
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>




    <div class="feedback-block">
        <div class="wrap_container">
            <h2>Let's discuss your next project</h2>
            <div class="feedback-items">
                <div class="feedback-form-item">
                    <form class="feedback-form">
						<div class="form-content">
							<div class="form-field">
								<label>Your name*</label>
								<input name="name" required placeholder="What is your name?">
							</div>
							<div class="form-field">
								<label>E-mail*</label>
								<input type="email" name="email" required placeholder="E-mail address">
							</div>
							<div class="form-field">
								<label>Phone*</label>
								<input name="phone" class="phone_mask" required placeholder="Contact phone number">
							</div>
							<div class="form-field">
								<label>Site address*</label>
								<input name="site" required placeholder="https://">
							</div>
							<div class="form-field">
								<label>Services of interest*</label>
								<div class="select-list">
									<div class="select-item-selected">
										<input name="service" placeholder="SEO, contextual advertising" readonly>
										<div class="item-arrow">
											<span class="arrow-down"></span>
										</div>
									</div>
									<div class="select-items">
										<div class="select-item"><input value="SEO">SEO</div>
										<div class="select-item"><input value="Contextual Ad">Contextual Ad</div>
										<div class="select-item"><input value="Social Media">Social Media</div>
										<div class="select-item"><input value="Analytics">Analytics</div>
										<div class="select-item"><input value="Development">Development</div>
										<div class="select-item"><input value="Other">Other</div>
									</div>
								</div>
							</div>
							<div class="form-field">
								<label>Age of site</label>
								<div class="form-field-age">
									<div class="line-status"></div>
									<label><span><1</span><input class="first-input" type="radio" name="age" value="<1"></label>
									<label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
									<label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
									<label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
									<label class="label-last"><span>>10</span><input type="radio" name="age" value=">10"></label>
								</div>
							</div>
						</div>
						<div class="form-info check">
							<input class="check-agree" type="checkbox" checked>
							<p>By clicking the "Send Request" button, I agree to the <a href="/privacy_policy.pdf" target="_blank" class="form__link link--download">personal data processing policy</a></p>
						</div>
						<div class="feedback-bottom">
							<div class="feedback-bottom__captcha">
								<div id="feedback-captcha-2"></div>
							</div>
							<div class="feedback-bottom__btn">
								<button type="submit" class="form-btn btn-light">Send request</button>
							</div>
						</div>
					</form>
                </div>
                <div class="feedback-item">
                    <span>Phone</span>
                    <a href="tel:+660970346625" class="first-phone">(+66) 097-034-6625</a>
                    <a href="tel:+660837884484">(+66) 083-788-4484</a>
                    <span>E-mail</span>
                    <a href="mailto:info@fmf.co.th">info@fmf.co.th</a>
                    <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-big"><img src="/img/line-it.svg">LINE it!</a>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="wrap_container">
            <div class="footer-top">
                <div class="footer-logo logo">
                    <img class="footer-logo--img" src="/img/fmf-bottom.png" alt="">
                </div>
                <div class="footer-nav footer-nav--menu">
                    <div class="footer-menu">
                        <span class="footer-nav--title">Services</span>
                        <a href="/seo/">SEO promotion</a>
                        <a href="/context-ad/">Contextual Ad</a>
                        <a href="/social-media-ad/">Social Media</a>
                        <a href="/analytics/">Analytics</a>
                        <a href="/development/">Development</a>
                    </div>
                    <div class="footer-menu">
                        <span class="footer-nav--title">Company</span>
                        <a href="/about/">About Us</a>
                        <a href="/reviews/">Customers & Reviews</a>
                        <a href="/our-work/">Our Work</a>
                    </div>
                    <div class="footer-menu">
						<span class="footer-nav--title">Contacts</span>
						<a href="mailto:info@fmf.co.th" class="footer-contacts">info@fmf.co.th</a>
						<a href="tel:+660970346625" class="footer-contacts">(+66) 097-034-6625</a>
						<a href="tel:+660837884484" class="footer-contacts">(+66) 083-788-4484</a>
						<a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img src="/img/line-it.svg">LINE it!</a>
						<!--<a href="#"><img src="/img/button-line.png"></a>-->
					</div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>
                    © 1999–2024 FMF Co., Ltd
                </span>
                <div class="more-links">
                    <a href="/privacy_policy.pdf" target="_blank">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <div id="feedback" class="modal feedback-modal feedback-light">
        <a href="#" class="feedback-modal-close" rel="modal:close">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7.39355" y="26.7988" width="28" height="2" transform="rotate(-45 7.39355 26.7988)" fill="#1A1A1A"/>
                <rect x="8.80762" y="7" width="28" height="2" transform="rotate(45 8.80762 7)" fill="#1A1A1A"/>
            </svg>
        </a>
        <div class="feedback-content">
            <h2>Send Request</h2>
            <div class="feedback-block">
                <form class="feedback-form">
                    <div class="form-content">
                        <div class="form-field">
                            <label>Your name*</label>
                            <input type="text" name="name" required placeholder="What is your name?">
                        </div>
                        <div class="form-field">
                            <label>E-mail*</label>
                            <input type="email" name="email" required placeholder="E-mail address">
                        </div>
                        <div class="form-field">
                            <label>Phone*</label>
                            <input type="text" name="phone" class="phone_mask" required placeholder="Contact phone number">
                        </div>
                        <div class="form-field">
                            <label>Site address*</label>
                            <input type="text" name="site" required placeholder="https://">
                        </div>
                        <div class="form-field">
                            <label>Services of interest*</label>
                            <div class="select-list">
                                <div class="select-item-selected">
                                    <input type="text" name="service" required placeholder="SEO, Contextual Ad" readonly>
                                    <div class="item-arrow">
                                        <span class="arrow-down"></span>
                                    </div>
                                </div>
                                <div class="select-items">
                                    <div class="select-item"><input value="SEO">SEO</div>
                                    <div class="select-item"><input value="Contextual Ad">Contextual Ad</div>
                                    <div class="select-item"><input value="Social Media">Social Media</div>
                                    <div class="select-item"><input value="Analytics">Analytics</div>
                                    <div class="select-item"><input value="Development">Development</div>
                                    <div class="select-item"><input value="Other">Other</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field">
                            <label>Age of site</label>
                            <div class="form-field-age">
                                <div class="line-status"></div>
                                <label><span><1</span><input class="first-input" type="radio" name="age" value="<1"></label>
                                <label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
                                <label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
                                <label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
                                <label class="label-last"><span>>10</span><input type="radio" name="age" value=">10"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-info check">
                        <input class="check-agree" type="checkbox" required type="checkbox" checked>
                        <p>By clicking the "Send Request" button, I agree to the <a href="/privacy_policy.pdf" target="_blank" class="form__link link--download">personal data processing policy</a></p>
                    </div>
                    <div class="feedback-bottom">
                        <div class="feedback-bottom__captcha">
                            <div id="feedback-captcha"></div>
                        </div>
                        <div class="feedback-bottom__btn">
                            <button type="submit" class="form-btn btn-light">Send request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="feedback-success">
            <p>Form successfully sent</p>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/feedback-success.php';?>
    <script type="text/javascript">
        var onloadCallback = function() {
        grecaptcha.render('feedback-captcha', {
            'sitekey' : '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
        });
        grecaptcha.render('feedback-captcha-2', {
            'sitekey' : '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
        });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script src="/js/lottie-anim.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>