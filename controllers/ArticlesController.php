<?php

class ArticlesController extends Controller
{
    public function index()
    {
        // Récupérer tous les articles
        $articles = Article::all();

        // Retourner la vue `articles.index` avec la liste des articles
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        // Récupérer l'article avec l'identifiant `$id`
        $article = Article::find($id);

        // Retourner la vue `articles.show` avec l'article
        return view('articles.show', compact('article'));
    }

    public function store()
    {
        // Récupérer les données de la requête HTTP
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Créer un nouvel article avec les données récupérées
        $article = new Article();
        $article->title = $title;
        $article->content = $content;

        // Sauvegarder l'article dans la base de données
        $article->save();

        // Rediriger vers la page d'accueil
        return redirect('/');
    }
}
