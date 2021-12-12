@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Edit Daftar Pegawai')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


    @foreach ($pegawai as $p)
        <br>
        <div>
            <label for="nama">Nama </label>
            <p>{{ $p->pegawai_nama }}
            <p>
        </div>

        <div>
            <label for="jabatan">Jabatan </label>
            <p>{{ $p->pegawai_jabatan }}
            <p>
        </div>

        <div>
            <label for="umur">Umur </label>
            <p>{{ $p->pegawai_umur }}
            <p>
        </div>

        <label for="alamat">Alamat</label>
        <p>{{ $p->pegawai_alamat }}<p>
            <a href="/pegawai" class="btn btn-primary"> Kembali</a>
            <br>
            </div>







    @endforeach


</body>
@endsection

