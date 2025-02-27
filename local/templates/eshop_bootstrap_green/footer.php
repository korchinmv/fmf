<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if ($curPage != SITE_DIR . "index.php" && file_exists($curSecBlack)): ?>
    <div class="blackSection">
	<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => $curDir . "bottom.php"), false); ?>
    </div>
<? elseif ($curPage != SITE_DIR . "index.php" && file_exists($curSecBlack1)): ?>
    <div class="blackSection1">
	<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => $curDir . "bottom1.php"), false); ?>
    </div>
<? endif; ?>
</div><!--//workarea-->
<div class="footerBlock"></div>
</div> <!-- //bx-wrapper -->
<footer class="bx-footer">
    <div class="bx-footer-line"></div>
    <div class="container">
	<div class="bx-footer-text"><? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/bottom_text.php"), false); ?>
	</div>
    </div>
</footer>
<div class='modalBg'>
    <div class='modaleFeedback'>
	<div class='modalTitle'>Send a request<div class='modalClose'> </div></div>
		<div class='modalTabs'>
			<span class='active'>ให้เราติดต่อกลับ</span>
			<span>ออนไลน์ฟอร์ม</span>
			<div class='clear'></div>
		</div>
	<div class='modalTabsContent'>
	    <div class='modalTabsContentFirst'>
		<?
		session_start();
		$utm_params = array();
		foreach ($_REQUEST as $key => $value) {
		    if (substr_count($key, 'utm') > 0) {
			$utm_params[$key] = $value;
		    }
		}

		if (!isset($_SESSION['refer']) && substr_count($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) == 0) {
		    $arRefer = explode('/', $_SERVER['HTTP_REFERER']);
		    $refer = str_replace('www.', '', $arRefer[2]);
		    $_SESSION['refer'] = $refer;
		}
		if (count($utm_params) > 0) {
		    $_SESSION['utm_params'] = $utm_params;
		} else if (count($_SESSION['utm_params']) > 0) {
		    $utm_params = $_SESSION['utm_params'];
		    foreach ($utm_params as $value) {
			$value = explode(': ', $value);
			$_GET[$value[0]] = $value[1];
		    }
		}
/*
		global $USER;
		if($USER->IsAdmin()){
			echo '<pre>';
		    print_r($_SESSION);
			echo '</pre>';
		}
*/
		?>
		<script id="bx24_form_inline" data-skip-moving="true">
					(function (w, d, u, b) {
						w['Bitrix24FormObject'] = b;
						w[b] = w[b] || function () {
							arguments[0].ref = u;
							(w[b].forms = w[b].forms || []).push(arguments[0])
						};
						if (w[b]['forms'])
							return;
						s = d.createElement('script');
						r = 1 * new Date();
						s.async = 1;
						s.src = u + '?' + r;
						h = d.getElementsByTagName('script')[0];
						h.parentNode.insertBefore(s, h);
					})(window, document, 'https://bx24.fmf.ru/bitrix/js/crm/form_loader.js', 'b24form');
					b24form({"id": "7", "lang": "en", "sec": "dos45t", "type": "inline", "presets": {"UTMSOURCE": "<?= $_SESSION['utm_params']['utm_source']; ?>",
							"UTMMEDIUM": "<?= $_SESSION['utm_params']['utm_medium']; ?>",
							"UTMCAMPAIGN": "<?= $_SESSION['utm_params']['utm_campaign']; ?>",
							"UTMCONTENT": "<?= $_SESSION['utm_params']['utm_content']; ?>",
							"UTMTERM": "<?= $_SESSION['utm_params']['utm_term']; ?>",
							"REFER": "<?= $_SESSION['refer']; ?>", "SITESOURCE": "fmf.co.th"}});
				</script>		    
			</div>
			<div class='modalTabsContentSecond'>
				<script id="bx24_form_inline_2" data-skip-moving="true">
					b24form({"id": "8", "lang": "en", "sec": "dqgh5c", "type": "inline_2", "presets": {"UTMSOURCE": "<?= $_SESSION['utm_params']['utm_source']; ?>",
							"UTMMEDIUM": "<?= $_SESSION['utm_params']['utm_medium']; ?>",
							"UTMCAMPAIGN": "<?= $_SESSION['utm_params']['utm_campaign']; ?>",
							"UTMCONTENT": "<?= $_SESSION['utm_params']['utm_content']; ?>",
							"UTMTERM": "<?= $_SESSION['utm_params']['utm_term']; ?>", "REFER": "<?= $_SESSION['refer']; ?>", "SITESOURCE": "fmf.co.th"}});
				</script>
			</div>
		</div> 
    </div>
</div>
<!--
<script data-skip-moving="true">
        (function(w,d,u){
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://bx24.fmf.ru/upload/crm/site_button/loader_3_6f1g9b.js');
</script>
-->
</body>
</html>
