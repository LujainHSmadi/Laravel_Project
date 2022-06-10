<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTemplateController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
