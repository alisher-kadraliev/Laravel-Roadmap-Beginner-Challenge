<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('layouts.index',compact('articles'));
    }

    public function about()
    {
        return view('layouts.about');
    }
    public function contact()
    {
        return view('layouts.contact');
    }
}
