<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/tugas/tambah"> + Tambah tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_IDPegawai }}</td>
			<td>{{ $p->tugas_Tanggal }}</td>
			<td>{{ $p->tugas_NamaTugas }}</td>
            <td>{{ $p->tugas_Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->tugas_ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
