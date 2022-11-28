<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas;

class petugasController extends Controller
{
    public function buat()
    {
        return view("petugas.form-input");
    }

    public function simpan(Request $request)
    {
        $petugas = new petugas();
        $petugas->id = $request->get("id");
        $petugas->nama = $request->get("nama");
        $petugas->no_telp = $request->get("no_telp");
        $petugas->alamat = $request->get("alamat");
        $petugas->save();

        return redirect(route("tampil_petugas", ['id' => $petugas->id]));
    }

    public function tampil($id)
    {
        $petugas = petugas::find($id);

        return view("petugas.tampil")->with("petugas", $id);
    }

    public function semua()
    {
        $data = petugas::all();
        return view("petugas.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("petugas.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $petugas = petugas::find($id);
        $petugas->nama = $request->get("nama");
        $petugas->keterangan = $request->get("keterangan");
        $petugas->save();

        return redirect(route("tampil_petugas", ['id' => $petugas->id]));
    }

    public function hapus($id)
    {
        petugas::destroy($id);
        return redirect(route('semua_petugas'));
    }
}