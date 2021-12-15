@extends('layout.bahagia')

@section('title', 'Data karyawan')
@section('judulhalaman', 'Data karyawan')

@section('konten')

//ini saya comment supaya bisa ngepush ulang di github desktop, karena tadi error pak mohon maaf

	<a href="/karyawan1/tambah"class="btn btn-primary"> + Tambah karyawan Baru</a>

	<br/>
	<br/>
<div class="container">

    <table class="styled-table">
        <thead>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr></thead>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
            <td>{{ number_format($p->Gaji, 0, ',', '.') }}</td>
            <td>
				<a href="/karyawan1/hapus/{{ $p->NIP }}" class="btn btn-primary">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan1->links() }}
    @endsection
