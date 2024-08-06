<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function product()
    {
        return view('product');
    }

    public function faq()
    {
        return view('faq');
    }

    public function anish()
    {
        return view('anish');
    }

    public function arjun()
    {
        return view('arjun');
    }
}
