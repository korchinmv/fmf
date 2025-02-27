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

<div class="portfolio-detail font16">
	<?if ($arResult['PROPERTIES']['SERVICES']['VALUE_ENUM_ID'] == 24) {?>
		<div class="portfolio-first-block grey">
			<div class="containerThin">
				<img class="portfolio-detail-img" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" />
				<div class="portfolio-detail-site">
					<span class="heavi"><?=$arResult["DISPLAY_PROPERTIES"]['URL']['NAME'];?>:</span> <span><a href="http://<?=$arResult["DISPLAY_PROPERTIES"]['URL']['VALUE'];?>"><?=$arResult["DISPLAY_PROPERTIES"]['URL']['VALUE'];?></a></span>
				</div>
				
				<span class="heavi"><?=$arResult["DISPLAY_PROPERTIES"]['KLIENT']['NAME'];?>:</span> <?=$arResult["DISPLAY_PROPERTIES"]['KLIENT']['VALUE']['TEXT'];?>

				<div class="clear"></div>
				<?if($arResult["DISPLAY_PROPERTIES"]['TASK']['VALUE']):?>
				<div class="portfolio-prop portfolio-prop-first">
					<div class="portfolio-prop-name"><?=$arResult["DISPLAY_PROPERTIES"]['TASK']['NAME'];?></div><div class="portfolio-prop-val"><?=$arResult["DISPLAY_PROPERTIES"]['TASK']['VALUE'];?></div>
				</div>
				<div class="clear"></div>
				<?endif;?>
				<?if($arResult["DISPLAY_PROPERTIES"]['FEATURES']['VALUE']['TEXT']):?>
					<div class="portfolio-prop">
						<div class="portfolio-prop-name"><?=$arResult["DISPLAY_PROPERTIES"]['FEATURES']['NAME'];?></div><div class="portfolio-prop-val"><?echo html_entity_decode($arResult["DISPLAY_PROPERTIES"]['FEATURES']['VALUE']['TEXT']);?></div>
					</div>
					<div class="clear"></div>
				<?endif;?>
				<?if($arResult["DISPLAY_PROPERTIES"]['TASKFMF']['VALUE']):?>
					<div class="portfolio-prop portfolio-prop-last">
						<div class="portfolio-prop-name"><?=$arResult["DISPLAY_PROPERTIES"]['TASKFMF']['NAME'];?></div><div class="portfolio-prop-val"><?=$arResult["DISPLAY_PROPERTIES"]['TASKFMF']['VALUE'];?></div>
					</div>
					<div class="clear"></div>
				<?endif;?>
			</div>
		</div>
	<?}?>
	
	<?if ($arResult['PROPERTIES']['SERVICES']['VALUE_ENUM_ID'] == 25) {?>
		<div class="portfolio-first-block grey">
			<div class="containerThin">
				<img class="portfolio-detail-img" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" />
				<div class="portfolio-detail-site">
					<span class="heavi"><?=$arResult["DISPLAY_PROPERTIES"]['URL']['NAME'];?>:</span> <span><a href="http://<?=$arResult["DISPLAY_PROPERTIES"]['URL']['VALUE'];?>"><?=$arResult["DISPLAY_PROPERTIES"]['URL']['VALUE'];?></a></span>			
				</div>

				<span class="heavi"><?=$arResult["PROPERTIES"]['THEME']['NAME'];?>:</span> <?=$arResult["PROPERTIES"]['THEME']['VALUE'];?></br>
				
				<span class="heavi"><?=$arResult["PROPERTIES"]['REGION']['NAME'];?>:</span> <?=$arResult["PROPERTIES"]['REGION']['VALUE'];?></br> 
				
				<?
					if(is_array($arResult['PROPERTIES']['PROPS']['VALUE'])){
						foreach ($arResult['PROPERTIES']['PROPS']['VALUE'] as $arOneProp)
						{
							echo html_entity_decode($arOneProp['TEXT']); 
						}
					} 
				?>				
				<div class="clear"></div>
			</div>
		</div>
	<?}?>


	<div class="portfolio-second-block white">
		<?echo $arResult["DETAIL_TEXT"];?>
	</div>
	
	<?if ($arResult['PROPERTIES']['SERVICES']['VALUE_ENUM_ID'] == 24) {?>	
		<div class="portfolio-third-block">
			<?print_r(html_entity_decode($arResult["DISPLAY_PROPERTIES"]['DETAIL2']['VALUE']['TEXT']));?>
		</div>
	<?}?>	
	
	
	<?if ($arResult['PROPERTIES']['SERVICES']['VALUE_ENUM_ID'] == 25) 
	{?>	
			<? CModule::IncludeModule('fileman'); $mobile = CLightHTMLEditor::IsMobileDevice();?> 		
			<?if(($mobile || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) && isset($arResult["PROPERTIES"]['DETAIL2_MOBAIL']['VALUE']['TEXT'])):?>
				<div class="portfolio-third-block">
					<div class="containerThin">
						<h2 class="size40"><?=$arResult["PROPERTIES"]['NAME_OF_BLOCK_3']['VALUE']?></h2>
								<?=html_entity_decode($arResult["PROPERTIES"]['DETAIL2_MOBAIL']['VALUE']['TEXT']);?>
					</div>
				</div>		
			<?else:?> 		
				<div class="portfolio-third-block">
					<?print_r(html_entity_decode($arResult["DISPLAY_PROPERTIES"]['DETAIL2']['VALUE']['TEXT']));?>
				</div>	
			<?endif?>
	<?}?>	
	
	<div style="clear:both"></div>

	<div class="blackSection">
		<h2>Еще кейсы</h2>
		<div class="container">
		<?$GLOBALS['filter1'] = array('!ID' => $arResult['ID']);
		$APPLICATION->IncludeComponent("bitrix:news.list", "favorite", Array(
			"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "N",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_ID" => "12",	// Код информационного блока
				"NEWS_COUNT" => "5",	// Количество новостей на странице
				"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
				"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				"FILTER_NAME" => "filter1",	// Фильтр
				"FIELD_CODE" => "",	// Поля
				"PROPERTY_CODE" => "",	// Свойства
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SHOW_404" => "N",	// Показ специальной страницы
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			),
			false
		);?>
		</div>
	</div>

</div>