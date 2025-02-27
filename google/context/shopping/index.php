<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Google Shopping");
$APPLICATION->SetPageProperty("description", "Google Shopping เพิ่มปริมาณยอดขาย ดึงดูดลูกค้าใหม่");
?> 
<div class="top zindex8"> 	 
  <div class="containerThin"> 		 
    <p>คุณสามารถเพิ่มปริมาณยอดขายโดยใช้ Google catalog เป็นวิธีที่ง่ายต่อการแนะนำสินค้าให้กับผู้เข้าชมและดึงดูดผู้ใช้และลูกค้าใหม่</p>
   		 		 
    <div class="font40 thin">ข้อดี</div>
   		 		 
    <ol> 			 
      <li>เป็นเครื่องมือใหม่ยังไม่มีคู่แข่ง Google purchase จะสร้างลูกค้าใหม่แบบค่าใช้จ่ายไม่สูง</li>
     			 
      <li>สินค้าของคุณจะแสดงพร้อมกับภาพสวยดึงดูดสายตา ในบรรดาผลลัพธ์การค้นหาทั่วไปใน Google เครื่องมือนี้ทำให้มีข้อได้เปรียบด้านการแข่งขัน</li>
     			 
      <li>ค่าใช้จ่ายสำหรับโฆษณาต่ำกว่าบริการอื่น ๆ มาก คุณสามารถประหยัดค่าใช้จ่ายและเพิ่มยอดขายผ่านเว็บด้วย</li>
     			 
      <li>เมื่อลูกค้าคลิกที่โฆษณาสินค้า จะลิ้งค์ไปยังหน้าสินค้าแต่จะไม่ลิ้งค์ไปยังหน้าเว็บที่มีสินค้าคู่แข่ง</li>
     			 
      <li>ข้อมูลสินค้าจะปรากฎบนผลลัพธ์การค้นหาของ Google และลูกค้าหลายคนจะเห็นสินค้านี้</li>
     		</ol>
   	 		 
    <p>โฆษณาผลิตภัณฑ์ช่วยให้คุณแสดงสินค้าสู่ลูกค้าในช่วงเวลาที่เหมาะสมเมื่อมีการค้นหาสินค้าใน Google.co.th</p>
   	 	</div>
 </div>
 
<div class="zindex6 prices_list"> 	 
  <div class="containerThin"> 		 
    <p></p>
   
    <div class="font40 thinB">Price</div>
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
    <meta itemprop="name" content="Google Покупки">
    <meta itemprop="description" content="Google Покупки">
    <meta itemprop="category" content="Google Покупки">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">

 
	 <div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="30000.00">
		<meta itemprop="priceCurrency" content="THB">
		<meta itemprop="name" content="Google Покупки">
		<a itemprop="url" href="http://fmf.ru/google/context/shopping/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="30000.00">
			<meta itemprop="priceCurrency" content="THB">
			<meta itemprop="name" content="Google Покупки">
			<a itemprop="url" href="http://fmf.ru/google/context/shopping/"></a>
		</div>
		
	 </div>	  
</div> 

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>