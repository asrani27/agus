@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data jalur</h3>

                <div class="card-tools"> <a href="/superadmin/jalur/print" class='btn btn-sm btn-primary'><i
                            class="fa fa-print"></i>
                        Print</a>
                    <a href="/superadmin/jalur/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-danger">
                        <tr>
                            <th>No</th>
                            <th>Kode Jalur</th>
                            <th>Supir</th>
                            <th>Biaya</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Sampai</th>
                            <th>kota</th>
                            <th>kapal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->supir}}</td>
                            <td>{{number_format($item->biaya)}}</td>
                            <td>{{$item->waktu_berangkat}}</td>
                            <td>{{$item->waktu_sampai}}</td>
                            <td>{{$item->kota == null ? null : $item->kota->kode .' - ' .$item->kota->nama}}</td>
                            <td>{{$item->kapal == null ? null : $item->kapal->kode .' - ' .$item->kapal->jenis}}</td>
                            <td class="text-right">

                                <a href="/superadmin/jalur/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/jalur/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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