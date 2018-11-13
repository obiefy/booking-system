<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::all();

        return view('agents.index', [
            'agents' => $agents
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    // show search form
    public function search_form(){
        $agents = User::all();
        return view('agents.search', [
            "agents" => $agents
        ]);
    }

    // search
    public function search(Request $request){
        // address result
        $city_result = User::where([
            "city" => $request->city
        ])->get();

        // type result
        $type_result = User::where([
            "agent_type" => $request->agent_type
        ])->get();

         // price result
         $price_result = User::whereHas('prices', function ($query) use ($request) {
            $query->where('price', $request->price);
        })->get();

        // address result
        $address_result = User::where("address" ,'LIKE',"%". $request->agent_type ."%")->get();


        $result = $city_result->merge($address_result);
        
        $result = $city_result->merge($type_result);
        $result = $city_result->merge($price_result);

        return view('agents.search', [
            "agents" => $type_result
        ]);
    }
}
