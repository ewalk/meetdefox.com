<?php

namespace App\Controllers;

class News extends BaseController
{
    public function news_item($news_id): string
    {
        $language = \Config\Services::language();
        $language->setLocale('en'); // Set the desired language, e.g., 'en'

        $news_id = (int)$news_id;
        if($news_id <= 0) {
            return FALSE;
        }

        return view('news', array("news_id" => $news_id));
    }
}
