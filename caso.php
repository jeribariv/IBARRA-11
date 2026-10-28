<?php
require_once 'config/app.php';
require_once 'lib/funciones.php';

// Se lee el número del proyecto desde la URL (caso.php?id=3)
$id = 1;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
if (!isset($casos[$id])) {
    $id = 1;
}

$caso = $casos[$id];
$total = count($casos);
$foto = buscarFoto($id);
$titulo = $caso['pdf'];

include_once 'includes/header.php';
?>

<h2 class="text-success"><?php echo strtoupper($caso['pdf']); ?>: <?php echo $caso['titulo']; ?></h2>
<p>
    <span class="badge bg-success"><?php echo $caso['categoria']; ?></span>
    <span class="badge bg-warning text-dark"><?php echo $caso['pdf']; ?></span>
</p>

<p>
    <?php if ($id > 1) { ?>
        <a href="caso.php?id=<?php echo $id - 1; ?>" class="btn btn-outline-success btn-sm">&larr; Caso Anterior</a>
    <?php } ?>
    <a href="index.php" class="btn btn-secondary btn-sm">Volver al Menú Principal</a>
    <?php if ($id < $total) { ?>
        <a href="caso.php?id=<?php echo $id + 1; ?>" class="btn btn-outline-success btn-sm">Caso Siguiente &rarr;</a>
    <?php } ?>
</p>

<h5 class="text-success">Enunciado</h5>
<p class="border border-success rounded p-2 bg-success-subtle"><?php echo $caso['enunciado']; ?></p>
<?php if (isset($caso['estructura'])) { ?>
    <p class="small text-muted"><b>Estructura modular:</b><br><?php echo $caso['estructura']; ?></p>
<?php } ?>

<section class="row">
    <article class="col-lg-7 mb-3">
        <h5 class="text-success">Visualización de códigos (PHP)</h5>
        <?php mostrarCodigo($caso['archivo']); ?>
    </article>

    <article class="col-lg-5 mb-3">
        <h5 class="text-success">Área de resultados</h5>
        <?php if ($foto != "") { ?>
            <img src="<?php echo $foto; ?>" class="img-fluid img-thumbnail" alt="Ejemplo del <?php echo $caso['pdf']; ?>">
        <?php } else { ?>
            <p class="border border-success border-2 rounded p-4 text-center bg-success-subtle">Aquí va la foto de tu ejemplo.<br>Guárdala como <b>foto<?php echo $id; ?>.png</b></p>
        <?php } ?>
        <p class="alert alert-warning mt-2"><b>Ejemplo:</b> <?php echo $caso['ejemplo']; ?></p>
        <a href="<?php echo $caso['enlace']; ?>" class="btn btn-warning w-100"><?php echo $caso['boton']; ?></a>
    </article>
</section>

<br>

<?php include_once 'includes/footer.php'; ?>
