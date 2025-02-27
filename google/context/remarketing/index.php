<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("บริการ Remarketing โฆษณาแบบติดตาม เข้าถึงกลุ่มเป้าหมายแม่นยำ ราคาประหยัด");
$APPLICATION->SetPageProperty("description", "บริการทำ Remarketing ผ่าน Google Adwords โฆษณากระตุ้นการกลับมาซื้อของลูกค้า และลูกค้าที่เคยเข้ามาเว็บไซต์ของคุณ เพิ่มปริมาณยอดขายให้มากขึ้น เห็นผลดีที่สุด");
?> 
<div class="grey_block zindex10"> 	 
  <div class="containerThin"> 		 
    <p>เข้าถึงลูกค้าหลังจากที่พวกเขาได้ติดต่อกับบริษัทของคุณแล้ว ผู้ใช้จะเห็นโฆษณาคุณเมื่อเขาหรือเธอมองหาสินค้าและบริการต่าง ๆ เข้าเว็บไซต์อื่นหรือทำงานบนแอปพลิเคชันมือถือ</p>
   		 	</div>
 </div>
 	 
<div class="purple_block zindex9">	 		 	
  <div class="containerThin"> 			 		
    <div class="size40 thin">ประเภทของ Remarketing</div>
   				 		
    <div class="context-pur-block-left"> 				 			 
      <p class="size26 thin">Regular remarketing</p>
     							 			 
      <p class="font16">แสดงโฆษณาให้ผู้ใช้ที่เคยเข้าชมเว็บไซต์คุณเมื่อเขาเข้าไปยังเว็บไซต์อื่น ๆ ที่ิอยู่ในเครือข่าย</p>
     										 			 			 
      <p class="size26 thin">Dynamic remarketing</p>
     							 			 
      <p class="font16">ตัวเลือก remarketing ที่มีประสิทธิภาพมากกว่า ผู้ใช้จะเห็นโฆษณาผลิตภัณฑ์และบริการที่เขาหรือเธอสนใจในเว็บไซต์ของคุณ</p>
     			 			 
      <p class="size26 thin">Remarketing for mobile applications</p>
     							 			 
      <p class="font16">ผู้ใช้ที่เข้าชมเว็บไซต์บนมือถือหรือเปิดแอปพลิเคชั่นจะเห็นโฆษณาของคุณบนเว็บไซต์และแอปพลิเคชั่นบนมือถือ</p>
     		</div>
   							 		
    <div class="context-pur-block-right"> 				 			 
      <p class="size26 thin">Remarketing lists for search ads</p>
     							 			 
      <p class="font16">ผู้ใช้ที่เข้าเคยเข้าชมเว็บไซต์ของคุณจะเห็นโฆษณาอยู่ถัดจากผลลัพธ์การค้นหาจาก Google</p>
     										 			 
      <p class="size26 thin">Video remarketing</p>
     							 			 
      <p class="font16">ผู้ใช้ที่ชมวิดีโอหรือ Youtube Channel ของคุณจะเห็นโฆษณาในวิดีโอ YouTube เว็บไซต์ เครือข่ายมีเดียเพื่อการตลาดและในแอปพลิเคชั่น</p>
     						 						 			
      <p class="size26 thin">Email address remarketing</p>
     							 			 
      <p class="font16">คุณเพิ่มรายการอีเมลที่คุณได้รับจากลูกค้าของคุณ เมื่อพวกเขาเปิด Google Search, Youtube หรือ Gmail คุณสามารถส่งโฆษณาให้พวกเขาดูได้</p>
    	 		</div>
   							 		
    <div class="clear"></div>
   		 				
    <p>แสดงโฆษณาเกี่ยวข้องให้ผู้ใช้ที่เข้าชมเว็บไซต์ของคุณแต่ไม่ได้ซื้อสินค้าหรือบริการและเพิ่มผลตอบแทนของการลงทุนครั้งที่แล้ว ในกรณีนี้ เมื่อขั้นตอนการตัดสินใจใช้เวลานาน โฆษณาประเภทนี้จึงเป็นตัวอย่างที่ดีที่สุด</p>
   	</div>
 </div>
 	 
<div class="bottom-section prices_list"> 	 
  <div class="containerThin"> 		 
    <div class="size40 thinB">ราคา</div>
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
		"LANG_SUFFICS" => "_TH",
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
   		 
    <p class="center font35 thinB">วางใจกลยุทธ์โฆษณาเฉพาะกลุ่มกับเราแล้วคุณจะได้ลูกค้าทันที</p>
   		 
    <p></p>
   		</div>
 </div>
 
   <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Ремаркетинг">
    <meta itemprop="description" content="Ремаркетинг Google AdWords">
    <meta itemprop="category" content="Ремаркетинг">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">

 
	 <div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="30000.00">
		<meta itemprop="priceCurrency" content="THB">
		<meta itemprop="name" content="Ремаркетинг">
		<a itemprop="url" href="http://fmf.ru/google/context/remarketing/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="30000.00">
			<meta itemprop="priceCurrency" content="THB">
			<meta itemprop="name" content="Ремаркетинг">
			<a itemprop="url" href="http://fmf.ru/google/context/remarketing/"></a>
		</div>
		
	 </div>	  
</div> 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>