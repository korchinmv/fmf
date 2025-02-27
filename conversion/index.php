<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Web analytics");
$APPLICATION->SetPageProperty('description','บริการทำ Web analytics วิเคราะห์เว็บไซต์ สร้างกลยุทธ์ทางการตลาดให้มีประสิทธิภาพ');
?> 
<script>
	$(document).ready(function () {
		if ($(window).width() < 768) {
			$('.sto_wal_tab').on('click', '.sto_wal_tab_title', function () {
				type = $(this).attr('data-type');
				if ($(this).hasClass('active')) {
					$(this).toggleClass('active');
					$(this).parent().find('.sto_wal_tab_body').slideToggle(500);
				} else {
					$('.sto_wal_tab_body').slideUp(500);
					$('.sto_wal_tab_title').removeClass('active');
					$(this).toggleClass('active');
					$(this).parent().find('.sto_wal_tab_body').slideToggle(500);
				}
				;
			});
		}
		;
	});
</script>

<div class="conv_first_block"> 	 
	<div class="container"> 		 
		<h1>การวิเคราะห์เว็บไซต์</h1>

		<p>สนับสนุนการตลาดให้เว็บไซต์คุณรายเดือน</p>

		<div class="context-button" data-place="page_top"><span>Send a request</span></div>
   	</div>
</div>

<div class="conv_second_block"> 	 	 
	<div class="container"> 		 
		<div class="csn_ub"> 			 
			<h2>คุณอยากมีเว็บไซต์ที่ทำเงินให้คุณได้หรือเปล่า?</h2>

			<p>เรามีบริการเต็มรูปแบบเพื่อการทำการตลาดออนไลน์ซึ่งมีพื้นฐานจากการวิเคราะห์ธุรกิจทั้งหมดและสร้างกลยุทธ์การตลาดที่เหมาะสม</p>

			<div class="prin_prib_blox"> 				 
				<div class="prin_prib_block frst"> 					 
					<p><strong>Integrated website audit</strong>บริการตรวจสอบเต็มรูปแบบ ได้แก่ ตรวจ SEO ด้านการใช้งาน ด้านเทคนิค และด้านการตลาด</p>
				</div>

				<div class="prin_prib_block scnd"> 					 
					<p><strong>KPI management</strong>คำนวณต้นทุน KPI ของเว็บไซต์เพื่อบริหารกำไรของโครงการคุณ</p>
				</div>

				<div class="prin_prib_block thrd"> 					 
					<p><strong>Configuration of analytic systems</strong>ติดตั้งเครื่องมือวิเคราะห์ Google ตั้งค่าตามเป้าหมายของคุณ</p>
				</div>

				<div class="prin_prib_block frfth"> 					 
					<p><strong>Monthly reports</strong>เพิ่มการคำนวณวิเคราะห์ที่แนะนำสำหรับการเพิ่ม KPI ให้กับเว็บไซต์คุณ</p>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="csn_db"> 			 
			<h2>ราคาบริการวิเคราะห์เว็บไซต์</h2>

			<div class="sto_wal_tabs"> 				 
				<div class="sto_wal_tab"> 					 
					<div class="sto_wal_tab_title" data-type="light">Basic 
						<br />
					</div>

					<div class="sto_wal_tab_body"> 						 
						<div class="sto_wal_tab_body_ul"> 							 
							<ul> 								 
								<li>ติดตั้งตัววัดสถิติ</li>

								<li>ปรับแต่งและติดตั้งระบบติดตามการเรียกใช้</li>

								<li>รายงานประจำเดือน</li>

								<li>วัดผลประสิทธิภาพของช่องทางโฆษณา</li>
							</ul>
						</div>

						<div class="sto_wal_tab_body_btn"> 							 
							<p><strong>15,000 </strong> บาท</p>

							<div class="context-button" data-place="price_block" data-price="15000"><span>สั่งซื้อ</span></div>
						</div>
					</div>
				</div>

				<div class="sto_wal_tab"> 					 
					<div class="sto_wal_tab_title" data-type="middle">Standard</div>

					<div class="sto_wal_tab_body"> 						 
						<div class="sto_wal_tab_body_ul"> 							 
							<ul> 								 
								<li>ติดตั้งตัววัดสถิติ</li>

								<li>ปรับแต่งและติดตั้งระบบติดตามการเรียกใช้</li>

								<li>ติดตั้งระบบวิเคราะห์หลังคลิก มีการแสดงสรุปและคำแนะนำในรายงานรายเดือน</li>

								<li>ให้คำปรึกษาด้านเทคนิคในการเพิ่มประสิทธิภาพการใช้งานในแต่ละรายงาน</li>

								<li>รายงานประจำเดือนเพิ่มเติม</li>
							</ul>
						</div>

						<div class="sto_wal_tab_body_btn"> 							 
							<p><strong>25 000</strong> บาท</p>

							<div class="context-button" data-place="price_block" data-price="25000"><span>สั่งซื้อ</span></div>
						</div>
					</div>
				</div>

				<div class="sto_wal_tab"> 					 
					<div class="sto_wal_tab_title" data-type="high">Advanced</div>

					<div class="sto_wal_tab_body"> 						 
						<div class="sto_wal_tab_body_ul"> 							 
							<ul> 								 
								<li>ติดตั้งตัววัดสถิติ</li>

								<li>สร้างและวิเคราะห์ Sale funnel ในแต่ละช่องทางการขายทุกช่องทางเพื่อเพิ่มยอดขาย</li>

								<li>ปรับแต่งและติดตั้งระบบติดตามการโทร บริการโทรกลับและให้คำปรึกษาออนไลน์</li>

								<li>การวิเคราะห์กลยุทธ์ลูกค้าและโปรโมชั่น</li>

								<li>การวิเคราะห์คู่แข่ง</li>

								<li>วิเคราะห์โครงการโฆษณาออนไลน์ ทำข้อเสนอและข้อสรุปเพื่อเพิ่มประสิทธิภาพโดยจะมีให้ดูในรายงานประจำเดือน</li>

								<li>สนับสนุนด้านเทคนิคขั้นสูงในการเพิ่มประสิทธิภาพการใช้สำหรับแต่ละรายงาน</li>

								<li>สร้างการทดสอบทางเทคนิคสำหรับการเทส A/B</li>

								<li>มีการประเมินขั้นสูงให้พร้อมแอปพลิเคชั่นพร้อมประเมินประสิทธิผลของช่องทางโฆษณา</li>
							</ul>
						</div>

						<div class="sto_wal_tab_body_btn"> 							 
							<p><strong>40 000</strong> บาท</p>

							<div class="context-button" data-place="price_block" data-price="40000"><span>สั่งซื้อ</span></div>
						</div>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</div>
   	</div>
