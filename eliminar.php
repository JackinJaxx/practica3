
<?php
include 'conexion.php';

$id = $_GET['id'];

$query = "DELETE FROM productos WHERE idProd='$id'";

if ($conn->query($query) === TRUE) {
    header('Location: ventas.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
