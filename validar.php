<?php

session_start();

include("conexion.php");

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$sql = "
SELECT *
FROM usuarios
WHERE usuario='$usuario'
AND clave='$clave'
";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0)
{
    $_SESSION["usuario"] = $usuario;

    header("Location: contactos.php");
}
else
{
    echo "<h2>Usuario o clave incorrectos</h2>";
    echo "<a href='login.php'>Volver</a>";
}
?>