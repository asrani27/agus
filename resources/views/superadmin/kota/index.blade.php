@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data kota</h3>

                <div class="card-tools">
                    <a href="/superadmin/kota/print" class='btn btn-sm btn-primary'><i class="fa fa-print"></i>
                        Print</a>
                    <a href="/superadmin/kota/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-danger">
                        <tr>
                            <th>No</th>
                            <th>Kode kota</th>
                            <th>Nama kota</th>
                            <th>Jenis</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td class="text-right">

                                <a href="/superadmin/kota/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/kota/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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