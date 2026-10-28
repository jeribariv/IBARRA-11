<?php
$dias[0] = "Lunes";
$dias[1] = "Martes";
$dias[2] = "Miercoles";
$dias[3] = "Jueves";
$dias[4] = "Viernes";
$dias[5] = "Sabado";
$dias[6] = "Domingo";
for($i=0;$i<count($dias);$i++) {
    echo $dias[$i]."<br>";
}

foreach ($dias as $xdia) {
    echo $xdia."<br>";
}
?>