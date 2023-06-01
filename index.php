<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid g-0">
        <?php

// for($i = 0; $i < 3; $i++){
// $legenda = ["Rio de janeiro", "Japão", "Chapada", "Diamantina"];
// $fotos = ["rio.jpg", "jalapao.jpg", "diamantina.jpg"];

// echo "<img src= 'img/" . $fotos[$i] . "'class ='img-fluid'>";
// echo "<br>";
// echo $legenda [$i];
// }



 $legenda = ["Rio de janeiro", "Japão", "Chapada", "Diamantina"];
 $fotos = ["rio.jpg", "jalapao.jpg", "diamantina.jpg"];

 for($i = 0; $i <3; $i++ ){
?>

<div class="mb-3">
    <div class ="row">
        <div class="col-2">
            <img src="img/avatar.jpg" class="img-fluid" style="border-radius: 50px;">
        </div>
        <div class="col g-0 ">
            <h6 class="mb-0 mt-1"> Toninho Starko</h6>
            <p>Americana</p>
        </div>
    </div>
</div>

<div class="mb-3">
    <img src = "img/ <?php echo $fotos[$i]; ?>" class="img-fluid">
    <p><?php echo $legenda [$i]; ?></p>
</div>


<div class= "mb-3">
texto
</div>

<?php
 }
?>

    </div>
</body>
</html>