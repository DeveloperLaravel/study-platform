<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
      public function Sanctum()
    {
        return view('pages.php.sanctum');
    }


    public function showdart()
    {
        // return view('pages.dart.home');
        return view('pages.dart.home');

    }

    public function home()
    {
        // return view('pages.dart.home');
        return view('welcome');

    }

    public function lessons()
    {
        // return view('pages.dart.home');
        return view('pages.intro.lessons');

    }

    public function tracks()
    {
        // return view('pages.dart.home');
        return view('pages.intro.tracks');

    }

    public function contact()
    {
        // return view('pages.dart.home');
        return view('pages.intro.contact');

    }

    public function showphp()
    {
        // return view('pages.php.home');
        return view('pages.php.home');

    }

    public function showunity()
    {
        // return view('pages.unity.home');
        return view('welcome');

    }
}
