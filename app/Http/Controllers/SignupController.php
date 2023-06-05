<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
    return view('ecommerce.auth.signup');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $store = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'role_id' => 3,
        'password' => Hash::make($request->password),
        ]);

        if($store){
            return redirect()->route('login')->with('Success', 'Register berhasil, silahkan login');
        } else {
            return redirect()->back()->with('Error', 'Register gagal, silahkan coba lagi');
        }
    }
}
