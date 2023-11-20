<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'Numero_Tlf' => 'required|string',
            'discription' => 'nullable|string',
        ]);

        $user = new User([

            'Numero_Tlf' => $request->input('Numero_Tlf'),
            'discription' => $request->input('discription'),
            // Add other fields as needed
        ]);

        $user->save();

        return redirect()->route('users.customers.registerCustomer')->with('success', 'Artisan créé avec succès.');
    }
}
