<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('user')->with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
    public function create()
    {
        $article = new Article();
        return view('articles.create', compact('article'));
    }
    public function store(Request $request)
    {
        // Vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;
        // dd($request->all());

        // Validation des données
        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ]);

        // // Création de l'article
        $art = Article::create($request->all());
        dd($art);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Vérification des permissions plus tard
        // $user = User::find(1);
        // $request['user_id'] = $user->id;

        $article->update($request->all());

        dd($article, $request->all());
    }
}

