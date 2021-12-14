
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Pegawai')
   @section('judulhalaman', 'Edit Pegawai ')

   @section('konten')


	<a href="/snack"> Kembali</a>

	<br/>
	<br/>

	@foreach($snack as $p)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesnack }}"> <br/>
		Merk <input type="text" required="required" name="merk" value="{{ $p->merksnack }}"> <br/>
		Stock <input type="number" required="required" name="stock" value="{{ $p->stocksnack }}"> <br/>
        Ketersediaan <br />
        <input type="radio" id="html" name="tersedia" value="T" @if ($p->tersedia === "T" ) checked="checked" @endif>
        <label for="html">Tidak Ada</label><br>
        <input type="radio" id="css" name="tersedia" value="A"  @if ($p->tersedia === "A" ) checked="checked" @endif>
        <label for="css">Ada</label><br>
	    <input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
