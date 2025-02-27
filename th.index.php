<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เอเจนซี่การตลาดดิจิทัลในประเทศไทย: อินเทอร์เน็ต เว็บมาร์เก็ตติ้ง และการพัฒนาเว็บไซต์ FMF</title>
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
    <link rel="stylesheet" href="/uikit/uikit.min.css"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FMF มีบริการการตลาดดิจิทัลในประเทศไทย บริการการตลาดออนไลน์และเว็บในกรุงเทพฯ และเมืองอื่น ๆ คุณสามารถขอคำปรึกษาได้โดยกรอกแบบฟอร์มบนเว็บไซต์ของเราหรือโทร: (+66) 083-788-4484.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&display=swap"
        rel="stylesheet">

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
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
            j.async=true; j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
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
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BZ89Q"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="bx-header">
    <div class="top-menu default">
        <div class="wrap_container">
            <div class="header-top">
                <div class="left-menu">
                    <div class="logo-fmf">
                        <a href="/">
                            <img class="logo-light" src="/img/logo-fmf-light.svg" alt="logo">
                            <img class="logo-dark" src="/img/logo-fmf.svg" alt="logo">
                        </a>
                    </div>
                    <div class="root-item">
                        <a>บริการ & ราคา
                            <img src="/img/header-arrow-light.svg" alt="arrow"></a>
                    </div>
                </div>
                <div class="right-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="/our-work/">ผลงานของเรา</a></li>
                            <li><a href="/reviews/">รีวิว</a></li>
                            <li><a href="/about/">เกี่ยวกับเรา</a></li>
                            <li><a href="/contacts/">ติดต่อเรา</a></li>
                        </ul>
                    </div>
                    <div class="switch-lang">
                        <img class="switch-lang-light" src="/img/switch-lang-light.svg">
                        <img class="switch-lang-dark" src="/img/switch-lang.svg">
                        <div class="case-lang">
                            <div class="lang-wrapper">
                                <div class="text-lang1 front-link">En</div>
                                <div class="text-lang2 back-link">Th</div>
                            </div>
                        </div>
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

<div class="top-sub-menu">
    <div class="wrap_container">
        <div class="sub-menu-items">
            <div class="sub-menu-item">
                <div class="items-number">
                    <div class="item-number"></div>
                    <div class="item-number">01</div>
                </div>
                <div class="item-title"><a href="/seo/">SEO</a><img class="img" src="/img/company-arrow-dark.svg" alt=""></div>
                <div class="item-arrow"></div>
            </div>
            <div class="sub-menu-item">
                <div class="items-number">
                    <div class="item-number"></div>
                    <div class="item-number">02</div>
                </div>
                <div class="item-title"><a href="/context-ad/">โฆษณาเชิงบริบท</a><img class="img" src="/img/company-arrow-dark.svg" alt="">
                </div>
                <div class="item-arrow"></div>
            </div>
            <div class="sub-menu-item">
                <div class="items-number">
                    <div class="item-number"></div>
                    <div class="item-number">03</div>
                </div>
                <div class="item-title">
                    <a href="/social-media-ad/">โซเชียลมีเดีย</a>
                    <img class="img" src="/img/company-arrow-dark.svg" alt="">
                </div>
                <div class="item-arrow"></div>
            </div>
            <div class="sub-menu-item">
                <div class="items-number">
                    <div class="item-number"></div>
                    <div class="item-number">04</div>
                </div>
                <div class="item-title"><a href="/analytics/">การวิเคราะห์</a><img class="img" src="/img/company-arrow-dark.svg" alt=""></div>
                <div class="item-arrow"></div>
            </div>
            <div class="sub-menu-item">
                <div class="items-number">
                    <div class="item-number"></div>
                    <div class="item-number">05</div>
                </div>
                <div class="item-title"><a href="/development/">การพัฒนา</a><img class="img" src="/img/company-arrow-dark.svg" alt="">
                </div>
                <div class="item-arrow"></div>
            </div>
        </div>
        <div class="sub-menu-bottom">
            <div class="menu-mail">
                <div class="menu-mail-empty"></div>
                <a href="mailto:info@fmf.co.th" class="icon-mail"><img src="/img/icon-mail.svg" alt="">info@fmf.co.th</a>
            </div>
            <div class="menu-tel">
                <a href="tel:+660970346625"><img src="/img/icon-tel.svg" alt="">(+66) 097-034-6625</a>
                <a href="tel:+660837884484" class="icon-tel">(+66) 083-788-4484</a>,
            </div>
            <div class="menu-social">
                <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img
                            src="/img/line-it.svg" alt="">LINE it!</a>
            </div>
        </div>
    </div>
</div>

<div class="header-nav-mobile">
    <div class="wrap_container">
        <ul class="nav-list-mobile menu-mobile">
            <li><a href="/seo/">SEO</a></li>
            <li><a href="/context-ad/">โฆษณาเชิงบริบท</a></li>
            <li><a href="/social-media-ad/">โซเชียลมีเดีย</a></li>
            <li><a href="/analytics/">การวิเคราะห์</a></li>
            <li><a href="/development/">การพัฒนา</a></li>
        </ul>

        <ul class="nav-list-mobile sub-menu-mobile">
            <li><a href="/our-work/">ผลงานของเรา</a></li>
            <li><a href="/reviews/">รีวิว</a></li>
            <li><a href="/about/">เกี่ยวกับเรา</a></li>
            <li><a href="/contacts/">ติดต่อเรา</a></li>
        </ul>

        <div class="list-mobile-contact">
            <a href="mailto:info@fmf.co.th" class="icon-mail"><img class="img-icon-mail" src="/img/icon-mail.svg" alt="">info@fmf.co.th</a>
            <a href="tel:+660970346625" class="icon-tel"><img class="img-icon-tel" src="/img/icon-tel.svg" alt="">(+66) 097-034-6625</a>
            <a href="tel:+660837884484" class="icon-tel phone-second">(+66) 083-788-4484</a>
            <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img
                    src="/img/line-it.svg" alt="">LINE it!</a>
        </div>
    </div>
</div>

