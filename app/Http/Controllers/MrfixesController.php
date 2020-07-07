<?php

namespace App\Http\Controllers;

use App\Mrfixes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MrfixesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mrfixes = Mrfixes::all();
      
        $original =DB::table("stock__mrfixes")->sum('original');
        $premium =DB::table("stock__mrfixes")->sum('premium');
        $glasklare =DB::table("stock__mrfixes")->sum('glasklare');
        $scartech =DB::table("stock__mrfixes")->sum('scartech');
        // $data2 = $data - $data1;
        $vehicle1 = Mrfixes::sum('vehicle1');
        $vehicle2 = Mrfixes::sum('vehicle2');
        $vehicle3 = Mrfixes::sum('vehicle3');
        $vehicle4 = Mrfixes::sum('vehicle4');
        $plus_original = $original - $vehicle1;
        $plus_premium = $premium - $vehicle2;
        $plus_glasklare = $glasklare - $vehicle3;
        $plus_scartech = $scartech - $vehicle4;
        return view('backend/mrFix/index',compact('mrfixes','original','premium','glasklare',
        'scartech','plus_original','plus_premium',
        'plus_glasklare','plus_scartech'));
        // $data = DB::table("Mrfixes")->sum('price');
        // print_r($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mrFix.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mrfixes = new Mrfixes();
        $mrfixes->date = $request->date;
        $mrfixes->name = $request->name;
        $mrfixes->abode= $request->abode;
        $mrfixes->call = $request->call;
        $mrfixes->all = $request->all;
        $mrfixes->goods = $request->goods;
        $mrfixes->cost = $request->cost;
        $mrfixes->price= $request->price;
        $mrfixes->amount=$request->amount;
        $mrfixes->pro= $request->pro;
        if ($request->vehicle1 =='') {
            $mrfixes->vehicle1 ='0';
        }
        else {
            $mrfixes->vehicle1 = $request->vehicle1;
        }
        if ($request->vehicle2 =='') {
            $mrfixes->vehicle2 ='0';
        }
        else {
            $mrfixes->vehicle2 = $request->vehicle1;
        }
        if ($request->vehicle3 =='') {
            $mrfixes->vehicle3 ='0';
        }
        else {
            $mrfixes->vehicle3 = $request->vehicle1;
        }
        if ($request->vehicle4 =='') {
            $mrfixes->vehicle4 ='0';
        }
        else {
            $mrfixes->vehicle4 = $request->vehicle1;
        }
        $mrfixes->save();
        return redirect()->action('MrfixesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mrfixes  $mrfixes
     * @return \Illuminate\Http\Response
     */
    public function show(Mrfixes $mrfixes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mrfixes  $mrfixes
     * @return \Illuminate\Http\Response
     */
    public function edit(Mrfixes $mrfixes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mrfixes  $mrfixes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mrfixes $mrfixes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mrfixes  $mrfixes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mrfixes $mrfixes)
    {
        //
    }
}
