@extends('layout.bahagia')

@section('title', 'Data Snack')
@section('judulhalaman', 'Data Snack')

@section('konten')


	<a href="/snack/tambah"> + Tambah snack Baru</a>

	<br/>
	<br/>
<div class="container">
    <form action="/snack/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Snack" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
</div>

    <table class="styled-table">
        <thead>
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr></thead>
		@foreach($snack as $p)
		<tr>
			<td>{{ $p->merksnack }}</td>
			<td>{{ $p->stocksnack}}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/snack/view/{{ $p->kodesnack }}">Detail</a>
                |
				<a href="/snack/edit/{{ $p->kodesnack}}">Edit</a>
				|
				<a href="/snack/hapus/{{ $p->kodesnack }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        T : Tidak Ada <br>
        A : Ada<br>
        </p>
        {{ $snack->links() }}
    @endsection
