<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MainControll extends Controller
{
    public function databuku(){
        $item = DB::table('ms_buku as mb')
            ->select('mb.*', 'mk.*', 'mp.*')
            ->leftjoin('ms_kategori as mk', 'mk.kode_kategori', '=' ,'mb.kode_kategori')
            ->leftjoin('ms_penerbit as mp', 'mp.kode_penerbit', '=', 'mb.kode_penerbit')
            ->get();

        return view('databuku0082', compact('item'));
    }

    public function databuku2(){
        $item = DB::table('ms_buku as mb')
            ->select('mb.*', 'mk.*', 'mp.*')
            ->leftjoin('ms_kategori as mk', 'mk.kode_kategori', '=' ,'mb.kode_kategori')
            ->leftjoin('ms_penerbit as mp', 'mp.kode_penerbit', '=', 'mb.kode_penerbit')
            ->where('mb.kode_kategori','=','K001')
            ->get();

        return view('databuku0082', compact('item'));
    }

    public function datapeminjam(){
        $item = DB::table('ms_peminjam')
            ->select('*')
            ->get();
            
        return view('datapeminjam0082', compact('item'));
    }

    public function datapeminjam2(){
        $item = DB::table('ms_peminjam')
            ->select('*')
            ->where('telp_peminjam', '<', 63)
            ->get();
            
        return view('datapeminjam0082', compact('item'));
    }
}
