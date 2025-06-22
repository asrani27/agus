@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/pemesanan/add">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode pemesanan</label>
                        <input type="text" name="kode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jam jemput </label>
                        <input type="time" name="jam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal berangkat </label>
                        <input type="date" name="berangkat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal pulang </label>
                        <input type="date" name="pulang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode jalur</label>
                        <select class="form-control" name="jalur_id">

                            @foreach (jalur() as $item)
                            <option value="{{$item->id}}">{{$item->kode}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/superadmin/pemesanan" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush