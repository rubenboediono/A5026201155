@extends('layout.bahagia')
@section('title','Data Karyawan')
@section('konten')
@section('judulhalaman', 'Tambah Data Karyawan')

<body>



	<a class="btn btn-warning" href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">
            NIP <input class="form-control" type="text" name="NIP" required="required"> <br/>
            Nama <input class="form-control" type="text" name="Nama" required="required"> <br/>
            Pangkat <input class="form-control" type="text" name="Pangkat" required="required"> <br/>
            Gaji <input class="form-control" type="number" name="Gaji" required="required"> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
        </div>
	</form>

</body>
@endsection
