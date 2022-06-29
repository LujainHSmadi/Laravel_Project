<?php

namespace App\Http\Controllers;
use App\Models\register;
use App\Models\Admin;
use Illuminate\Http\Request;
use Hash;
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
        $users = register::all();
        return view('admin.users.usersInfo', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('home');
        // return view('register.signup');
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
            'password' => 'required|max:25|min:8|'

        ]);
     
    
    
        //  if($request->pass !== $request->re_pass){
             
        //    return redirect('users/create')->with('failure','password does not match');
        //          }else{
            $users=new register;
        $users->name=$request->name;
        $users->email=$request->email;
        $password = $request->pass;
        $hashed = Hash::make($password);
        $users->password =$hashed;
        $users->save();
           return redirect('/userform');
        // }
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
        return view('register.profile',['item'=>$users]);

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
        return view('register.profile',compact('item'));
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
        //$users=new register;
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->save();
          
        // if(register::findorFail(Session()->has('id'))){
        //     return redirect('/profile/'.$users->id) ;
            
        // }
        
        return redirect('/profile/'.$users->id);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */

    
//     public function destroy(register $register, $id)
//     {
//         $users = register::find($id);
//         $users->delete();
//         return redirect('/users');
//    }




   public function profileShow($id)
   {    $users = register::find($id);
       return view('register.profile')->with('users',$users);

   }


// public function create(Request $request)
// {

// }


   public function loginForm(){
    return view('register.login');
   }

   public function userlogin(Request $request)
   {
    
    $email=$request->email;
        $password=$request->pass;
        $users= register::where('email',$email)->first();
        
        if(isset($users)){
        
        if(Hash::check($password,$users->password)==true){
        
            $request->session()->put('email',$users['email']);
            return redirect('profile/'.$users->id);
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

}