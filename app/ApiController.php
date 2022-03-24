<?php

namespace app;

class ApiController{

    public static function  getChatId(string $token) : ?string{
        $endpoint = 'https://api.telegram.org/bot'.$token.'/getupdates';

        $content = file_get_contents($endpoint);

        if ($content == '' || $content==null)
            return null;

        $arr = json_decode($content, true);

        if (!isset($arr['result'][0]['message']['chat']['id'])){
            return null;
        }

        return $chatId;
    }

    public static function sendMessage(string $mensagem) : bool{

        try{

            $bot = new \TelegramBot\Api\BotApi(TOKEN);

            $bot->sendMessage(CHAT_ID, $mensagem);

            echo "mensagem enviada;";

            return true;
        }catch (\Exception $ex){

            echo "erro na mensagem";
            return false;
        }
}

}
