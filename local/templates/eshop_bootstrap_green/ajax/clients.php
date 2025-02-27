<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?
$res = '';
$elementCode = '';
CModule::IncludeModule("iblock");
$res = CIBlockElement::GetList(Array(), array('CODE' => $_POST['elementCode'], 'ACTIVE' => 'Y', 'SECTION_ID' => 32), array(), false, array('ID', 'IBLOCK_ID'));
$res1 = CIBlockElement::GetList(Array(), array('CODE' => $_POST['elementCode'], 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, false, array('ID', 'IBLOCK_ID'));
$element = $res1->Fetch();

if ($res > 0) {
    $elementCode = $_POST['elementCode'];
} else {
    //$elementCode = 'kia_motors';
	$elementCode = 'gr_pik';
}

$res2 = CIBlockElement::GetList(Array('sort' => 'desc'), array('IBLOCK_ID' => 15, 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, false, array('ID', 'IBLOCK_ID', 'CODE', 'PREVIEW_PICTURE', 'NAME'));
$ind = 1;
$cur_ind = 0;
while ($cur_element = $res2->GetNext()) {
    if ($cur_element['CODE'] != $elementCode) {
	$ind++;
    } else {
	$cur_ind = $ind;
	continue;
    }
}
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:news.detail", "clients", array(
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "USE_SHARE" => "N",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "content_th",
    "IBLOCK_ID" => "15",
    "ELEMENT_ID" => "",
    "ELEMENT_CODE" => $elementCode,
    "CHECK_DATES" => "Y",
    "FIELD_CODE" => array(
	0 => "PREVIEW_PICTURE",
	1 => "",
    ),
    "PROPERTY_CODE" => array(
	0 => "KLIENT",
	1 => "URL",
	2 => "",
    ),
    "IBLOCK_URL" => "",
    "DETAIL_URL" => "",
    "SET_TITLE" => "N",
    "SET_CANONICAL_URL" => "N",
    "SET_BROWSER_TITLE" => "N",
    "BROWSER_TITLE" => "-",
    "SET_META_KEYWORDS" => "N",
    "META_KEYWORDS" => "-",
    "SET_META_DESCRIPTION" => "N",
    "META_DESCRIPTION" => "-",
    "SET_LAST_MODIFIED" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "ADD_ELEMENT_CHAIN" => "N",
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "USE_PERMISSIONS" => "N",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_GROUPS" => "Y",
    "PAGER_TEMPLATE" => ".default",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Page",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "SET_STATUS_404" => "N",
    "SHOW_404" => "N",
    "MESSAGE_404" => "",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "COMPONENT_TEMPLATE" => "clients",
    "AJAX_OPTION_ADDITIONAL" => "undefined"
	), false
);
?>
<div class="clientList">
    <span id="new_reviews_ind"><?=$cur_ind?></span>
    <?
    $res2 = CIBlockElement::GetList(Array('sort' => 'desc'), array('IBLOCK_ID' => 15, 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, array('nElementID' => $element['ID'], 'nPageSize' => 1), array('ID', 'IBLOCK_ID', 'CODE', 'PREVIEW_PICTURE', 'NAME'));
    while ($elements_other = $res2->GetNext()) {
	?>
    <? if ($element['ID'] != $elements_other["ID"]): ?>
	    <div class="clientItem prev">
		<a href="#<?= $elements_other["CODE"] ?>" >
			<span class="clients-arrow prev-arrow"></span>
		    <img class="clients_picture" src="<?= CFile::GetPath($elements_other["PREVIEW_PICTURE"]); ?>" alt="<?= $elements_other["NAME"] ?>" />
		    <span class="clients-text"><span class="clients-name">Previous review:<br/><span><? echo $elements_other["NAME"] ?></span></span></span>
		</a>
	    </div>
	<? else: ?>
	    <?
	    $res21 = CIBlockElement::GetList(Array('sort' => 'asc'), array('IBLOCK_ID' => 15, 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, array('nPageSize' => 1), array('ID', 'IBLOCK_ID', 'CODE', 'PREVIEW_PICTURE', 'NAME'));
	    while ($elements_other_1 = $res21->GetNext()) {
		?>
	        <div class="clientItem prev">
	    	<a href="#<?= $elements_other_1["CODE"] ?>" >
				<span class="clients-arrow prev-arrow"></span>
	    	    <img class="clients_picture" src="<?= CFile::GetPath($elements_other_1["PREVIEW_PICTURE"]); ?>" alt="<?= $elements_other_1["NAME"] ?>" />
	    	    <span class="clients-text"><span class="clients-name">Previous review:<br/><span><? echo $elements_other_1["NAME"] ?></span></span></span>
	    	</a>
	        </div>
		<?
		break;
	    }
	    ?>
	<? endif; ?>
	<?
	break;
    }
    ?>
    <?
    $res3 = CIBlockElement::GetList(Array('sort' => 'asc'), array('IBLOCK_ID' => 15, 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, array('nElementID' => $element['ID'], 'nPageSize' => 1), array('ID', 'IBLOCK_ID', 'CODE', 'PREVIEW_PICTURE', 'NAME'));
    while ($elements_other_n = $res3->GetNext()) {
	?>
	<? if ($elements_other_n['ID'] != $element['ID']): ?>
	    <div class="clientItem next">
		<a href="#<?= $elements_other_n["CODE"] ?>" >
			<span class="clients-arrow next-arrow"></span>
		    <img class="clients_picture" src="<?= CFile::GetPath($elements_other_n["PREVIEW_PICTURE"]); ?>" alt="<?= $elements_other_n["NAME"] ?>" />
		    <span class="clients-text"><span class="clients-name">Next review:<br/><span><? echo $elements_other_n["NAME"] ?></span></span></span>
		</a>
	    </div>
	<? else: ?>
	    <?
	    $res31 = CIBlockElement::GetList(Array('sort' => 'desc'), array('IBLOCK_ID' => 15, 'ACTIVE' => 'Y', 'SECTION_ID' => 32), false, array('nPageSize' => 1), array('ID', 'IBLOCK_ID', 'CODE', 'PREVIEW_PICTURE', 'NAME'));
	    while ($elements_other_n2 = $res31->GetNext()) {
		?>
	        <div class="clientItem next">
	    	<a href="#<?= $elements_other_n2["CODE"] ?>" >
				<span class="clients-arrow next-arrow"></span>
	    	    <img class="clients_picture" src="<?= CFile::GetPath($elements_other_n2["PREVIEW_PICTURE"]); ?>" alt="<?= $elements_other_n2["NAME"] ?>" />
	    	    <span class="clients-text"><span class="clients-name">Next review:<br/><span><? echo $elements_other_n2["NAME"] ?></span></span></span>
	    	</a>
	        </div>
		<?
		break;
	    }
	    ?>
	<? endif; ?>
	<?
	break;
    }
    ?>
    <div class="clear"></div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php"); ?>