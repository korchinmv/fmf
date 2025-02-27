<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Page not found");?>

	<div class="bx-404-container">
		<div class="bx-404-block"><img src="<?=SITE_DIR?>images/404.png" alt=""></div>
		<div class="bx-404-text-block">Incorrect address, <br/>or such a page no longer exists.</div>
		<div class="">Go back to the <a href="<?=SITE_DIR?>">main page</a> or use the site map.</div>
	</div>
	<div class="map-columns container">
		<div style="float: left;width:10%;">
			<div class="bx-maps-title">Site Map:</div>
		</div>
		<div style="float: left;width:40%;">
			<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list",
				"tree",
				array(
					"COMPONENT_TEMPLATE" => "tree",
					"IBLOCK_TYPE" => "catalog",
					"IBLOCK_ID" => "2",
					"SECTION_ID" => $_REQUEST["SECTION_ID"],
					"SECTION_CODE" => "",
					"COUNT_ELEMENTS" => "Y",
					"TOP_DEPTH" => "2",
					"SECTION_FIELDS" => array(
						0 => "",
						1 => "",
					),
					"SECTION_USER_FIELDS" => array(
						0 => "",
						1 => "",
					),
					"SECTION_URL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"ADD_SECTIONS_CHAIN" => "Y"
				),
				false
			);
			?>
		</div>

		<div style="float: left;width:40%;">
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:main.map",
				".default",
				array(
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"SET_TITLE" => "N",
					"LEVEL" => "3",
					"COL_NUM" => "2",
					"SHOW_DESCRIPTION" => "Y",
					"COMPONENT_TEMPLATE" => ".default"
				),
				false
			);?>
		</div>
		<div class="clear"></div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>