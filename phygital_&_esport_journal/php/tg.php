<?php
    $name = $_POST["name"];
    $org = $_POST["org"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $text = $_POST["text"];

    $arr = array (
        'Имя: ' => $name,
        'Организация: ' => $org,
        'Почта: ' => $email,
        'Тел. / @: ' => $contact,
        'Сообщение: ' => $text
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    }

    $token = "6527870441:AAG9fSz7py4zZk3pFKRKiW44I-zb3G6yHb0";
    $channel_id = "-1001840636505";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$channel_id}&parse_mode=html&text={$txt}","r");
?>