@extends('layout.bahagia')

@section('title', 'Data Absen')
@section('judulhalaman', 'Data Absensi Pegawai')

@section('konten')



	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table class="styled-table">
        <thead>
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr></thead>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

        {{ $absen -> links() }}
@endsection
