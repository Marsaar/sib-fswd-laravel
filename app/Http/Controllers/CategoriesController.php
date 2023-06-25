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

    public function edit($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // tampilkan view edit dan passing data category
        return view('ecommerce.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // update data category
        $category->update([
            'name' => $request->name
        ]);

        // redirect ke halaman category.index
        return redirect()->route('ecommerce.category.index');
    }

    public function destroy($id)
    {
        // ambil data category berdasarkan id
        $category = Category::find($id);

        // hapus data category
        $category->delete();

        // redirect ke halaman category.index
        return redirect()->route('ecommerce.category.index');
    }

}
