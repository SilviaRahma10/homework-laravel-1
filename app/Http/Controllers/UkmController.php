<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index(){
        return view('ukms.home',[
        "title"=>"home"
    ]);
    }


    public function daftar(){
        return view('ukms.daftar',[
        "title"=>"daftar"
        ]);
    }

    
    public function konfirmasi(Request $request){
        
        $npm =$request->npm;
        $nama =$request->nama;
        $semester =$request->semester;
        $alamat =$request->alamat;
        $angkatan =$request->angkatan;
        $jabatan =$request->jabatan;
        // echo $npm;
        // echo $nama;
        // echo $semester; 
        // echo $alamat;
        // echo $angkatan;
        // echo $jabatant;
        return view('ukms.konfirmasi',
        compact('npm','nama', 'semester','alamat', 'angkatan', 'jabatan')
    );

        // return view('ukms.calon',[
        // "title"=>"konfirmasi pendaftran"
        // ]);
    }
}
