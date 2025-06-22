@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/booking/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode booking</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jam </label>
                        <input type="time" name="jam" class="form-control" value="{{$data->jam}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">status </label>
                        <input type="text" name="status" class="form-control" value="{{$data->status}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode pemesanan</label>
                        <select class="form-control" name="pemesanan_id">

                            @foreach (pemesanan() as $item)
                            <option value="{{$item->id}}" {{$data->pemesanan_id == $item->id ?
                                'selected':''}}>{{$item->kode}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode user</label>
                        <select class="form-control" name="user_id">

                            @foreach (user() as $item)
                            <option value="{{$item->id}}" {{$data->user_id == $item->id ?
                                'selected':''}}>{{$item->kode}} - {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/superadmin/booking" class="btn btn-danger">Kembali</a>
                </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function () {
    const triwulanOptions = {
    "1": ["1", "2"],
    "2": ["3", "4"]
    };

    const bulanOptions = {
    "1": ["Januari", "Februari", "Maret"],
    "2": ["April", "Mei", "Juni"],
    "3": ["Juli", "Agustus", "September"],
    "4": ["Oktober", "November", "Desember"]
    };

    $("#semester").change(function () {
    let semesterVal = $(this).val();
    $("#triwulan").html('<option value="">-triwulan-</option>');
    $("#bulan").html('<option value="">-bulan-</option>');

    if (semesterVal) {
    triwulanOptions[semesterVal].forEach(function (triwulan) {
    $("#triwulan").append('<option value="' + triwulan + '">' + triwulan + '</option>');
    });
    }
    });

    $("#triwulan").change(function () {
    let triwulanVal = $(this).val();
    $("#bulan").html('<option value="">-bulan-</option>');

    if (triwulanVal) {
    bulanOptions[triwulanVal].forEach(function (bulan) {
    $("#bulan").append('<option value="' + bulan + '">' + bulan + '</option>');
    });
    }
    });
    });
</script>
@endpush