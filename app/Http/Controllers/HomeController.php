<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests ;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //This construct function adds LARAVEL AUTH authentication
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function search()
    {
        return view('pages.search');
    }

    public function getId()
    {
         $term = request('location');
         return view('pages.search', compact('term'));
    }
}
