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
<div class="schemes-list">
	<?
	$count = count($arResult["ITEMS"]);
	foreach ($arResult["ITEMS"] as $arItem){
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="schemes-item default <?= ($count == 1) ? 'j_one' : '' ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<? if (strlen($arItem["PROPERTIES"]['NAME' . $arParams['LANG_SUFFICS']]['VALUE'])): ?>
				<div class="schemes-name thin"><? echo html_entity_decode($arItem["PROPERTIES"]['NAME' . $arParams['LANG_SUFFICS']]['VALUE']); ?></div>
			<? endif; ?>
				
			<div class="schemes-description">
				<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
					<? if ($arProperty["CODE"] != 'PRICE' . $arParams['LANG_SUFFICS']): ?>
						<div class="schemes-text<? if ($arProperty["CODE"] == 'FEATURES' . $arParams['LANG_SUFFICS']): ?> features<? elseif ($arProperty["CODE"] == 'FOR' . $arParams['LANG_SUFFICS']): ?> effective<? endif; ?>">
							<div class="title_violet heavi"><?= $arProperty["NAME"] ?></div>
							<div class="font16">
								<? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
									<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
								<? else: ?>
									<?= $arProperty["DISPLAY_VALUE"]; ?>
								<? endif ?>
							</div>
						</div>
					<? else: ?>
						<div class="schemes-link"><a href="<?= $arItem["PROPERTIES"]["LINK" . $arParams['LANG_SUFFICS']]["VALUE"] ?>">
							<?if($arParams['LANG_SUFFICS'] == '_EN') { ?>
							More information 
							<? } elseif($arParams['LANG_SUFFICS'] == '_TH') {?>
							<? } else {?>
							Подробнее
							<? }; ?>
						</a></div>
						<div class="schemes-price-table">
							<div class="schemes-price">
								<? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
									<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
								<? else: ?>
									<?= $arProperty["DISPLAY_VALUE"]; ?>
								<? endif ?>
							</div>
						</div>
					<? endif; ?>
				<? endforeach; ?>

				<? if (
					isset($arItem["PROPERTIES"]['DESCR' . $arParams['LANG_SUFFICS']]['~VALUE']['TEXT'])
					&& strlen($arItem["PROPERTIES"]['DESCR' . $arParams['LANG_SUFFICS']]['~VALUE']['TEXT'])
			): ?>
					<div class="schemes-text features"><?= $arItem["PROPERTIES"]['DESCR' . $arParams['LANG_SUFFICS']]['~VALUE']['TEXT']; ?></div>
				<? endif; ?>
			</div>
		</div>
	<? } ?>
	<div class="clear"></div>
</div>
