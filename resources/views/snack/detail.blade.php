@extends('layout.bahagia')

   @section('title', 'Melihat Detail Data Snack')
   @section('judulhalaman', 'Detail Snack ')

   @section('konten')


	<a href="/snack"> Kembali</a>

	<br/>
	<br/>

	@foreach($snack as $p)

        <input type="hidden" name="id" value="{{ $p->kodesnack }}"> <br/>
		Merk: {{ $p->merksnack }}<br/>
		Stock: {{ $p->stocksnack }}<br/>
		Ketersediaan: {{ $p->tersedia }}</textarea> <br/>


	@endforeach

    @endsection
