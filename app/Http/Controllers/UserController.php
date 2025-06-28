<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengaduan;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $data = User::paginate(10);
        return view('superadmin.user.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.user.create');
    }
    public function store(Request $req)
    {
        if (User::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode sudah ada');
            return back();
        }
        if (User::where('username', $req->username)->first() != null) {
            Session::flash('error', 'Username sudah ada');
            return back();
        }
        $param = $req->all();
        $param['password'] = Hash::make($req->password);
        User::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/user');
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('superadmin.user.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $e = User::find($id);
        if ($req->password == null) {
            $e->kode = $req->kode;
            $e->name = $req->name;
            $e->telp = $req->telp;
            $e->email = $req->email;
            $e->save();
            Session::flash('success', 'Berhasil Diupdate');
            return redirect('/superadmin/user');
        } else {
            $e->kode = $req->kode;
            $e->name = $req->name;
            $e->telp = $req->telp;
            $e->email = $req->email;
            $e->password = Hash::make($req->password);
            $e->save();
            Session::flash('success', 'Berhasil Diupdate');
            return redirect('/superadmin/user');
        }
    }
    public function delete($id)
    {
        User::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/user');
    }
    public function print()
    {
        $data = User::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_user', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
