
   @extends('layout.bahagia')

   @section('title', 'Melihat Detail Data Pegawai')
   @section('judulhalaman', 'Detail Pegawai ')

   @section('konten')


	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama: {{ $p->pegawai_nama }}<br/>
		Jabatan: {{ $p->pegawai_jabatan }}<br/>
		Umur: {{ $p->pegawai_umur }}<br/>
		Alamat: {{ $p->pegawai_alamat }}</textarea> <br/>


	@endforeach

    @endsection
