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
        $name = "Pen";
        $id="11-11111-1";
        $exp = "10-10-2010";
        $names=array("Bag", "Scale", "Ereaser");
        return view('product')
        ->with('name', $name)
        ->with('id', $id)
        ->with('exp', $exp)
        ->with('names', $names);
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
