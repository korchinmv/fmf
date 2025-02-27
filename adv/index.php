<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
header('HTTP/1.1 404 Not Found');
header('Location: /404.php'); 
$APPLICATION->SetTitle("Услуги и цены");
$APPLICATION->SetTitle("Реклама в интернете");?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>