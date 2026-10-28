<?php
require_once 'config/app.php';
require_once 'lib/funciones.php';

// Se lee el número del caso desde la URL (ejecutar.php?id=3)
$id = 1;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
if (!isset($casos[$id])) {
    $id = 1;
}

$caso = $casos[$id];
$total = count($casos);
$titulo = "Ejecución - " . $caso['pdf'];

include_once 'includes/header.php';
?>

<h2 class="text-success"><?php echo strtoupper($caso['pdf']); ?>: <?php echo $caso['titulo']; ?></h2>

<p>
    <?php if ($id > 1) { ?>
        <a href="caso.php?id=<?php echo $id - 1; ?>" class="btn btn-outline-success btn-sm">&larr; Caso Anterior</a>
    <?php } ?>
    <a href="caso.php?id=<?php echo $id; ?>" class="btn btn-secondary btn-sm">Ver código del caso</a>
    <a href="index.php" class="btn btn-secondary btn-sm">Volver al Menú Principal</a>
    <?php if ($id < $total) { ?>
        <a href="caso.php?id=<?php echo $id + 1; ?>" class="btn btn-outline-success btn-sm">Caso Siguiente &rarr;</a>
    <?php } ?>
</p>

<h5 class="text-success">Resultado de la ejecución</h5>
<section class="border border-success rounded p-3 bg-success-subtle mb-4">
    <?php include $caso['archivo']; ?>
</section>

<?php include_once 'includes/footer.php'; ?>
