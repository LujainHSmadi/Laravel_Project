<?php

namespace App\Http\Controllers;

class TemplateController extends Controller
{
    //
    public function index()
    {
        return view('pages.home.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services.services');
    }
    public function contact()
    {
        return view('pages.contact');
    }

}
