<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KapalController extends Controller
{

    public function index()
    {
        $data = Kapal::paginate(10);
        return view('superadmin.kapal.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.kapal.create');
    }
    public function store(Request $req)
    {
        if (Kapal::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Kapal::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/kapal');
    }
    public function edit($id)
    {
        $data = Kapal::find($id);
        return view('superadmin.kapal.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Kapal::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/kapal');
    }
    public function delete($id)
    {
        Kapal::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/kapal');
    }
}
