<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('ecommerce.product.index', ['products' => $products]);
    }

    public function create(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('ecommerce.product.create', compact('brands', 'categories'));
    }

    public function store(Request $request){
        $product = Product::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
            'rating' => $request->rating
        ]);

        //redirect
        return redirect()->route('ecommerce.product.index');
    }
}
