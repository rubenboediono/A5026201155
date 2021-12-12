@extends('layout.bahagia')
@section('title','Data Modem')
@section('konten')
@section('judulhalaman', 'Tambah Modem')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>



	<a class="btn btn-warning" href="/modem"> Kembali</a>

	<br/>
	<br/>

	<form action="/modem/store" method="post">
		{{ csrf_field() }}
        <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
        <div class="form-group">
            merkmodem <input class="form-control" type="text" name="merkmodem" required="required"> <br/>
            stockmodem <input class="form-control" type="number" name="stockmodem" required="required"> <br/>
            tersedia <select class="form-control" type="text" name="tersedia" required="required">
                <option value="0" selected="" disabled="">--SELECT--</option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
        </div>
	</form>

</body>
@endsection