<div class="index-first-block">
    <div class="wrap_container">
        <div class="lottie-index">
            <div class="lottie-item-index" id="lottie-item-index"></div>
            <!-- Первый заголовок -->
            <h1>
                ยกระดับธุรกิจของคุณด้วยความเชี่ยวชาญด้านการพัฒนาและการตลาดดิจิทัลออนไลน์!
            </h1>
        </div>
        <div class="index-flex-block">
            <!-- Короткий блок о 24+ годах -->
            <div class="title">
                ด้วยประสบการณ์กว่า 24 ปี
            </div>
            <div class="description">
                <p>เราสั่งสมความเชี่ยวชาญในการรับมือกับทุกความท้าทายบนโลกของธุรกิจออนไลน์ พร้อมมุ่งเน้นไปที่ตัวชี้วัดทางธุรกิจที่สำคัญ</p>
                <p>เพื่อช่วยให้ผู้ประกอบการบรรลุเป้าหมายทางการตลาดและก้าวไปสู่ความสำเร็จที่ยิ่งใหญ่กว่าเดิมอย่างมั่นคง</p>
            </div>
        </div>
    </div>
</div>

<div class="wrap_container">
    <div class="index-flex-portfolio owl-carousel owl-theme" id="index-flex-portfolio">
        <div class="index-portfolio-item">
            <img src="/img/brands/pwc.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/hyundai.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/central.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/kia.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/centerwedding.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/pavilions.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/geely.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/t-way.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/le-meridien.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/renaissance.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/dsv.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/centara.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/pullman.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/the-siam.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/bangkok-university.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/novotel.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/kerry-logistics.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/tetra-pak.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/bumrungrad-international-hospital.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/holiday-inn.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/sheraton.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/james-cook-university.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/anantara.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/banyan-tree.svg" alt="">
        </div>
        <div class="index-portfolio-item">
            <img src="/img/brands/cdc.svg" alt="">
        </div>
    </div>
</div>

<div class="wrap_container portfolio-block">
    <div class="block-title">
        <h2>ผลงานของเรา</h2>
        <a href="/our-work/" class="purple-dark portfolio-desktop-link">ดูทั้งหมด</a>
    </div>
    <div class="portfolio-container">
        <!-- Bumrungrad -->
        <a href="/our-work/bumrungrad-international-hospital-seo/" class="portfolio-big-item portfolio-item portfolio-item-v2">
            <div class="portfolio-item-img"
                 style="background: url(/img/bumrungrad.jpg) center/cover no-repeat;"></div>
            <div class="portfolio-item-hover"></div>
            <h3 class="title">โรงพยาบาลบำรุงราษฎร์</h3>
            <p class="subtitle">โรงพยาบาลนานาชาติที่ใหญ่ที่สุดในเอเชียตะวันออกเฉียงใต้ตั้งอยู่ในกรุงเทพฯ</p>
            <div class="item-bottom">
                <p class="description">ปรับแต่ง SEO สำหรับเว็บไซต์ของโรงพยาบาลบำรุงราษฎร์</p>
            </div>
        </a>
        <!-- Wedding.net -->
        <a href="/our-work/wedding-net-seo/" class="portfolio-item">
            <div class="portfolio-item-img"
                 style="background: url(/img/wedding.png) center/cover no-repeat;"></div>
            <div class="portfolio-item-hover"></div>
            <h3 class="title">Wedding.net</h3>
            <p class="subtitle">แพลทฟอร์มงานแต่งงานที่ใหญ่ที่สุดในอินเดีย</p>
            <p class="description">อันดับ TOP-3 ในด้านการเข้าชมในประเทศอินเดีย</p>
        </a>
        <!-- Kerry Logistics -->
        <a href="/our-work/kerry-logistics-corporate-portal/" class="portfolio-item">
            <div class="portfolio-item-img"
                 style="background: url(/img/kerry-logistics.png) center/cover no-repeat;"></div>
            <div class="portfolio-item-hover"></div>
            <h3 class="title">Kerry Logistics</h3>
            <p class="subtitle">ผู้ให้บริการโลจิสติกส์ 3PL ระดับโลกที่มีฐานในเอเชียและมีธุรกิจหลากหลาย และครอบคลุมที่สุดในเอเชีย</p>
            <p class="description">พัฒนาแผนการดำเนินงานสำหรับพอร์ทัลองค์กรพร้อมคำอธิบายฟังก์ชันการทำงานและการออกแบบ UI/UX ของแอปพลิเคชัน</p>
        </a>
        <!-- Centerwedding.com -->
        <a href="/our-work/centerwedding-seo/" class="portfolio-item">
            <div class="portfolio-item-img"
                 style="background: url(/img/centerwedding.png) center/cover no-repeat;"></div>
            <div class="portfolio-item-hover"></div>
            <h3 class="title">Сenterwedding.com</h3>
            <p class="subtitle">หนึ่งในแพลทฟอร์มงานแต่งงานที่ใหญ่ที่สุดในประเทศไทย</p>
            <p class="description">แพลทฟอร์มขึ้นสู่อันดับ TOP-1 ในด้านการมองเห็น และเพิ่มปริมาณการเข้าชมแบบออร์แกนิกมากขึ้นถึง 27 เท่า</p>
        </a>
        <!-- Kia -->
        <a href="/our-work/kia-motors-vacation-automation/" class="portfolio-item portfolio-item-mobile">
            <div class="portfolio-item-img"
                 style="background: url(/img/kia-s.png) center/cover no-repeat;"></div>
            <div class="portfolio-item-hover"></div>
            <h3 class="title">Kia Motors</h3>
            <p class="subtitle">ผู้ผลิตรถยนต์รายใหญ่อันดับสองของเกาหลีใต้</p>
            <p class="description">พัฒนาระบบอัตโนมัติสำหรับกระบวนการลาพักร้อนบนพอร์ทัลองค์กร</p>
        </a>
    </div>
    <div class="text-center">
        <a href="/our-work/" class="purple-dark portfolio-mobile-link">ดูทั้งหมด</a>
    </div>
</div>

