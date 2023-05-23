<?php
include('conexion.php');

$conexion = conectar();

$nombre = $_GET['nombre'];

$sql = "SELECT * FROM producto WHERE Nombre LIKE '%$nombre%'";

$resultado = mysqli_query($conexion, $sql);

desconectar($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Búsqueda</title>
</head>
<body>
    <h1>Resultados de la Búsqueda</h1>
    <table>
        <thead>
            <tr>
                <th>IdProducto</th>
                <th>Nombres</th>
                <th>Descripcion</th>
                <th>Stock</th>
                <th>Precio de Venta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($producto = mysqli_fetch_array($resultado)) {
                echo '<tr>';
                echo '<td>' . $producto['IdProducto'] . '</td>';
                echo '<td>' . $producto['Nombre'] . '</td>';
                echo '<td>' . $producto['Descripcion'] . '</td>';
                echo '<td>' . $producto['Stock'] . '</td>';
                echo '<td>' . $producto['PrecioVenta'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>