<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //

    public function index(){

        $newsList = News::limit(20)->get();
        return view('guest.news.index', compact('newsList'));
    }
}
