<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModemController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get(); //hasil get() adalah array of object
        $modem = DB::table('modem')->paginate(1);
        // mengirim data pegawai ke view index
        return view('modem.index', ['modem' => $modem]);
    }
        //mencari data pegawai
        public function cari(Request $request)
        {
            // menangkap data pencarian
            $cari = $request->cari;

                // mengambil data dari table pegawai sesuai pencarian data
            $modem = DB::table('modem')
            ->where('merkmodem','like',"%".$cari."%")
            ->orWhere('stockmodem','like',"%".$cari."%")
            ->orWhere('tersedia','like',"%".$cari."%")
            ->paginate();

                // mengirim data pegawai ke view index
            return view('modem.index',['modem' => $modem]);

        }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('modem.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('modem')->insert([
            'kodemodem' => $request->kodemodem,
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/modem');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('modem.edit', ['modem' => $modem]);
    }
    // method untuk melihat detail data pegawai
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('modem.detail', ['modem' => $modem]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('modem')->where('kodemodem', $request->kodemodem)->update([
            'kodemodem' => $request->kodemodem,
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/modem');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('modem')->where('kodemodem', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/modem');
    }

}
