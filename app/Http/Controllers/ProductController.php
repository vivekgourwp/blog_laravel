<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {   
        
        $products = Product::all(); // or Product::get()

        // Pass the products to the view
        return view('admin.products.products', compact('products'));
        // return "fdsfdsf";
        
    }

    public function create()
    { 

        return view('admin.products.create');
        // return "fdsfdsf";
    }

    public function store(Request $request)
    {

        
        $request->validate([
            'sku'               => 'required|unique:products,sku',
            'name'              => 'required|string|max:255',
            'description'       => 'nullable|string',
            'regular_price'     => 'required|numeric',
            'sale_price'        => 'required|numeric',
            'stock_quantity'    => 'required|integer',
            'thumbnail_image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('thumbnail_image')) {
             $imagePath = $request->file('thumbnail_image')->store('products', 'public'); // Store the image in 'storage/app/public/products'
        } else {
             $imagePath = null; 
        }

        Product::create([
            'sku'               => $request->input('sku'),
            'name'              => $request->input('name'),
            'description'       => $request->input('description'),
            'regular_price'     => $request->input('regular_price'),
            'sale_price'        => $request->input('sale_price'),
            'stock_quantity'    => $request->input('stock_quantity'),
            'thumbnail_image'   => $imagePath, // Save the image path to the database
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully');
     }


    // Show the form for editing a product
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        // Validate request
        $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'nullable|string',
            'regular_price'     => 'required|numeric|min:0',
            'sale_price'        => 'nullable|numeric|min:0',
            'stock_quantity'    => 'required|integer|min:0',
            'sku'               => 'nullable|string|max:255',
            'thumbnail_image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Prepare data for update
        $data = $request->except('thumbnail_image'); // Exclude the image from the data to handle separately
    
        // Handle the new image upload if provided
        if ($request->hasFile('thumbnail_image')) {
            // Delete the old image if it exists
            if ($product->thumbnail_image) {
                \Storage::disk('public')->delete($product->thumbnail_image);
            }
    
            // Store the new image and update the path
            $data['thumbnail_image'] = $request->file('thumbnail_image')->store('products', 'public');
        }
    
        // Update the product with the provided data
        $product->update($data);
    
        return redirect()->route('products')->with('success', 'Product updated successfully');
    }

    // Display the specified product
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }
    

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products')->with('success', 'User deleted successfully.');
    }
    


}
