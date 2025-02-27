<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<div class="content">
	<!--форма обратного звонка-->
	<div id="callback">
		
		<table class="mdCallback">
			<tr><td><span>Как Вас зовут</span><div class="bgInput"><input class="online_input online_input__has-error js-reach-goal__phone-order-form__input" type="text" id="callbackName" name="callbackName" value="" /></div></td></tr>
			<tr><td><span>Телефон</span><div class="bgInput"><input class="online_input online_input__has-error js-reach-goal__phone-order-form__input" type="text" id="callbackPhone" name="callbackPhone" value="" /></div></td></tr>
			<tr><td><span>Комментарий</span><div class="bgInput"><textarea class="js-reach-goal__phone-order-form__input" id="callbackText" name="komment" value=""></textarea></div></td></tr>
			<tr>
				<td class="submitButton">
					<div class="button">Отправить</div>
					<div class="onlineNote online_form">Необходимо указать Ваше имя и телефон</div>
				</td>
			</tr>
		</table>
	</div>
	<div id="callbackInfo">
		<?
		if(strlen($_POST['cbName'])!=0 && strlen($_POST['cbPhone'])!=0){
			CModule::IncludeModule("form");
			$FORM_ID=1;
			$arValues=array(
				'form_text_1' => $_POST['cbName'],
				'form_text_2' => $_POST['cbPhone'],
				'form_textarea_3' => $_POST['cbText']
			);
			$RESULT_ID = CFormResult::Add($FORM_ID, $arValues);
			$rsForm = CForm::GetByID($FORM_ID);
			$arForm = $rsForm->Fetch();
			$rsResult = CFormResult::GetByID($RESULT_ID);
			$arResult = $rsResult->Fetch();
			$arEventFields=array(
				'SIMPLE_QUESTION_359' => $_POST['cbName'],
				'SIMPLE_QUESTION_846' => $_POST['cbPhone'],
				'SIMPLE_QUESTION_602' => $_POST['cbText'],
				'RS_DATE_CREATE'=>$arResult['DATE_CREATE'],
				'RS_RESULT_ID'=>$RESULT_ID,
				'RS_FORM_ID'=>$FORM_ID,
				'SERVER_NAME'=>$_SERVER['HTTP_HOST'],
				'RS_FORM_NAME'=>$arForm['NAME']
			);
			CEvent::Send("FORM_FILLING_SIMPLE_FORM_1", "s1", $arEventFields,"N",71);
			echo '<span class="sucTextMd">Заявка на звонок отправлена.</span>';?>
			<script>
				$('body').trigger('phone_order_form--success');
			</script>
		<?}
		?>
	</div>
	<!--/форма обратного звонка-->
</div>
