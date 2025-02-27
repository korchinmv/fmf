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
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="staff-section">
	<?
	foreach ($arResult['SECTIONS'] as &$arSection)
		{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		?>
		<h2 class="bx_catalog_text_title"><? echo $arSection['NAME']; ?></h2>
		  <div class="containerThin"><?$APPLICATION->IncludeComponent("bitrix:catalog.section", "staff", Array(
			"TEMPLATE_THEME" => "blue",
				"ADD_PICT_PROP" => "-",
				"LABEL_PROP" => "-",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"SEF_MODE" => "N",	// Включить поддержку ЧПУ
				"SEF_RULE" => "",	// Правило для обработки
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"IBLOCK_TYPE" => "content",	// Тип инфоблока
				"IBLOCK_ID" => "9",	// Инфоблок
				"SECTION_ID" => $arSection['ID'],	// ID раздела
				"SECTION_CODE" => "",	// Код раздела
				"SECTION_USER_FIELDS" => array(	// Свойства раздела
					0 => "",
					1 => "",
				),
				"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
				"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
				"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
				"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
				"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
				"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
				"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
				"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
				"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
				"PROPERTY_CODE" => array(	// Свойства
					0 => "",
					1 => "",
				),
				"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
				"PRICE_CODE" => "",	// Тип цены
				"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
				"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
				"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
				"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
				"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
				"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
				"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
				"ADD_PROPERTIES_TO_BASKET" => "N",	// Добавлять в корзину свойства товаров и предложений
				"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
				"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
				"PRODUCT_PROPERTIES" => "",	// Характеристики товара
				"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"PAGER_TITLE" => "Товары",	// Название категорий
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
				"COMPONENT_TEMPLATE" => "links",
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			),
			false
		);?></div>
	<?}
	unset($arSection);?>
</div>