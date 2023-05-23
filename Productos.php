<?php

include('conexion.php');

$conexion = conectar();

$sql = 'SELECT * FROM producto';

$resultado = mysqli_query($conexion, $sql);

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
    <title>Productos</title>
</head>
<body>
<header>
<div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col">
                <img id="png" src="VSG-IMG.png" alt="">
            </div>
            <div class="col" style="text-align:end;">
                <form action="buscar.php" method="get">
                    <input type="text" placeholder="Buscar..." name="nombre">
                <button type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </div>
</header>

    <button><a href="nuevoproducto.html">Nuevo Producto</a></button>
    <table>
        <thead>
            <tr>
                <td>IdProducto</td>
                <td>Nombres</td>
                <td>Descripcion</td>
                <td>Stock</td>
                <td>Precio de Venta</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($producto = mysqli_fetch_array($resultado)) {
                $idproducto = $producto['IdProducto'];
                $nombre = $producto['Nombre'];
                $descripcion = $producto['Descripcion'];
                $stock = $producto['Stock'];
                $precio = $producto['PrecioVenta'];

                echo '<tr>';
                echo '<td>' . $idproducto . '</td>';
                echo '<td>' . $nombre . '</td>';
                echo '<td>' . $descripcion  . '</td>';
                echo '<td>' . $stock . '</td>';
                echo '<td>' . $precio . '</td>';
                echo '<td> <a href="editarproducto.php?id=' . $idproducto . '">Editar</a> | <a href="eliminarproducto.php?id=' . $idproducto . '">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>