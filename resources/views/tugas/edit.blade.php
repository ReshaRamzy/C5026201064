@extends('layout.bahagia')

@section('title', 'Mengedit Data Tugas')
@section('judulhalaman', 'Edit Tugas Pegawai')

@section('konten')


	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="text" required="required" name="idpegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $p->Tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="namatugas" value="{{ $p->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
