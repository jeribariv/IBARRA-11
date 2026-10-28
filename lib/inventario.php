<?php
// Catálogo de productos (arreglo asociativo multidimensional)
$productos = array(
    array("Codigo" => "P001", "Nombre" => "Lápiz 2B", "Categoria" => "Útiles", "Precio" => 0.80, "Stock" => 200),
    array("Codigo" => "P002", "Nombre" => "Goma", "Categoria" => "Útiles", "Precio" => 1.00, "Stock" => 150),
    array("Codigo" => "P003", "Nombre" => "Hoja bond A4 (paquete 100)", "Categoria" => "Papelería", "Precio" => 6.00, "Stock" => 80),
    array("Codigo" => "P004", "Nombre" => "Tinta negra (frasco)", "Categoria" => "Útiles", "Precio" => 12.00, "Stock" => 25),
    array("Codigo" => "P005", "Nombre" => "Cuaderno cuadriculado A4", "Categoria" => "Cuadernos", "Precio" => 6.50, "Stock" => 40),
    array("Codigo" => "P006", "Nombre" => "Cuaderno rayado 100 hojas", "Categoria" => "Cuadernos", "Precio" => 4.00, "Stock" => 60),
    array("Codigo" => "P007", "Nombre" => "Cien años de soledad", "Categoria" => "Libros", "Precio" => 45.00, "Stock" => 8),
    array("Codigo" => "P008", "Nombre" => "El principito", "Categoria" => "Libros", "Precio" => 25.00, "Stock" => 15),
    array("Codigo" => "P009", "Nombre" => "Diccionario escolar", "Categoria" => "Libros", "Precio" => 38.50, "Stock" => 10),
    array("Codigo" => "P010", "Nombre" => "Folder manila A4", "Categoria" => "Papelería", "Precio" => 0.80, "Stock" => 150)
);

// Categorías para el filtro del formulario
$categorias = array("Todas", "Cuadernos", "Libros", "Útiles", "Papelería");

// Cuenta cuántos artículos hay en la lista
function contarArticulos($lista) {
    return count($lista);
}

// Valor total = precio x stock de cada producto, sumado
function valorInventario($lista) {
    $total = 0;
    foreach ($lista as $xproducto) {
        $total = $total + ($xproducto['Precio'] * $xproducto['Stock']);
    }
    return $total;
}

// Devuelve solo los productos de una categoría
function filtrarPorCategoria($lista, $categoria) {
    if ($categoria == "Todas") {
        return $lista;
    }
    $resultado = array();
    foreach ($lista as $xproducto) {
        if ($xproducto['Categoria'] == $categoria) {
            $resultado[] = $xproducto;
        }
    }
    return $resultado;
}

// Devuelve los productos cuyo nombre contiene el texto buscado
function buscarPorNombre($lista, $texto) {
    $resultado = array();
    foreach ($lista as $xproducto) {
        if (stripos($xproducto['Nombre'], $texto) !== false) {
            $resultado[] = $xproducto;
        }
    }
    return $resultado;
}
?>
