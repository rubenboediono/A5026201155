<html lang="en">

<head>
    <title>Temperature converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-image: url('https://pngmagic.com/product_images/light-blue-website-background-image.jpg');
        margin-top: 200px;
    }
</style>
<script>
    function hitungSuhu(type) {

        const inputWoi = document.getElementById("temp").value;
        const rumusf = parseFloat(inputWoi) * 1.8 + 32;
        const rumusk = parseFloat(inputWoi) + 273;

        if (inputWoi == "") {
            alert("himpunan tidak boleh kosong!");
        } else if (type == "k") {
            alert(rumusk);
        } else if (type == "f") {
            alert(rumusf);
        }
    }



</script>

<body>
    <div class="container text-center">
        <div class="container-fluid text-center">
            <h1>TEMPERATURE CONVERTER</h1>
            <p>Please input your Celcius temperature</p>
        </div>


        <div class="form-group">
            <label for="suhu">Enter number:</label>
            <input type="number" placeholder="Celcius" class="form-control" id="temp" name="temperatureEnter" required>
        </div>



        <button type="button" onclick="hitungSuhu('f')" class="btn btn-primary">Fahrenheit</button>

        <button type="button" onclick="hitungSuhu('k');" class="btn btn-primary">Kelvin</button>


    </div>

</body>
