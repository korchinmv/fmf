<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ข้อมูลการติดต่อ");
$APPLICATION->SetPageProperty('title','Contacts');
$APPLICATION->SetPageProperty("description", "FMF – ข้อมูลการติดต่อ: ที่อยู่ หมายเลขโทรศัพท์ อีเมล์");
?> 
<div class="container pages"> 	 
  <div class="containerThin"> 		 
    <div class="contacts_left_block"> 			<span class="bold">E-mail:</span> 			 
      <div class="staff-mail"><a href="mailto:info@fmf.co.th" >info@fmf.co.th</a> - general requests</div>
     			 
      <div class="staff-mail"><a href="mailto:post@fmf.co.th" >post@fmf.co.th</a> - customer support service</div>
     		</div>
   		 	 
    <div class="clear"></div>
   	</div>
 </div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/contacts_address.php"
	)
);?> 
 
<div class="contacts_map bangkok">
<iframe src="/include/bangkok_google_map.php" id="gmb" height="550px" style="border:0;width:100%;min-height:550px;" border="0" allowfullscreen=""></iframe>
</div>
<?/*
<div class="contacts_map moscow"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"fmf",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.74268439952974;s:10:\"yandex_lon\";d:37.623494605802996;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.625254134918;s:3:\"LAT\";d:55.74248164764;s:4:\"TEXT\";s:43:\"FMF###RN###Moscow###RN###B. Ordynka str, 17\";}}}",
		"MAP_WIDTH" => "3000",
		"MAP_HEIGHT" => "550",
		"CONTROLS" => array(),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DRAGGING",),
		"MAP_ID" => "",
		"LOCALE" => "En",
		"COMPONENT_TEMPLATE" => "fmf"
	)
);?></div>
 
<div class="contacts_map samara"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"fmf",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.20813518763674;s:10:\"yandex_lon\";d:50.151306365346;s:12:\"yandex_scale\";i:13;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:50.214013880951;s:3:\"LAT\";d:53.210695124388;s:4:\"TEXT\";s:49:\"FMF###RN###Samara###RN###Sovetskoy Armii str, 121\";}i:1;a:3:{s:3:\"LON\";d:50.142707609787;s:3:\"LAT\";d:53.204917457458;s:4:\"TEXT\";s:42:\"FMF###RN###Samara###RN###Michurina str, 21\";}}}",
		"MAP_WIDTH" => "3000",
		"MAP_HEIGHT" => "550",
		"CONTROLS" => array(),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DRAGGING",),
		"MAP_ID" => "",
		"LOCALE" => "En",
		"COMPONENT_TEMPLATE" => "fmf"
	)
);?></div>
*/?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>