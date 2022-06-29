<?php

namespace App\Http\Controllers;

use App\Models\volenteer;
use Illuminate\Http\Request;
use Session;

class VolenteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volenteers = Volenteer::all();
        return view('pages.services.volenteers', compact('volenteers'));}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.services.volenteers');}

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
            'career' => 'required',
            'address' => 'required',
            'number' => 'required',
            'age' => 'required',

        ]);

        if ($request == true) {
            $volunteer = new volenteer;
            $volunteer->name = $request->input('name');
            $volunteer->email = $request->input('email');
            $volunteer->age = $request->input('age');
            $volunteer->number = $request->input('number');
            $volunteer->address = $request->input('address');
            $volunteer->career = $request->input('career');

            $volunteer->save();

            return redirect('/services')
                ->with('success', 'Your informasion submited successfully');}}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volenteer  $volenteer
     * @return \Illuminate\Http\Response
     */
    public function show(volenteer $volenteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volenteer  $volenteer
     * @return \Illuminate\Http\Response
     */
    public function edit(volenteer $volenteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volenteer  $volenteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, volenteer $volenteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volenteer  $volenteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::has('loginId')) {
            $volenteers = volenteer::find($id);
            $volenteers->delete();
            return redirect('/volenteersinfo');

        } else {
            return view('admin.adminpages.login');
        }

    }

    public function volenteersInfo()
    {
        if (Session::has('loginId')) {
            $volenteers = Volenteer::all();
            return view('admin.volenteers.index')->with('volenteers', $volenteers);

        } else {
            return view('admin.adminpages.login');
        }

    }

     public function volStatus($id)
    {
        $vol = new volenteer;
        $vol->where('id', $id)->update(['status' => request('status') == 'Approved' ? 1:0]);
        
        return redirect()->route('volenteersinfo')
            ->with('message', 'volenteer has been approved successfully');

    }
}
