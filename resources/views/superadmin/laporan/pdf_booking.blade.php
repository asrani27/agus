<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/logo.png'))) }}"
                    width="70px"> &nbsp;&nbsp;
            </td>
            <td style="text-align: center;" width="60%">
                <font size="24px"><b>PELABUHAN PASAR LAMA BUNTOK<br /></b></font>
                Jl. Niaga No.31, Buntok Kota, Kec. Dusun Sel., Kabupaten
                Barito Selatan, Kalimantan Tengah 73751
            </td>
            <td width="15%">
            </td>
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN DATA BOOKING
    </h3>
    <br />
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode booking</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
            <th>Kode Login</th>
            <th>Kode pemesanan</th>
        </tr>
        @php
        $no =1;
        @endphp

        @foreach ($data as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->jam}}</td>
            <td>{{$item->status}}</td>

            <td>{{$item->user == null ? null : $item->user->kode .' - '. $item->user->name }}</td>
            <td>{{$item->pemesanan == null ? null : $item->pemesanan->kode }}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br />Buntok, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br />
                Pimpinan<br /><br /><br /><br /><br />

                <br />
                (...................)
            </td>
        </tr>
    </table>
</body>

</html>