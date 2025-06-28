@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 text-center">
        <img src="/logo/logo.png" width="20%"><br /><br />
        <h2>SISTEM INFORMASI PEMBELIAN TIKET JALUR SUNGAI <br />PADA
            PELABUHAN PASAR LAMA BARITO SELATAN</h2>
    </div>
    <div class="col-12 text-center">
        <a href="/superadmin/kota" class="btn btn-app bg-danger" style="border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #6c757d;
    font-size: 25px;
    height: 90px;
    margin: 0 0 25px 25px;
    min-width: 80px;
    padding: 15px 50px;
    position: relative;
    text-align: center;">
            <span class="badge bg-teal"></span>
            <i class="fas fa-inbox"></i> Kota
        </a>
        <a href="/superadmin/kapal" class="btn btn-app bg-danger" style="border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #6c757d;
    font-size: 25px;
    height: 90px;
    margin: 0 0 25px 25px;
    min-width: 80px;
    padding: 15px 50px;
    position: relative;
    text-align: center;">
            <span class="badge bg-teal"></span>
            <i class="fas fa-inbox"></i> Kapal
        </a>
        <a href="/superadmin/jalur" class="btn btn-app bg-danger" style="border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #6c757d;
    font-size: 25px;
    height: 90px;
    margin: 0 0 25px 25px;
    min-width: 80px;
    padding: 15px 50px;
    position: relative;
    text-align: center;">
            <span class="badge bg-teal"></span>
            <i class="fas fa-inbox"></i> Jalur
        </a>
        <a href="/superadmin/pemesanan" class="btn btn-app bg-danger" style="border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #6c757d;
    font-size: 25px;
    height: 90px;
    margin: 0 0 25px 25px;
    min-width: 80px;
    padding: 15px 50px;
    position: relative;
    text-align: center;">
            <span class="badge bg-teal"></span>
            <i class="fas fa-inbox"></i> Pemesanan
        </a>
        <a href="/superadmin/booking" class="btn btn-app bg-danger" style="border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    color: #6c757d;
    font-size: 25px;
    height: 90px;
    margin: 0 0 25px 25px;
    min-width: 80px;
    padding: 15px 50px;
    position: relative;
    text-align: center;">
            <span class="badge bg-teal"></span>
            <i class="fas fa-inbox"></i> Booking
        </a>

    </div>
</div>
@endsection

@push('js')

@endpush