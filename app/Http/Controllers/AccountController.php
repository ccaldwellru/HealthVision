<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
   	/**
     * Show the progress page.
     *
     * @return \Illuminate\Http\Response
     */
   	public function viewProgress()
   	{
   		return view('progress');
   	}

	/**
     * Show the calorie tracker page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewCalorieTracker()
	{
		return view('calories');
	}

	/**
     * Show the account settings page.
     *
     * @return \Illuminate\Http\Response
     */
	public function viewEditAccount()
	{
		return view('edit_account');
	}
}
