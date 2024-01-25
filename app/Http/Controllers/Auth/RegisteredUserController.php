<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([

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
            'Dispo' => ['nullable', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role, // Set the 'role' based on user input
            'phone' => $request->phone,
            'address' => $request->address,
            'Heur_Overture' => $request->Heur_Overture,
            'Heur_Fermetur' => $request->Heur_Fermetur,

            'Description' => $request->Description,
            'Dispo' => $request->Dispo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
