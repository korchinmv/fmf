<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? $num = 0; ?>
<?
$elements = array();
$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "CODE");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y", 'SECTION_ID' => 32);
$res = CIBlockElement::GetList(Array('sort'=>'desc', 'id'=>'desc'), $arFilter, false, false, $arSelect);
while($ob = $res->Fetch()){
	$ob["IMG"] = CFile::GetPath($ob["PREVIEW_PICTURE"]);
	$elements[]= $ob;
}
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:news.detail", "clients", array(
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "USE_SHARE" => "N",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "content_th",
    "IBLOCK_ID" => "15",
    "ELEMENT_ID" => $arResult["ITEMS"][0]["ID"],
    "ELEMENT_CODE" => "",
    "CHECK_DATES" => "Y",
    "FIELD_CODE" => array(
	0 => "PREVIEW_PICTURE",
	1 => "",
    ),
    "PROPERTY_CODE" => array(
	0 => "KLIENT",
	1 => "URL",
	2 => "",
    ),
    "IBLOCK_URL" => "",
    "DETAIL_URL" => "",
    "SET_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_BROWSER_TITLE" => "N",
    "BROWSER_TITLE" => "-",
    "SET_META_KEYWORDS" => "N",
    "META_KEYWORDS" => "-",
    "SET_META_DESCRIPTION" => "N",
    "META_DESCRIPTION" => "-",
    "SET_LAST_MODIFIED" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "N",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "USE_PERMISSIONS" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_GROUPS" => "Y",
    "PAGER_TEMPLATE" => ".default",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Page",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "SET_STATUS_404" => "N",
    "SHOW_404" => "N",
    "MESSAGE_404" => "",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "COMPONENT_TEMPLATE" => "clients",
    "AJAX_OPTION_ADDITIONAL" => "undefined"
	), false
);
?>
<div class="clientList">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if ($num == 0){?>
		<?$last = $elements[count($elements)-1];?>
		<div class="clientItem prev">
			<a href="#<?= $last["CODE"] ?>" >
				<span class="clients-arrow prev-arrow"></span>
				<img class="clients_picture" src="<?= $last["IMG"] ?>" alt="" />
				<span class="clients-text"><span class="clients-name">Previous review:<br/><span><? echo $last["NAME"] ?></span></span></span>
			</a>
		</div>
	<?} else {?>
		<div class="clientItem next" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<a href="#<?= $arItem["CODE"] ?>" >
				<span class="clients-arrow next-arrow"></span>
				<img class="clients_picture" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" />
				<span class="clients-text"><span class="clients-name">Next review:<br/><span><? echo $arItem["NAME"] ?></span></span></span>
			</a>
		</div>
	<?}?>
	<? $num++; ?>
    <? endforeach; ?>
    <div class="clear"></div>
</div>
