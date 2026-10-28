<?php
require_once 'config/app.php';
require_once 'lib/inventario.php';

// Al inicio se muestra todo el catálogo
$lista = $productos;
$categoriaElegida = "Todas";
$textoBuscado = "";

// Cuando se envía el formulario se filtra la lista
if (isset($_POST['filtrar'])) {
    $categoriaElegida = $_POST['categoria'];
    $textoBuscado = $_POST['texto'];

    $lista = filtrarPorCategoria($productos, $categoriaElegida);
    if ($textoBuscado != "") {
        $lista = buscarPorNombre($lista, $textoBuscado);
    }
}

// Los totales se calculan con la lista que se está mostrando
$totalArticulos = contarArticulos($lista);
$valorTotal = valorInventario($lista);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $nombreSistema; ?> - Inventario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-success mb-4">
    <span class="navbar-brand ms-3"><?php echo $nombreSistema; ?> - Gestión de Inventario</span>
</nav>

<main class="container">

    <h2 class="text-success">Catálogo de productos</h2>

    <form method="post" class="border border-success rounded p-3 bg-success-subtle mb-4">
        <label>Categoría:</label>
        <select name="categoria" class="form-select mb-2">
            <?php foreach ($categorias as $xcategoria) { ?>
                <option value="<?php echo $xcategoria; ?>" <?php if ($xcategoria == $categoriaElegida) { echo "selected"; } ?>><?php echo $xcategoria; ?></option>
            <?php } ?>
        </select>

        <label>Buscar por nombre:</label>
        <input type="text" name="texto" class="form-control mb-3" value="<?php echo htmlspecialchars($textoBuscado); ?>" placeholder="Ejemplo: cuaderno">

        <button type="submit" name="filtrar" class="btn btn-success">Filtrar</button>
        <a href="app_caso1.php" class="btn btn-secondary">Ver todo</a>
    </form>

    <p class="alert alert-warning">
        <b>Total de artículos:</b> <?php echo $totalArticulos; ?> &nbsp;|&nbsp;
        <b>Valor total del inventario:</b> <?php echo $moneda . " " . number_format($valorTotal, 2); ?>
    </p>

    <?php if ($totalArticulos == 0) { ?>
        <p class="alert alert-danger">No se encontraron productos con ese filtro.</p>
    <?php } else { ?>
        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Valor en stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $xproducto) { ?>
                    <tr>
                        <td><?php echo $xproducto['Codigo']; ?></td>
                        <td><?php echo $xproducto['Nombre']; ?></td>
                        <td><?php echo $xproducto['Categoria']; ?></td>
                        <td><?php echo $moneda . " " . number_format($xproducto['Precio'], 2); ?></td>
                        <td <?php if ($xproducto['Stock'] < 10) { echo "class='text-danger fw-bold'"; } ?>><?php echo $xproducto['Stock']; ?></td>
                        <td><?php echo $moneda . " " . number_format($xproducto['Precio'] * $xproducto['Stock'], 2); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p class="text-muted"><small>El stock en rojo indica menos de 10 unidades.</small></p>
    <?php } ?>

    <hr>
    <p>
        <a href="caso.php?id=12" class="btn btn-secondary btn-sm">Ver código del proyecto</a>
        <a href="index.php" class="btn btn-secondary btn-sm">Menú principal</a>
        <a href="app_caso2.php" class="btn btn-outline-success btn-sm">Proyecto siguiente &rarr;</a>
    </p>

</main>

</body>
</html>
