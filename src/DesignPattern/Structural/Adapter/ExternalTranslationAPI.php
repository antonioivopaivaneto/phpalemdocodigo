<?php

namespace App\DesignPattern\Structural\Adapter;

class ExternalTranslationAPI{
    public function doTranslate($text, $lang)
    {
        return "External: $text to $lang";
    }
}