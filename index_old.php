<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("บริการ การตลาดออนไลน์และวางแผนกลยุทธ์ออนไลน์ (Online Marketing Strategy) โปรโมทเว็บไซต์ขายของออนไลน์ เพิ่มยอดขายให้ธุรกิจคุณ  | บริษัท เอฟเอ็มเอฟ จำกัด เอเจนซี่การตลาดออนไลน์ (Online Marketing Agency)");
$APPLICATION->SetPageProperty("description", "บริษัท เอฟเอ็มเอฟ จำกัด เอเจนซี่การตลาดออนไลน์ (Online Marketing Agency)  บริการทำการโฆษณาโปรโมทธุรกิจ ร้านค้าขายของออนไลน์และบริการ ผ่านเว็บไซต์และสื่อสังคมออนไลน์ต่างๆ ที่ปรึกษาวางแผนธุรกิจและวิเคราะห์กลยุทธ์ทางการตลาดออนไลน์ (Digital Marketing Strategy) อย่างมีประสิทธิภาพ ส่งเสริมธุรกิจของคุณให้เติบโต ติดตลาดและมียอดขายเพิ่มมากขึ้น ด้วยเทคนิค SEO, SEM, PPC, Google Adwords โดยทีมงานและผุู้เชี้ยวชาญที่มีประสบการณ์เฉพาะด้าน ");
?>
<div class="index firstBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexFirstBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index secondBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexSecondBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index thirdBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexThirdBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index fourthBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexForthBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index fifthBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexFifthBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index sixthBlock"><div class="container"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexSixthBlock.php","EDIT_TEMPLATE" => ""), false);?></div></div>
<div class="index seventhBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexSeventhBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
<div class="index eighthBlock">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file","PATH" => "/include/indexEighthBlock.php","EDIT_TEMPLATE" => ""), false);?>
	</div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>