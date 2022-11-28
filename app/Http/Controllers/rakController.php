<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rak;

class rakController extends Controller
{
    public function buat()
    {
        return view("rak.form-input");
    }

    public function simpan(Request $request)
    {
        $rak = new rak();
        $rak->nama = $request->get("nama");
        $rak->keterangan = $request->get("keterangan");
        $rak->save();

        return redirect(route("tampil_rak", ['id' => $rak->id]));
    }

    public function tampil($id)
    {
        $rak = rak::find($id);

        return view("rak.tampil")->with("rak", $rak);
    }

    public function semua()
    {
        $data = rak::all();
        return view("rak.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("rak.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $rak = rak::find($id);
        $rak->nama = $request->get("nama");
        $rak->keterangan = $request->get("keterangan");
        $rak->save();

        return redirect(route("tampil_rak", ['id' => $rak->id]));
    }

    public function hapus($id)
    {
        rak::destroy($id);
        return redirect(route('semua_rak'));
    }
}