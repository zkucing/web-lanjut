<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    public function buat()
    {
        return view("buku.form-input");
    }

    public function simpan(Request $request)
    {
        $buku = new buku();
        $buku->nama = $request->get("nama");
        $buku->keterangan = $request->get("keterangan");
        $buku->save();

        return redirect(route("tampil_buku", ['id' => $buku->id]));
    }

    public function tampil($id)
    {
        $buku = buku::find($id);

        return view("buku.tampil")->with("buku", $buku);
    }

    public function semua()
    {
        $data = buku::all();
        return view("buku.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("buku.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $buku = buku::find($id);
        $buku->nama = $request->get("nama");
        $buku->keterangan = $request->get("keterangan");
        $buku->save();

        return redirect(route("tampil_buku", ['id' => $buku->id]));
    }

    public function hapus($id)
    {
        buku::destroy($id);
        return redirect(route('semua_buku'));
    }
}