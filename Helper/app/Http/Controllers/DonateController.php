<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates = Donate::all();
        return view('admin.donate.donateInfo')->with('donates', $donates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'tool' => 'required',
        ]);

        $donate = new Donate();
        $donate->name = $request->input('name');
        $donate->email = $request->input('email');
        $donate->number = $request->input('number');
        $donate->address = $request->input('address');
        $donate->tool = $request->input('tool');
        $donate->save();
        return redirect('/donate')->with('success', 'Donate Edited');

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
        $donate = Donate::find($id);
        return view('admin.donate.donateEdit')->with('donate', $donate);

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
        $donate = Donate::find($id);
        // dd($donate);
        $donate->name = $request->input('name');
        $donate->email = $request->input('email');
        $donate->number = $request->input('number');
        $donate->address = $request->input('address');
        $donate->tools = $request->input(['tools']);
        $donate->save();
        return redirect('/donate')->with('success', "Admin Edited");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donate = Donate::find($id);
        $donate->delete();
        return redirect('/donate')->with('success', "Admin Deleted");

    }
}
