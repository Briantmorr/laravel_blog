<?php namespace App\Repositories;

use App\Models\Msstatus;
use App\Models\Article;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use Illuminate\Support\Facades\Session;

class ArticleRepository implements ArticleRepositoryInterface{
    public function getSortedArticles(String $sort_by = 'popularity', Int $status = Msstatus::PUBLISHED) {
        // Had to make design decision here. Can't use redis session views in Eloquent orderBy.
        // if $sort_by === 'popularity' else pattern is also suboptimal
        // Instead I appended popularity to the article model without having to persist it

        //TODO: implement ASC/ DESC (currently sorting DESC so view_count applies)
        $arrArticles = Article::where('status_id', '=', $status)->get();
        
        $arrArticles = $arrArticles->sortBy(function($article) use($sort_by) {
            return $article->{$sort_by};
        }, 0, true);
        return $arrArticles;
    }

    public function incrementViews($id) {
        $session_key = 'article:' . $id;

        if(Session::has($session_key));
        {
            $current_view_count = Session::get($session_key);
            Session::put($session_key, ++$current_view_count);
        }
    }
}