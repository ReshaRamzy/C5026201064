@extends('layout.bahagia')

@section('title', 'Menambah Tugas Pegawai')
@section('judulhalaman', 'Menambah Data Tugas Pegawai')

@section('konten')




	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="namatugas" required="required"> <br/>
        Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection
