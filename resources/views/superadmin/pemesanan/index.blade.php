@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data pemesanan</h3>

                <div class="card-tools">
                    <a href="/superadmin/pemesanan/print" class='btn btn-sm btn-primary'><i class="fa fa-print"></i>
                        Print</a>
                    <a href="/superadmin/pemesanan/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-danger">
                        <tr>
                            <th>No</th>
                            <th>Kode pemesanan</th>
                            <th>Tanggal</th>
                            <th>Jam Jemput</th>
                            <th>Tanggal Berangkat</th>
                            <th>Tanggal Pulang</th>
                            <th>Kode Jalur</th>
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
                            <td>{{$item->berangkat}}</td>
                            <td>{{$item->pulang}}</td>
                            <td>{{$item->jalur == null ? null : $item->jalur->kode }}</td>
                            <td class="text-right">

                                <a href="/superadmin/pemesanan/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/pemesanan/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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