<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Usability audit");
$APPLICATION->SetPageProperty('description','บริษัท FMF – การเพิ่มประสิทธิภาพและโปรโมทเว็บไซต์แบบที่ไม่ต้องชำระเงินล่วงหน้า');
?> <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"></link> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
 
<script>
	$(document).ready(function(){
		ws = parseInt($(window).width() / 300);
		if (ws < 2) { 
			ws = 1;
			sm = 0;	
			sw = 200;
		};
		if (ws == 2) {
			ws = 2;
			sm = 15;
			sw = 230;
		};
		if (ws >= 3) {
			ws = 3;
			sm = 30;
			sw = 260;
		};
		$('.usab_slider').bxSlider({
			auto: false,
			autoStart: false,
			autoControls: true,
			stopAutoOnClick: true,
			pager: false,
			slideMargin: sm,
			minSlides: ws,
			maxSlides: ws,
			slideWidth: sw,
			autoControls: false,
			wrapperClass: 'usab_slider_wrap',
			nextText: '',
			prevText: ''
		});
	});
</script>
 
<div class="usab_first_block"> 	 
  <div class="container"> 		 
    <h1>การตรวจสอบการใช้งาน</h1>
   		 
    <p>การประเมินจากผู้เชี่ยวชาญมืออาชีพ    
      <br />
     เราจะพัฒนาตัวบ่งชี้หลักของเว็บไซต์คุณ</p>
   		 
    <div class="context-button"><span>Send a request</span></div>
   	</div>
 </div>
 
<div class="usab_second_block"> 	 
  <div class="container"> 		 
    <p>ในสังคมสมัยใหม่ เว็บไซต์ไม่ได้ทำหน้าที่นำเสนอเพียงอย่างเดียวแต่ยังเป็นช่องทางในการดึงดูดลูกค้าอีกด้วย</p>
   	</div>
 </div>
 
<div class="usab_third_block"> 	 
  <div class="container"> 		 
    <div class="usab_preim frst"> 
      <p>เว็บไซต์จ่ายบิลด้วยตัวเองหรือไม่?</p>
     </div>
   		 
    <div class="usab_preim scnd"> 
      <p>คุณรู้สึกว่าคุณได้ก้าวไปถึงระดับสูงสุดของยอดขายบนเว็บไซต์ปัจจุบันของคุณหรือยัง?</p>
     </div>
   		 
    <div class="usab_preim thrd"> 
      <p>ช่องทางขายสินค้ามีปัญหาผิดสัดส่วนหรือไม่?</p>
     </div>
   		 
    <div class="usab_preim frth"> 
      <p>คุณต้องการเพิ่มยอดขายบนเว็บไซต์หรือไม่ ?</p>
     </div>
   		 
    <div class="usab_preim ffth"> 
      <p>ลูกค้าส่งใบคำร้อง (request) แต่ไม่ตัดสินใจซื้อ?</p>
     </div>
   		 
    <div class="usab_preim sxth"> 
      <p>คุณต้องการเพิ่มจำนวนลูกค้าประจำเพิ่มใช่หรือมา?</p>
     </div>
   		 
    <div class="clear"></div>
   		 
    <h2>เราจะช่วยคุณแก้ไขปัญหาเหล่านี้!</h2>
   	</div>
 </div>
 
<div class="usab_fourth_block"> 	 
  <div class="container"> 		 
    <h2>ราคา </h2>
   		 
    <p>เนื่องจากรายละเอียดที่แตกต่าง  
      <br />
     การตรวจสอบแต่ละครั้งจะคำนวณแยกเป็นครั้งไป</p>
   		 
    <h2>เริ่มต้นที่ <span>15 000 </span> บาท</h2>
   		 
    <div class="context-button"><span>Send a request</span></div>
   	</div>
 </div>
 
<div class="usab_fifth_block"> 	 
  <div class="container"> 		 
    <div class="usab_fff_frow"> 
      <div class="usab_fff_text"> 
        <h2>คุณต้องรอนานเท่าไหร่</h2>
       
        <p>เราส่งผู้ตรวจสอบเว็บไซต์ภายใน 5 วันทำการ หลังจากได้รับการชำระเงิน เราจะสร้างสมมุติฐานสำหรับลูกค้าแต่ละคน จากนั้นการบัญชีจะตรวจสอบ คุณไม่ได้จ่ายเงินเพื่อวิธีแก้ปัญหาแบบ one-size-fit-all เราจะช่วยตรวจเว็บไซต์และช่วยคุณเรื่องปัญหาต่าง ๆ </p>
       </div>
     </div>
   		 
    <div class="usab_fff_srow"> 
      <div class="usab_fff_text"> 
        <h2>คุณจะได้อะไรบ้าง</h2>
       
        <p>เราให้ความสำคัญกับปัญหาและสมมติฐาน เราทดสอบและวิเคราะห์ข้อมูล นอกจากนั้น ระหว่างการตรวจสอบ เราใช้ความเชี่ยวชาญของเราเพื่อสร้างกลุ่มเป้าหมายตามธีม</p>
       </div>
     </div>
   		 
    <div class="clear"></div>
   	</div>
 </div>
 
<div class="usab_sixth_block"> 	 
  <div class="container"> 		 
    <h2>Team</h2>
   		 
    <p>ทีมจะสร้างขึ้นตามปัญหาตามที่คุณต้องการ<br/></p>
   		 
    <div class="usab_pr_blox"> 			 
      <div class="usab_pr_block prfx"> 
        <p>นักวิเคราะห์เว็บไซต์</p>
       </div>
     			 
      <div class="usab_pr_block prsx"> 
        <p>ผู้ออกแบบ UX</p>
       </div>
     			 
      <div class="usab_pr_block prtx"> 
        <p>ผู้เชี่ยวชาญด้านการตลาด</p>
       </div>
     			 
      <div class="usab_pr_block prxx"> 
        <p>ผู้เชี่ยวชาญด้าน SEO</p>
       </div>
     		</div>
   	<div style="clear:both"></div>	 
    <p>พวกเขาจะให้<strong>คำแนะนำ</strong>สำหรับเว็บไซต์ของคุณ</p>
   	</div>
 </div>
 
<div class="usab_seventh_block"> 	 
  <div class="container"> 		 
    <h2>Our experience</h2>
   <?
		if(!CModule::IncludeModule("iblock")) return; 
		$res = CIBlockElement::GetProperty(11, 511, "sort", "asc", array("CODE" => "SLIDER"));
		while($ob = $res->GetNext()) {
			$VAL[] = $ob;
		};
		echo '<div class="usab_slider">';
		foreach($VAL as $o) {
			$rsFile = CFile::GetFileArray($o["VALUE"]);
			echo '<div><img src="'.$rsFile['SRC'].'" alt="'.$rsFile['NAME'].'"  /></div>';		
		};
		echo '</div>';
      ?> 	</div>
 </div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>