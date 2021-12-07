<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>


<body>
    <div class="container">
        <header class="sm text-center">
            <div class="col sm-6">
                <img src="{{ URL::asset('/image/200.jpg') }}" width = "150px" height="150px">
                <br>
                <h1>
                    Ruben Tricahya Boediono
                </h1>
                <h2>
                    5026201155
                </h2>
            </div>

        </header>

        <div class="row">
                <div class="col-sm-4 text-center"  >
                    Pilihan data untuk diakses

                      <nav aria-label="breadcrumb" >
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
                          <li class="breadcrumb-item"><a href="/absen">Absen</a></li>
                          <li class="breadcrumb-item"><a href="/pendapatan">Pendapatan</a></li>
                          <li class="breadcrumb-item active" aria-current="/praktikum">Praktikum</li>
                        </ol>
                      </nav>
                </div>
                <div class="col-sm-8 text-center" >

                    <div>
                        <h3>@yield('judulhalaman')</h3>

                        @section('konten')

                        @show
                    </div>
                </div>


        </div>
    </div>

</body>

</html>
