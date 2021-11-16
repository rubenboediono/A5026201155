<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
function convert(){

    $temp = $_POST['temp'];
    $submit = $_POST['submit'];

    if ($submit == "f"){
        $result = $temp * 1.8 + 32;

    }else if($submit == "k"){
        $result = $temp + 273;

    }
    echo $result;
}
?>
<style>
#border {
        border-style: solid;
        border-width: 1px;
        margin-top: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
        padding-right: 50px;
        padding-top : 50px
    }
body {
        background-image: url('https://pngmagic.com/product_images/light-blue-website-background-image.jpg');
        margin-top: 200px;
    }
</style>
<div>

    <div class="container">
        <div class="card bg-danger text-white" id = "border">
        Temperature after converted is <?php convert() ?>
        </div>


    </div>

</div>
</div>
</body>

</html>
