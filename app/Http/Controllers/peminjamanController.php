<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class PeminjamanController extends Controller
{
    public function lihat()
    {
    	// mengambil data dari table tb_peminjaman
    	$db_peminjaman = DB::table('tb_peminjaman')->get();
    	// mengirim data ke view index
    	return view('lihat-peminjaman',['tb_peminjaman' => $db_peminjaman]);
    }

    public function input()
    {
		// memanggil view input
		return view('input-peminjaman');
    }

    public function simpan(Request $request)
    {
		$db_peminjaman = new tb_peminjaman();
        $db_peminjaman->nama_siswa = $request->post("nama_siswa");
        $db_peminjaman->kelas_siswa = $request->post("kelas_siswa");
        $db_peminjaman->nomor_hp = $request->post("nomor_hp");
		$db_peminjaman->judul_buku = $request->post("judul_buku");
        $db_peminjaman->tanggal_peminjaman = $request->post("tanggal_peminjaman");
		$db_peminjaman->save();

        return redirect(route("lihat-peminjaman"));
    }
}