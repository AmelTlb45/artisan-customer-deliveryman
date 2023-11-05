<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $products = Product::all();
      //  $products = Product::query()->with('category')->paginate(10);
        return view('users.artisans.products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::all();
        $product->fill([
            'quantity' => 0,
            'price' => 0,
        ]);
        $isUpdate = false;
        return view('users.artisans.products.form', compact(
            'product', 'isUpdate', 'categories'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $formFields = $request->validated();
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('product', 'public');
        }

        Product::create($formFields);

        return to_route('users.artisans.products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = Product::all(); // Replace this with your actual code to retrieve products.

       return view('users.artisans.products.index', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $isUpdate = true;
        $categories = Category::all();
        return view('users.artisans.products.form', compact(
            'product', 'isUpdate', 'categories'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->validated())->save();
        return to_route('users.artisans.products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('users.artisans.products.index')->with('success', 'Product deleted successfully');
    }
}
