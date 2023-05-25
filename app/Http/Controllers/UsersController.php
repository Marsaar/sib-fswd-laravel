<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud; 

class UsersController extends Controller
{
    public function index()
    {
        $users = Crud::all(); // Ganti 'Crud' dengan model yang sesuai
        return view('crud.tableuser', compact('users'));//$data dan compact('data') harus sama
    }
}

