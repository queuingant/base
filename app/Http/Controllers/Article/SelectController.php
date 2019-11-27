<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class SelectController extends Controller
{

    public function articlesSmallToBig()
    {
        $articles = Article::paginate(30);
        return view('article.articles',compact('articles'));
    }

    public function articlesBigToSmall()
    {
        $articles = Article::orderBy('id','desc')->paginate(30);
        return view('article.articles',compact('articles'));
    }

    public function articleDetail(Article $article)
    {
        return view('article.articleDetail',compact('article'));
    }
}
