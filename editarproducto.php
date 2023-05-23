<?php
include('conexion.php');

$conexion = conectar();

$idproducto = $_GET['id'];

$sql = 'SELECT * FROM producto WHERE IdProducto = ' . $idproducto;

$resultado = mysqli_query($conexion, $sql);

$producto = mysqli_fetch_array($resultado);

desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos2.css">
    <title>Editar Producto</title>
</head>
<body>
<header>
<div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col">
                <img id="png" src="VSG-IMG.png" alt="">
            </div>
        </div>
    </div>
</header>

    <form action="actualizarproducto.php" method="post">
        <input type="hidden" name="idproducto" value="<?php echo $producto['IdProducto']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $producto['Nombre']; ?>">

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $producto['Descripcion']; ?>">

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="<?php echo $producto['Stock']; ?>">

        <label for="precio">Precio de venta:</label>
        <input type="number" name="precio" value="<?php echo $producto['PrecioVenta']; ?>">
        <br>
        <button type="submit">Guardar cambios</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFx
