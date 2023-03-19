<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function userPosts($id)
    {
        $user = User::findOrFail($id); // Busca al usuario correspondiente al ID
        $posts = $user->posts; // Obtiene los posts del usuario
    
        return view('users.posts', compact('user', 'posts')); // Retorna la vista con los posts y el usuario correspondiente
    }

    public function userProfile()
    {
        $usuario = Auth::user();
        return view('profile', compact('usuario'));

    }

    public function userProfileUpdate(Request $request)
    {
        $user = Auth::user();
        //dd($user);
        //dd($request->all());
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        
        $user->save();
        
        return redirect()->route('profile')->with('mensaje', 'Perfil actualizado con éxito');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, $id)
    {   
        $user = User::find($id);
        /*user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_id = $request->input('role_id');
        $user->save();*/
        $user->update($request->all());
        return redirect()->route('admin.users')->with('success', 'El usuario ha sido actualizado exitosamente.');
    }

    public function delete($id) 
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Usuario eliminado correctamente');
    }
    
    public function create()
    {
        $user= User::all();
        $roles = Role::all();
        return view('admin.users.create', compact('user','roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'role_id' => 'required'
        ]);

        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['wmail'];
        $user->password = $validatedData['password'];
        $user->role_id = $validatedData['role_id'];
        $user->save();

        return redirect()->route('admin.users')
            ->with('success','User created successfully.');
    }

}
