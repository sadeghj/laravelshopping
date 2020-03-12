<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categorys;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Category=Categorys::all();
        return view('home',compact(['Category']));
    }
}
