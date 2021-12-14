@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Data Pegawai')

@section('konten')


	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
<div class="container">
    <form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
</div>

    <table class="styled-table">
        <thead>
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr></thead>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
    @endsection
