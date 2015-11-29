<?php
session_start();
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
$fieldName;
$fieldPhone;
$fieldComment;
if (isset($_POST['form_name'])) $fieldName = substr(htmlspecialchars(trim($_POST['form_name'])), 0, 50);
if (isset($_POST['form_phone'])) $fieldPhone = substr(htmlspecialchars(trim($_POST['form_phone'])), 0, 50);
if (isset($_POST['form_comment'])) $fieldComment = substr(htmlspecialchars(trim($_POST['form_comment'])), 0, 900);


$reqFields = array('form_name', 'form_phone');
$errors = array();


if(isset($_SESSION['ref'])){
    $creffer = $_SESSION['ref'];
}
else $creffer = $_SERVER['HTTP_REFERER'];


foreach ($reqFields as $key => $reqFields) {
    if (empty($_POST[$reqFields])) {
        array_push($errors, $reqFields);
    }
}

if (count($errors) > 0) {
    echo json_encode($errors, JSON_FORCE_OBJECT);
} else {

    $body = '
    <b>Имя:</b><br> '.$fieldName.'
    <br><br><b>Телефон:</b><br> '.$fieldPhone.'
    <br><br><b>Комментарий:</b><br> '.$fieldComment.'
    <br><br><b>Хвост:</b><br>'.$_SESSION['ref'];

    $to = 'bonic100@yandex.ru,shaklunov@adequo.ru';
    //$to = "deepric@mail.ru";
    $subject = 'Заказ звонка с ЛП Новое место (r-septik.ru/new)';

    $header = "From: info@r-septik.ru\n";
    $header .= "Content-type: text/html; charset=\"utf-8\"";


    if($fieldName==$fieldPhone){
        $mail_inp =  $fieldPhone;
    }
    else $mail_inp = "";

    if(mail($to, "=?utf-8?B?".base64_encode($subject)."?=", $body, $header)){
        include($_SERVER['DOCUMENT_ROOT']."/bx24/index.php");
        $postData['src'] = 'r_septik';
        $postData['PHONE_WORK'] = $fieldPhone;
        $postData['EMAIL_WORK'] = $mail_inp;
        $postData['NAME'] = $fieldName;
        $postData['COMMENT'] = $fieldComment;
        curl_bitrix_auth($postData);
    }
    echo '{"status":1}';
}

function curl_bitrix_auth($form_data)
{
    $agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0";

    $form_data_handler = "http://wowbitrix.ru/bitrix/templates/bitrix24/ilevel_assets/septik_integration/form_data_handler.php";
    $auth_page = "wowbitrix.ru/";

    $auth_form = "AUTH_FORM=Y";
    $type = "TYPE=AUTH";
    $back_url = "backurl=%2Fauth%2Findex.php%3Fbackurl%3D%252F";
    $user = "USER_LOGIN=anna.k%40upconversion.ru";
    $password ="USER_PASSWORD=Myloneliness1";
    $post_data = $auth_form.'&'.$type.'&'.$back_url.'&'.$user.'&'.$password;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_COOKIEFILE, realpath("bx24/cookie_curl.txt"));
    curl_setopt($ch, CURLOPT_COOKIEJAR, realpath("bx24/cookie_curl.txt"));
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);//agent
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_URL, $auth_page);
    if(curl_exec($ch) === FALSE)
    {
        file_put_contents('test_bx.txt', PHP_EOL.' '.date('d.m.Y H:i:s').' '. $curl_error($ch), FILE_APPEND);
    }
    else
    {
        file_put_contents('test_bx.txt', PHP_EOL.' '.date('d.m.Y H:i:s').' '. ' -OK1- ', FILE_APPEND);
    }
    curl_close($ch);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_COOKIEFILE, realpath("bx24/cookie_curl.txt"));
    curl_setopt($ch, CURLOPT_COOKIEJAR, realpath("bx24/cookie_url.txt"));
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);//agent
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $form_data);
    curl_setopt($ch, CURLOPT_URL, $form_data_handler);
    if(curl_exec($ch) === FALSE)
    {
        file_put_contents('test_bx.txt', PHP_EOL.' '.date('d.m.Y H:i:s').' '. $curl_error($ch), FILE_APPEND);
    }
    else
    {
        file_put_contents('test_bx.txt', PHP_EOL.' '.date('d.m.Y H:i:s').' '. ' -OK2- ', FILE_APPEND);
    }
    curl_close($ch);

}
