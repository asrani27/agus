<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JalurController extends Controller
{

    public function index()
    {
        $data = Jalur::paginate(10);
        return view('superadmin.jalur.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.jalur.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Jalur::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/jalur');
    }
    public function edit($id)
    {
        $data = Jalur::find($id);
        return view('superadmin.jalur.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Jalur::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/jalur');
    }
    public function delete($id)
    {
        Jalur::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/jalur');
    }
}
