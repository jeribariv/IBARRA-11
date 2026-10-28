<?php
$empleado = array(
    "Legajo" => 4371,
    "Nombre" => "Martínez Leandro",
    "D.N.I" => "27643742",
    "Sueldo" => 1429.54,
    "Profesión" => "Arquitecto"
);

echo "Datos del empleado". "<br />";
foreach ($empleado as $dato => $valor) {
    echo $dato . " = " . $valor . "<br />";
}
?>