<?php
/*CBTIS 89
P41Array21.php
Programa que almacena en un arreglo llamado $compras el valor de 6 compras,
posteriormente en otros arreglos se debe alamacenar información de acuerdo a las siguientes condiciones:
El contenido del arreglo $Descuentos se llenará de la siguiente manera:
compra menor 300=0
compra mayor 300 y menor o igual 1000=10%
compra mayor 1000 y menor o igual a 2500 =15%
compra mayor 2500 y menor  igual a 5000= 20%
compra mayor 5000=25%
En el arreglo $Total se coloca la diferencia entre la compra y el descuento y en arreglo $Porcentaje colocar el porcentaje que se le aplicó de descuento
Diego Santiago Martínez Garrido
3°A Programación Matutino
*/


// Definir los arreglos de compras, descuentos, totales y porcentajes
$Compras = array(800, 2700, 1900, 150, 7600, 1000);
$Descuentos = array();
$Total = array();
$Porcentaje = array();
$longitud = count($Compras);
// Imprimir el encabezado de la tabla
echo "Compra\tDescuento\tPorcentaje\tTotal\n";
echo "---------------------------------------------\n";

// Recorremos el arreglo de compras para calcular los descuentos, totales y porcentajes
for ($i = 0; $i < count($Compras); $i++) {
    // Calcular el descuento y porcentaje basado en el valor de la compra
    if ($Compras[$i] <= 300) {
        $Descuentos[$i] = 0;
        $Porcentaje[$i] = "0%";
    } elseif ($Compras[$i] > 300 && $Compras[$i] <= 1000) {
        $Descuentos[$i] = $Compras[$i] * 0.10;
        $Porcentaje[$i] = "10%";
    } elseif ($Compras[$i] > 1000 && $Compras[$i] <= 2500) {
        $Descuentos[$i] = $Compras[$i] * 0.15;
        $Porcentaje[$i] = "15%";
    } elseif ($Compras[$i] > 2500 && $Compras[$i] <= 5000) {
        $Descuentos[$i] = $Compras[$i] * 0.20;
        $Porcentaje[$i] = "20%";
    } else {
        $Descuentos[$i] = $Compras[$i] * 0.25;
        $Porcentaje[$i] = "25%";
    }
    
    // Calcular el total después del descuento
    $Total[$i] = $Compras[$i] - $Descuentos[$i];
}
 for ($i = 0; $i < count($Compras); $i++) {
echo $Compras[$i] . "---" . $Descuentos[$i] . "---" . $Porcentaje[$i] . "-----" . $Total[$i];
echo "<br>";}

?>