<?php
//abrir conexion
function conectar(){
    $conexion = mysqli_connect('localhost','root','usbw','eval02');
    return $conexion;
}

//cerrar conexion
function desconectar($conn){
    mysqli_close($conn); 
}
?>