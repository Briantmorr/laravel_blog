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
    public function __construct(ArticleRepositoryInterface $articleRepository) {
        $this->articleRepository= $articleRepository;
    }

    /**
     * Display a listing of the resource.
     * GET /article
     *
     * @return Response
     */
    public function index(Request $request) {
        $sort_by = '';

        if($request->has('filter')) {
            $sort_by = $request->get('filter');
        }

        $arrArticles = $this->articleRepository->getSortedArticles($sort_by);
        return view('article', ['articles' => $arrArticles]);
    }

    public function store() {
        //TODO: add article creation 
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
            $this->articleRepository->incrementViews($id);
            return view('article', ['articles' => [$article]]);
        }
        
        //TODO: handle errors in view
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
