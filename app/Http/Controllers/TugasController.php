<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        // $tugas = DB::table('tugas')->get();
        $tugas = DB::table('tugas')
        ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('tugas.*', 'pegawai.pegawai_nama')
        ->paginate(5);
        // mengirim data tugas ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }
    // method untuk menampilkan view form tambah tugas
    public function tambah()
    {
          // mengambil data dari table pegawai
          $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
          // memanggil view add
          return view('tugas.tambah', ['pegawai' => $pegawai]);

        // memanggil view tambah
        return view('tugas.tambah');
    }
    // method untuk insert data ke table tugas
    public function store(Request $request)
    {
        // insert data ke table tugas
        DB::table('tugas')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk edit data tugas
    public function edit($id)
    {
        // mengambil data tugas berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        // passing data tugas yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas]);
    }
    // update data tugas
    public function update(Request $request)
    {
        // update data tugas
        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namatugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk hapus data tugas
    public function hapus($id)
    {
        // menghapus data tugas berdasarkan id yang dipilih
        DB::table('tugas')->where('ID', $id)->delete();

        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }
}
