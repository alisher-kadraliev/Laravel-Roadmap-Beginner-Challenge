<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $article = new Article(); // Create a new instance of the Article model
        $article->load('tags'); // Eager load the tags relationship
        return view('admin.article.create', compact('categories', 'tags', 'article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();

        $article = new Article();

        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->category_id = $data['category_id'];
        $article['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $article['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        $article->save();

        $tags = $data['tags']; // Assuming $data['tags'] is an array of tag IDs
        $article->tags()->attach($tags);

        $request->flashOnly('title', 'content', 'category_id');

        return redirect()->route('admin.article')->with('success', 'Article created success');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $article->load('tags');
        return view('admin.article.edit', compact('article','categories','tags'))->with('tags',$tags);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        $previewImage = $request->file('preview_image');
        $mainImage = $request->file('main_image');
        if ($previewImage) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $previewImage);
        }

        if ($mainImage) {
            $data['main_image'] = Storage::disk('public')->put('/images', $mainImage);
        }
        $article->update([
            'title' => $data['title'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
            'preview_image' => $data['preview_image'],
            'main_image' => $data['main_image'],
        ]);


        $tags = $data['tags']; // Assuming $data['tags'] is an array of tag IDs
        $article->tags()->sync($tags); // Sync the tags relationship with the new tag IDs

        $article->load('tags');
        return redirect()->route('admin.article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.article');
    }
}
