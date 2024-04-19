<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData; // Import the UserData model
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function userDetail($id)
    {
        return 'User dengan ID ' . $id;
    }

    public function registerForm()
    {
        return view('registerForm');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'fullName' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'alamat' => 'required',
            'noHp' => 'required|numeric',
        ]);

        // Save data to the database
        $user = new UserData();
        $user->username = $request->input('username');
        $user->fullName = $request->input('fullName');
        $user->password = Hash::make($request->input('password')); // Hash the password
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
        $user->noHp = $request->input('noHp');
        $user->role = 'Guest'; // Set role as needed
        $user->save();

        // Redirect to a specific page after successful registration
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
