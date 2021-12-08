@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Edit Pendapatan')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>



	<a href="/pendapatan" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">
            <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
            IDPegawai <input class="form-control" type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
            Bulan <input class="form-control" type="number" name="Bulan" required="required" min="1" max="12" value="{{ $p->Bulan }}"> <br/>
            Tahun <input class="form-control" type="number" min="1900" max="2100" name="Tahun" required="required" value="{{ $p->Tahun }}"> <br/>
            Gaji <input class="form-control" type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
            Tunjangan <input class="form-control" type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}">
            <br>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
        </div>

	</form>
	@endforeach


</body>
@endsection
