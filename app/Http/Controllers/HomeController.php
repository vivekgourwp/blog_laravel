<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        // Fetch all products or apply any filters you want
        $products = Product::all();

        // Pass products to the view
        return view('home', compact('products'));
    }
}
