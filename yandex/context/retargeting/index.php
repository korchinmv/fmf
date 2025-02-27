<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("FMF — стоимость ретаргетинга Яндекс — услуги настройки динамического ретаргетинга");
$APPLICATION->SetPageProperty("description", "Компания FMF — качественная настройка ретаргетинга Яндекс");
?> 
<div class="1white_block2 top zindex8"> 	 
  <div class="containerThin"> 		 
    <p>Инструмент, позволяющий демонстрировать ваши рекламные объявления той аудитории, которая посетила сайт и совершила там определенные действия. </p>
   		 
    <p>Отталкиваясь от поведения конкретного пользователя, вы можете показывать ему нужное объявление. Он увидит его на тематических площадках.</p>
   		
    <p>Технология ретаргетинга позволяет решить различные задачи продвижения путем гибкой настройки:</p>
   		 
    <ul> 			 
      <li><strong>Увеличить конверсию посетителей в клиентов,</strong>  показав побуждающие объявления тем, кто был на сайте, но не воспользовался вашим предложением.</li>
     			
      <li><strong>Увеличить количество контактов посетителя с брендом и укрепить ассоциации.</strong> Для этого тем, кто впервые побывал на сайте, можно показывать рекламу-напоминание о ваших новинках или акциях.</li>
     			
      <li><strong>Увеличить количество отзывов и рекомендаций для продукта.</strong> Тем, кто успешно совершил покупку, предлагать дополняющие товары или услуги, а также мотивировать их поделиться информацией о сайте с друзьями.</li>
     		</ul>
   		
    <p>По данным поисковой системы Яндекс конверсия при втором и последующих посещениях сайта одним и тем же пользователем повышается в среднем на 35%. Эта функция поможет любым рекламодателям повысить рентабельность инвестиций.</p>
   		 	</div>
 </div>
 
<div class="zindex6 prices_list"> 	 
  <div class="containerThin"> 		 
    <div class="font40 thinB">Стоимость</div>
   <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"schemes_cooperation",
	Array(
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
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"FEATURES",1=>"FOR",2=>"PRICE",3=>"",),
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
	)
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
    <meta itemprop="name" content="Ретаргетинг">
    <meta itemprop="description" content="Ретаргетинг Яндекс.Директ">
    <meta itemprop="category" content="Ретаргетинг">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">

 
	 <div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="30000.00">
		<meta itemprop="priceCurrency" content="RUB">
		<meta itemprop="name" content="Ретаргетинг">
		<a itemprop="url" href="http://fmf.ru/yandex/context/retargeting/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="30000.00">
			<meta itemprop="priceCurrency" content="RUB">
			<meta itemprop="name" content="Ретаргетинг">
			<a itemprop="url" href="http://fmf.ru/yandex/context/retargeting/"></a>
		</div>
		
	 </div>	  
</div> 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>