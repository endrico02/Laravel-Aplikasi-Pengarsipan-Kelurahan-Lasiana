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
    public function create(){
        return view("modal_create_data_tamu");
    }
}
