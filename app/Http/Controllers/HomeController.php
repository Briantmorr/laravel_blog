<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        dd($request->get('filter'));
        return view('home');
    }
}
