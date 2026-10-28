<?php
// ====== BIBLIOTECA CENTRAL: información de los casos y funciones del visor ======

$casos = array();

$casos[1] = array(
    "titulo" => "Arreglo con índices escritos a mano",
    "pdf" => "Ejemplo 2",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Crear un arreglo con las 4 estaciones del año asignando cada posición con su índice (0, 1, 2, 3) y mostrar la tercera. Después guardar tres números en otro arreglo.",
    "ejemplo" => "Se muestra: Otoño",
    "archivo" => "2.php",
    "enlace" => "ejecutar.php?id=1",
    "boton" => "Ejecutar el código"
);

$casos[2] = array(
    "titulo" => "Arreglo con índices desde 1",
    "pdf" => "Ejemplo 3",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Guardar 4 ciudades en un arreglo cuyos índices empiezan en 1 y mostrar la tercera.",
    "ejemplo" => "Se muestra: Barcelona",
    "archivo" => "3.php",
    "enlace" => "ejecutar.php?id=2",
    "boton" => "Ejecutar el código"
);

$casos[3] = array(
    "titulo" => "Arreglo con array()",
    "pdf" => "Ejemplo 4",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Crear un arreglo de colores usando array() y mostrar el elemento de la posición 1.",
    "ejemplo" => "Se muestra: verde",
    "archivo" => "4.php",
    "enlace" => "ejecutar.php?id=3",
    "boton" => "Ejecutar el código"
);

$casos[4] = array(
    "titulo" => "Contar elementos con count()",
    "pdf" => "Ejemplo 5",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Guardar las 4 estaciones del año y mostrar cuántos elementos tiene el arreglo con count().",
    "ejemplo" => "Se muestra: 4",
    "archivo" => "5.php",
    "enlace" => "ejecutar.php?id=4",
    "boton" => "Ejecutar el código"
);

$casos[5] = array(
    "titulo" => "Recorrer un arreglo con for",
    "pdf" => "Ejemplo 6",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Guardar 8 números escritos en palabras (Uno al Ocho) y recorrerlos con un for usando count().",
    "ejemplo" => "Se muestran Uno, Dos, Tres... hasta Ocho, cada uno en una línea.",
    "archivo" => "6.php",
    "enlace" => "ejecutar.php?id=5",
    "boton" => "Ejecutar el código"
);

$casos[6] = array(
    "titulo" => "Recorrer un arreglo con foreach",
    "pdf" => "Ejemplo 7",
    "categoria" => "Ejemplos de arreglos",
    "enunciado" => "Guardar tres frutas en un arreglo y recorrerlas con foreach.",
    "ejemplo" => "Se muestra: MangoPiñaUva",
    "archivo" => "7.php",
    "enlace" => "ejecutar.php?id=6",
    "boton" => "Ejecutar el código"
);

$casos[7] = array(
    "titulo" => "Días de la semana con for y foreach",
    "pdf" => "Caso práctico 1",
    "categoria" => "Casos prácticos",
    "enunciado" => "Guardar los 7 días de la semana en un arreglo y mostrarlos dos veces: con un for y con un foreach.",
    "ejemplo" => "Se muestran de Lunes a Domingo, dos veces.",
    "archivo" => "caso1.php",
    "enlace" => "ejecutar.php?id=7",
    "boton" => "Ejecutar el código"
);

$casos[8] = array(
    "titulo" => "Países de Sudamérica",
    "pdf" => "Caso práctico 2",
    "categoria" => "Casos prácticos",
    "enunciado" => "Guardar en un arreglo los países de Sudamérica y mostrarlos con foreach.",
    "ejemplo" => "Se muestran los 12 países, de Argentina a Guyana.",
    "archivo" => "caso2.php",
    "enlace" => "ejecutar.php?id=8",
    "boton" => "Ejecutar el código"
);

$casos[9] = array(
    "titulo" => "Meses del año",
    "pdf" => "Caso práctico 3",
    "categoria" => "Casos prácticos",
    "enunciado" => "Guardar los 12 meses del año en un arreglo y mostrarlos con foreach.",
    "ejemplo" => "Se muestran de Enero a Diciembre.",
    "archivo" => "caso3.php",
    "enlace" => "ejecutar.php?id=9",
    "boton" => "Ejecutar el código"
);

$casos[10] = array(
    "titulo" => "Cantidad de artículos",
    "pdf" => "Caso práctico 4",
    "categoria" => "Casos prácticos",
    "enunciado" => "Guardar 4 artículos (Lapiz, Goma, Hoja, Tinta) en un arreglo y mostrar la cantidad con count().",
    "ejemplo" => "Se muestra: cantidad de articulos: 4",
    "archivo" => "caso4.php",
    "enlace" => "ejecutar.php?id=10",
    "boton" => "Ejecutar el código"
);

