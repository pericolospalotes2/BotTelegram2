<?php

require_once 'include/vendor/autoload.php';

use TelegramBot\Api\BotApi;


$telegram = new BotApi('7711572491:AAEzEFSI6VC4LQ2EetznAXAdG9-QoCzrkmk');


$update = json_decode(file_get_contents('php://input'));

if (isset($update->message->text)){

$chatId = $update->message->chat->id;

$text = $update->message->text;

if($text==='Hola'){
    $telegram->sendMessage($chatId,"Hola como estas");
    
}

}


?>
