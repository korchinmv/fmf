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
<div class="partners-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if ($arItem['ID'] == 347) continue;
	?>
	<div class="partners-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<?if(strlen($arItem["PROPERTIES"]["LINK"]['VALUE'])>0){?>
		<a href="<?=$arItem["PROPERTIES"]["LINK"]['VALUE']?>" target='_blank'>
	<?}?>
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
	<?if(strlen($arItem["PROPERTIES"]["LINK"]['VALUE'])>0){?>
		</a>
	<?}?>
	</div>
<?endforeach;?>
</div>