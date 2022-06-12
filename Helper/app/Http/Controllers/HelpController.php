<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;
use Validator;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $help = Help::all();
        return view('pages.home.home')->with('help' , $help) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('pages.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*[
    'name' ,
    'phone' ,
    'address' , 
    'case_image' , 
    'identity_image' , 
    'social_security' , 
    'description'
    ] */
     $input = Validator::make($request->all(), 
     [
        'name' => 'required' ,
        'phone'=> 'required' ,
        'address' => 'required', 
        'case_image'=> 'required' , 
        'identity_image'=> 'required' , 
        'social_security'=> 'required' , 
        'description'=> 'required'
        ] 
     )->validate();
     $request->all();
        if($request->file('case_image')){
            $file= $request->file('case_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $input['case_image'] = "$filename";

        }
        if($request->file('identity_image')){
            $file= $request->file('identity_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $input['identity_image'] = "$filename";

        }
        Help::create($input);

        return redirect('/')->with('massage' , " create successfully") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        //
    }
}