<div class="company-block">
    <div class="wrap_container">
        <div class="company-big-item">
            <div class="company-block-item-img">
                <div class="company-block-title">
                    เกี่ยวกับเอฟเอ็มเอฟ
                </div>
                <div class="company-block-img">
                    <img src="/img/company-air.png" alt="company">
                </div>
            </div>
            <div class="company-block-descr">
                <p>FMF เป็น เอเจนซี่การตลาดออนไลน์ และบริษัทไอทีที่เชี่ยวชาญในหลากหลายสาขา โดยมุ่งเน้นกิจกรรมหลัก ได้แก่ การโฆษณาและพัฒนาธุรกิจ การสนับสนุนระบบสารสนเทศ การจัดการพอร์ทัลภายในองค์กร และการพัฒนาโซลูชันเพื่อเพิ่มความอัตโนมัติในกระบวนการทางธุรกิจอย่างมีประสิทธิภาพ</p>
                <div class="company-block-count">
                    <div class="company-submenu">
                        <span>24+</span>
                        ปีของการทำงาน
                    </div>
                    <div class="company-submenu">
                        <span>100+</span>
                        พนักงานในทีม
                    </div>
                </div>
            </div>
        </div>
        <!-- 01 SEO -->
        <div data-href="/seo/" class="company-item company-item-seo">
            <div class="company-number">
                <span>01</span>
                <div class="lottie-company-item" id="lottie-company-seo"></div>
            </div>
            <div class="company-more-items">
                <a href="/seo/" class="company-title">SEO</a>
                <div class="lottie-company-mobile-item" id="lottie-company-seo-mobile"></div>
                <div class="company-submenu">
                    <a href="javascript:void(0);">โดยตำแหน่ง</a>
                    <a href="javascript:void(0);">โดยจำนวนการเข้าชม</a>
                    <a href="javascript:void(0);">การชำระเงินต่อหลีดลูกค้า</a>
                    <a href="javascript:void(0);">พอร์ทัลและตลาดออนไลน์</a>
                    <a href="javascript:void(0);">ตัวแทนจำหน่ายรถยนต์</a>
                    <a href="javascript:void(0);">โรงแรมและรีสอร์ท</a>
                </div>
                <div class="company-img"></div>
            </div>
        </div>
        <!-- 02 Contextual -->
        <div data-href="/context-ad/" class="company-item company-item-cont">
            <div class="company-number">
                <span>02</span>
                <div class="lottie-company-item" id="lottie-company-cont"></div>
            </div>
            <div class="company-more-items">
                <a href="/context-ad/" class="company-title">โฆษณาเชิงบริบท</a>
                <div class="lottie-company-mobile-item" id="lottie-company-cont-mobile"></div>
                <div class="company-submenu">
                    <a href="javascript:void(0);">Google AdWords</a>
                    <a href="javascript:void(0);">เครือข่าย Contextual Media</a>
                    <a href="javascript:void(0);">YouTube</a>
                    <a href="javascript:void(0);">การซื้อผ่าน Google</a>
                    <a href="javascript:void(0);">โฆษณาแอปพลิเคชันมือถือ</a>
                </div>
                <div class="company-img"></div>
            </div>
        </div>
        <!-- 03 Social Media -->
        <div data-href="/social-media-ad/" class="company-item company-item-smm">
            <div class="company-number">
                <span>03</span>
                <div class="lottie-company-item" id="lottie-company-smm"></div>
            </div>
            <div class="company-more-items">
                <a href="/social-media-ad/" class="company-title">โซเชียลมีเดีย</a>
                <div class="lottie-company-mobile-item" id="lottie-company-smm-mobile"></div>
                <div class="company-submenu">
                    <a href="javascript:void(0);">โฆษณาบน Facebook</a>
                    <a href="javascript:void(0);">โฆษณาบน Instagram</a>
                    <a href="javascript:void(0);">การจัดการโซเชียลมีเดีย (SMM)</a>
                    <a href="javascript:void(0);">การตลาดผ่านอินฟลูเอนเซอร์</a>
                </div>
                <div class="company-img"></div>
            </div>
        </div>
        <!-- 04 Analytics -->
        <div data-href="/analytics/" class="company-item company-item-an">
            <div class="company-number">
                <span>04</span>
                <div class="lottie-company-item" id="lottie-company-an"></div>
            </div>
            <div class="company-more-items">
                <a href="/analytics/" class="company-title">การวิเคราะห์</a>
                <div class="lottie-company-mobile-item" id="lottie-company-an-mobile"></div>
                <div class="company-submenu">
                    <a href="javascript:void(0);">การตรวจสอบ SEO ที่โปร่งใส</a>
                    <a href="javascript:void(0);">การวิเคราะห์ธุรกิจ</a>
                    <a href="javascript:void(0);">การวิเคราะห์ระบบ</a>
                    <a href="javascript:void(0);">ความปลอดภัยทางไซเบอร์</a>
                </div>
                <div class="company-img"></div>
            </div>
        </div>
        <!-- 05 Development -->
        <div data-href="/development/" class="company-item company-item-dev">
            <div class="company-number">
                <span>05</span>
                <div class="lottie-company-item" id="lottie-company-dev"></div>
            </div>
            <div class="company-more-items">
                <a href="/development/" class="company-title">การพัฒนา</a>
                <div class="lottie-company-mobile-item" id="lottie-company-dev-mobile"></div>
                <div class="company-submenu">
                    <a href="javascript:void(0);">Business Automation</a>
                    <a href="javascript:void(0);">แอปพลิเคชันบนเว็บไซต์</a>
                    <a href="javascript:void(0);">การสร้างเว็บไซต์/หน้าแลนดิ้ง</a>
                    <a href="javascript:void(0);">การสนับสนุนทางเทคนิค</a>
                </div>
                <div class="company-img"></div>
            </div>
        </div>
    </div>
</div>

