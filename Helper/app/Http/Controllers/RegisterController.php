<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\register;
use Hash;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('loginId')) {
            $users = register::all();
            return view('admin.users.usersInfo', compact('users'));
        } else {
            return view('admin.adminpages.login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required|unique:registers|max:255',
            'email' => 'required|unique:registers|email',
            'password' => 'required|max:25|min:8|',

        ]);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        register::create($data);
        return redirect('/userform');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = register::find($id);
        return view('/home');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = register::find($id);
        return view('/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = register::findorFail($id);

        //  if($request->pass !== $request->re_pass){

        //    return redirect('users/create')->with('failure','password does not match');
        //          }else{
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        
        $users->save(); 
        if(Session::has('id')){
        if (Admin::findorFail(Session::get('id'))) {
            return redirect('/home');
        }}
        return view('register.profile' , compact('users'));
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */

    public function destroy(register $users, $id)
    {
        if (Session::has('loginId')) {
            $users = register::find($id);
            $users->delete();
            return redirect('/users');

        } else {
            return view('admin.adminpages.login');
        }

    }

//     public function destroy(register $register, $id)
    //     {
    //         $users = register::find($id);
    //         $users->delete();
    //         return redirect('/users');
    //    }



    public function loginForm()
    {
        return view('register.login');
    }

    public function userlogin(Request $request)
    {

        $email = $request->email;
        $password = $request->pass;
        $users = register::where('email', $email)->first();

        if (isset($users)) {



            if (Hash::check($password, $users->password) == true) {

                $request->session()->put('email', $users['email']);
                return redirect('/home');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }

        } else {
            return "Email Does not Exist";
        }
    }

    
    public function profileShow($id)
    {    $users = register::find($id);
        return view('register.profile')->with('users',$users);
 
    }

}
