<?php


/* TODO:Token de acceso a tu BOT */
$botToken ="7711572491:AAEzEFSI6VC4LQ2EetznAXAdG9-QoCzrkmk";

/* TODO:URL del Webhook */
$webhookurl="https://todofoe.com/bot-telegram/index.php";

/* TODO:configura el webhook mediante una solicitud http */
$apiurl = "https://api.telegram.org/bot$botToken/setWebhook?url=$webhookurl";
$response = file_get_contents($apiurl);

/* TODO:Verifica si la configuracion del webhook a sido exitosa */
if($response === false){
    /* TODO:Captura el error si la solicitud HTTP falla */
    $error = error_get_last();
    echo "Error al configurar el webhook: ".$error['message'];
}else{
    /* TODO:Verifica la respuesta de Telegram */
    $responsedata = json_decode($response,true);
    if($responsedata['ok']===true){
        echo "Wehbook Configurado con exito";
    }else{
        echo "Error al configurar Wehbook";
    }
}

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
