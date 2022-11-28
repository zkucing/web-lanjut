<?php 

namespace App\Http\Controllers;

class ContohController extends Controller
{
    function hii($nama) {
        return view("hii")
            ->with("nama", $nama)
            ->with("mk", "Web Lanjut")
            ->with("waktu", date("H:m:s"))
            ->with("panggilan", "Mr. ");
    }
}

?>