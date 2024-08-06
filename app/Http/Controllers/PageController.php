<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function product()
    {
        return view('frontend.product');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function anish()
    {
        return view('frontend.anish');
    }

    public function arjun()
    {
        return view('frontend.arjun');
    }

    public function customer()
    {
        return view('frontend.customer');
    }
}
