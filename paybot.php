# inlongpay
<?php
$botToken = "6326129798:AAEGu6XnqX0tXjUzG62eNwgIvLiL8Eo80Pc";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["message"]["chat"]["id"];
$message = $updateArray["message"]["text"];

switch($message) {
    case "name: Word":
        sendMessage($chatId, "我是你爸爸");
        break;
    case "name: pay":
        sendMessage($chatId, "你好 老板");
        break;
    // 其他命令处理
}

function sendMessage($chatId, $message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    file_get_contents($url);
}
?>
