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

    $token = "5965755615:AAGePHNca--858nwh9gT_5xjtfDjvBF1b7A";
    $channel_id = "-1001944420939";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$channel_id}&parse_mode=html&text={$txt}","r");
?>