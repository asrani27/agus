<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\Penerima;
use App\Models\Pengaduan;
use App\Models\Distribusi;
use App\Models\Jalur;
use App\Models\Kapal;
use App\Models\Kota;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Expr\Cast\Bool_;

class LaporanController extends Controller
{
    public function user()
    {
        $data = User::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_user', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function kapal()
    {
        $data = Kapal::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_kapal', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function kota()
    {
        $data = Kota::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_kota', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function jalur()
    {
        $data = Jalur::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_jalur', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function pemesanan()
    {
        $data = Pemesanan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_pemesanan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function booking()
    {
        $data = Booking::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_booking', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
