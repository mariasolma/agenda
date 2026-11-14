<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contactos</title>
</head>
<body>

<h1>Agenda de Contactos</h1>

<p>
Usuario:
<?php echo $_SESSION["usuario"] ?? "Sin sesión"; ?>
</p>

<a href="logout.php">
Cerrar sesión
</a>

</body>
</html>