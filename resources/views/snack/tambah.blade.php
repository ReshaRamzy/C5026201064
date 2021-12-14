@extends('layout.bahagia')

@section('title', 'Menambah Snack')
@section('judulhalaman', 'Menambah Data Snack')

@section('konten')


	<a href="/snack"> Kembali</a>

	<br/>
	<br/>

	<form action="/snack/store" method="post">
		{{ csrf_field() }}
		Merk <input type="text" name="merk" required="required"> <br/>
		Stock <input type="number" name="stock" required="required"> <br/>
        Ketersediaan <br/>
        <input type="radio" id="tersedia" name="tersedia" value="A">
        <label for="tersedia">Ada</label><br>
        <input type="radio" id="tersedia" name="tersedia" value="T" checked="checked">
        <label for="tersedia">Tidak Ada</label><br>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection
