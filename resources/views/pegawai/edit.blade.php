@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Edit Daftar Pegawai')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>



	<a class="btn btn-warning" href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

    <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
    <div class="form-group">
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input  type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            Nama <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
            Jabatan <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
            Umur <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
            Alamat <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    </div>

	@endforeach

    </div>
</body>
@endsection

