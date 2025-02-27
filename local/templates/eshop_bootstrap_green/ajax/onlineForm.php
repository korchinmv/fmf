<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<div class="content">
	<!--форма онлайн заявки-->
	<div id="online">
		<table class="mdOnline">
			<tr><td>
				<div class="onlineRow50">
					<span>Как Вас зовут?</span>
					<div class="bgInput">
						<input class="online_input online_input__has-error js-reach-goal__services-order-form__input" type="text" id="onlineName" name="onlineName" value="" />
					</div>
					<span>Телефон</span>
					<div class="bgInput">
						<input class="online_input online_input__has-error js-reach-goal__services-order-form__input" type="text" id="onlinePhone" name="onlinePhone" value="" />
					</div>
				</div>
				<div class="onlineRow50">
					<span>Эл. почта</span><div class="bgInput"><input class="js-reach-goal__services-order-form__input type="text" id="onlineMail" name="onlineMail" value="" /></div>
					<span>Адрес сайта</span><div class="bgInput"><input class="js-reach-goal__services-order-form__input type="text" id="onlineSite" name="onlineSite" value="" /></div>
				</div>
				<div class="clear"></div>
			</td></tr>
			<tr><td><span>Какие услуги Вас интересуют?</span>
				<div>
					<div class="onlineRow30">
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="create" id="create" />Создание сайта</label>
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="promotion" id="promotion" />Продвижение сайта</label>
					</div>
					<div class="onlineRow30">
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="context" id="context" />Контекстная реклама</label>
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="conversion" id="conversion" />Увеличение конверсии</label>
					</div>
					<div class="onlineRow30">
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="internet" id="internet" />Реклама в интернете</label>
						<label><input class="js-reach-goal__services-order-form__input" type="checkbox" name="other" id="other" />Другое</label>
					</div>
					<div class="clear"></div>
				</div>
			</td></tr>
			<tr><td><div class="bgInput"><textarea class="js-reach-goal__services-order-form__input" id="onlineKomment" name="onlineKomment" placeholder="Описание Вашей задачии"></textarea></div></td></tr>
			<tr><td class="submitButton"><div id="services_order_form" class="button">Отправить заявку</div><div class="onlineNote online_form2">Необходимо указать Ваше имя и телефон</div></td></tr>
		</table>
	</div>
	<div id="onlineInfo">
		<?
		if(strlen($_POST['onlName'])!=0 && strlen($_POST['onlPhone'])!=0){
			$services=array();
			$services=$_POST['onlServ'];
			CModule::IncludeModule("form");
			$FORM_ID=2;
			$arValuesOnl=array(
				'form_text_4' => $_POST['onlSite'],
				'form_text_7' => $_POST['onlName'],
				'form_text_8' => $_POST['onlPhone'],
				'form_text_9' => $_POST['onlMail'],
				'form_checkbox_SIMPLE_QUESTION_843'=>$_POST['onlServ'],
				'form_textarea_16' => $_POST['onlKomment']
			);
			$RESULT_ID = CFormResult::Add($FORM_ID, $arValuesOnl);
			$rsForm = CForm::GetByID($FORM_ID);
			$arForm = $rsForm->Fetch();
			$rsResult = CFormResult::GetByID($RESULT_ID);
			$arResult = $rsResult->Fetch();
			$arEventFields=array(
				'SIMPLE_QUESTION_645' => $_POST['onlSite'],
				'SIMPLE_QUESTION_304' => $_POST['onlName'],
				'SIMPLE_QUESTION_438' => $_POST['onlPhone'],
				'SIMPLE_QUESTION_842' => $_POST['onlMail'],
				'SIMPLE_QUESTION_843'=>$_POST['onlServMail'],
				'SIMPLE_QUESTION_844' => $_POST['onlKomment'],
				'RS_DATE_CREATE'=>$arResult['DATE_CREATE'],
				'RS_RESULT_ID'=>$RESULT_ID,
				'RS_FORM_ID'=>$FORM_ID,
				'SERVER_NAME'=>$_SERVER['HTTP_HOST'],
				'RS_FORM_NAME'=>$arForm['NAME']
			);
			CEvent::Send("FORM_FILLING_SIMPLE_FORM_2", "s1", $arEventFields,"N",72);
			if($RESULT_ID){?>
				<span class="sucTextMd">Заявка принята.<br/>Мы свяжемся с Вами в ближайшее время.</span>
				<script>
					$('body').trigger('services_order_form--success');
				</script>
			<?}

		}
		?>
	</div>
	<!--/форма онлайн заявки-->
</div>