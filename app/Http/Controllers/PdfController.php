<?php

namespace App\Http\Controllers;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function cetakResi()
    {
        $data = ['title' => 'Welcome to Laravel-DomPDF'];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('myPDF.pdf');
    }

    public function generatePdf()
    {
        // Ambil data pengguna dari database
        $users = User::all();

        // Buat HTML untuk tabel pengguna menggunakan partial Blade
        $html = View::make('TABEL CETAK RESI.user_table_pdf', compact('users'))->render();


        // Generate PDF
        $pdf = PDF::loadHTML($html);

        // Download PDF
        return $pdf->download('daftar_pengguna.pdf');
    }

}
