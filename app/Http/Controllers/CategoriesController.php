<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        //dd($categories);
        return view('ecommerce.category.index', compact('categories'));
    }

    public function create(){
        return view('ecommerce.category.create');
    }

    public function store(Request $request){
        $category = Category::create([
            'name' => $request->name
        ]);

        //redirect
        return redirect()->route('ecommerce.category.index');
    }
}
