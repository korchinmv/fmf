<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("FMF — сертифицированное агентство контекстной рекламы — услуги настройки контекстной рекламы от 5000 руб.");
$APPLICATION->SetPageProperty("description", "Компания FMF — качественная настройка и ведение контекстных рекламных компаний в Яндекс и Google, стоимость, сроки");
?> 
<div class="page-context"> 
  <div class="grey_block zindex10"> 	 
    <div class="containerThin containerPartners"> 		 
      <div class="contextPartners"> 			 
        <div class="size40 thinB">Мы партнеры</div>
       			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"partners",
	Array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => "",
		"PROPERTY_CODE" => "",
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
		"PARENT_SECTION" => "",
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
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> 		</div>
     		 
      <div class="contextPartnersText"> 			 
        <p>Работы выполняются по всем правилам эффективной контекстной рекламной кампании:</p>
       			 
        <ul class="font20"> 				 
          <li>много ключевых слов;</li>
         				 
          <li>отдельные тексты рекламных объявлений;</li>
         				 
          <li>правильные минус-слова;</li>
         				 
          <li>своя кампания для РСЯ;</li>
         				 
          <li>продуманный скелет ключевых фраз;</li>
         			</ul>
       			 
        <p>На выходе вы получите полностью настроенную под ключ рекламную кампанию, оформленную и прошедшую модерацию в личном кабинете, логин и пароль от которого наши медиапланеры отправят на вашу почту.</p>
       		</div>
     	</div>
   </div>
 
  <div class="purple_block zindex9"> 	 
    <div class="containerThin font16"> 			 
      <div class="size40 thin">Закажите бесплатный расчет рекламной кампании</div>
     		 
      <div class="context-pur-block-left"> 			 
        <p class="size26 thin">Анализ</p>
       			 
        <p class="font16">Проводим маркетинговый анализ ваших целевых клиентов, сайта, конкурентов и текущей рекламной кампании.</p>
       			 
        <p class="size26 thin">Медиаплан</p>
       			 
        <p class="font16">На основании анализа составляем медиаплан привлечения целевых клиентов из Яндекс и Google. Медиаплан содержит прогноз количества целевого трафика, клиентов и стоимости обращения.</p>
       		</div>
     		 
      <div class="context-pur-block-right"> 			 
        <p class="size26 thin">Маркетинг</p>
       			 
        <p class="font16">Следим за вашим сайтом, анализируем поведение посетителей, улучшаем настройки рекламной кампании и вносим коррективы в ваш сайт для повышения количества заявок.</p>
       			 
        <p class="size26 thin">Экономия</p>
       			 
        <p class="font16">Каждый месяц работаем над увеличением количества приведенных целевых посетителей в соответствии с медиапланом. При этом стоимость кампании для вас остается неизменной.</p>
       		</div>
     		 
      <div class="clear"></div>
     		 
      <div class="context-button"><span>Заказать</span></div>
     	</div>
   </div>
 
  <div class="grey_block zindex8"> 	 
    <div class="containerThin"> 		 
      <p>На сегодняшний день контекстная реклама является одним из наиболее эффективных инструментов по привлечению посетителей на сайт и повышению продаж через сеть интернет.</p>
     		 
      <div class="size40 thinB">Преимущества контекстной рекламы:</div>
     		 
      <div class="context-image"><img src="/images/context_img.png" alt="Контекстная реклама FMF"  /></div>
     		 
      <ul class="font20"> 			 
        <li>направленность на целевую аудиторию;</li>
       			 
        <li>географический и временной таргетинг;</li>
       			 
        <li>гарантия позиций;</li>
       			 
        <li>возможность оперативно изменять настройки;</li>
       			 
        <li>быстрота результата;</li>
       			 
        <li>вы можете контролировать все расходы на рекламную кампанию;</li>
       			 
        <li>стоимость контекстной рекламы может меняться в зависимости от бюджета кампании;</li>
       			 
        <li>прозрачность результата;</li>
       		</ul>
     		 
      <p>Разработка и ведение рекламной кампании в интернете - это сложные процессы, имеющие массу нюансов. «FMF» имеет большой опыт реализации успешных рекламных кампаний и предлагает соответствующие услуги в любых системах. </p>
     		 
      <br />
     		 
      <br />
     		 
      <div class="size40 thinB">Конкурентные преимущества FMF 
        <br />
       </div>
     		 
      <ol> 			 
        <div class="context-grey-block-left"> 				 
          <li>Наши специалисты детально изучают отраслевую специфику вашего бизнеса для определения целевой аудитории, конкурентной среды, продукта и уникальности Вашего предложения.</li>
         				 
          <li>Имеем исключительный опыт проведения масштабных и успешных рекламных кампаний в схожих тематиках.</li>
         				 
          <li>Составляем оптимальное семантическое ядро на основании бюджета, целей и задач Вашей рекламной кампании.</li>
         			</div>
       			 
        <div class="context-grey-block-right"> 				 
          <li>Гарантируем прозрачность рекламной кампании (доступ к веб-аналитике в любое время) и прогнозируемость показов, кликов, CTR, цены за клик.</li>
         				 
          <li>Ведем постоянную работу с объявлениями, оперативно реагируя на любые изменения, такие как актуальные скидки и специальные предложения.</li>
         				 
          <li>Используем специальные автоматизированные системы, позволяющие отслеживать и корректировать ставки в режиме реального времени (каждые 5 минут) по заданным стратегиям. С нами вы всегда платите по нижней границе для нахождения на выбранной рекламной позиции.</li>
         			</div>
       		</ol>
     		 
      <div class="clear"></div>
     	</div>
   </div>
 
  <div class="white_block zindex7"> 	 
    <div class="containerThin"> 		 
      <div class="size40 thinB">Выполняемые работы</div>
     		 
      <div class="page-tabs"> 			 
        <div class="page-tabs-title activeTab"><span>Планирование и подготовка</span></div>
       			 
        <div class="page-tabs-title"><span>Запуск, мониторинг и оптимизация</span></div>
       			 
        <div class="clear"></div>
       			 
        <ul class="page-tabs-content activeContent"> 				 
          <li>анализ сегмента рынка;</li>
         				 
          <li>подбор ключевых слов с учетом планируемого бюджета;</li>
         				 
          <li>составление эффективных текстов объявлений;</li>
         				 
          <li>определение целевых страниц объявлений;</li>
         				 
          <li>подбор оптимальной стратегии размещения для каждой рекламной кампании;</li>
         				 
          <li>определение KPI (ключевого показателя эффективности);</li>
         				 
          <li>разработка виртуальной визитки;</li>
         			</ul>
       			 
        <ul class="page-tabs-content"> 				 
          <li>запуск рекламной кампании;</li>
         				 
          <li>ежедневная корректировка ставок;</li>
         				 
          <li>подключение систем интеллектуального управления ставками с использованием API Яндекса;</li>
         				 
          <li>настройка счетчиков Google Analytics и Яндекс.Метрики для мониторинга эффективности кампании;</li>
         				 
          <li>работа над улучшением показателя CTR и повышением конверсии;</li>
         				 
          <li>проведение пост-клик анализа;</li>
         				 
          <li>А/Б тестирование кампаний/объявлений;</li>
         				 
          <li>совершенствование рекламной кампании для повышения CTR;</li>
         				 
          <li>персональный менеджер;</li>
         				 
          <li>телефонная поддержка;</li>
         				 
          <li>предоставление отчетов и рекомендаций;</li>
         				 
          <li>консультации по возникающим вопросам;</li>
         			</ul>
       		</div>
     	</div>
   </div>
 
  <div class="zindex6 prices_list"> 	 
    <div class="containerThin"> 		 
      <p></p>
     		 
      <div class="size40 thinB">Стоимость</div>
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
       			<img src="/images/shape.png" alt="shape"  /> 		</p>
     		 
      <p class="center font35 thinB">Размещая контекстную рекламу через нас, 
        <br />
       вы получаете клиентов сразу после начала работы</p>
     		 
      <p></p>
     	</div>
   </div>
 </div>
 
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Контекстная реклама">
    <meta itemprop="description" content="Ручная настройка контекстной рекламы под ключ с гарантией результата">
    <meta itemprop="category" content="Контекстная реклама">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">

 
	 <div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="30000.00">
		<meta itemprop="priceCurrency" content="RUB">
		<meta itemprop="name" content="Контекстная реклама">
		<a itemprop="url" href="http://fmf.ru/context/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="30000.00">
			<meta itemprop="priceCurrency" content="RUB">
			<meta itemprop="name" content="Контекстная реклама">
			<a itemprop="url" href="http://fmf.ru/context/"></a>
		</div>
		
	 </div>	  
</div> 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>