</div>

<div class="conv_third_block"> 	 	 
	<div class="container"> 	 		 
		<div class="ctn_ub"> 			 
			<h2>ขั้นตอนการนำส่ง</h2>

			<div class="eta_wor_blox"> 				 
				<div class="eta_wor_block frst"> 
					<p><strong>สร้างแผนพัฒนา</strong>สร้างนิยาม KPI ของโปรเจค สามารเลือกเกณฑ์การยอมรับและเป้าหมายของผลลัพธ์ได้ สร้างแผนการโปรโมทโดยอิงตามสิ่งสสำคัญสำหรับธุรกิจของคุณ</p>
				</div>

				<div class="eta_wor_block scnd"> 
					<p><strong>บริการติดตั้งและปรับแต่งการวิเคราะห์ระบบเว็บไซต์</strong>เครื่องมือที่จะใช้ในการวัดประสิทธิผลของโปรเจคจะใช้ตามภาพรวมของโปรเจคและปัจจัยอื่นๆ รวมการติดตั้ง Google Analytics ไว้ด้วย</p>
				</div>

				<div class="eta_wor_block thrd"> 
					<p><strong>การตรวจสอบเว็บไซต์ขั้นพื้นฐาน</strong>วิเคราะห์ผลหลังคลิกของโปรเจค วิเคราะห์การใช้งานเว็บไซต์ สร้างและวิเคราะห์ sales funnel ทุกช่องทางการขายเพื่อเพิ่มยอดขาย</p>
				</div>

				<div class="eta_wor_block frth"> 
					<p><strong>สร้างและทดสอบสมมติฐานทางการตลาดของโปรเจค</strong>วิเคราะห์การจัดการโฆษณาออนไลน์ แสดงข้อสรุปและข้อเสนอแนะสำหรับการเพิ่มประสิทธิภาพในรายงานประจำเดือน</p>
				</div>

				<div class="eta_wor_block ffth"> 
					<p><strong>รายงานวิเคราะห์ประจำเดือน</strong>สร้างรายงานวิเคราะห์ประจำเดือนให้สำหรับแอปพลิเคชั่น ทดสอบประสิทธิภาพของช่องทางโฆษณา วิเคราะห์การปรับปรุงสำหรับโปรเจค ทดสอบขั้นตอนการทำงาน</p>
				</div>
			</div>
		</div>

		<div class="ctn_db"> 			 
			<p>การทำงานอย่างพิถีพิถันในโปรเจคจะช่วยให้คุณได้ผลลัพธ์ต้องการได้ภายใน 6-12 เดือน</p>
			<span class="atdtrauoc"></span> 			 
			<h3>Results</h3>

			<p>การขายเพิ่มขึ้นจากเว็บไซต์ เพิ่มผลลัพธ์ที่ต้องการสำหรับ KPI ที่กำหนด<br/>โปรเจคที่เลือก</p>
		</div>
	</div>
</div>

<div class="conv_fourth_block"> 	 	 
<div class="clear"></div>
<h3 class="thin size60">เคสทั้งหมด</h3>
<div>
<?CModule::IncludeModule('fileman'); $mobile = CLightHTMLEditor::IsMobileDevice();?> 	

<?if($mobile){
	$news_count = 3 ;
}
elseif (strstr($_SERVER['HTTP_USER_AGENT'],'iPad') != false) {
	$news_count = 6;
}
else {
	$news_count = 10;	
}
?>	

<?$GLOBALS['filter_fav'] = array('PROPERTY_FAVORITES_VALUE' => 'Да');
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"favorite", 
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content_en_th",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => $news_count,
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "filter_fav",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/portfolio/#ELEMENT_ID#/",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"LANG_SUFFICS" => "_TH",
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
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "favorite",
		"AJAX_OPTION_ADDITIONAL" => "undefined"
	),
	false
);?></div>

</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>