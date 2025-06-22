@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data user</h3>

                <div class="card-tools">
                    <a href="/superadmin/user/add" class='btn btn-sm btn-primary'>Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap table-sm table-bordered">
                    <thead class="bg-danger">
                        <tr>
                            <th>No</th>
                            <th>Kode User</th>
                            <th>nama</th>
                            <th>username</th>
                            <th>telp</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr style="font-size:14px">
                            <td>{{$key + 1}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->username}}</td>
                            <td>{{$item->telp}}</td>
                            <td>{{$item->email}}</td>
                            <td class="text-right">

                                <a href="/superadmin/user/edit/{{$item->id}}" class="btn btn-sm btn-success"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/superadmin/user/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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