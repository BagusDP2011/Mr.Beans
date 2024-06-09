<?php

namespace App\Http\Controllers;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Models\Product;



class PdfController extends Controller
{
    public function cetakResi()
    {
        // Ambil data transaksi dari database
        $TH = TransactionHistory::all();

        // Buat HTML untuk tabel transaksi menggunakan partial Blade
        $html = View::make('TABEL CETAK RESI.list_penjualan_tabel', compact('TH'))->render();

        // Generate PDF
        $pdf = PDF::loadHTML($html);

        // Download PDF
        return $pdf->download('resi_penjualan.pdf');
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
    public function productPDF()
    {
        // Ambil data produk dari database
        $produk = Product::all();

        // Buat HTML untuk tabel produk menggunakan partial Blade
        $html = view('TABEL CETAK RESI.product_table_pdf', compact('produk'))->render();

        // Generate PDF
        $pdf = PDF::loadHTML($html);

        // Download PDF
        return $pdf->download('daftar_produk.pdf');
    }
}