<div class="formats-block grey-background">
    <div class="wrap_container">
        <h2>วิธีการทำงานของเรา</h2>
        <div class="formats-container">
            <div class="formats-item item-no-bg">
                <p>เราเชื่อมั่นในโปรเจกต์ที่ซับซ้อนและท้าทาย เพราะช่วยให้เรานำความเชี่ยวชาญมาใช้ในทุกมิติ พร้อมรับรองผลลัพธ์ที่มั่นใจได้</p>
                <p>เราทุ่มเทเพื่อทำให้ทุกโปรเจกต์ก้าวขึ้นเป็นผู้นำในอุตสาหกรรมนั้นๆ และตลอด 24 ปีที่ผ่านมา เราได้พิสูจน์แล้วว่าเราสามารถสร้างผลลัพธ์ที่ยอดเยี่ยมโดยไม่ลดทอนคุณภาพ</p>
                <p>ด้วยวิธีการที่โปร่งใสและเน้นการทำงานแบบ การตลาดอิเล็กทรอนิกส์ (Electronic Marketing) ผู้นำตลาดและสตาร์ทอัพจึงเลือกให้เราเป็นพันธมิตรที่ไว้วางใจ</p>
            </div>
            <!-- การมีส่วนร่วมอย่างเต็มที่ -->
            <div class="formats-item full-engagement">
                <h3>การมีส่วนร่วมอย่างเต็มที่</h3>
                <div class="lottie-full-engagement" id="lottie-full-engagement"></div>
                <div class="description">
                    <p>เมื่อเราได้รับหน้าที่ดูแลโปรเจค เราทุ่มเทเพื่อศึกษาและวิเคราะห์ทุกแง่มุมอย่างละเอียด เราให้ความสำคัญกับการเข้าใจอุตสาหกรรม ความต้องการของลูกค้า และพฤติกรรมของกลุ่มเป้าหมายอย่างลึกซึ้ง</p>
                    <p>เพราะการมีความเข้าใจในบริบทอย่างครบถ้วน คือหัวใจสำคัญในการพัฒนากลยุทธ์ที่นำไปสู่ความสำเร็จ</p>
                </div>
            </div>
            <!-- การแสดงผลลัพธ์อย่างสม่ำเสมอ -->
            <div class="formats-item regularly-showing-results">
                <h3>การแสดงผลลัพธ์อย่างสม่ำเสมอ</h3>
                <div class="lottie-regularly-showing-results" id="lottie-regularly-showing-results"></div>
                <div class="description">
                    <p>เราแบ่งโครงการออกเป็นช่วงสั้นๆ (sprints) โดยร่วมมือกับคุณในการกำหนดเป้าหมายและขั้นตอนย่อย ๆ สำหรับการดำเนินงาน</p>
                    <p>วิธีการนี้ช่วยให้กระบวนการทั้งหมดมีความชัดเจน สามารถทำซ้ำได้ และเราจะจัดทำรายงานผลการดำเนินงานให้คุณทราบอย่างสม่ำเสมอ</p>
                </div>
            </div>
            <!-- การติดต่อสื่อสารอย่างสม่ำเสมอ -->
            <div class="formats-item always-staying-in-touch">
                <h3>การติดต่อสื่อสารอย่างสม่ำเสมอ</h3>
                <div class="lottie-always-staying-in-touch" id="lottie-always-staying-in-touch"></div>
                <div class="description">
                    <p>เรามุ่งมั่นที่จะใช้ช่องทางการสื่อสารที่คุณสะดวก และตอบคำถามของคุณให้เร็วที่สุด เพื่อให้คุณมั่นใจได้ว่าการทำงานเป็นไปอย่างราบรื่น</p>
                    <p>สำหรับการประชุมทางโทรศัพท์หรือออนไลน์ เราให้ความยืดหยุ่นในเรื่องของเวลา พร้อมบันทึกการประชุมทุกครั้งเพื่อให้ข้อมูลครบถ้วนและโปร่งใส</p>
                </div>
            </div>
            <!-- การควบคุมและความโปร่งใส -->
            <div class="formats-item control-transparency">
                <h3>การควบคุมและความโปร่งใส</h3>
                <div class="lottie-control-transparency" id="lottie-control-transparency"></div>
                <div class="description">
                    <p>คุณสามารถตรวจสอบความคืบหน้าของโปรเจกต์ได้ตลอดเวลา พร้อมรับข้อมูลที่ชัดเจนในทุกขั้นตอน โดยแสดงข้อมูลว่างานใดกำลังดำเนินการอยู่ รวมถึงเวลาที่วางแผนไว้และเวลาที่ใช้จริงในแต่ละงาน</p>
                    <p>เราใช้ การตลาดดิจิทัลในประเทศไทย เพื่อให้มั่นใจว่าวิธีการและกลยุทธ์ของเราสอดคล้องกับตลาดเป้าหมายของคุณ</p>
                </div>
            </div>
        </div>
        <div class="formats-items">
            <div class="formats-item-empty"></div>
            <div class="formats-item-text">
                <h3>การปลดล็อกศักยภาพสูงสุดของคุณไม่ได้หยุดเพียงแค่การออกแบบ การพัฒนา หรือการโฆษณา เพราะทุกความสำเร็จเริ่มต้นจากกลยุทธ์ที่ถูกต้องและเหมาะสมกับเป้าหมายของคุณ</h3>
                <div class="formats-item-descr">
                    <p>เรามีความสุขในการทำงานกับผลิตภัณฑ์และบริการที่เราหลงใหล เพราะนั่นช่วยให้เราสามารถสื่อสารข้อความของคุณได้อย่างมีประสิทธิภาพ พร้อมทั้งสร้างความประทับใจและเปลี่ยนมุมมองของกลุ่มเป้าหมายที่มีต่อคุณให้ดีขึ้นได้อย่างแท้จริง</p>
                    <p>ด้วยแนวทางการตลาดแบบครบวงจรที่ครอบคลุมทุกมิติ เราสามารถยกระดับบริษัทของคุณจากธุรกิจทั่วไปให้กลายเป็นแบรนด์พรีเมียมที่ผู้คนหลงรักและจดจำ</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reviews-block">
    <div class="wrap_container">
        <!-- Don't take our word for it... -->
        <h2>อย่าเพิ่งเชื่อแค่คำพูดของเรา แต่จงเชื่อในเสียงของลูกค้าของเรา</h2>
        <div class="reviews-swiper">
            <div class="swiper-buttons">
                <a href="/reviews/" class="more-reviews more-reviews-desktop purple-dark">อ่านรีวิวทั้งหมด</a>
                <div class="swiper-button-next2"></div>
                <div class="swiper-button-prev2"></div>
            </div>
            <div class="swiper-wrapper">
                <!-- Centara Chaan Talay -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/centra.svg" alt="">
                        </div>
                        <div class="title">
                            Annaliza Bisnar
                        </div>
                        <div class="subtitle">
                            ผู้จัดการรีสอร์ท
                        </div>
                        <div class="subtitle">
                            Centara Chaan Talay Resort & Villas Trat
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ในนามของ Centara Chaan Talay Resort & Villas Trat ดิฉันขอแสดงความขอบคุณอย่างจริงใจต่อบริษัท FMF เอเจนซี่การตลาดออนไลน์ ที่มีบทบาทสำคัญในการดึงดูดลูกค้าใหม่มายังรีสอร์ทของเรา และความร่วมมือที่ยอดเยี่ยมในการจัดกิจกรรมต่างๆ</p>
                                <p>การร่วมมือกับ FMF และ Centerwedding.com ซึ่งเป็นแพลตฟอร์มจัดงานชั้นนำในประเทศไทย ได้ช่วยเพิ่มการมองเห็นและทำให้การจัดงานต่างๆ ของเราสมบูรณ์แบบ ดิฉันขอชื่นชมความเป็นมืออาชีพและความทุ่มเทของทีมงานในการมอบบริการที่เป็นเลิศ</p>
                                <p>เรารู้สึกซาบซึ้งในความร่วมมือและความเข้าใจที่มีต่อกัน และตั้งตารอความสำเร็จที่ต่อเนื่องในอนาคต</p>
                            </div>
                        </div>
                        <a href="/reviews/#chaan" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Hyundai -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/hyundai-reviews.png" alt="">
                        </div>
                        <div class="title">
                            A. Melnikov
                        </div>
                        <div class="subtitle">
                            ผู้อำนวยการฝ่ายขาย, "Hyundai Motor"
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>บริษัท Hyundai Motor จำกัด ขอขอบคุณ FMF สำหรับความร่วมมือที่ประสบความสำเร็จและมีประสิทธิภาพในการพัฒนาเว็บเซอร์วิส H-Promise</p>
                                <p>ในกระบวนการดำเนินงาน เราได้จัดทำแคตตาล็อกของรถยนต์ฮุนไดที่มีระยะทางการใช้งานให้แก่ลูกค้า พัฒนาฟังก์ชันสำหรับดีลเลอร์ที่ช่วยให้พวกเขาสามารถเพิ่มรถยนต์เข้าในแคตตาล็อกได้แบบเรียลไทม์ รวมถึงพัฒนาโมดูลสำหรับแสดงรายงานให้แก่ผู้จัดจำหน่าย</p>
                                <p>ทีมงานของ FMF ได้แสดงความทุ่มเทและความเป็นมืออาชีพระดับสูงในทุกขั้นตอน พร้อมนำเสนอวิธีแก้ปัญหาที่มีประสิทธิภาพ ทำให้โครงการสำเร็จลุล่วงได้อย่างราบรื่น</p>
                                <p>เราหวังเป็นอย่างยิ่งว่าจะได้ร่วมงานกันต่อไปอย่างมีประสิทธิภาพและประสบความสำเร็จในอนาคต</p>
                            </div>
                        </div>
                        <a href="/reviews/#hyundai" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- KIA -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/kia.svg" alt="">
                        </div>
                        <div class="title">
                            Yanina Z.V.
                        </div>
                        <div class="subtitle">
                            ผู้อำนวยการฝ่ายการเงิน, "KIA Motors"
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>"KIA Motors" ขอแสดงความขอบคุณต่อบริษัท FMF สำหรับความเป็นมืออาชีพระดับสูงในด้านเทคโนโลยีสารสนเทศและการทำงานอัตโนมัติของกระบวนการธุรกิจ</p>
                                <p>ตลอดระยะเวลาความร่วมมือ เราได้เห็นถึงความสามารถที่โดดเด่น ความมีประสิทธิภาพ การทำงานที่รวดเร็ว และความมุ่งมั่นของทีมงาน FMF ที่ช่วยให้งานทุกชิ้นสำเร็จลุล่วงด้วยคุณภาพสูง</p>
                                <p>เนื่องจากความจำเป็นในการแปลงกระบวนการขออนุมัติการเดินทางเพื่อธุรกิจของเราให้เป็นดิจิทัล เราได้มอบหมายโครงการที่ท้าทายนี้ให้กับ FMF และได้รับผลลัพธ์ที่ยอดเยี่ยม</p>
                            </div>
                        </div>
                        <a href="/reviews/#kia" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Bumrungrad -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/bih.svg" alt="">
                        </div>
                        <div class="title">
                            Dr. Laura Prykhod’ko
                        </div>
                        <div class="subtitle">
                            ผู้จัดการฝ่ายพัฒนาธุรกิจระหว่างประเทศ, Bumrungrad International Hospital
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>เนื่องในนามของ โรงพยาบาลบำรุงราษฎร์นานาชาติ เราขอแสดงความขอบคุณอย่างจริงใจต่อทีมผู้เชี่ยวชาญของ FMF สำหรับความร่วมมือที่มีประสิทธิภาพในการยกระดับเว็บไซต์ภูมิภาคของเราให้อยู่ในอันดับสูงสุดใน Google และการดูแลชุมชนออนไลน์อย่างเป็นทางการของโรงพยาบาล</p>
                                <p>เพื่อเพิ่มการรับรู้ของโรงพยาบาลในหมู่ผู้ชมระดับนานาชาติ เราได้ทำงานร่วมกับ FMF อย่างใกล้ชิด ทีมผู้เชี่ยวชาญของพวกเขาได้ช่วยเราบรรลุเป้าหมายที่สำคัญดังต่อไปนี้:</p>
                            </div>
                        </div>
                        <a href="/reviews/#bih" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Sheraton Samui -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/new-sheraton.svg" alt="">
                        </div>
                        <div class="title">
                            Kitpun Jirawatcharadet
                        </div>
                        <div class="subtitle">
                            ผู้อำนวยการฝ่ายขายและการตลาด
                        </div>
                        <div class="subtitle">
                            "Sheraton Samui Resort"
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ในนามของ Sheraton Samui Resort ผมขอแสดงความขอบคุณอย่างจริงใจต่อทีมงานบริษัท FMF สำหรับความร่วมมือและการสนับสนุนที่ทุ่มเทในการช่วยให้ Sheraton Samui Resort ดึงดูดลูกค้าใหม่ๆ มายังรีสอร์ตของเรา</p>
                                <p>เราได้รับลูกค้าใหม่จำนวนมากผ่านการสอบถามเกี่ยวกับการจัดงานแต่งงานและการประชุมกลุ่ม การเป็นพันธมิตรกับ FMF ได้ช่วยขยายการเข้าถึงกลุ่มเป้าหมายและเพิ่มจำนวนลูกค้าผ่านช่องทางสร้างโอกาสในการขายเพิ่มเติม</p>
                                <p>ความสำเร็จนี้จะไม่เกิดขึ้นได้หากขาดการสนับสนุนและความร่วมมือจากบริษัทและทีมงานมืออาชีพของคุณ เราหวังว่าจะยังคงร่วมมือกันต่อไปในความพยายามครั้งสำคัญนี้ เพื่อโปรโมทสถานที่ของเราและแพ็คเกจงานแต่งงานให้ดียิ่งขึ้น</p>
                                <p>ขอขอบคุณอีกครั้งสำหรับการสนับสนุนที่ยอดเยี่ยมของคุณ</p>
                            </div>
                        </div>
                        <a href="/reviews/#resort" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Rembrandt Hotel -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/rembrandt.svg" alt="">
                        </div>
                        <div class="title">
                            NAME?
                        </div>
                        <div class="subtitle">
                            ผู้จัดการอาวุโสฝ่ายขาย – แผนกจัดเลี้ยงและงานอีเวนต์
                        </div>
                        <div class="subtitle">
                            "Rembrandt Hotel & Suites Bangkok"
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ผมเขียนจดหมายฉบับนี้เพื่อแสดงความขอบคุณอย่างลึกซึ้งจาก Rembrandt Hotel & Suites Bangkok ต่อบริษัท FMF-เอเจนซี่การตลาดดิจิทัล สำหรับบทบาทอันทรงคุณค่าในการช่วยดึงดูดลูกค้าใหม่มายังสถานที่ของเรา รวมถึงความร่วมมือที่มีประสิทธิภาพในการโปรโมทสถานที่ให้เป็นที่รู้จักในวงกว้าง</p>
                                <p>การทำงานร่วมกับ FMF ได้ช่วยขยายการเข้าถึงของเราอย่างมาก พร้อมทั้งเพิ่มศักยภาพในการให้บริการงานอีเวนต์ที่ได้รับการประสานงานอย่างดีเยี่ยม ผมขอชื่นชมความเป็นมืออาชีพของทีมงาน ที่มุ่งมั่นยกระดับคุณภาพการบริการอย่างต่อเนื่อง</p>
                                <p>เรารู้สึกซาบซึ้งในความสัมพันธ์ที่แน่นแฟ้นและความเข้าใจที่เราได้พัฒนาร่วมกัน และตั้งตารอที่จะสานต่อความร่วมมือที่เปี่ยมด้วยความไว้วางใจนี้ต่อไป</p>
                            </div>
                        </div>
                        <a href="/reviews/#rembrandt_Hotel" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Ana Anan -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/ana-anan.svg" alt="">
                        </div>
                        <div class="title">
                            NAME?
                        </div>
                        <div class="subtitle">
                            ผู้อำนวยการฝ่ายการขาย
                        </div>
                        <div class="subtitle">
                            “Ana Anan Resort and Villa, Pattaya”
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ในนามของพวกเราทุกคนที่ Ana Anan Resort and Villa Pattaya เราขอแสดงความขอบคุณอย่างจริงใจต่อบริษัท FMF สำหรับบทบาทสำคัญในการแนะนำลูกค้าใหม่มายังสถานที่ของเรา</p>
                                <p>การร่วมมือกับ FMF ได้ช่วยเพิ่มการรับรู้เกี่ยวกับรีสอร์ตของเรา และทำให้การจัดงานต่างๆ เป็นไปอย่างราบรื่น ทีมงานของคุณแสดงความเป็นมืออาชีพและมุ่งมั่นพัฒนาการบริการอย่างต่อเนื่อง ซึ่งถือเป็นสิ่งที่ควรได้รับการชื่นชมเป็นพิเศษ</p>
                                <p>เรารู้สึกซาบซึ้งในความสัมพันธ์ที่ให้ความร่วมมือและความเข้าใจกันที่ได้พัฒนาขึ้น และตั้งตารอที่จะสานต่อความร่วมมือที่ประสบความสำเร็จร่วมกันต่อไป</p>
                            </div>
                        </div>
                        <a href="/reviews/#ana_anan" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Anantara Chiang Mai -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/anantra.svg" alt="">
                        </div>
                        <div class="title">
                            Nuttawadee Phonyiam (Namneung)
                        </div>
                        <div class="subtitle">
                            เจ้าหน้าที่ฝ่ายขายงานอีเวนต์
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ในนามของ Anantara Chiang Mai Resort ดิฉันขอแสดงความขอบคุณอย่างสุดซึ้งต่อบริษัท FMF สำหรับบทบาทสำคัญในการขยายฐานลูกค้าของเราและยกระดับศักยภาพในการจัดงานอีเวนต์</p>
                                <p>ความร่วมมือระหว่าง FMF และ Centerwedding.com ซึ่งเป็นแพลตฟอร์มอีเวนต์ชั้นนำของประเทศไทย ได้ช่วยเพิ่มการมองเห็นให้กับรีสอร์ตของเราอย่างมาก พร้อมทั้งทำให้บริการจัดการงานอีเวนต์เป็นไปอย่างราบรื่นและมีประสิทธิภาพ</p>
                                <p>ดิฉันขอชื่นชมในความเป็นมืออาชีพและความมุ่งมั่นของทีมงานที่ทุ่มเทในการให้บริการอย่างยอดเยี่ยม เรารู้สึกซาบซึ้งในความสัมพันธ์ที่เปี่ยมด้วยความร่วมมือและความเข้าใจที่เราได้พัฒนาร่วมกัน และยินดีที่จะสานต่อความร่วมมือที่มีคุณค่านี้ในอนาคต</p>
                            </div>
                        </div>
                        <a href="/reviews/#anantara" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- Holiday Inn -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/holiday.svg" alt="">
                        </div>
                        <div class="title">
                            ปรัชญา ผดุงถิ่น
                        </div>
                        <div class="subtitle">
                            ผู้จัดการฝ่ายสื่อสารการตลาดดิจิทัล
                        </div>
                        <div class="subtitle">
                            Holiday Inn & Suites Siracha Laemchabang
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>เรียน ทีมงาน FMF</p>
                                <p>หวังว่าทุกท่านจะสบายดีและมีความสุขเสมอ ในนามของทีมงานทั้งหมดที่ Holiday Inn & Suites Siracha Laemchabangดิฉันขอแสดงความขอบคุณอย่างจริงใจสำหรับความร่วมมือและการเป็นพันธมิตรที่ยอดเยี่ยมกับบริษัท FMF ในการโปรโมทงานแต่งงานที่สถานที่ของเรา</p>
                                <p>ตั้งแต่เริ่มต้นความร่วมมือ เรารู้สึกประทับใจอย่างยิ่งกับความเป็นมืออาชีพ ความทุ่มเท และความคิดสร้างสรรค์ที่ทีมงานของคุณได้แสดงออกมา ความมุ่งมั่นในการมอบบริการที่ยอดเยี่ยมและเกินความคาดหวังของลูกค้า ได้มีบทบาทสำคัญในการยกระดับชื่อเสียงของเราให้เป็นหนึ่งในสถานที่จัดงานแต่งงานชั้นนำ</p>
                            </div>
                        </div>
                        <a href="/reviews/#holiday_inn" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>

                <!-- CDC Ballroom -->
                <div class="swiper-slide reviews-item">
                    <div class="item-head">
                        <div class="item-img">
                            <img src="/img/brands/reviews/cdc.svg" alt="">
                        </div>
                        <div class="title">
                            NAME?
                        </div>
                        <div class="subtitle">
                            ผู้อำนวยการ - ฝ่ายการบริการ
                        </div>
                        <div class="subtitle">
                            CDC Ballroom
                        </div>
                    </div>
                    <div class="reviews-block__right">
                        <div class="item-descr hide">
                            <div class="item-text">
                                <p>ในนามของทีมงาน CDC Ballroom เราขอแสดงความขอบคุณอย่างยิ่งต่อบริษัท FMF สำหรับการสนับสนุนที่สำคัญในการช่วยดึงดูดลูกค้าใหม่</p>
                                <p>ความร่วมมือของเรากับ FMF และ Centerwedding.com ซึ่งเป็นแพลตฟอร์มจัดงานที่มีชื่อเสียงที่สุดในประเทศไทย ได้ช่วยขยายขอบเขตการเข้าถึงของเรา และเพิ่มศักยภาพในการจัดงานให้ดำเนินไปอย่างราบรื่น</p>
                                <p>ดิฉันขอชื่นชมความเป็นมืออาชีพและความมุ่งมั่นของทีมงานที่พัฒนาการบริการอย่างยอดเยี่ยมอยู่เสมอ เรารู้สึกซาบซึ้งในความสัมพันธ์ที่เปี่ยมด้วยความร่วมมือและความเข้าใจที่ได้พัฒนาขึ้นระหว่างเรา และตั้งตารอที่จะรักษาความร่วมมืออันมีค่านี้ต่อไป</p>
                            </div>
                        </div>
                        <a href="/reviews/#cdc" class="more-review purple-light">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <a href="/reviews/" class="more-reviews more-reviews-mobile purple-dark">อ่านรีวิวทั้งหมด</a>
        </div>
    </div>
