<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("FMF — сертифицированное агентство Яндекс.Директ — заказать настройку Яндекс.Директ ");
$APPLICATION->SetPageProperty("description", "Компания FMF — качественная настройка и ведение контекстных рекламных компаний в Яндекс, цены, сроки");
?> 
<div class="1white_block2 top zindex8"> 	 
  <div class="containerThin"> 		 
    <p>На Яндексе люди ищут разные товары и услуги. В ответ им можно предложить хорошее и уместное решение — контекстные объявления в результатах поиска. Такая реклама точно попадает в интерес пользователя, прямо отвечая на его запрос подходящим рекламным предложением.</p>
   		 		 
    <div class="font40 thin">Важные преимущества контекстной рекламы:</div>
   		 
    <ol> 			 
      <li>Максимально точное попадание в целевую аудиторию и под конкретный запрос</li>
     			
      <li>Вы платите только за клики.</li>
     			
      <li>Моментальная отдача. Результат будет виден сразу после запуска</li>
     			
      <li>Гибкие настройки по геотаргетингу и целевым запросам</li>
     			
      <li>Сверхприбыль в некоторых тематиках</li>
     		</ol>
   		 		 
    <p><strong>Яндекс Директ является очень мощным и эффективным источником трафика при правильных настройках. Доля Яндекса в интернет-поиске России составляет 57% рынка. Каждый день около двадцати миллионов пользователей вводят в Яндекс свои поисковые запросы.</strong></p>
   		 	</div>
 </div>
 
<div class="zindex6 prices_list"> 	 
  <div class="containerThin"> 		 
    <p></p>
   
    <div class="font40 thinB">Стоимость</div>
   <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"schemes_cooperation", 
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "FEATURES",
			1 => "FOR",
			2 => "PRICE",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "23",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "schemes_cooperation",
		"AJAX_OPTION_ADDITIONAL" => "undefined"
	),
	false
);?> 		 		
    <p class="center">
      <br />
    <img src="/images/shape.png" alt="shape"  /></p>
   		
    <p class="center font35 thinB">Размещая контекстную рекламу через нас,
      <br />
     		 вы получаете клиентов сразу после начала работы.</p>
   		
    <p></p>
   		</div>
 </div>
 
<div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Яндекс.Директ">
    <meta itemprop="description" content="Яндекс.Директ. Поисковый контекст">
    <meta itemprop="category" content="Яндекс.Директ">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">

 
	 <div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="30000.00">
		<meta itemprop="priceCurrency" content="RUB">
		<meta itemprop="name" content="Яндекс.Директ">
		<a itemprop="url" href="http://fmf.ru/yandex/context/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="30000.00">
			<meta itemprop="priceCurrency" content="RUB">
			<meta itemprop="name" content="Яндекс.Директ">
			<a itemprop="url" href="http://fmf.ru/yandex/context/"></a>
		</div>
		
	 </div>	  
</div> 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>