<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function product(){

        $p1 = "Product 1 :";
        $p2 = "Product 2 :";
        $p3 = "Product 3 :";
        $info1 = array("Pen", "Code : 40179", "Price : 300 TK");
        $info2 = array("Earphone", "Code : 50179", "Price : 600 TK");
        $info3 = array("Watch", "Code : 60179", "Price : 698 TK");
         
        return view('product')
        ->with('p1', $p1)
        ->with('p2', $p2)
        ->with('p3', $p3)
        ->with('info1', $info1)
        ->with('info2', $info2)
        ->with('info3', $info3);
    }
    public function teams()
    {
        return view('teams');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
