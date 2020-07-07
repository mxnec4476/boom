<?php

namespace App\Http\Controllers;

use App\Stock_Mrfixes;
use Illuminate\Http\Request;

class StockMrfixesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $stock_mrfixes = Stock_Mrfixes::all();
        return view('backend/mrFix/stock/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/mrFix/stock/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock_mrfixes = new Stock_Mrfixes();
        $stock_mrfixes->original = $request->original;
        $stock_mrfixes->premium = $request->premium;
        $stock_mrfixes->glasklare = $request->glasklare;
        $stock_mrfixes->scartech = $request->scartech;
        $stock_mrfixes->save();
        return redirect()->action('StockMrfixesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock_Mrfixes  $stock_Mrfixes
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_Mrfixes $stock_Mrfixes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_Mrfixes  $stock_Mrfixes
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_Mrfixes $stock_Mrfixes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_Mrfixes  $stock_Mrfixes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_Mrfixes $stock_Mrfixes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_Mrfixes  $stock_Mrfixes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_Mrfixes $stock_Mrfixes)
    {
        //
    }
}
