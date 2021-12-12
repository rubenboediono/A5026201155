@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Daftar Pendapatan')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<style>

</style>

<body>
    <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px">


	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

	<br/>
	<br/>

	<table border="2" class="table table-hover">
		<tr>

			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>

		</tr>
		@foreach($pendapatan as $p)
		<tr>

			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>

    <br>
        <br>
    </div>
</body>
</html>
@endsection
