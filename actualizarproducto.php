<?php
include('conexion.php');

$conexion = conectar();

$idproducto = $_POST['idproducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];

$sql = "UPDATE producto SET Nombre='$nombre', Descripcion='$descripcion', Stock='$stock', PrecioVenta='$precio' WHERE IdProducto='$idproducto'";

$resultado = mysqli_query($conexion, $sql);

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

        if($resultado){
            echo "Producto actualizado correctamente.";
        }
        else{
        echo "Error al actualizar el producto.";
        }

        ?>
    </h3>
    <a href="Productos.php">Regresar</a>
</body>
</html>
