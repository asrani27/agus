<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function index()
    {
        $data = Booking::paginate(10);
        return view('superadmin.booking.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.booking.create');
    }
    public function store(Request $req)
    {
        $param = $req->all();
        Booking::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/booking');
    }
    public function edit($id)
    {
        $data = Booking::find($id);
        return view('superadmin.booking.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Booking::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/booking');
    }
    public function delete($id)
    {
        Booking::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/booking');
    }
}
