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
<div class="types-sites-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="types-sites-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="types-sites-text">
			<? if(!$arParams["LANG_SUFFICS"]) { ?>
			<?echo $arItem["PREVIEW_TEXT"];?>
			<? } else {?>
			<?=$arItem["PROPERTIES"]["PREVIEW_TEXT".$arParams["LANG_SUFFICS"]]["~VALUE"]["TEXT"];?>
			<? }; ?></div>
		<div class="types-sites-shema">
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<? if ($arProperty["CODE"] != 'PREVIEW_TEXT' . $arParams['LANG_SUFFICS'] && $arProperty["CODE"] != 'NAME' . $arParams['LANG_SUFFICS'] ): ?>
				<div class="types-sites-shema-name"><?=$arProperty["NAME"]?>:</div>
				<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
					<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
				<?else:?>
					<?=html_entity_decode($arProperty["DISPLAY_VALUE"]);?>
				<?endif?>
			<?endif?>
		<?endforeach;?>
		</div>
		<div class="clear"></div>
	</div>
<?endforeach;?>
</div>
