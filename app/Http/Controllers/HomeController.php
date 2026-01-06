<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showdart()
    {
        // return view('pages.dart.home');
        return view('welcome');

    }

    public function home()
    {
        // return view('pages.dart.home');
        return view('welcome');

    }

    public function lessons()
    {
        // return view('pages.dart.home');
        return view('welcome');

    }

    public function tracks()
    {
        // return view('pages.dart.home');
        return view('welcome');

    }

    public function contact()
    {
        // return view('pages.dart.home');
        return view('pages.intro.contact');

    }

    public function showphp()
    {
        // return view('pages.php.home');
        return view('welcome');

    }

    public function showunity()
    {
        // return view('pages.unity.home');
        return view('welcome');

    }
}
