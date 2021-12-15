<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//ini saya comment supaya bisa ngepush ulang di github desktop, karena tadi error pak mohon maaf

class karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan1php artisan serve

        $karyawan1 = DB::table('karyawan1')->paginate(5) ;

        // mengirim data karyawan1 ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    // method untuk menampilkan view form tambah karyawan1
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');
    }
    // method untuk insert data ke table karyawan1
    public function store(Request $request)
    {
        // insert data ke table karyawan1
        DB::table('karyawan1')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,
        ]);
        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }

    // method untuk hapus data karyawan1
    public function hapus($id)
    {
        // menghapus data karyawan1 berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }
}
