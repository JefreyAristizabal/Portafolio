<?php
session_start();
include '../config/conection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $conn = conectarDB(); 
  
    $query = "SELECT * FROM empleado WHERE Usuario = ? AND Password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $row['Usuario'];
        $_SESSION['rol'] = $row['Rol'];
        $_SESSION['nombre_completo'] = $row['Nombre_Completo'];
        $_SESSION['idEmpleado'] = $row['idEmpleado'];
        $_SESSION['logged_in'] = true;
        if ($row['Rol'] == 'ADMIN') {
            header("Location: adminsite.php");
            exit();
        } elseif ($row['Rol'] == 'EMPLEADO') {
            header("Location: panelempleado.php");
            exit();
        }
    } else {
        echo "<script>alert('Acceso denegado. Usuario o contraseña incorrectos'); window.location.href='../html/log-in.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
