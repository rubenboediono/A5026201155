@extends('layout.bahagia')
@section('title','Data Modem')
@section('judulhalaman', 'Detail Modem')
@section('konten')

<body>
    @foreach ($modem as $m)
        <br>
        <div>
            <label for="merkmodem">Merk Modem </label>
            <p>{{ $m->merkmodem }}
            <p>
        </div>

        <div>
            <label for="stockmodem">Stock Modem </label>
            <p>{{ $m->stockmodem }}
            <p>
        </div>

        <div>
            <label for="tersedia">Tersedia </label>
            <p>{{ $m->tersedia }}
            <p>
        </div>

            <a href="/modem" class="btn btn-primary"> Kembali</a>
            <br>
            </div>







    @endforeach


</body>
@endsection

