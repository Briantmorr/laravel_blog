<?php namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Msstatus;
use Illuminate\Support\Facades\Redis;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class ArticleController extends Controller{
    // Declaration of Class Variables
    protected $articleRepository;
    public $storage;
    // TODO: implement article interface/ repo pattern
    public function __construct(ArticleRepositoryInterface $articleRepository) {
        $this->articleRepository= $articleRepository;
        $this->storage = Redis::Connection();
    }

    /**
     * Display a listing of the resource.
     * GET /article
     *
     * @return Response
     */
    public function index(Request $request) {
        $articles = $this->articleRepository->getSortedArticles('views');
        // $articles = Article::where('status_id', '=', Msstatus::PUBLISHED)->get();
        return view('article', ['articles' => $articles, 'views' => '0']);
    }

    public function store() {
        //TODO: add article creation in later
    }

    /**
     * Display the specified resource.
     * GET /article/{id}
     *
     * @param $id
     * @return Response
     */
    public function show($id) {
        if($article = Article::find($id)) {
            $views = $this->storage->incr('article:' . $id . ':views');
            return view('article', ['articles' => [$article], 'views' => $views]);
        }
        
        // handle errors in view
        return Response::make('No articles found for id ' . $id, 404);
    }

    public function update($id) {
        //TODO: add article modifications after article creation
        // this includes updates to article status
    }

    public function destroy($id) {
        //TODO: handle article deletion 
    }
}
