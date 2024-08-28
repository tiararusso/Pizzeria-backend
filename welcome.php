<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Document</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/main.css">
<body>
    
</head>

<nav class="navtop">
<div><h1>area privada</h1>
<a href="logout.php">logout</a>
</div>
</nav>
<div class="content">


<?php
session_start();
if ($_SESSION['logueado'])
 {
    echo "bienvenido". $_SESSION['username'];
    echo "<br>";
    echo "horario de conexion".$_SESSION['time'];
}

?>

</div>

</body>