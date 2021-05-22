<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = auth()->user()->articles;
        return view('teacher.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'authors' => $request->authors,
            'publisher' => $request->publisher,
            'details' => $request->details,
            'year' => $request->year,
            'doi' => $request->doi,
            'url' => $request->url,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('teacher.article.index')->with('success','Article Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('teacher.articles.edit' , compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->authors = $request->authors;
        $article->publisher = $request->publisher;
        $article->details = $request->details;
        $article->year = $request->year;
        $article->doi = $request->doi;
        $article->url = $request->url;
        $article->update();
        return redirect()->route('teacher.article.index')->with('success','Article Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('teacher.article.index')->with('danger','Article Deleted Successfully');
    }

    //Frontend functions
    
    //For Welcome Article Details
    public function details(Article $article)
    {
        return view('frontend.articles.details', compact('article'));
    }

    //For Articles Tab
    public function show_all()
    {
        $articles = Article::orderBy('year', 'desc')->get();
        return view('frontend.articles.index', compact('articles'));
    }
}
