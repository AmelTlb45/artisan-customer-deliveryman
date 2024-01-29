<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $product = Product::findOrFail($id);

        // Get ratings for the product
        $ratings = Rating::with('user')->where('status', 1)->where('prod_id', $id)->get();

        return view('home.product_details1', compact('product', 'ratings'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
    }
    /**
     * Remove the specified resource from storage.
     */

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(int $id)
    {
    }
    public function detail($id)
    {
        dd('1');

        if (Auth::check()) {
            $user = Auth::user();
            $userid = $user->id;
            $ratings = Rating::where('user_id', $userid)
                ->andwhere('prod_id', $id)
                ->get();

         //   return view('home.product_details', compact('ratings'));
           return view('home.product_details1', compact('ratings','$id'));//j'ai ajouter $id
        }
        // If user is not authenticated, you might want to handle this case
        // For example, redirect to login or show an error message.
        // You can customize this part based on your application's requirements.
        return redirect()->route('login');
    }

    //commentaire de la page produit
    public function commentprod(Request $request)
    {
        $newComment = new Comment();
    $newComment->comment = $request->input('review');
    // Set other necessary fields based on your Comment model
    $newComment->save();

    // Retrieve all comments including the newly added one
    $comments = Comment::all();

    // Return the view with the comments
    return view('home.product_details1', compact('comments'));
    }


}
