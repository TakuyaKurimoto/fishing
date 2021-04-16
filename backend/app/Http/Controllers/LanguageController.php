<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        
        //用意した言語配列に引数で渡したlangがある時、
        //セッションにkey(applocale)：value($lang)を保存する
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        var_dump(Session::get('applocale'));

        return Redirect::back();
    }
}