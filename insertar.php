
<?php
include 'conexion.php';

$idProd = $_POST['idProd'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];

$query = "INSERT INTO productos (idProd, nombre, precio, existencia) VALUES ('$idProd', '$nombre', '$precio', '$existencia')";

if ($conn->query($query) === TRUE) {
    header('Location: ventas.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
