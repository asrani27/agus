@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/jalur/add">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode jalur</label>
                        <input type="text" name="kode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Supir</label>
                        <input type="text" name="supir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">biaya </label>
                        <input type="text" name="biaya" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">waktu_berangkat </label>
                        <input type="time" name="waktu_berangkat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">waktu_sampai </label>
                        <input type="time" name="waktu_sampai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode Kota</label>
                        <select class="form-control" name="kota_id">

                            @foreach (kota() as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Kapal</label>
                        <select class="form-control" name="kapal_id">

                            @foreach (kapal() as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/superadmin/jalur" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush