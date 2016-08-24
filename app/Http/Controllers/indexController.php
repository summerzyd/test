<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $data = Article::all();
        return view('index')->with(['data' =>$data]);
    }
}
