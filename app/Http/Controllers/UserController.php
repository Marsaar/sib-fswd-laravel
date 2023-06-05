<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('ecommerce.user.index', compact('users'));
    }

    public function create(){
        $roles = Role::all();
        return view('ecommerce.user.create', compact('roles'));
    }

    public function store(Request $request){
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
        ]);

        //redirect
        return redirect()->route('ecommerce.user.index');
    }
}
