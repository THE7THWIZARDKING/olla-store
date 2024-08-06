<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('index');
    }
    function about()
    {
        return view('about');
    }
    function contact()
    {
        return view('contact');
    }
    function service()
    {
        return view('service');
    }
    function blog()
    {
        return view('blog');
    }
    function product()
    {
        return view('product');
    }
    function faq()
    {
        return view('faq');
    }
    function anish(){
        return view('anish');
    }
    function arjun(){
        return view('arjun');
    }
}
