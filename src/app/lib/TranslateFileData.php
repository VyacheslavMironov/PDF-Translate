<?php

namespace App\lib;

class TranslateFileData
{
    private string $url;
    public array $parametrs;

    public function __construct($textObject)
    {
        $this->url = 'https://api.mymemory.translated.net/get?';
        $this->parametrs = array(
            "q" => $textObject,
            "tra" => "Ciao Mondo!",
            "langpair" => "en|ru"
        );
    }
    public function formated($text)
    {
        return $text->responseData['translatedText'];
    }

    public function run()
    {
        $ch = curl_init($this->url. http_build_query($this->parametrs));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $text = (object)json_decode(curl_exec($ch), true);
        curl_close($ch);
        return $this->formated($text);
    }
}

