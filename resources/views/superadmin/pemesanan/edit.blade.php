@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

            </div>
            <form method="POST" action="/superadmin/pemesanan/edit/{{$data->id}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode pemesanan</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{$data->tanggal}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jam jemput </label>
                        <input type="time" name="jam" class="form-control" value="{{$data->jam}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal berangkat </label>
                        <input type="date" name="berangkat" class="form-control" value="{{$data->berangkat}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal pulang </label>
                        <input type="date" name="pulang" class="form-control" value="{{$data->pulang}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode jalur</label>
                        <select class="form-control" name="jalur_id">

                            @foreach (jalur() as $item)
                            <option value="{{$item->id}}" {{$data->jalur_id == $item->id ?
                                'selected':''}}>{{$item->kode}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/superadmin/pemesanan" class="btn btn-danger">Kembali</a>
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