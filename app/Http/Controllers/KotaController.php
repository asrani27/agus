<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KotaController extends Controller
{

    public function index()
    {
        $data = Kota::paginate(10);
        return view('superadmin.kota.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.kota.create');
    }
    public function store(Request $req)
    {
        if (Kota::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Kota::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/kota');
    }
    public function edit($id)
    {
        $data = Kota::find($id);
        return view('superadmin.kota.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Kota::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/kota');
    }
    public function delete($id)
    {
        Kota::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/kota');
    }
}
