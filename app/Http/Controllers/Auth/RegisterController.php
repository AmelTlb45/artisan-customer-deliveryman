<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', Rule::in(['artisan', 'customer', 'deliveryman'])],
            'phone' => [
                'nullable',
                'string',
                'regex:/^\+?[0-9()-]*$/',
                'min:10', // Adjust the minimum length as needed
                'max:10', // Adjust the maximum length as needed
            ],
            'address' => ['nullable', 'string'],
            'Heur_Overture' => ['nullable', 'string'],
            'Heur_Fermetur' => ['nullable', 'string'],
            'Description' => ['nullable', 'string'],
            /*'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'gif', 'max:2048'],*/
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'Heur_Overture' => $data['Heur_Overture'],
            'Heur_Fermetur' => $data['Heur_Fermetur'],
            'Description' => $data['Description'],
            /*'image' => $data['image'],*/
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
