@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data booking</h3>

                <div class="card-tools">
                    <a href="/superadmin/booking/print" class='btn btn-sm btn-primary'><i class="fa fa-print"></i>
                        Print</a>
                    <a href="/superadmin/booking/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-danger">
                        <tr>
                            <th>No</th>
                            <th>Kode booking</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Status</th>
                            <th>Kode Login</th>
                            <th>Kode pemesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->jam}}</td>
                            <td>{{$item->status}}</td>

                            <td>{{$item->user == null ? null : $item->user->kode .' - '. $item->user->name }}</td>
                            <td>{{$item->pemesanan == null ? null : $item->pemesanan->kode }}</td>
                            <td class="text-right">

                                <a href="/superadmin/booking/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/booking/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>{{$data->links()}}
    </div>
</div>

@endsection