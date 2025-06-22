@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

            </div>
            <form method="POST" action="/superadmin/booking/add">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode booking</label>
                        <input type="text" name="kode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jam </label>
                        <input type="time" name="jam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status </label>
                        <input type="status" name="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">kode pemesanan</label>
                        <select class="form-control" name="pemesanan_id">

                            @foreach (pemesanan() as $item)
                            <option value="{{$item->id}}">{{$item->kode}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode login</label>
                        <select class="form-control" name="user_id">

                            @foreach (user() as $item)
                            <option value="{{$item->id}}">{{$item->kode}} - {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/superadmin/booking" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush