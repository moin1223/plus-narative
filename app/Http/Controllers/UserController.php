<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Hash;

class UserController extends Controller
{
    
    function index()
    {
        $users = User::all(); 
        return view('users.index', ['users' => $users]);
    }
    
    function create()
    {
        $roles = Role::all();
        return view('users.create', ['roles'=>$roles]);
    }


    function store(Request $request)
    {
        $request->validate([
            'first_name'         =>   'required',
            'last_name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();
        // dd($data);

        User::create([
            'first_name'  =>  $data['first_name'],
            'last_name'  =>  $data['last_name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        $user = User::latest()->first();
        $user->assignRole($data['role']);
        return redirect()->route('user.index'); 
    }

}
