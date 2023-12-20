<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
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
  //PRODUCT==DATA
    //GESTION DE PRODUCTS
    public function view_product()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('users.artisans.product', compact('categories', 'types'));
    }

    public function show_product()
    {
        $data = Product::all();
        return view('users.artisans.listProduct', compact('data'));
    }


    public function show_order($id)
    {
        // Find the product by its ID
        $data = Order::find($id);
        return view('users.artisans.show_order', compact('data'));
    }

    public function show_product1($id)
    {
        // Find the product by its ID
        $data = Product::find($id);
        $orders = Order::where('prod_id', $data->id)->get();
        // Check if the product is not found and handle accordingly
        if (!$data) {
            abort(404); // Or redirect to a 404 page, or handle it in another way
        }
        return view('users.artisans.ShowProduct', compact('data','orders'));
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

        // Correct the variable name to $request->image
        $imageName = time() . '.' . $request->image->extension();

        // Correct the variable name to $request->image
        $request->image->move(public_path('images'), $imageName);

        $pathImage = 'images/' . $imageName;

        // Use the arrow notation to set the 'image' property
        $data->image = $pathImage;

        // Save the product and update the user
        $data->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Product added successfully!');
    }
    public function update_product(Request $request, $id)
    {
        $data = Product::find($id);
        $categories=Category::all();
        $types=Type::all();
        // Redirect back with a success message
        return view('users.artisans.updateProduct',compact('data','categories','types'));
    }

    public function update_product_confirm(Request $request, $id)
    {
            // Validate the incoming request
    $request->validate([
        'name_prod' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric',
        'quantity_min' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'type_id' => 'required|exists:types,id',
        'description' => 'required|string',
    ]);

    // Find the product by its ID
    $data = Product::findOrFail($id);

    // Assign new values from the request to the product instance
    $data->name_prod = $request->name_prod;
    $data->price = $request->price;
    $data->quantity_min = $request->quantity_min;
    $data->category_id = $request->category_id;
    $data->type_id = $request->type_id;
    $data->description = $request->description;

    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image
        if (file_exists(public_path($data->image))) {
            unlink(public_path($data->image));
        }

        // Correct the variable name to $request->image
        $imageName = time() . '.' . $request->image->extension();

        // Correct the variable name to $request->image
        $request->image->move(public_path('images'), $imageName);

        $pathImage = 'images/' . $imageName;

        // Use the arrow notation to set the 'image' property
        $data->image = $pathImage;
    }

    // Save the updated product
    $data->save();

    // Redirect back with a success message
    return redirect()->back()->with('message', 'Product update successfuly');
    }



    public function delet_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfuly');
    }




    //GESTION DE CATEGORY

    public function view_category()
    {
        $data = Category::all();

        return view('users.artisans.category', compact('data'));
    }
    public function add_category(Request $request)
    {

        $request->validate([
            'name_category' => 'required|string',
            'nbr_prod' => 'required|integer',
        ]);
        $data = new Category;
        $data->name_category = $request->name_category;
        $data->nbr_prod = $request->nbr_prod;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully! ');
    }

    public function delet_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfuly');
    }


    // GESTION TYPE
    public function view_type()
    {
        $types = Type::all();
        $categories = Category::all();
        return view('users.artisans.type', compact('types', 'categories'));
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
        $data = Type::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfuly');
    }




    public function order()
    {
        $customerIds = User::where('role', 'customer')->pluck('id');
        $customerIdsArray = $customerIds->toArray();
        $orders = Order::whereIn('user_id', $customerIdsArray)->get();
        return view('users.artisans.order',compact('orders'));
    }

    public function delivered($id)
    {
          $order=Order::find($id);
          $order->delivery_status="delivered";
          $order->payment_status="Paid";
          $order->save();
        return redirect()->back();
    }

    public function searchdata(Request $request)
    {
        $searchText = $request->search;
        $order = Order::where('name', 'LIKE', "%$searchText%")
            ->orWhere('email', 'LIKE', "%$searchText%")
            ->orWhere('product_title', 'LIKE', "%$searchText%")
            ->orWhere('quantity', 'LIKE', "%$searchText%")
            ->orWhere('price', 'LIKE', "%$searchText%")
            ->get();

        return view('users.artisans.order', compact('order'));
    }


}
