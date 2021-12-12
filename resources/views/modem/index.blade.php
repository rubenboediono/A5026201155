@extends('layout.bahagia')
@section('title','Data Modem')
@section('konten')

@section('judulhalaman', 'Daftar Modem')

<body>

    <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px">



	<a href="/modem/tambah"> + Tambah Modem Baru</a>

	<br/>
	<br/>
    <div class="container" align = "justify">
        <form action="/modem/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Modem .." value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-default">
        </form>
    </div>

	<table border="2" class="table table-hover">

		<tr>
			<th>Kode Modem</th>
            <th>Merk Modem</th>
			<th>Stock Modem</th>
			<th>Tersedia</th>
		</tr>
		@foreach($modem as $m)
		<tr>
			<td>{{ $m->kodemodem }}</td>
            <td>{{ $m->merkmodem }}</td>
            <td>{{ $m->stockmodem }}</td>
            <td>{{ $m->tersedia }}</td>

			<td>
                <a href="/modem/view/{{ $m->kodemodem }}">View Detail</a>
                |
				<a href="/modem/edit/{{ $m->kodemodem }}">Edit</a>
				|
				<a href="/modem/hapus/{{ $m->kodemodem }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $modem->links() }}

    <br>
    <br>
    </div>



</body>
</html>
@endsection
