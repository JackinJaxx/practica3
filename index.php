
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SPA Inventory</title>
</head>
<body class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form id="productForm" class="mb-4" action="insertar.php" method="POST">
                <div class="mb-3">
                    <label for="idProd" class="form-label">idProd:</label>
                    <input type="text" class="form-control" id="idProd" name="idProd" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="existencia" class="form-label">Existencia:</label>
                    <input type="number" class="form-control" id="existencia" name="existencia" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>idProd</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Existencia</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Product rows will be displayed here from the database -->
                    <?php
                    include 'conexion.php';
                    $query = "SELECT * FROM productos";
                    $result = $conn->query($query);
                    while($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $row['idProd'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td>$<?= number_format($row['precio'], 2) ?></td>
                        <td><?= $row['existencia'] ?></td>
                        <td>
                            <a href="eliminar.php?id=<?= $row['idProd'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
