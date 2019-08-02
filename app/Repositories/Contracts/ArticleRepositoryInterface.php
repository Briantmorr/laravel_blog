<?php namespace App\Repositories\Contracts;

interface ArticleRepositoryInterface {
    public function getSortedArticles(String $sort_by, Int $status);
    public function incrementViews(Int $id);
}