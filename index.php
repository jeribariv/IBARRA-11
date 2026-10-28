<?php
require_once 'config/app.php';
require_once 'lib/funciones.php';

$titulo = "Menú Principal";
include_once 'includes/header.php';
?>

<h1 class="text-center text-success">MENÚ PRINCIPAL</h1>
<h5 class="text-center text-muted">Ejemplos, casos prácticos y proyectos - Arreglos en PHP</h5>

<?php
$categoriaActual = "";

foreach ($casos as $id => $xcaso) {
    // Cuando cambia la categoría se muestra un título nuevo
    if ($xcaso['categoria'] != $categoriaActual) {
        $categoriaActual = $xcaso['categoria'];
        echo "<h4 class='mt-4 border-bottom text-success'>" . $categoriaActual . "</h4>";
    }
?>
    <h5><?php echo strtoupper($xcaso['pdf']); ?>: <?php echo $xcaso['titulo']; ?></h5>
    <p class="border border-success rounded p-2 bg-success-subtle"><b>Enunciado:</b> <?php echo $xcaso['enunciado']; ?></p>
    <a href="caso.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm mb-3">Ver caso</a>
<?php
}
?>

<form class="border border-success rounded p-3 mt-4 bg-success-subtle">
    <label>Apellidos y nombres:</label>
    <input type="text" class="form-control mb-2" value="<?php echo $alumno; ?>" readonly>
    <label>Semestre:</label>
    <input type="text" class="form-control mb-2" value="<?php echo $semestre; ?>" readonly>
    <label>Turno:</label>
    <input type="text" class="form-control" value="<?php echo $turno; ?>" readonly>
</form>

<?php include_once 'includes/footer.php'; ?>
