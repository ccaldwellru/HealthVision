<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsController extends Controller
{
    /**
     * Show the meals page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewMeal()
    {
    	return view('meal');
    }

    /**
     * Show the breakfast page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewBreakfast()
    {
    	return view('breakfast');
    }

    /**
     * Show the lunch page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewLunch()
    {
    	return view('lunch');
    }

    /**
     * Show the dinner page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewDinner()
    {
    	return view('dinner');
    }

    /**
     * Show the diets page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewDiets()
    {
    	return view('diets');
    }

}
