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

    public function edit($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // tampilkan view edit dan passing data role
        return view('ecommerce.role.edit', compact('role'));
    }
    
    public function update(Request $request, $id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // update data role
        $role->update([
            'name' => $request->name,
        ]);
        
        // alihkan halaman ke halaman roles
        return redirect()->route('ecommerce.role.index');
    }
    
    public function destroy($id)
    {
        // ambil data role berdasarkan id
        $role = Role::find($id);
        
        // hapus data role
        $role->delete();
        
        // alihkan halaman ke halaman roles
        return redirect()->route('ecommerce.role.index');
    }
}
