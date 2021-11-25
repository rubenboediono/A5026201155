<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Edit pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="Bulan" required="required" min="0" max="12" value="{{ $p->Bulan }}"> <br/>
        Tahun <input type="number" min="1900" max="2100" name="Tahun" required="required" value="{{ $p->Tahun }}"> <br/>
        Gaji <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
		Tunjangan <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}">
		<input type="submit" value="Simpan Data">

	</form>
	@endforeach


</body>
</html>
