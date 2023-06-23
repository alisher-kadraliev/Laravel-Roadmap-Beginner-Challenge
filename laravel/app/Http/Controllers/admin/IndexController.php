<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.dashboard',compact('articles', 'categories', 'tags'));
    }
    public function article()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('admin.article',compact('articles','categories'));
    }
    public function category()
    {
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }
    public function tag()
    {
        $tags = Tag::all();
        return view('admin.tag',compact('tags'));
    }
}
