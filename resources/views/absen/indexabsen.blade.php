@extends('layout.bahagia')
@section('title','Data Absen Pegawai')
@section('konten')
@section('judulhalaman', 'Daftar Absensi Pegawai')

<head>
	<title>CRUD Tabel Absen</title>
</head>

    <body>
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
            <br>

                <a href="/absen/add"> + Tambah Absensi</a>
            <br/>
            <br/>


            <table border="2" class="table table-hover">
                <tr>

                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                @foreach($absen as $a)
                <tr>

                    <td>{{ $a->pegawai_nama }}</td>
                    <td>{{ $a->Tanggal }}</td>
                    <td>{{ $a->Status }}</td>
                    <td>
                        <a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
                        |
                        <a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $absen->links() }}
            <p style="text-align : left">
                Keterangan Status: <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
                </p>
<br>
        </div>
        </div>



    </body>



@endsection
