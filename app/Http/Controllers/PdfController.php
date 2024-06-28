<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller
{
    public function cetakResi()
    {
        set_time_limit(150);
        try {
            $TH = TransactionHistory::all();
            $html = view('TABEL CETAK RESI.list_penjualan_tabel', compact('TH'))->render();
            $pdf = PDF::loadHTML($html);
            $pdf->setPaper('a4', 'portrait');

            if (!$pdf) {
                Log::info('generate pdf error');
                throw new \Exception('Failed to load HTML into PDF');
            }

            return $pdf->download('resi_penjualan.pdf');
        } catch (\Exception $e) {
            Log::error('Error generating PDF:', ['exception' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to generate PDF'], 500);
        }
    }

    public function cetakUser()
    {
        set_time_limit(150);
        try {
            $users = User::all();
            $html = View::make('TABEL CETAK RESI.user_table_pdf', compact('users'))->render();
            $pdf = PDF::loadHTML($html);
            $pdf->setPaper('a4', 'portrait');

            if (!$pdf) {
                Log::info('generate pdf error');
                throw new \Exception('Failed to load HTML into PDF');
            }

            return $pdf->download('daftar_pengguna.pdf');
        } catch (\Exception $e) {
            Log::error('Error generating PDF:', ['exception' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to generate PDF'], 500);
        }
    }

    public function cetakProduct()
    {
        set_time_limit(150);
        try {
            $produk = Product::all();
            $html = view('TABEL CETAK RESI.product_table_pdf', compact('produk'))->render();
            $pdf = PDF::loadHTML($html);
            $pdf->setPaper('a4', 'portrait');

            if (!$pdf) {
                Log::info('generate pdf error');
                throw new \Exception('Failed to load HTML into PDF');
            }

            return $pdf->download('daftar_produk.pdf');
        } catch (\Exception $e) {
            Log::error('Error generating PDF:', ['exception' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to generate PDF'], 500);
        }
    }
}
