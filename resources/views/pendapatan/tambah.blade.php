@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Tambah Pendapatan')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

</head>
<body>




	<a class="btn btn-warning" href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">

            IDPegawai <input class="form-control" type="number" name="IDPegawai" required="required"> <br/>
            Bulan <input class="form-control" type="number" name="Bulan" required="required" min="1" max="12"> <br/>
            Tahun <input class="form-control" type="number" min="1900" max="2100" name="Tahun" required="required"> <br/>
            Gaji <input class="form-control" type="number" name="Gaji" required="required"> <br/>
            Tunjangan <input class="form-control" type="number" name="Tunjangan" required="required"> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
        </form>
        </div>


</body>
@endsection
