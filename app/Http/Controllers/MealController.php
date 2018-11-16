<?php

namespace App\Http\Controllers;

use App\Meal;
use App\Menu;
use Auth;
use Session;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Auth::user()->meals;
        $meal_types = Menu::get_menu("mealType")->options;
        return view('meals.index', [
            'meals' => $meals,
            'meal_types' => $meal_types
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
        $meal = new Meal($request->all());
        $meal->agent_id = Auth::id();
        $meal->save();

        Session::flash('success', 'تمت اضافة الوجبة بنجاح');
        return redirect()->route('meal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->all());
        Session::flash('success', 'تم التعدبل على الوجبة بنجاح');
        

        return redirect()->route('meal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        
        $meal->delete();
        Session::flash('success', 'تمت عملية  الحذف بنجاح');
        

        return redirect()->route('meal.index');
    }
}
