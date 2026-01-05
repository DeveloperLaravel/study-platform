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
