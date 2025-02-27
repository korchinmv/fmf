<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="favorite-list">
<?$i =0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?if ((!$USER->IsAuthorized() && $arItem["ID"]==507) || ($i >= 10)) {continue;}?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$db_props_logo = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort" => "asc"), Array("CODE"=>"LOGO"));
	if($ar_props_logo = $db_props_logo->Fetch())
    $logo = $ar_props_logo["VALUE"];
	$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>400, 'height'=>400), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
	$i++;
	?>
	<div class="favorite-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
			<img src="<?=$file["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
			<div class="favorite-text">
				<?if(strlen(CFile::GetPath($logo))>0):?>
				<img src="<?=CFile::GetPath($logo);?>"alt="<?=$arItem['NAME'];?>"/>
				<?endif;?>
				<span class="arrow" href="<?=$arItem["DETAIL_PAGE_URL"]?>"></span>
				<div class="favorite-descripation"><span><?=$arItem["NAME"];?></span></div>
			</div>
		</a>
	</div>
<?endforeach;?>
	<div class="clear"></div>
</div>
<div class="whiteButton">
	<? if ($arParams["LANG_SUFFICS"]) { ?>
		<? if ($arParams["LANG_SUFFICS"] == '_EN') {?>
		<a href="/portfolio/">All cases</a>
		<? }; ?>
		<? if ($arParams["LANG_SUFFICS"] == '_TH') {?>
		<a href="/portfolio/">เคสทั้งหมด</a>
		<? }; ?>		
	<? } else { ?>
		<a href="/portfolio/">Все кейсы</a>
	<? }; ?>
</div>
