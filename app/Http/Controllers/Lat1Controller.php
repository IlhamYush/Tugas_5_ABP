<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Ilham Yushronni";
        $data["asal"]="Bogor";
        $data["Umur"]="20";
        $data["nim"]="1301213447";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Teman Saya';
        $data['daf_mhs'] = array(
            array("nama" => "Ilham", "asal" => "Bogor"),
            array("nama" => "Rian", "asal" => "Pinus"),
            array("nama" => "Rizki", "asal" => "Cilegon")
        );
        return view('v_latihan2', $data);
    }
}
