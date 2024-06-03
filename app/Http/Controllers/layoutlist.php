<?php

namespace App\Http\Request;
use illuminate\Http\Request;
class layoutlist extends controller
{
    public function index()
    {
        $data = [
            'products'=>[
                ['id' => 1, 'produk' => 'produk 1'],
                ['id' => 2, 'produk' => 'produk 2'],
                ['id' => 3, 'produk' => 'produk 3'],
                ['id' => 4, 'produk' => 'produk 4'],
                ['id' => 5, 'produk' => 'produk 5'],
            ]
            ];
            return view('list_product')->with($data);
    }
}
?>