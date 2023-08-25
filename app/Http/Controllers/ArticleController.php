<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /** special function */
    public function sayHello()
    {
        return 'Hello';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Query builder ---> Table {Faster}


        // ORM [Object Rerational Mapping] ---> Model {Possibilities}
        $articles = Article::all(); // select * from article
        // dd($articles);
        return view('dashboard.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Show form
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title'     => 'required|string|min:5|max:15',
                'content'   => 'required|string|min:15|max:150',
            ]
        );

        Article::create(
            [
                'title' => request('title'),
                'content' => request('content'),
                'status' => 1,
                'user_id' => 1
            ]
        );

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // dd($article->content);
        return view('dashboard.articles.show', ['article' => $article]);
        // return view('dashboard.articles.show')-with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
