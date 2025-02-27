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
?><div class="clients-detail">
    <div class="clients-detail-header">
	<table><tr>
		<td>
		    <img src='<?= $arResult["PREVIEW_PICTURE"]["SRC"]; ?>' alt='<?= $arResult["NAME"]; ?>' class="logotip" />
				<div class="displayNone name"><span><?= $arResult["NAME"]; ?></span></div>
		</td><td class="clients-detail-header-text">
		    <?
		    CModule::IncludeModule('fileman');
		    $mobile = CLightHTMLEditor::IsMobileDevice();
		    ?> 		
		    <? if (!$mobile || (strstr($_SERVER['HTTP_USER_AGENT'], 'iPad') != false)) { ?>
    		    <div class="clients-detail-header-description"><span class="heavi"><?= $arResult["NAME"] ?></span></div>
		    <? } ?>
		    <div class="clients-detail-header-description"><? echo '<span class="heavi">ลูกค้า:</span> ' . $arResult['PROPERTIES']['KLIENT']['VALUE']; ?></div>
<? echo '<span class="heavi">เว็บไซต์:</span> ' . $arResult['PROPERTIES']['URL']['VALUE']; ?>
		</td></tr></table>
	<div class="clear"></div>
    </div>
    <div class="clients-detail-content">
<? echo $arResult["DETAIL_TEXT"]; ?>
	<div style="clear:both"></div>
	<div class="clients-detail-info">
	    <? echo '<span class="bold">' . $arResult['PROPERTIES']['CLIENT_NAME']['VALUE'] . '</span>'; ?>
	    <br/>
	<? echo html_entity_decode($arResult['PROPERTIES']['CLIENT_CONTACTS']['VALUE']); ?>
	</div>
<? if ($arResult["DETAIL_PICTURE"]["SRC"]): ?><a  class="clients-detail-original modalWindow" href="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>">See the original</a><? endif; ?>
	<div style="clear:both"></div>
    </div>
</div>