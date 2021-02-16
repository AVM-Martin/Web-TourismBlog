<?php

namespace App\Http\Controllers;

use App;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home() {
        return App::call('\App\Http\Controllers\ArticleController@index');
    }

    public function about() {
        return view('about');
    }
}
