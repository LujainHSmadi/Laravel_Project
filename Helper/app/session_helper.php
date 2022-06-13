<?php
if(!function_exists(login)){
function login()
{
    if (Session::has('loginId')) {
        return view('admin.adminpages.login');
    } else {
        return view('admin.adminpages.login');
    }
}
}



if(!function_exists(authLogin)){
function authLogin(Request $request)
{

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);
    $admin = Admin::where('email', '=', $request->email)->first();
    if ($admin) {
        if (Hash::check($request->password, $admin->password)) {
            $name = $request->session()->put('name', $admin->name);
            $email = $request->session()->put('email', $admin->email);

            $request->session()->put('loginId', $admin->id);
            return redirect('/admin');
        } else {
            return back()->with('fail', 'Password not matches');
        }
    } else {

    }
}

}

if(!function_exists(logout)){
function logout()
{
    if (Session::has('loginId')) {
        Session::pull('loginId');
        return redirect('login');
    }
}
}
