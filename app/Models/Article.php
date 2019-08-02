<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Article extends Model
{
    // Local Variables

    protected $table = 'article';

    public $fillable = ['id', 'title', 'body', 'author_id', 'category_id', 'status_id'];

    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'category_id' => 'integer',
        'status_id' => 'integer'
    ];

    protected $appends = ['popularity'];
    public $fields = [
        'id' => 'article.id',
        'title' => 'article.title',
        'body' => 'article.body',
        'author_id' => 'article.author_id',
        'category_id' => 'article.category_id',
        'status_id' => 'article.status_id',
        'created_at' => 'article.created_at',
        'updated_at' => 'article.updated_at',
        'deleted_at' => 'article.deleted_at',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
    
    public function category() {
        return $this->belongsTo(Mscategory::class, 'category_id', 'id');
    }

    public function status() {
        return $this->belongsTo(Msstatus::class, 'status_id', 'id');
    }
    
    public function getPopularityAttribute() {
        $session_key = 'article:' . $this->id;
        $view_count = 0;
        if(Session::has($session_key)) {
            $view_count = Session::get($session_key);
        }
        return $view_count;
    } 
}

