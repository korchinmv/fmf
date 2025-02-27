<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("โปรโมทเว็บไซต์ผ่านตำแหน่งคำค้น (SEO by Positions) ให้ติดอันดับหน้าแรกผ่าน Google");
$APPLICATION->SetPageProperty("description", "โปรโมชั่นของเว็บไซต์ที่มีการชำระเงินผ่านตำแหน่งคำค้น – เหมาะสำหรับเว็บไซต์ที่มีสินค้าและบริการที่ต้องการให้คำค้นอยู่ในลำดับต้นมากที่สุด ข้อกำหนดของเว็บไซต์ ค่าใช้จ่าย องค์ประกอบของการทำงาน");
?> 
<div class="grey_block zindex10"> 	
	<div class="containerThin"> 		
		<p>เป้าหมายคือการทำให้จำนวนคำค้นจากคำสำคัญเว็บไซต์ (semantic core) ให้อยู่ในลำดับต้น ๆ ของการค้นหาให้มากที่สุด</p>

		<p>แผนงานนี้เป็นแผนการแบบดั้งเดิมและใช้กันอย่างแพร่หลาย เพื่อเพิ่มประสิทธิภาพ search engine optimization และยังเป็นเป็นวิธีที่เว็บไซต์เชิงการพาณิชย์ส่วนใหญ่นำมาใช้</p>

		<div class="font40 thinB">เหมาะกับใคร</div>

		<p>เหมาะสำหรับบริษัทที่มีสินค้าและบริการ สามารถอธิบายสรุปเป็นคำค้นแบบสั้น ๆ ได้ โดยปกติจะมีจำนวนหน้าเว็บประเภทนี้ไม่เกิน 1000 หน้า</p>
   	</div>
</div>

<div class="purple_block zindex9"> 	
	<div class="containerThin">	
		<div class="context-pur-block-left"> 			
			<p class="size26 thin">คุณสมบัติ</p>

			<ul class="white-marker activeContent"> 				
				<li>มีรายการคำค้นแบบเฉพาะเจาะจงให้ตรงกลุ่มเป้าหมาย</li>

				<li>โปรโมทผ่าน Google </li>

				<li>การชำระเงินขึ้นอยู่กับตำแหน่งที่ปรากฎบนผลลัพธ์การค้น</li>

				<li>ราคาของแต่ละคำค้นแต่ละคำขึ้นอยู่กับระยะเวลาที่คำค้นคำนั้นติด Top 10, Top 6 หรือ Top 3  ในผลลัพธ์ของการเสิร์ชในช่วงเวลาหนึ่งเดือน</li>
			</ul>
		</div>

		<div class="context-pur-block-right"> 			
			<p class="size26 thin">ข้อดี</p>

			<ul class="white-marker"> 				
				<li>การคิดเงินเป็นไปอย่างโปร่งใสและอยู่ในการควบคุมของลูกค้า</li>

				<li>สามารถเน้นคำค้นไปยังกลุ่มเฉพาะได้</li>

				<li>ปรับปรุงหน้ารับ (landing page) อย่างละเอียด</li>
			</ul>
		</div>

		<div class="clear"></div>
   	</div>
</div>

<div class="white_block2 zindex8"> 	
	<div class="containerThin"> 		
		<div class="font40 thinB">การดำเนินงาน</div>
		<ol> 			
			<li>เราจะสร้างคำสำคัญเว็บคุณภาพสูง</li>
			<li>เราจะวิเคราะห์คำค้นหลักและกำหนด landing page</li>
			<li>เราจะเพิ่มประสิทธิภาพการเข้าถึง landing page</li>
			<li>เราจะจัดทำบทวิเคราะห์เทคนิคของเว็บไซต์และกำจัดข้อผิดพลาด เราจะดูแลสภาพเว็บเชิงเทคนิคอยู่เป็นประจำสม่ำเสมอ</li>
			<li>เราจะวิเคราะห์การทำงานของเว็บไซต์และนำเสนอข้อแนะนำเกี่ยวกับการพัฒนาและการขยายเว็บไซต์</li>
			<li>เราจะเพิ่มความน่าเชื่อถือของการอ้างอิงเว็บไซต์ภายนอกเชิงปริมาณและคุณภาพและดูแลสภาพการทำงานของลิงค์</li>
			<li>เราจะทำงานร่วมกับลูกค้าเพื่อรับรองว่าเว็บไซต์มีเนื้อหาครอบคลุม </li>
			<li>เราจะเพิ่มอัตราคลิกลิงค์ผ่าน data markup และวิธีส่งข้อมูลรูปแบบพิเศษไปยัง search engine</li>
		</ol>
   	</div>
</div>

<div class="bottom-section"> 	
	<div class="containerThin"> 		
		<div class="font40 thinB">ราคา</div>
		<p>ราคาโปรโมทเว็บไซต์ต่อเดือนประกอบด้วยราคาคำค้นแต่ละคำ สูตรคำนวณราคามีดังนี้</p>
		<p class="violete-big-text size26">ราคาโปรโมท = ∑ ราคาคำค้น* ตำแหน่งติดอันดับ - 10</p>
		<div class="font40 thinB">What is your rate</div>
		<?
		$template = "schemes_cooperation_desktop";
		CModule::IncludeModule('fileman');
		$mobile = CLightHTMLEditor::IsMobileDevice();
		if ($mobile || strstr($_SERVER['HTTP_USER_AGENT'], 'iPad')) {
			$template = "schemes_cooperation";
		}
		?> 		
		<p>
			<?
			$APPLICATION->IncludeComponent(
					"bitrix:news.list", $template, Array(
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
				"FIELD_CODE" => array(0 => "", 1 => ""),
				"PROPERTY_CODE" => array(0 => "FEATURE_TH", 1 => "FOR_TH", 2 => "PRICE_TH"),
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
				"PARENT_SECTION" => "24",
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
				"AJAX_OPTION_ADDITIONAL" => "undefined",
						"LANG_SUFFICS" => '_TH'
					)
			);
			?>
		</p>		
   	</div>
</div>
<div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="name" content="Продвижение сайта по позициям">
    <meta itemprop="description" content="">
    <meta itemprop="category" content="Продвижение сайта по позициям">
    <meta itemprop="manufacturer" content="ООО &quot;FMF&quot;">


	<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
		<meta itemprop="lowPrice" content="15000.00">
		<meta itemprop="priceCurrency" content="THB">
		<meta itemprop="name" content="Продвижение сайта по позициям">
		<a itemprop="url" href="http://fmf.ru/seo/position/"></a>
		<div style="display: none;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="15000.00">
			<meta itemprop="priceCurrency" content="THB">
			<meta itemprop="name" content="Продвижение сайта по позициям">
			<a itemprop="url" href="http://fmf.ru/seo/position/"></a>
		</div>

	</div>

</div> 
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>