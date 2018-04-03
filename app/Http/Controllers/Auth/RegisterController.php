<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'height' => 'required|integer|max:107|min:21',
            'current_weight' => 'required|numeric|between:90.00,1000.00|min:90|max:1000',
            'goal_weight' => 'required|numeric|between:90.00,1000.00|min:90|max:1000',
            'current_bmi' => 'required|numeric|between:20.00,65.00|max:65|min:20',
            'goal_bmi' => 'required|numeric|between:20.00,65.00|max:65|min:20',
            'current_waist' => 'required|numeric|between:20.00,100.00|max:100|min:20',
            'goal_waist' => 'required|numeric|between:20.00,100.00|max:100|min:20',
            'experience_level' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'height' => $data['height'],
            'current_weight' => $data['current_weight'],
            'goal_weight' => $data['goal_weight'],
            'current_bmi' => $data['current_bmi'],
            'goal_bmi' => $data['goal_bmi'],
            'current_waist' => $data['current_waist'],
            'goal_waist' => $data['goal_waist'],
            'experience_level' => $data['experience_level']
        ]);
    }
}
