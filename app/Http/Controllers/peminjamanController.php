<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class peminjamanController extends Controller
{
    public function buat()
    {
        return view("peminjaman.form-input");
    }

    public function simpan(Request $request)
    {
        $peminjaman = new peminjaman();
        $peminjaman->nama = $request->get("nama");
        $peminjaman->keterangan = $request->get("keterangan");
        $peminjaman->save();

        return redirect(route("tampil_peminjaman", ['id' => $peminjaman->id]));
    }

    public function tampil($id)
    {
        $peminjaman = peminjaman::find($id);

        return view("peminjaman.tampil")->with("peminjaman", $peminjaman);
    }

    public function semua()
    {
        $data = peminjaman::all();
        return view("peminjaman.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("peminjaman.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjaman->nama = $request->get("nama");
        $peminjaman->keterangan = $request->get("keterangan");
        $peminjaman->save();

        return redirect(route("tampil_peminjaman", ['id' => $peminjaman->id]));
    }

    public function hapus($id)
    {
        peminjaman::destroy($id);
        return redirect(route('semua_peminjaman'));
    }
}