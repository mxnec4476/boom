<?php

namespace App\Http\Controllers;

use App\Ashi;
use Illuminate\Http\Request;

class AshiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ashi = Ashi::all();
        return view('backend.ashi.index',compact('ashi'));
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
     * @param  \App\Ashi  $ashi
     * @return \Illuminate\Http\Response
     */
    public function show(Ashi $ashi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ashi  $ashi
     * @return \Illuminate\Http\Response
     */
    public function edit(Ashi $ashi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ashi  $ashi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ashi $ashi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ashi  $ashi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ashi $ashi)
    {
        //
    }
}