</div>

<div class="feedback-block">
    <div class="wrap_container">
        <h2>มาคุยกันเกี่ยวกับโปรเจกต์ถัดไปของคุณ</h2>
        <div class="feedback-items">
            <div class="feedback-form-item">
                <form class="feedback-form">
                    <div class="form-content">
                        <div class="form-field">
                            <label>ชื่อของคุณ*</label>
                            <input name="name" required placeholder="ชื่อของคุณคืออะไร?">
                        </div>
                        <div class="form-field">
                            <label>อีเมล*</label>
                            <input type="email" name="email" required placeholder="ที่อยู่อีเมล">
                        </div>
                        <div class="form-field">
                            <label>เบอร์โทร*</label>
                            <input name="phone" class="phone_mask" required placeholder="หมายเลขโทรศัพท์ติดต่อ">
                        </div>
                        <div class="form-field">
                            <label>ที่อยู่เว็บไซต์*</label>
                            <input name="site" required placeholder="https://">
                        </div>
                        <div class="form-field">
                            <label>บริการที่สนใจ*</label>
                            <div class="select-list">
                                <div class="select-item-selected">
                                    <input name="service" placeholder="SEO, โฆษณาเชิงบริบท" readonly>
                                    <div class="item-arrow">
                                        <span class="arrow-down"></span>
                                    </div>
                                </div>
                                <div class="select-items">
                                    <div class="select-item"><input value="SEO">SEO</div>
                                    <div class="select-item"><input value="Contextual Ad">โฆษณาเชิงบริบท</div>
                                    <div class="select-item"><input value="Social Media">โซเชียลมีเดีย</div>
                                    <div class="select-item"><input value="Analytics">การวิเคราะห์</div>
                                    <div class="select-item"><input value="Development">การพัฒนา</div>
                                    <div class="select-item"><input value="Other">อื่น ๆ</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field">
                            <label>อายุเว็บไซต์</label>
                            <div class="form-field-age">
                                <div class="line-status"></div>
                                <label><span>&lt;1</span><input class="first-input" type="radio" name="age" value="<1"></label>
                                <label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
                                <label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
                                <label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
                                <label class="label-last"><span>&gt;10</span><input type="radio" name="age" value=">10"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-info check">
                        <input class="check-agree" type="checkbox" checked>
                        <p>เมื่อคลิกปุ่ม “ส่งคำขอ” ถือว่าคุณยอมรับ <a href="/privacy_policy.pdf"
                                                              target="_blank"
                                                              class="form__link link--download">นโยบายการประมวลผลข้อมูลส่วนบุคคล</a></p>
                    </div>
                    <div class="feedback-bottom">
                        <div class="feedback-bottom__captcha">
                            <div id="feedback-captcha-2"></div>
                        </div>
                        <div class="feedback-bottom__btn">
                            <button type="submit" class="form-btn btn-light">ส่งคำขอ</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="feedback-item">
                <span>โทรศัพท์</span>
                <a href="tel:+660970346625" class="first-phone">(+66) 097-034-6625</a>
                <a href="tel:+660837884484">(+66) 083-788-4484</a>
                <span>อีเมล</span>
                <a href="mailto:info@fmf.co.th">info@fmf.co.th</a>
                <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-big"><img
                            src="/img/line-it.svg" alt="">LINE it!</a>
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
                    <span class="footer-nav--title">บริการ</span>
                    <a href="/seo/">SEO</a>
                    <a href="/context-ad/">โฆษณาเชิงบริบท</a>
                    <a href="/social-media-ad/">โซเชียลมีเดีย</a>
                    <a href="/analytics/">การวิเคราะห์</a>
                    <a href="/development/">การพัฒนา</a>
                </div>
                <div class="footer-menu">
                    <span class="footer-nav--title">บริษัท</span>
                    <a href="/about/">เกี่ยวกับเรา</a>
                    <a href="/reviews/">ลูกค้าและรีวิว</a>
                    <a href="/our-work/">ผลงานของเรา</a>
                </div>
                <div class="footer-menu">
                    <span class="footer-nav--title">ติดต่อ</span>
                    <a href="mailto:info@fmf.co.th" class="footer-contacts">info@fmf.co.th</a>
                    <a href="tel:+660970346625" class="footer-contacts">(+66) 097-034-6625</a>
                    <a href="tel:+660837884484" class="footer-contacts">(+66) 083-788-4484</a>
                    <a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="line-it-small"><img
                                src="/img/line-it.svg" alt="">LINE it!</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
				<span>
					© 1999–<?= date('Y') ?> FMF Co., Ltd
				</span>
            <div class="more-links">
                <a href="/privacy_policy.pdf" target="_blank">นโยบายความเป็นส่วนตัว</a>
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
        <h2>ส่งคำขอ</h2>
        <div class="feedback-block">
            <form class="feedback-form">
                <div class="form-content">
                    <div class="form-field">
                        <label>ชื่อของคุณ*</label>
                        <input type="text" name="name" required placeholder="ชื่อของคุณคืออะไร?">
                    </div>
                    <div class="form-field">
                        <label>อีเมล*</label>
                        <input type="email" name="email" required placeholder="ที่อยู่อีเมล">
                    </div>
                    <div class="form-field">
                        <label>เบอร์โทร*</label>
                        <input type="text" name="phone" class="phone_mask" required placeholder="หมายเลขโทรศัพท์ติดต่อ">
                    </div>
                    <div class="form-field">
                        <label>ที่อยู่เว็บไซต์*</label>
                        <input type="text" name="site" required placeholder="https://">
                    </div>
                    <div class="form-field">
                        <label>บริการที่สนใจ*</label>
                        <div class="select-list">
                            <div class="select-item-selected">
                                <input type="text" name="service" required placeholder="SEO, โฆษณาเชิงบริบท" readonly>
                                <div class="item-arrow">
                                    <span class="arrow-down"></span>
                                </div>
                            </div>
                            <div class="select-items">
                                <div class="select-item"><input value="SEO">SEO</div>
                                <div class="select-item"><input value="Contextual Ad">โฆษณาเชิงบริบท</div>
                                <div class="select-item"><input value="Social Media">โซเชียลมีเดีย</div>
                                <div class="select-item"><input value="Analytics">การวิเคราะห์</div>
                                <div class="select-item"><input value="Development">การพัฒนา</div>
                                <div class="select-item"><input value="Other">อื่น ๆ</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-field">
                        <label>อายุเว็บไซต์</label>
                        <div class="form-field-age">
                            <div class="line-status"></div>
                            <label><span>&lt;1</span><input class="first-input" type="radio" name="age" value="<1"></label>
                            <label class="label-checked"><span>2-4</span><input type="radio" name="age" value="2-4" checked></label>
                            <label><span>5-7</span><input type="radio" name="age" value="5-7"></label>
                            <label><span>8-10</span><input type="radio" name="age" value="8-10"></label>
                            <label class="label-last"><span>&gt;10</span><input type="radio" name="age" value=">10"></label>
                        </div>
                    </div>
                </div>
                <div class="form-info check">
                    <input class="check-agree" required type="checkbox" checked>
                    <p>เมื่อคลิกปุ่ม “ส่งคำขอ” ถือว่าคุณยอมรับ <a href="/privacy_policy.pdf"
                                                      target="_blank"
                                                      class="form__link link--download">นโยบายการประมวลผลข้อมูลส่วนบุคคล</a></p>
                </div>
                <div class="feedback-bottom">
                    <div class="feedback-bottom__captcha">
                        <div id="feedback-captcha"></div>
                    </div>
                    <div class="feedback-bottom__btn">
                        <button type="submit" class="form-btn btn-light">ส่งคำขอ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="feedback-success">
        <p>ส่งแบบฟอร์มเรียบร้อยแล้ว</p>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/feedback-success.php';?>
<script type="text/javascript">
    var onloadCallback = function () {
        grecaptcha.render('feedback-captcha', {
            'sitekey': '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
        });
        grecaptcha.render('feedback-captcha-2', {
            'sitekey': '6LfI9EopAAAAAFPDKzmhrQ553-sl_c1y6nkkS98i'
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="/js/lottie-anim.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>