<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Heur_Overture' => 'required|string',
            'Heur_Fermeture' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'Numero_Tlf' => 'required|string',
            'discription' => 'nullable|string',
        ]);

        $user = new User([
            'Heur_Overture' => $request->input('Heur_Overture'),
            'Heur_Fermeture' => $request->input('Heur_Fermeture'),
            'category_id' => $request->input('category_id'),
            'Numero_Tlf' => $request->input('Numero_Tlf'),
            'discription' => $request->input('discription'),
            // Add other fields as needed
        ]);

        $user->save();

        return redirect()->route('users.deliverymans.registeDeliverymans')->with('success', 'Artisan créé avec succès.');
    }

}
