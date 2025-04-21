<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header("Location: ../html/log-in.html");
  exit();
}

include_once '../config/conection.php';
$conn = conectarDB();

$sql1 = "SELECT * FROM estadia";
$res1 = $conn->query($sql1);

$sql2 = "SELECT * FROM huesped";
$res2 = $conn->query($sql2);

$sql3 = "SELECT * FROM huesped_has_estadia";
$res3 = $conn->query($sql3);

$sql4 = "SELECT * FROM empleado";
$res4 = $conn->query($sql4);

$sql5 = "SELECT * FROM habitacion";
$res5 = $conn->query($sql5);

$sql6 = "SELECT * FROM tarifa";
$res6 = $conn->query($sql6);

$sql7 = "SELECT * FROM pagos";
$res7 = $conn->query($sql7);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado | Aloja</title>
</head>
<body>
    <h1>Ola</h1>
    <a href="../index.php">Para la página principal</a>
</body>
</html>