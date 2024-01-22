<?php

namespace App\Http\Controllers;

use App\Sermons;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $sermons=Sermons::all();

        return view('sermons.index',compact('sermons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sermons.create');
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

        $saving=Sermons::create($request->all);

        if($saving){
            return redirect()->route('sermons')->with('status', 'Sermon successfully saved'); 
        }else{
            return redirect()->route('sermons')->with('error', 'Sermon successfully saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sermons  $sermons
     * @return \Illuminate\Http\Response
     */
    public function show(Sermons $sermons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sermons  $sermons
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermons $sermons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sermons  $sermons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sermons $sermons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sermons  $sermons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermons $sermons)
    {
        //
    }
}
