<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArticleController extends Controller
{
    
    public function index()
    {
        $article_list = ArtikelModel::orderBy('created_at')->paginate(10);
        // dd($article_list);
        return view('pages.article.index', compact('article_list'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
