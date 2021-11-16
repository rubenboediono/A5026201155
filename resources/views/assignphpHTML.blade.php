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

<body>

    <div class="container text-center">
        <div class="container-fluid text-center">
            <h1>TEMPERATURE CONVERTER</h1>
            <p>Please input your Celcius temperature</p>
        </div>

        <form action="formPhp" method="post" onsubmit="return phpShowPHP()">
        @csrf
            <div class="form-group">
                <label for="temp">Enter number:</label>
                <input type="number" placeholder="Celcius" class="form-control" id="temp" name="temp" required>
            </div>


            <button for = "submit" type="submit" class="btn btn-primary" name="submit" id="submit" value="f">Fahrenheit</button>
            <button for = "submit" type="submit" class="btn btn-primary" name="submit" id="submit" value="k">Kelvin</button>

        </form>


    </div>


</body>
