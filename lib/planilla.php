<?php
// Empleados (arreglo asociativo multidimensional)
$empleados = array(
    array("Legajo" => 4371, "Nombre" => "Martínez Leandro", "DNI" => "27643742", "Sueldo" => 1429.54, "Profesión" => "Arquitecto"),
    array("Legajo" => 4372, "Nombre" => "Quispe Rojas Ana", "DNI" => "45871236", "Sueldo" => 1850.00, "Profesión" => "Ingeniero"),
    array("Legajo" => 4373, "Nombre" => "Torres Vega Miguel", "DNI" => "41256987", "Sueldo" => 1200.00, "Profesión" => "Contador"),
    array("Legajo" => 4374, "Nombre" => "Huamán Pérez Rosa", "DNI" => "72458963", "Sueldo" => 1350.50, "Profesión" => "Abogado"),
    array("Legajo" => 4375, "Nombre" => "Salas Díaz Jorge", "DNI" => "46125874", "Sueldo" => 1100.00, "Profesión" => "Técnico"),
    array("Legajo" => 4376, "Nombre" => "Paredes Luna Carla", "DNI" => "73654123", "Sueldo" => 1500.00, "Profesión" => "Arquitecto"),
    array("Legajo" => 4377, "Nombre" => "Castillo Ruiz Pedro", "DNI" => "40987456", "Sueldo" => 2100.00, "Profesión" => "Ingeniero"),
    array("Legajo" => 4378, "Nombre" => "Mendoza Ríos Elena", "DNI" => "74125896", "Sueldo" => 980.00, "Profesión" => "Secretaria")
);

// Aporte a la AFP: porcentaje del sueldo base
function calcularAfp($sueldo) {
    return $sueldo * PORC_AFP / 100;
}

// Bonificación: solo si es Arquitecto o Ingeniero
function calcularBonificacion($sueldo, $profesion) {
    if ($profesion == "Arquitecto" || $profesion == "Ingeniero") {
        return $sueldo * PORC_BONO / 100;
    }
    return 0;
}

// Sueldo neto = sueldo base + bonificación - AFP
function calcularSueldoNeto($sueldo, $profesion) {
    $bono = calcularBonificacion($sueldo, $profesion);
    $afp = calcularAfp($sueldo);
    return $sueldo + $bono - $afp;
}

// Busca un empleado por su legajo (si no lo encuentra devuelve null)
function buscarEmpleado($lista, $legajo) {
    foreach ($lista as $xempleado) {
        if ($xempleado['Legajo'] == $legajo) {
            return $xempleado;
        }
    }
    return null;
}

// Suma los sueldos netos de toda la planilla
function totalPlanilla($lista) {
    $total = 0;
    foreach ($lista as $xempleado) {
        $total = $total + calcularSueldoNeto($xempleado['Sueldo'], $xempleado['Profesión']);
    }
    return $total;
}
?>
