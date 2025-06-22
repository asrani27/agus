<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PemesananController extends Controller
{

    public function index()
    {
        $data = Pemesanan::paginate(10);
        return view('superadmin.pemesanan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.pemesanan.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Pemesanan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/pemesanan');
    }
    public function edit($id)
    {
        $data = Pemesanan::find($id);
        return view('superadmin.pemesanan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Pemesanan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/pemesanan');
    }
    public function delete($id)
    {
        Pemesanan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/pemesanan');
    }
}
