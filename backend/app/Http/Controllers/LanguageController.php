<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        
        //用意した言語配列に引数で渡したlangがある時、
        //セッションにkey(applocale)：value($lang)を保存する
        if (array_key_exists($lang, config()->get('languages'))) {
            session()->put('applocale', $lang);
        }
     

        return redirect()->back();
    }
}
