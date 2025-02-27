<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    die();
}

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$site = $_REQUEST['site'];
$service = $_REQUEST['service'];
$age = $_REQUEST['age'];
$recaptchaResponse = $_POST['g-recaptcha-response'];

if (!$name || !$email || !$phone || !$site || !$service || !$recaptchaResponse) {
    http_response_code(400);
    die();
}

$recaptchaSecret = '6LfI9EopAAAAAHw5xEan_yAOmXseCLHcf8m6lCKB';

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptchaSecret . "&response=" . $recaptchaResponse);
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"]) {
    http_response_code(400);
    die();
}

$arFields = array(
    "NAME" => $name,
    "EMAIL" => $email,
    "PHONE" => $phone,
    "SITE" => $site,
    "SERVICE" => $service,
    "AGE" => $age,
);

$sendResult = CEvent::Send("FORM_FEEDBACK", SITE_ID, $arFields);

if (!$sendResult) {
    http_response_code(500);
    die('Не удалось отправить письмо');
}

http_response_code(200);