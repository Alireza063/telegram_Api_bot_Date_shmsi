<?php
require_once('center.php');
require('time.php');
error_reporting(0);

$update          = json_decode(file_get_contents("php://input"), true);
if (isset($update["message"])) {
@$chat_id   = $update["message"]['chat']['id'];
@$text      = $update["message"]['text'];
@$nameu     = $update["message"]['from']['username'];
@$iduser    = $update["message"]['from']['id'];
@$mid       = $update["message"]['message_id'];
}



function sendm($chat_id , $text , $mid = null ) {
    request("sendMessage", ['chat_id' =>$chat_id,'text'=>$text , 'reply_to_message_id' => $mid ]);
}
if ($text == "/start") {
    sendm($chat_id , $data , $mid);
}

if ($text == "/my") {
    sendm($chat_id , "
    username : $nameu
    chat id : $iduser" );
}

?>