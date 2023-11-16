<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

        public function index()
        {
            $salles = Product::get();
            return view('salles.index', compact('salles'));
        }


        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('salles.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $request->validate([
                // ????
                // c bon j'ai compr
                'Num_Salle' => 'required|string|unique:salles',
            'Capacite' => 'required|integer',
            ]);

            $salle = new Product();
            $salle->Num_Salle = $request->input('Num_Salle');
            $salle->Capacite = $request->input('Capacite');


            $salle->save();



            return Redirect::route('salles.index')->with('success', 'Salles created successfully.');

        }

        /**
         * Display the specified resource.
         */
        public function show(int $id)
        {
            $salle = Product::find($id);
            return view('salles.show', compact('salle'));
        }


        /**
         * Show the form for editing the specified resource.
         */
        public function edit(int $id)
        {
            $salle = Product::find($id);
            if (!$salle) {
                return redirect()->route('salles.index')->with('error', 'Salle not found.');
            }

            return view('salles.edit', compact('salle'));
        }


        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, int $id)
        {
            $user = Product::find($id);
            $request->validate([

                'Num_Salle' => 'required|string',
                'Capacite' => 'required|integer',

            ]);

            $user->update($request->all());
            return redirect()->route('salles.index')->with('success', 'Salles modifier avec succès.');
        }
        /**
         * Remove the specified resource from storage.
         */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('users.artisans.products.index')->with('success', 'Product deleted successfully');
    }
}
