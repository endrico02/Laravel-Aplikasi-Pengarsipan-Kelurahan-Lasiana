<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function data_tamu(){
        return view('data_tamu');
    }
    public function pengurusan_surat(){
        return view('pengurusan_surat');
    }
    public function pengarsipan_surat(){
        return view('pengarsipan_surat');
    }
    public function read(){

        $data = Tamu::all();
        return view('tampil_data_tamu')->with([
            'data' => $data
        ]);
    }
    public function data_tamu_create(){
        return view("modal_create_data_tamu");
    }
    public function data_tamu_store(Request $request){
        // $nama = $request->nama;
        // \DB::insert("INSERT INTO tamu (nama) VALUES ('$nama')");

        $tgl_db     = Tamu::max('tanggal');
        $tgl_now    = date('Y-m-d');
        $id         = Tamu::where('tanggal', $tgl_now)->max('no_antrian');
        
        if($tgl_db == '' || $tgl_db !== $tgl_now){
            $no = 1;
        }else{

            $no = $id + 1;
        }



        $data['no_antrian']     = $no;
        $data['nama']           = $request->nama;
        $data['alamat']         = $request->alamat;
        $data['perihal']        = $request->perihal;
        $data['tanggal']        = $tgl_now;
        $data['opr_notif']      = 2;
        Tamu::insert($data);
    }
}
