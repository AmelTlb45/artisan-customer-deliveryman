<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
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

      //GESTION DE PRODUCTS
    public function view_product()
    {
        $categories=Category::all();
        $types=Type::all();
        return view('users.artisans.product', compact('categories' , 'types'));
    }

    public function show_product()
    {
        $data=Product::all();
        return view('users.artisans.listProduct',compact('data'));
    }
    public function add_product(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name_prod' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'quantity_min' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'type_id' => 'required|exists:types,id',
        'description' => 'required|string',
    ]);

    // Create a new Product instance
    $data = new Product();

    // Assign values from the request to the product instance
    $data->name_prod = $request->name_prod;
    $data->price = $request->price;
    $data->quantity_min = $request->quantity_min;
    $data->category_id = $request->category_id;
    $data->type_id = $request->type_id;
    $data->description = $request->description;

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        // Move and store the uploaded image using the store method
        $pathImage = $request->file('image')->store('artisans/assets/images/products', 'public');

        // Update the product's image
        $data->image = $pathImage;
    }

    // Save the product and update the user
    $data->save();

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Product added successfully!');
}

public function delet_product($id)
{
 $data=Product::find($id);
 $data->delete();
 return redirect()->back()->with('message','Product deleted successfuly');

}




    //GESTION DE CATEGORY

    public function view_category()
    {
        $data=Category::all();

        return view('users.artisans.category',compact('data'));
    }
    public function add_category(Request $request)
    {

        $request->validate([
            'name_category' => 'required|string',
            'nbr_prod' => 'required|integer',
        ]);
        $data = new Category;
        $data->name_category=$request->name_category;
        $data->nbr_prod=$request->nbr_prod;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully! ');
    }

    public function delet_category($id)
    {
     $data=Category::find($id);
     $data->delete();
     return redirect()->back()->with('message','Category deleted successfuly');

    }


    // GESTION TYPE
    public function view_type()
    {
        $types=Type::all();
        $categories=Category::all();
        return view('users.artisans.type',compact('types','categories'));
    }
    public function add_type(Request $request)
    {

        $request->validate([
            'name_type' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);


    $data = new Type();
    $data->name_type = $request->name_type;
    $data->category_id = $request->category_id;
    $data->save();

        return redirect()->back()->with('message', 'Type added successfully!');
    }

    public function delet_type($id)
    {
     $data=Type::find($id);
     $data->delete();
     return redirect()->back()->with('message','Category deleted successfuly');

    }




    public function index()
    {
        //$data = User::where('role','artisan')->get();
        return view('artisan.index',compact('data'));
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

    return redirect()->route('users.artisans.registerArtisan')->with('success', 'Artisan créé avec succès.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);
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


}
