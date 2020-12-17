<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laravel_newsController extends Controller
{
    //laravel一覧表示
   /** 
    * @return view
    */ 

    public function showList()
    {
        return view('laravel_news.list');
    }
}
