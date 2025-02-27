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
<div class="clients-list2 clients-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	$db_props_link = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort" => "asc"), Array("CODE"=>"LINK")); ?>

	<?if($ar_props_link = $db_props_link->Fetch())
		$link = $ar_props_link["VALUE"];
		$db_props_text = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], array("sort" => "asc"), Array("CODE"=>"TEXT"));
	
	if($ar_props_text = $db_props_text->Fetch())
		$text = $ar_props_text["VALUE"]["TEXT"];
	$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);  
?>
	
	<div class="clients-item2 clients-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" title="<?=$text;?>">
		
		<?if($link):?><a href="<?=$link;?>"><?else:?><div><?endif;?>
			<img border="0" src="<?=$file['src']?>" width="<?=$file['width']?>" height="<?=$file['height']?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
			
		<?if($link):?></a><?else:?></div><?endif;?>
	
	</div>

<?endforeach;?>
	<div class="clear"></div>
</div>
