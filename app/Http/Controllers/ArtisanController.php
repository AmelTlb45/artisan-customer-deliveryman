<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ArtisanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */

     public function view_category()
    {
        $data=Category::all();
        return view('users.artisans.category',compact('data'));
    }
    public function view_product()
    {
        $data=Category::all();
        return view('users.artisans.product',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->name_category=$request->name_category;
        $data->save();
        return redirect()->back()->with('message', 'category add ! ');
    }
    public function index()
    {
        //$data = User::where('role','artisan')->get();
        return view('artisan.index',compact('data'));
    }



    public function add_product(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name_prod' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'quantity_min' => 'required|numeric',
        'description' => 'required|string',
    ]);

    // Create a new Product instance
    $data = new Product();

    // Assign values from the request to the product instance
    $data->name_prod = $request->name_prod;
    $data->price = $request->price;
    $data->quantity_min = $request->quantity_min;
    $data->description = $request->description;

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        // Move and store the uploaded image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('product'), $imageName);
        $pathImage = 'product' . $imageName;

        // Update the product's image
        $data->image = $pathImage;

        // Update the authenticated user's photo
        Auth::user()->photo = $pathImage;
    }

    // Save the product and update the user
    $data->save();

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Product added successfully!');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artisan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string', // Artisan's name
            'Prenom' => 'required|string', // Artisan's last name
            'Adresse' => 'nullable|string', // Artisan's address
            'Date_Naissance' => 'required|date', // Artisan's date of birth
            'sexe' => 'required|string', // Artisan's gender
            'Numéro_Téléphone' => 'required|string', // Artisan's phone number
            'E_mail' => 'nullable|email', // Artisan's email (if provided)
            'photo' => 'nullable|string', // Artisan's photo (if provided)
            'statut' => 'required|string', // Artisan's status
            'product_type' => 'required|in:Sugar,Salt,Both', // Specify whether they sell sugar, salt, or both
        ]);

        //$data = User::create($request->all());
        return redirect()->route('artisans.index')->with('success','élève créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$data = User::find($id);
        return view('artisans.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //$data = User::find($id);
        return view('artisans.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$user = User::find($id);
        $request->validate([
            'Nom' => 'required|string', // Artisan's name
            'Prenom' => 'required|string', // Artisan's last name
            'Adresse' => 'nullable|string', // Artisan's address
            'Date_Naissance' => 'required|date', // Artisan's date of birth
            'sexe' => 'required|string', // Artisan's gender
            'Numéro_Téléphone' => 'required|string', // Artisan's phone number
            'E_mail' => 'nullable|email', // Artisan's email (if provided)
            'photo' => 'nullable|string', // Artisan's photo (if provided)
            'statut' => 'required|string', // Artisan's status
            'product_type' => 'required|in:sugar,salt,both', // Specify whether they sell sugar, salt, or both
        ]);
        if ($request->has('password')) {
          //  $user->password = Hash::make($request->password);
            //$user->save();
        }
        //$user->update($request->all());
        return redirect()->route('artisans.index')->with('success','élève modifier avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        //$data = User::findOrFail($id);
       // $data->delete();
        return redirect()->back()->with('success', 'élève a été supprimer avec succès');
    }

    public function delet_category($id){
 $data=Category::find($id);
 $data->delete();
 return redirect()->back()->with('message','cetegory deleted successfuly');

    }
}
