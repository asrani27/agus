@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/jalur/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode jalur</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Supir</label>
                        <input type="text" name="supir" class="form-control" value="{{$data->supir}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">biaya </label>
                        <input type="text" name="biaya" class="form-control" value="{{$data->biaya}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">waktu_berangkat </label>
                        <input type="time" name="waktu_berangkat" class="form-control"
                            value="{{$data->waktu_berangkat}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">waktu_sampai </label>
                        <input type="time" name="waktu_sampai" class="form-control" value="{{$data->waktu_sampai}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode Kota</label>
                        <select class="form-control" name="kota_id">

                            @foreach (kota() as $item)
                            <option value="{{$item->id}}" {{$data->kode_id == $item->id ?
                                'selected':''}}>{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Kapal</label>
                        <select class="form-control" name="kapal_id">

                            @foreach (kapal() as $item)
                            <option value="{{$item->id}}" {{$data->kapal_id == $item->id ?
                                'selected':''}}>{{$item->kode}} - {{$item->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/superadmin/jalur" class="btn btn-danger">Kembali</a>
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