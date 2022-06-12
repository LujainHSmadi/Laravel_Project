<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $admin = Admin::all();
        return view('admin.adminPages.adminInfo')->with('admins', $admin);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.adminPages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:8',
        ]);
        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
         $admin->save();
        // if($req){
        //     return back() ->with('sucsess','You have registerd successfuly');
        // }
        // else{
        //     return back() ->with('fail','You have not registerd ');
        // }
        // $admin = Admin::create($request->all);
        return redirect('/admin')->with('success', 'Admin Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.adminPages.adminEdit')->with('admins', $admin);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password'); 
        $admin->save();
        return redirect('/admin/create')->with('success', "Admin Edited");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::find($id);
        $admins->delete();
        return redirect('/admin')->with('success', 'admin Deleted');

    }

    function login(){
        return view('admin.adminpages.login');
    }
    function authLogin(Request $request){
       $request->validate([
        'email'=>'required|email|unique:admins',
        'password'=>'required|min:8'
       ]);
       $admin = Admin::where('email', '=', $request->email)->first();
       if($request->password ===$admin->password){
            $request->session()->put('loginId',$admin->id);
            return redirect('/admin');
       }
       else{
        return "not match";
       }
    }
}
