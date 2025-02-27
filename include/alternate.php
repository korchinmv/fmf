<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); 
// тут будем собирать массив для вывода alternate в зависимости от поддомена, с учетом расхождений в материалах
$r_uri = $_SERVER['REQUEST_URI'];

if ($_GET['test_uri']) {
	$r_uri = $_GET['test_uri'];
}
// языковые константы
$langs = array('ru', 'th', 'en-th');

// список сайтов
$regions = array('fmf.ru', 'fmf.co.th', 'en.fmf.co.th');

// матрица для портфолио. Собираем по одинаковым значением поля CODE
$portfolio_ru = array();
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "CODE");
$arFilter = Array("IBLOCK_ID"=>5, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$portfolio_ru[$arFields['CODE']] = array('ID' => $arFields['ID']);
}

$portfolio_th = array();
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "CODE");
$arFilter = Array("IBLOCK_ID"=>14, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$portfolio_th[$arFields['CODE']] = array('ID' => $arFields['ID']);
}

$portfolio_en = array();
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "CODE");
$arFilter = Array("IBLOCK_ID"=>12, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	$portfolio_en[$arFields['CODE']] = array('ID' => $arFields['ID']);
}

$portfolio = array();
foreach ($portfolio_ru as $key => $p) {
	$portfolio[] = array($p['ID'], $portfolio_th[$key]['ID'], $portfolio_en[$key]['ID']);
}

// список редиректов
$redirects = array(
	array('/context/', '/ad/', '/ad/'),
	array('/seo/shop/', '/seo/ecommerce/', '/seo/ecommerce/')
);

$result = '';
if (stristr($r_uri, '/yandex/') == true) {
	$result = '<link rel="alternate" hreflang="'.$langs[0].'" href="https://'.$regions[0].$r_uri.'" />'."\n";
} elseif(stristr($r_uri, '/portfolio/') == true && $r_uri != '/portfolio/') {
	$act_port = explode('/', $r_uri);
	foreach ($regions as $key => $r) {
		foreach ($portfolio as $portf) {
			if (in_array($act_port[2], $portf, true)) {
				if (!is_null($portf[$key])) {
					$result .= '<link rel="alternate" hreflang="'.$langs[$key].'" href="https://'.$r.'/portfolio/'.$portf[$key].'/" />'."\n";
				}				
			}
		}
	}
} else {	
	foreach ($regions as $key => $r) {
		foreach ($redirects as $red) {
			if (in_array($r_uri, $red, true)) {
				$r_uri = $red[$key];
			}			
		}
		$result .= '<link rel="alternate" hreflang="'.$langs[$key].'" href="https://'.$r.$r_uri.'" />'."\n";
	}
}
unset($redirects, $portfolio, $regions, $langs, $r_uri);
echo $result;