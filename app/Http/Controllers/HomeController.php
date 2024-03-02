<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
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
        $products = Product::paginate(8);
        return view('homepage', ['produk'=> $products]);
    }


    public function dashboardLama(){
        return view('HomepageOld');
    }
    public function homeData(){
        return view('homepage2');
    }
    public function contact(){
        return view('contact');
    }
    public function help(){
        return view('help');
    }
    public function welcome(){
        return view('welcome');
    }
    public function reseller(){
        return view('reseller');
    }
}
