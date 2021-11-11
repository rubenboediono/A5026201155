<!DOCTYPE html>
<html lang="en">

<head>
    <title>ETS PWEB A KODE C RUBEN TRICAHYA BOEDIONO 5026201155</title>
    <link rel="icon" href="https://static-00.iconduck.com/assets.00/jquery-logo-icon-512x494-jbxnje8u.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
    function validasiForm() {
        var name = document.regis.name;
        var nomor = document.regis.nomor;
        var jenis = document.regis.jenis;
        var tanggal = document.regis.tanggal;

        if (nameCek(name)) {
            if (nomorCek(nomor)) {
                if (jenisCek(jenis)) {
                    if (tanggalCek(tanggal)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    function nameCek(name) {
        if (name.value == "") {
            alert("Judul buku tidak boleh kosong")
            return false;
        } else if (name.value.length < 10) {
            alert("Dalam mengisikan nama harus lebih dari 10 karakter ")

            return false;
        } else {
            name.focus();
            return true;
        }
    }
    function nomorCek(nomor) {
        var numbers = /^[0-9]+$/;
        var numLen = nomor.value.length;
        if (numLen == 0) {
            alert("Nomor tidak boleh kosong")
            return false;
        } else if (numLen != 5) {
            alert("Nomor harus terdiri dari 5 karakter")
            return false;
        } else if (nomor.value.match(numbers)) {
            return true;
        }else{
            alert("Nomor buku harus berisikan angka")
            return false;
        }
    }
    function jenisCek(jenis){
        if(jenis.selectedIndex <1){
            alert("Pilihan jenis tidak boleh kosong")
            jenis.focus();
            return false;

        }else{
            return true;
        }
    }
</script>
<style>
    #border {
        border-style: solid;
        border-width: 1px;
        margin-top: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
        padding-right: 50px;
    }
</style>

<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-7 mx-auto" id="border">
                <form id="form" name="regis" onsubmit="return validasiForm();" action="https://www.google.com/"
                    method="get">
                    <div>
                        <p>Ruben Tricahya Boediono</p>
                        <p>Ruben</p>
                        <p>5026201155</p>
                    </div>
                    <h3 style="text-align: center;">Form input peminjaman buku</h3>
                    <div class="form-group row">
                        <label for="name">Judul buku
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <div class="col-sm-6">
                            <input id="name" type="text" class="form-control" name="name"
                                placeholder="Masukkan judul buku">
                        </div>

                    </div>
                    </br>
                    <div class="form-group row">
                        <label for="nomor">No buku
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <div class="col-sm-6">
                            <input id="nomor" type="text" class="form-control" name="nomor"
                                placeholder="Masukkan nomor buku">
                        </div>

                    </div>
                    </br>
                    <div class="form-group row">
                        <label for="jenis">Jenis peminjaman
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            :</label>
                        <div class="col-sm-6">
                            <select id="jenis" type="text" class="form-control" name="jenis" required>
                                <option value="0" selected="" disabled="">--SELECT--</option>
                                <option>Biasa</option>
                                <option>Kilat</option>
                                <option>Lama</option>
                            </select>
                        </div>

                    </div>
                    </br>
                    <div class="form-group row">
                        <label for="tanggal">Tanggal peminjaman &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <div class="col-sm-6">
                            <input id="tanggal" type="date" class="form-control" name="tanggal" required>
                        </div>

                    </div>
                    </br>
                    <div>
                        <div class="col-sm text-center">
                            <button type="submit" class="btn btn-primary btn-lg col-4 mr-2 pt-0 pb-0">Kirim</button>
                            <button type="reset" class="btn btn-success btn-lg col-4 ml-2 pt-0 pb-0">Reset</button>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
</body>

</html>
