<!DOCTYPE html>
@extends('layout.bahagia')

@section('title', 'Data Tugas Pegawai')
@section('judulhalaman', 'Data Tugas Pegawai')

@section('konten')


	<a href="/tugas/tambah"> + Tambah tugas Baru</a>

	<br/>
	<br/>

    <table class="styled-table">
        <thead>
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr></thead>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $tugas -> links() }}
    @endsection
