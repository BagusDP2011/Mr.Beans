<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     $data = [
    //         'nama' => 'Doraemon',
    //         'pekerjaan' => 'Developer',
    //     ];
    //     return view('home')->with($data);
    // }
    public function index(){
        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('homepage', compact('nama', 'pekerjaan'));
    }

    public function homeData(){
        return view('homepage2');
    }
    public function contact(){
        return view('contact');
    }
}
