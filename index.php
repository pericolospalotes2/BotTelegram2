<?php

require_once 'include/vendor/autoload.php';

use TelegramBot\Api\BotApi;


$telegram = new BotApi('7711572491:AAEzEFSI6VC4LQ2EetznAXAdG9-QoCzrkmk');


$update = json_decode(file_get_contents('php://input'));

if (isset($update->message->text)){
$chatId = $update->message->chat->id;
$text = $update->message->text;

if($text==='/start'){

    $message="¡Bienvenido! Soy el Bot de TodoFOE.com Puedes usar los siguientes comandos:\n\n";
    $message.="/start - Iniciar Conversación\n";
    $message.="/menu - Mostrar menú de Opciones\n";

    $telegram->sendMessage($chatId,$message);
}elseif($text==='/menu'){
    $menuMessage = "Aquí está el Menú de Opciones:\n";
    $menuMessage .= "1. Información del Curso. \n";
    $menuMessage .= "2. Ubicación del Local. \n";
    $menuMessage .= "3. Enviar Temario en pdf \n";

    $telegram->sendMessage($chatId,$menuMessage);
}


}elseif($text==='Hola'){
    $telegram->sendMessage($chatId,"Hola como estas");
    
}else{
    $defaulMesasage="No entiendo este comando";
    $telegram->sendMessage($chatId,$defaulMesasage);

}


?>
