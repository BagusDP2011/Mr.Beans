<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function getData()
    {
        $data = [
            ['id' => 1, 'nama' => 'Beras pandan wangi', 'produk' => 'Beras', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung terigu', 'produk' => 'Tepung', 'harga' => 15000],
            ['id' => 3, 'nama' => 'Baygon cair', 'produk' => 'Obat', 'harga' => 15000],
            ['id' => 4, 'nama' => 'Penyedap royco', 'produk' => 'Bumbu', 'harga' => 15000],
            ['id' => 5, 'nama' => 'Minyak goreng', 'produk' => 'Minyak', 'harga' => 15000]
        ];
        return $data;
    }

    public function display()
    {
        $data = $this->getData();
        return view('tugas', compact('data'));
    }
    public function tugasBagusM5()
    {
        return view('Bagus/TugasBagus');
    }
    public function tugasBagusM6()
    {
        $data = $this->getData();
        return view('Bagus/list_product', compact('data'));
    }
}