$casos[11] = array(
    "titulo" => "Datos de un empleado (arreglo asociativo)",
    "pdf" => "Caso práctico 5",
    "categoria" => "Casos prácticos",
    "enunciado" => "Guardar los datos de un empleado en un arreglo asociativo (Legajo, Nombre, D.N.I, Sueldo, Profesión) y mostrarlos con foreach usando la clave y el valor.",
    "ejemplo" => "Legajo = 4371, Nombre = Martínez Leandro, D.N.I = 27643742, Sueldo = 1429.54, Profesión = Arquitecto",
    "archivo" => "caso5.php",
    "enlace" => "ejecutar.php?id=11",
    "boton" => "Ejecutar el código"
);

$casos[12] = array(
    "titulo" => "Portal de Gestión de Inventario 'Librería San Cristóbal'",
    "pdf" => "Proyecto 1",
    "categoria" => "Proyectos",
    "enunciado" => "Desarrollar una solución web modular con Bootstrap 5 y PHP 8 que procese un catálogo de productos de librería almacenado en un arreglo asociativo multidimensional. El sistema debe calcular el total de artículos con count(), determinar el valor total del inventario y permitir filtrar productos mediante formulario.",
    "estructura" => "config/app.php: nombre del sistema y moneda.<br>lib/inventario.php: arreglos asociativos y funciones de cálculo.<br>app_caso1.php: interfaz gráfica Bootstrap 5.",
    "ejemplo" => "Sin filtro: 10 artículos y valor total S/ 2,830.00. Filtrando la categoría Libros: 3 artículos y S/ 1,120.00.",
    "archivo" => "app_caso1.php",
    "enlace" => "app_caso1.php",
    "boton" => "Acceder a la aplicación"
);

$casos[13] = array(
    "titulo" => "Sistema de Planilla de Empleados y Liquidación de Sueldos",
    "pdf" => "Proyecto 2",
    "categoria" => "Proyectos",
    "enunciado" => "Crear un sistema web interactivo en PHP 8 y Bootstrap 5 para la gestión de planilla de empleados. El sistema cargará los empleados en un arreglo multidimensional asociativo (Legajo, Nombre, DNI, Sueldo Base y Profesión). Permitirá calcular el aporte a la AFP (10%), la bonificación por profesión (5% si es Arquitecto o Ingeniero) y mostrar la boleta de pago neta.",
    "estructura" => "config/app.php: constantes de porcentaje.<br>lib/planilla.php: funciones de procesamiento de sueldo.<br>app_caso2.php: vista interactiva de la planilla.",
    "ejemplo" => "Legajo 4371 (Arquitecto, sueldo 1429.54): bonificación 71.48, AFP 142.95, sueldo neto 1,358.06.",
    "archivo" => "app_caso2.php",
    "enlace" => "app_caso2.php",
    "boton" => "Acceder a la aplicación"
);

// Muestra el código de un archivo con colores parecidos a Visual Studio Code
function mostrarCodigo($archivo) {
    $texto = file_get_contents($archivo);

    echo "<p class='bg-secondary text-white px-3 py-1 mb-0 rounded-top small'>";
    echo "<span class='text-danger'>&#9679;</span> <span class='text-warning'>&#9679;</span> <span class='text-success'>&#9679;</span> &nbsp; " . $archivo;
    echo "</p>";

    echo "<section class='bg-dark p-3 rounded-bottom overflow-auto' style='max-height:500px'>";

    if (function_exists('highlight_string')) {
        // Colores del tema oscuro de VS Code
        ini_set('highlight.comment', '#6a9955');
        ini_set('highlight.default', '#9cdcfe');
        ini_set('highlight.html', '#d4d4d4');
        ini_set('highlight.keyword', '#569cd6');
        ini_set('highlight.string', '#ce9178');
        highlight_string($texto);
    } else {
        // Si el hosting no permite highlight_string, se muestra sin colores
        echo "<pre class='text-light'>" . htmlspecialchars($texto) . "</pre>";
    }

    echo "</section>";
}

// Busca la foto del ejemplo (foto1.png, foto2.jpg, etc.) en la misma carpeta
function buscarFoto($id) {
    $extensiones = array("png", "jpg", "jpeg", "webp");
    foreach ($extensiones as $ext) {
        if (file_exists("foto" . $id . "." . $ext)) {
            return "foto" . $id . "." . $ext;
        }
    }
    return "";
}
?>
