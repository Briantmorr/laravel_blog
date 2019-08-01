<?php namespace App\Repositories\Contracts;

interface ArticleRepositoryInterface {
    public function getSortedArticles(String $sort_by, Int $status);
}