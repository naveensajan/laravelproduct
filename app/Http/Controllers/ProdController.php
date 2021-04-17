<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdModel;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro=ProdModel::all();

        return view('prodview',compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $getProdcode=request('pc');

        $pro=ProdModel::query()
        ->where('pc','LIKE',"%{$getProdcode}%")->get();

        return view('prodview',compact('pro'));
    }

 
    public function store(Request $request)
    {
        $getprodcode=request('pc');
        $getprodname=request('pn');
        $getdes=request('pd');
        $getprice=request('pi');
        $getmdate=request('pm');
        $getedate=request('pe');
        
        echo "<br>";
        echo $getprodcode;
        echo "<br>";
        echo  $getprodname;
        echo "<br>";
        echo $getdes;
        echo "<br>";
        echo $getprice;
        echo "<br>";
        echo $getmdate;
        echo "<br>";
        echo $getedate;
        echo "<br>";

        $pro=new ProdModel();
        $pro->pc=$getprodcode;
        $pro->pn= $getprodname;
        $pro->pd=$getdes;
        $pro->pi=$getprice;
        $pro->pm=$getmdate;
        $pro->pe=$getedate;

        $pro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
