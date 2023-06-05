<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('ecommerce.role.index', compact('roles'));

    }
    public function create(){
        return view('ecommerce.role.create');
    }

    public function store(Request $request){
        $roles = Role::create([
            'name' => $request->name
        ]);

        //redirect
        return redirect()->route('ecommerce.role.index');
    }

}
