<?php
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' =>'ArticleController@index']);

$router->resource('/article', 'ArticleController');

Route::get('/logout', function() {
    // simple way to flush session, and simulating logout
    Session::flush();
    return redirect('/');
});