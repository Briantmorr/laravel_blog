<?php namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller{
    // Declaration of Class Variables
    // public $articleRepository;

    //TODO: implement article interface/ repo pattern
    // public function __construct(ArticleRepositoryInterface $articleRepository) {
    //     $this->articleRepository= $articleRepository;
    // }

    /**
     * Display a listing of the resource.
     * GET /article
     *
     * @return Response
     */
    public function index(Request $request) {
        return Article::all();
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
            return $article;
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
