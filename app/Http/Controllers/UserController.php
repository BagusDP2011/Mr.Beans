<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use Illuminate\Support\Facades\Auth;
// use Session;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('login');
        }
        // return view('login');
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function userDetail($id)
    {
        return 'User dengan ID ' . $id;
    }

    public function registerForm()
    {
        return view('registerForm');
    }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'username' => 'required',
    //         'fullName' => 'required',
    //         'password' => 'required',
    //         'email' => 'required|email|unique:users,email',
    //         'alamat' => 'required',
    //         'noHp' => 'required|numeric',
    //     ]);

    //     // Save data to the database
    //     $user = new User();
    //     $user->username = $request->input('username');
    //     $user->fullName = $request->input('fullName');
    //     $user->password = Hash::make($request->input('password')); // Hash the password
    //     $user->email = $request->input('email');
    //     $user->alamat = $request->input('alamat');
    //     $user->noHp = $request->input('noHp');
    //     $user->role = 'Guest'; // Set role as needed
    //     $user->save();

    //     // Redirect to a specific page after successful registration
    //     return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    // }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        try {
            if (Auth::attempt($data)) {
                session()->flash('message', 'Login Berhasil!');
                return redirect('/');
            } else {
                throw new \Exception('Username atau Password Salah');
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect('login');
        }
    }

    public function actionregister(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required|unique:user',
                'fullName' => 'required',
                'password' => 'required',
                'email' => 'required|email|unique:user,email',
                'alamat' => 'required',
                'noHp' => 'required|numeric',
            ]);

            $user = User::create([
                'username' => $request->username,
                'fullName' => $request->fullName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'Guest',
                'alamat' => $request->alamat,
                'noHp' => $request->noHp,
                // 'active' => 1
            ]);
    
            session()->flash('message', 'Register Berhasil. Silahkan Login!');
            return redirect('login');
        } catch (\Exception $e) {
            // Handle the exception
            session()->flash('error', 'Error occurred while registering user: ' . $e->getMessage());
            return redirect('register')->withInput();
        }
    }
}
