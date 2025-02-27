<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul id="horizontal-multilevel-menu">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
<?$marginBottom = $arItem["PARAMS"]["bottom"];
$titleItem = ($arItem["PARAMS"]["TYPE"]=='title');
?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			
			<li><a href="<?=($arItem["PARAMS"]["URL"]=='N' ? "#" : $arItem["LINK"])?>"  class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
					<li<?if ($arItem["SELECTED"]):?> class="item-selected <?if($marginBottom):?> class="marginBottom"<?endif;?>"<?else:?><?if($marginBottom):?> class="marginBottom"<?endif;?><?endif?>>
					<a href="<?=($arItem["PARAMS"]["URL"]=='N' ? "#" : $arItem["LINK"])?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

				<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<?if ($titleItem){?>
					<li class="title"><a href="javascript:void(0);"><?=$arItem["TEXT"]?></a></li>
					<?} else {?>
						<li<?if ($arItem["SELECTED"]):?> class="item-selected<?if($marginBottom):?> marginBottom<?endif;?>"<?else:?><?if($marginBottom):?> class="marginBottom"<?endif;?><?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?>	</a>
					</li>
					<?}?>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if($marginBottom):?> class="marginBottom"<?endif;?>><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>