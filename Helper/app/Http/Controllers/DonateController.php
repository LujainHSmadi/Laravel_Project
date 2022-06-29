<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Session;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has('loginId')) {
        $donates = Donate::all();
        return view('admin.donate.donateInfo')->with('donates', $donates);
        }
         else {
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
return view('pages.services.donater');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
    'name' => 'required|unique:registers|max:255',
    'email' => 'required|unique:registers|email',
    'number' => 'required',
    'address' => 'required',
    'tools' => 'required',

]);
if ($request == true) {
    $donate = new donate;
    $donate->name = $request->input('name');
    $donate->email = $request->input('email');
    $donate->number = $request->input('number');
    $donate->address = $request->input('address');
    $donate->tools = $request->input(['tools']);
    $donate->save();
    return redirect('/services')
        ->with(('status' . 'Your informasion submited successfully'));}



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Session::has('loginId')) {
            $donate = Donate::find($id);
            return view('admin.donate.donateEdit')->with('donate', $donate);
        }
 else {
            return view('admin.adminpages.login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Session::has('loginId')) {
            $donate = Donate::find($id);
            // dd($donate);
            $donate->name = $request->input('name');
            $donate->email = $request->input('email');
            $donate->number = $request->input('number');
            $donate->address = $request->input('address');
            $donate->tools = $request->input(['tools']);
            $donate->save();
            return redirect('/donate')->with('success', "Admin Edited");
        } else {
            return view('admin.adminpages.login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::has('loginId')) {
            $donate = Donate::find($id);
            $donate->delete();
            return redirect('/donate')->with('success', "Admin Deleted");
        }
         else {
            return view('admin.adminpages.login');
        }

    }
}
