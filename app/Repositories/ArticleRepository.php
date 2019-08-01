<?php namespace App\Repositories;

use App\Models\Msstatus;
use App\Models\Article;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface{
    public function getSortedArticles(String $sort_by, Int $status = Msstatus::PUBLISHED) {
        $article = Article::where('status_id', '=', $status)->get();

        return $article;
    }
}