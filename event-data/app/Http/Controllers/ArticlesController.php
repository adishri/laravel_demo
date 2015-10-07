<?php

namespace App\Http\Controllers;
use Request;
use App\Article;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('date','desc')->get();
        return $articles;
    }
    public function data()
    {
//        $data =Request::latest('date','desc')->get();
        $data = Article::all();
//        $data = 5;
        return view('information',compact('data'));
    }
    public function new_info(){
        $data = Article::all();
        return view('new-info',compact('data'));
        }
//    public function display(){
//        $articles = Article::latest('date','desc')->get();
////        return redirect('info.blade.php');
//        return view('info',compact('articles'));
//    }
}
