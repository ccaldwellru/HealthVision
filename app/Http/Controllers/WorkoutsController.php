<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutsController extends Controller
{
    /**
     * Show the routines page.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewRoutines()
    {
    	return view('routines');
    }

	/**
     * Show the abs & core page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewAbsCore()
	{
		return view('absCore');
	}

	/**
     * Show the arns page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewArms()
	{
		return view('arms');
	}

	/**
     * Show the legs page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewLegs()
	{
		return view('legs');
	}

	/**
     * Show the shoulders page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewShoulders()
	{
		return view('shoulders');
	}

	/**
     * Show the  page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewBack()
	{
		return view('back');
	}

	/**
     * Show the yoga page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewYoga()
	{
		return view('yoga');
	}

	/**
     * Show the cardio page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewCardio()
	{
		return view('cardio');
	}
	
	/**
     * Show the workouts page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewWorkouts()
	{
		return view('workouts');
	}

}
