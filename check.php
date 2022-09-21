<?php 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    $email = $_POST['email'];
    $message = $_POST['message'];
    $error = '';

    if(trim($email) == '') {
        $error = 'Введите ваш email';
    } elseif(trim($message) == '') {
        $error = 'Введите ваш message';
    } elseif(strlen($message) < 10) {
        $error = 'Сообщение долно быть более 10 символов';
    }

    if($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?" . base64_encode("Тестовое сообщение") . "?=";

    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charstet=utf-8\r\n";

    mail('kuxade413@gmail.com', $subject, $message, $headers);

    header('Location: /about.php');

?>