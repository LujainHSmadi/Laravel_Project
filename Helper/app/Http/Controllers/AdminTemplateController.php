<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTemplateController extends Controller
{
    public function index(){
        return view('admin.adminPages.index');
    }
    public function cases(){
        return view('admin.adminPages.cases');
    }
    public function donate(){
        return view('admin.adminPages.donate');
    }
}
