<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        // mengambil data category
        $categories = Category::all();

        // mengambil data slider
        $sliders = Slider::all();

       
            
        $products = Product::inRandomOrder()->limit(8)->get();
        

        return view('ecommerce.landing', compact( 'products','categories', 'sliders'));
    }
}
