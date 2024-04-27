<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Coche</title>
</head>
<body>
    <h1>Mostrar Coche</h1>
    <?php
        include_once("coche.php");
        $auto = new clsCoche("Corolla","Verde","1234ABC","Toyota");
        echo "<b>Modelo: </b> ". $auto -> getModelo() . "<br>";
        echo "<b>Color: </b>  ". $auto -> getColor() . "<br>";
        echo "<b>Placa:</b>  ". $auto -> getPlaca() . "<br>";
        echo "<b>Marca: </b> ". $auto -> getMarca() . "<br>";

        $Vagoneta = new clsCoche("Vagoneta","Negro","7856ASD","Toyota");
        echo "<br>";
        echo "<b>Modelo: </b>  ". $Vagoneta -> getModelo() . "<br>";
        echo "<b>Color: </b> ". $Vagoneta -> getColor() . "<br>";
        echo "<b>Placa: </b> ". $Vagoneta -> getPlaca() . "<br>";
        echo "<b>Marca: </b> ". $Vagoneta -> getMarca() . "<br>";

    ?>
</body>
</html>