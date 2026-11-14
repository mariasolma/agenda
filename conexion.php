<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "agenda"
);

if (!$conexion) {
    die("Error de conexión");
}
?>