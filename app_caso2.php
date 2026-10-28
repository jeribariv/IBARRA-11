<?php
require_once 'config/app.php';
require_once 'lib/planilla.php';

$legajoElegido = "";
$empleado = null;

// Cuando se envía el formulario se busca al empleado y se calcula su boleta
if (isset($_POST['ver'])) {
    $legajoElegido = $_POST['legajo'];
    $empleado = buscarEmpleado($empleados, $legajoElegido);

    if ($empleado != null) {
        $bono = calcularBonificacion($empleado['Sueldo'], $empleado['Profesión']);
        $afp = calcularAfp($empleado['Sueldo']);
        $neto = calcularSueldoNeto($empleado['Sueldo'], $empleado['Profesión']);
    }
}

$total = totalPlanilla($empleados);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Planilla de Empleados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-success mb-4">
    <span class="navbar-brand ms-3">Sistema de Planilla de Empleados y Liquidación de Sueldos</span>
</nav>

<main class="container">

    <h2 class="text-success">Boleta de pago</h2>

    <form method="post" class="border border-success rounded p-3 bg-success-subtle mb-4">
        <label>Selecciona un empleado:</label>
        <select name="legajo" class="form-select mb-3" required>
            <option value="">-- Elegir --</option>
            <?php foreach ($empleados as $xempleado) { ?>
                <option value="<?php echo $xempleado['Legajo']; ?>" <?php if ($xempleado['Legajo'] == $legajoElegido) { echo "selected"; } ?>><?php echo $xempleado['Legajo'] . " - " . $xempleado['Nombre']; ?></option>
            <?php } ?>
        </select>
        <button type="submit" name="ver" class="btn btn-success">Ver boleta</button>
    </form>

    <?php if ($empleado != null) { ?>
        <h4 class="text-success">Datos del empleado</h4>
        <table class="table table-bordered w-50">
            <?php foreach ($empleado as $dato => $valor) { ?>
                <tr>
                    <td><b><?php echo $dato; ?></b></td>
                    <td><?php if ($dato == "Sueldo") { echo $moneda . " " . number_format($valor, 2); } else { echo $valor; } ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td>Bonificación (<?php echo PORC_BONO; ?>% Arquitecto/Ingeniero)</td>
                <td>+ <?php echo $moneda . " " . number_format($bono, 2); ?></td>
            </tr>
            <tr>
                <td>Aporte AFP (<?php echo PORC_AFP; ?>%)</td>
                <td>- <?php echo $moneda . " " . number_format($afp, 2); ?></td>
            </tr>
            <tr class="table-warning">
                <td><b>Sueldo neto</b></td>
                <td><b><?php echo $moneda . " " . number_format($neto, 2); ?></b></td>
            </tr>
        </table>
    <?php } ?>

    <h2 class="text-success mt-4">Planilla general</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>Legajo</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Profesión</th>
                <th>Sueldo base</th>
                <th>Bonificación</th>
                <th>AFP</th>
                <th>Sueldo neto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $xempleado) { ?>
                <tr>
                    <td><?php echo $xempleado['Legajo']; ?></td>
                    <td><?php echo $xempleado['Nombre']; ?></td>
                    <td><?php echo $xempleado['DNI']; ?></td>
                    <td><?php echo $xempleado['Profesión']; ?></td>
                    <td><?php echo number_format($xempleado['Sueldo'], 2); ?></td>
                    <td><?php echo number_format(calcularBonificacion($xempleado['Sueldo'], $xempleado['Profesión']), 2); ?></td>
                    <td><?php echo number_format(calcularAfp($xempleado['Sueldo']), 2); ?></td>
                    <td><?php echo number_format(calcularSueldoNeto($xempleado['Sueldo'], $xempleado['Profesión']), 2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <p class="alert alert-warning"><b>Total de la planilla (neto):</b> <?php echo $moneda . " " . number_format($total, 2); ?></p>

    <hr>
    <p>
        <a href="app_caso1.php" class="btn btn-outline-success btn-sm">&larr; Proyecto anterior</a>
        <a href="caso.php?id=13" class="btn btn-secondary btn-sm">Ver código del proyecto</a>
        <a href="index.php" class="btn btn-secondary btn-sm">Menú principal</a>
    </p>

</main>

</body>
</html>
