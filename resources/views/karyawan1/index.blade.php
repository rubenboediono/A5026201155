@extends('layout.bahagia')
@section('title','Data Karyawan')
@section('konten')

@section('judulhalaman', 'Daftar Karyawan')

<body>

    <div style="border-style: groove; border-radius : 25px;  padding-left : 50px; padding-right : 50px">



	<a href="/karyawan1/tambah"> + Tambah Karyawan Baru</a>

	<br/>
	<br/>


	<table border="2" class="table table-hover">

		<tr>
			<th>NIP</th>
            <th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
            <td>{{ $k->Gaji }}</td>

			<td>
				|
				<a href="/karyawan1/hapus/{{ $k->NIP }}">Hapus</a>
                |
			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan1->links() }}

    <br>
    <br>
    </div>



</body>
</html>
@endsection
