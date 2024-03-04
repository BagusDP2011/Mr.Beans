<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function getData()
    {
        $data = [
            ['id' => 1, 'nama' => 'Beras pandan wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung terigu', 'harga' => 15000],
            ['id' => 3, 'nama' => 'Baygon cair', 'harga' => 15000],
            ['id' => 4, 'nama' => 'Penyedap royco', 'harga' => 15000],
            ['id' => 5, 'nama' => 'Minyak goreng', 'harga' => 15000]
        ];
        return $data;
    }

    public function display()
    {
        $data = $this->getData();
        return view('tugas', compact('data'));
    }
}
?>
