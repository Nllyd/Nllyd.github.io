<?php
include('conexion.php');

$conexion = conectar();


$idproducto = $_GET['id'];

$query = "DELETE FROM producto WHERE IdProducto = '$idproducto'";
$resultado = mysqli_query($conexion, $query);

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
</head>
<body>
    <h1>Eliminar Producto</h1>
    <h3>
        <?php

        if ($resultado) {
            echo "El producto ha sido eliminado correctamente.";
        } 
        else {
        echo "Error al eliminar el producto.";
        }

        ?>
    </h3>
    <a href="Productos.php">Regresar</a>
</body>
</html>





