<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://static-00.iconduck.com/assets.00/jquery-logo-icon-512x494-jbxnje8u.png" />
    <title>Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    form {
        border: solid;
        border-radius: 5%;
        padding: 30px;
        margin-top: 50px;
        background-image: url("https://vayana.com/wp-content/uploads/2018/05/form-background.jpg");
        color: aliceblue;

    }

    body {
        background-image: url("http://lilithaengineering.co.za/wp-content/uploads/2015/11/contact-us-background.jpg");
        margin-left: 30px;
    }
</style>

<script>
    function validasiForm() {
        var name = document.regis.name;
        var address = document.regis.address;
        var email = document.regis.email;
        var password = document.regis.password;
        var telp = document.regis.telp;
        var course = document.regis.course;
        var zipcode = document.regis.zip;

        if (nameCek(name)) {
            if (addressCek(address)) {
                if (emailCek(email)) {
                    if (passwordCek(password)) {
                        return true;
                    }
                }
            }
        }
        return false;

    }
    function nameCek(name) {
        const alfabet = /^[A-Za-z\s]+$/;
        if (name.value.match(alfabet)) {
            return true;
        }
        else {
            alert("Dalam mengisikan nama harus menggunakan alfabet dan tidak boleh kosong");
            name.focus();
            return false;
        }
    }

    function addressCek(address) {
        if (address.value == "") {
            alert("Address tidak boleh kosong");
            return false;
        }
        else {
            address.focus();
            return true;
        }
    }

    function emailCek(email) {
        var emil = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.value.match(emil)) {
            return true;
        }
        else {
            alert("Alamat email anda tidak sesuai dengan ketentuan");
            email.focus();
            return false;
        }
    }
    function passwordCek(password) {
        var passwordPanjang = password.value.length;
        if (passwordPanjang == 0) {
            alert("Password tidak boleh kosong");
            return false;
        }

        else if (passPanjang > 7 || passPanjang < 17) {
            alert("Password harus memiliki jumlah antara 8 sampai 16");
            return false;
        }

        else {
            password.focus();
            return true;
        }
    }
    function telpCek(phone) {
        var numbers = /^[0-9]+$/;
        var num_len = phone.value.length;
        if (num_len == 0) {
            alert("Nomor telepon tidak boleh kosong");
            return false;
        }

        else if (num_len > 6) {
            alert("nomor telepon harus minimal 7 digit");
            return false;
        }

        else if (phone.value.match(numbers)) {
            phone.focus();
            return true;
        }
    }



</script>


<body>
    <div class="container">
        <div class="col-sm-10">

            <form id="form" name="regis" onsubmit="return validasiForm();" action="https://www.google.com/"
                method="get">
                <h2 style="text-align: center;">REGISTRATION FORM</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter name">
                    </br>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input id="address" type="text" class="form-control" name="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    </br>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Password (8-16 digit)"
                        id="password">
                    </br>
                </div>

                <div class="form-group">
                    <label for="telp">Telephone:</label>
                    <input id="telp" type="text" class="form-control" name="telp"
                        placeholder="Enter phone number (>= 7 digit)">
                </div>

                <div class="form-group">
                    <label for="course">Select Your Course:</label>
                    <select id="course" class="form-control" name="course">
                        <option value="0" selected="" disabled="">--SELECT--</option>
                        <option>BTECH</option>
                        <option>BBA</option>
                        <option>BCA</option>
                        <option>B.COM</option>
                        <option>GEEKFORGEEKS</option>
                    </select>
                    </br>
                </div>
                <div class="form-group">
                    <input id="zipcode" type="text" class="form-control" name="zipcode"
                        placeholder="Enter zipcode (6 digit)" id="zipcode" pattern="[0-9].{5}" required>
                    </br>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </br>
                    </br>
                    <button type="reset" class="btn btn-danger" value="reset">Reset</button>
                </div>

        </div>

    </div>

    </form>
    </div>

    </div>


</body>


</html>
