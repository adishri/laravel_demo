<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
//        $people = [];
        $people = ['tylor','max','toni'];
//        $first = 'adishri';
//        $last = 'kulkarni';
        return view('about',compact('people'));
    }
    public function contact()
    {
//        $first = 'adishri';
//        $last = 'kulkarni';
        return view('contact');
    }
}
?>