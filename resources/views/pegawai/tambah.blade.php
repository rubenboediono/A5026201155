@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Tambah Absensi Pegawai')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>



	<a class="btn btn-warning" href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">
            Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
            Jabatan <input class="form-control" type="text" name="jabatan" required="required"> <br/>
            Umur <input class="form-control" type="number" name="umur" required="required"> <br/>
            Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
        </div>
	</form>

</body>
@endsection
