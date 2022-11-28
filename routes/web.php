<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\rakController;
use App\Http\Controllers\petugasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hii/panggilan/{nama}", [ContohController::class, "hii"])->name("hii");

Route::get('/yola', function() {
    echo "Yolanda";
});

Route::get('/yolanda', function () {
    return view('yolanda');
})->name("home");

Route::get('/yola', function () {
    return view('yola');
})->name("about");

Route::get('/yolan', function () {
    return view('yolan');
})->name("contact");

Route::get('/my-education', function () {
    return view('education');
})->name("pendidikan");

Route::get('/my-course', function () {
    return view('course');
})->name("kursus");

Route::get("/tampil-user",[UserController::class,"tampil"])->name("user_all");;
Route::get("/input-user",[UserController::class,"formInput"])->name("user_input");;
Route::post("/simpan-user",[UserController::class,"simpan"])->name("user_simpan");;

Route::get("/edit-user/{id}",[UserController::class,"formEdit"])->name("user_edit");;
Route::put("/update-user/{id}",[UserController::class,"update"])->name("user_update");;
Route::delete("/hapus-user/{id}",[UserController::class,"hapus"])->name("user_hapus");;

Route::get("/tampil-user/{id}",[UserController::class,"show"])->name("user_show");;
Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::get("buku/buat", [bukuController::class, 'buat'])->name("buat_buku");
Route::post("buku/simpan", [bukuController::class, 'simpan'])->name("simpan_buku");
Route::get("buku/tampil/{id}", [bukuController::class, 'tampil'])->name("tampil_buku");
Route::get("buku/semua", [bukuController::class, 'semua'])->name("semua_buku");
Route::get("buku/ubah/{id}", [bukuController::class, 'ubah'])->name("ubah_buku");
Route::put("buku/update/{id}", [bukuController::class, 'update'])->name("update_buku");
Route::delete("buku/hapus/{id}", [bukuController::class, 'hapus'])->name("hapus_buku");

Route::get("peminjaman/buat", [peminjamanController::class, 'buat'])->name("buat_peminjaman");
Route::post("peminjaman/simpan", [peminjamanController::class, 'simpan'])->name("simpan_peminjaman");
Route::get("peminjaman/tampil/{id}", [peminjamanController::class, 'tampil'])->name("tampil_peminjaman");
Route::get("peminjaman/semua", [peminjamanController::class, 'semua'])->name("semua_peminjaman");
Route::get("peminjaman/ubah/{id}", [peminjamanController::class, 'ubah'])->name("ubah_peminjaman");
Route::put("peminjaman/update/{id}", [peminjamanController::class, 'update'])->name("update_peminjaman");
Route::delete("peminjaman/hapus/{id}", [peminjamanController::class, 'hapus'])->name("hapus_peminjaman");

Route::get("rak/buat", [rakController::class, 'buat'])->name("buat_rak");
Route::post("rak/simpan", [rakController::class, 'simpan'])->name("simpan_rak");
Route::get("rak/tampil/{id}", [rakController::class, 'tampil'])->name("tampil_rak");
Route::get("rak/semua", [rakController::class, 'semua'])->name("semua_rak");
Route::get("rak/ubah/{id}", [rakController::class, 'ubah'])->name("ubah_rak");
Route::put("rak/update/{id}", [rakController::class, 'update'])->name("update_rak");
Route::delete("rak/hapus/{id}", [rakController::class, 'hapus'])->name("hapus_rak");

Route::get("petugas/buat", [petugasController::class, 'buat'])->name("buat_petugas");
Route::post("petugas/simpan", [petugasController::class, 'simpan'])->name("simpan_petugas");
Route::get("petugas/tampil/{id}", [petugasController::class, 'tampil'])->name("tampil_petugas");
Route::get("petugas/semua", [petugasController::class, 'semua'])->name("semua_petugas");
Route::get("petugas/ubah/{id}", [petugasController::class, 'ubah'])->name("ubah_petugas");
Route::put("petugas/update/{id}", [petugasController::class, 'update'])->name("update_petugas");
Route::delete("petugas/hapus/{id}", [petugasController::class, 'hapus'])->name("hapus_petugas");