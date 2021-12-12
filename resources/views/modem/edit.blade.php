@extends('layout.bahagia')
@section('title','Edit Modem')
@section('konten')
@section('judulhalaman', 'Edit Daftar Modem')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>



	<a class="btn btn-warning" href="/modem"> Kembali</a>

	<br/>
	<br/>

	@foreach($modem as $m)

    <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px;  margin-bottom : 30px">
    <div class="form-group">
        <form action="/modem/update" method="post">
            {{ csrf_field() }}
            <input  type="hidden" name="id" value="{{ $m->kodemodem }}"> <br/>
            merkmodem <input class="form-control" type="text" name="merkmodem" required="required" value="{{$m ->merkmodem}}"> <br/>
            stockmodem <input class="form-control" type="number" name="stockmodem" required="required" value="{{$m ->stockmodem}}"> <br/>
            tersedia <select class="form-control" type="text" name="tersedia" required="required" value="{{$m ->tersedia}}">
                <option value="0" selected="" disabled="">--SELECT--</option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select> <br/>
            <input type="submit" value="Edit Data" class="btn btn-success">
        </form>
    </div>

	@endforeach

    </div>
</body>
@endsection

