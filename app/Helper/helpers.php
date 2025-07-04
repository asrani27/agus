<?php

use App\Models\User;
use App\Models\Booking;
use App\Models\Jalur;
use App\Models\Kapal;
use App\Models\Kota;
use App\Models\Pemesanan;
use Carbon\Carbon;
use App\Models\Skpd;

function angkaKeBulan($angka)
{
    $bulan = [
        "01" => "Januari",
        "02" => "Februari",
        "03" => "Maret",
        "04" => "April",
        "05" => "Mei",
        "06" => "Juni",
        "07" => "Juli",
        "08" => "Agustus",
        "09" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "Desember"
    ];

    $angka = str_pad($angka, 2, "0", STR_PAD_LEFT);
    return $bulan[$angka] ?? "Bulan tidak valid";
}

function bulan()
{
    Carbon::setLocale('id');
    // Array untuk menyimpan nama bulan
    $namaBulan = [];

    // Loop untuk mendapatkan nama semua bulan
    for ($i = 1; $i <= 12; $i++) {
        $namaBulan[] = Carbon::createFromDate(2024, $i, 1)->translatedFormat('F');
    }

    return $namaBulan;
}
function kapal()
{
    return Kapal::get();
}
function kota()
{
    return Kota::get();
}
function user()
{
    return User::get();
}
function jalur()
{
    return Jalur::get();
}
function pemesanan()
{
    return Pemesanan::get();
}
function booking()
{
    return Booking::get();
}
