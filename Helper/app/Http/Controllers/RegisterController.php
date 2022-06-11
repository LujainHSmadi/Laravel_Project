<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|unique:registers|max:255',
            'email' => 'required|unique:registers|email',
            'password' => 'required|max:25|min:8|'

        ]);
     
    
    
         if($request->pass !== $request->re_pass){
             
           return redirect('signup')->with('failure','password does not match');
                 }else{
            $data=new Register;
        $data->name=$request->name;
        $data->email=$request->email;
        $password = $request->pass;
        $hashed = Hash::make($password);
        $data->password =$hashed;
        $data->save();
           return redirect('/login');
        }
        
      
    }


    public function user(Request $request){
    
        $email=$request->email;
        $password=$request->pass;
        $user= Register::where('email',$email)->first();
        
        if(isset($user)){
        
        if(Hash::check($password,$user->password)==true){
        
            $request->session()->put('email',$user['email']);
            return redirect('home');
        }
        else
        {
            return redirect('login')->with('incorrect_password' , 'Password Incorrect');
        }

       }else
       {
           return "Email Does not Exist"; 
       }
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }


    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
