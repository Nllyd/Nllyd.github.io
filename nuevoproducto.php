<?php

include('conexion.php');

$conexion = conectar();

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$PrecioVenta = $_POST['PrecioVenta'];

$sql = "INSERT INTO producto (Nombre, Descripcion, Stock, PrecioVenta) VALUES ('$Nombre', '$Descripcion', '$Stock', '$PrecioVenta')";

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>
<body>
    <h1>Nueva Producto</h1>
    <h3>
        <?php

        if(!$resultado){
            echo 'Error al tratar de registrar';
        }
        else{
            echo 'El nuevo producto a sido registrado';
        }
        ?>
    </h3>
    <a href="Productos.php">Regresar</a>
</body>
</html>