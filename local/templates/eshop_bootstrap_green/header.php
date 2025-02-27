<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$curDir = GetDirPath($curPage);
$curSecH1 = $_SERVER['DOCUMENT_ROOT'] . $curDir . 'topH1.php';
$curSecBlack = $_SERVER['DOCUMENT_ROOT'] . $curDir . 'bottom.php';
$curSecBlack1 = $_SERVER['DOCUMENT_ROOT'] . $curDir . 'bottom1.php';
?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-KNJJRKPEJH"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-KNJJRKPEJH');
		</script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-T9BZ89Q');</script>
		<!-- End Google Tag Manager -->	
		<!-- Meta Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '558431829711547');
		fbq('track', 'PageView');
		</script>
		<!-- End Meta Pixel Code -->
		<meta property="og:url" content="https://fmf.ru/" />
		<meta property="og:locale" content="th-TH" />
		<meta property="og:image" content="https://fmf.ru/bitrix/templates/eshop_bootstrap_green/logo.png" />
		<meta property="og:image:width" content="250" />
		<meta property="og:image:height" content="250" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon_fmf.ico" />
		<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.easing-1.3.pack.js'); ?>
		<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox/jquery.fancybox-1.3.1.pack.js'); ?>
		<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/fancybox/jquery.fancybox-1.3.1.css"); ?>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/jquery-1.9.0.js'></script>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/jquery.easytooltip.js'></script>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/jquery.maskedinput.min.js'></script>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/hammer.min.js'></script>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/spin.min.js'></script>
		<script src='<?= SITE_TEMPLATE_PATH; ?>/js/script.js?v=0.0.13'></script>
		<? //$APPLICATION->ShowHead(); ?>
		<? $APPLICATION->ShowMeta("robots") ?>
		<? $APPLICATION->ShowCSS() ?>
		<? $APPLICATION->ShowHeadStrings( )?>
		<? $APPLICATION->ShowHeadScripts() ?>
		<? $APPLICATION->ShowMeta("description"); ?>
		<?
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/colors.css");
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/smoothDivScroll.css");
//	$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
		?>
		<?
		CModule::IncludeModule('fileman');
		$mobile = CLightHTMLEditor::IsMobileDevice();
		?>
		<? if ($mobile || strstr($_SERVER['HTTP_USER_AGENT'], 'iPad')): ?>
			<? //if($mobile): ?>
			<script src='<?= SITE_TEMPLATE_PATH; ?>/js/scriptM.js'></script>
			<link href='<?= SITE_TEMPLATE_PATH; ?>/css/styleM.css' type='text/css' rel='stylesheet' />
		<? endif; ?>

		<? /*
		  <link rel="stylesheet" media="screen and (max-width: 800px)" href="<?=SITE_TEMPLATE_PATH;?>/css/styleM.css" type='text/css' />
		 */ ?>

		<title><? $APPLICATION->ShowTitle() ?></title>
		<meta name="facebook-domain-verification" content="43vndr7ex6dtjauxwdx77asylr7k4z" />
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BZ89Q"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->	
		<!-- Meta Pixel Code -->
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=558431829711547&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Meta Pixel Code -->
		<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
		<div class="bx-wrapperx" id="bx_eshop_wrap">
			<header class="bx-header">
				<div class="top_block_address">
					<div class="container">
						<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/top_adress.php"), false); ?>
					</div>
				</div>

				<div class="top_menu default">
					<div class="container">
						<div class="bx-logo">
							<a href="<?= SITE_DIR ?>">
								<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/company_logo.php"), false); ?>
							</a>
						</div>
						<div class="block_menu_adapt">
							<?
							$APPLICATION->IncludeComponent(
									"bitrix:menu", "top_multilevel", array(
								"ROOT_MENU_TYPE" => "top",
								"MAX_LEVEL" => "3",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "360000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(
								),
								"COMPONENT_TEMPLATE" => "top_multilevel"
									), false
							);
							?>
							<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/call.php"), false); ?>
						</div>
						<a href="https://line.me/R/ti/p/%40cfn9382g" target="_blank" class="mob_lineit"><img height="36" border="0" alt="เพิ่มเพื่อน" src="/images/lineit.png"></a>
						<div class="mob_menu"></div>
					</div>
				</div>
			</header>
			<div class="workarea<? if ($curPage == SITE_DIR . "index.php"): ?> index<? endif; ?>">
				<? if ($curPage != SITE_DIR . "index.php"): ?>
					<? if (file_exists($curSecH1)): ?>
						<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => $curDir . "topH1.php"), false); ?>
					<? else: ?>				
						<? if ($curDir != '/clients/' && !stristr($curDir, '/conversion/')) { ?>
							<div class="container <? if ($curPage != SITE_DIR . "index.php"): ?>pages<? endif; ?>">
								<div class="containerThin">
									<h1 class="page-title" id="pagetitle"><?= $APPLICATION->ShowTitle(false); ?></h1>
								</div>
							</div>
						<? } ?>

					<? endif; ?>
				<? endif ?>
				<? $isCatalogPage = preg_match("~^" . SITE_DIR . "catalog/~", $curPage); ?>
				