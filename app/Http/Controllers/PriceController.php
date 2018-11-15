<?php

namespace App\Http\Controllers;

use App\Price;
use Auth;
use Illuminate\Http\Request;
use Session;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Auth::user()->prices;
        return view('prices.index', [
            'prices' => $prices
        ]);
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
        $price = new Price($request->all());
        $price->agent_id = Auth::id();
        $price->save();

        Session::flash('success', 'تمت اضافة السعر بنجاح');
        return redirect()->route('price.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $price->update($request->all());
        Session::flash('success', 'تم التعدبل على السعر بنجاح');
        

        return redirect()->route('price.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();
        Session::flash('success', 'تمت عملية  الحذف بنجاح');
        

        return redirect()->route('price.index');
    }
}
