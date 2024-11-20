<?php
/*CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
En el $arreglo1 van los números pares, en el $arreglo2 van los impares, en le $arreglo3 va la suma de todos los números.
Diego Santiago Martínez Garrido
3°A Programación Matutino
*/

$array1 = array(150, 152, 154, 158, 160, 162, 164, 166, 168, 170, 172, 174, 190, 192, 194, 196, 198);  
$array2 = array(151, 153, 155, 157, 159, 161, 163, 165, 167, 169, 171, 173, 191, 193, 197, 199);
$array3 = array();

$longitud = count($array1);


for ($i = 0; $i < $longitud; $i++) { 
    $array3[$i] = $array1[$i] + $array2[$i];
}


echo "<strong>---Arreglo 1---</strong>&nbsp;&nbsp;&nbsp;<strong>---Arreglo 2---</strong>&nbsp;&nbsp;&nbsp;<strong>---Arreglo 3 (Suma)---</strong>";
echo "<br><br>";

for ($i = 0; $i < $longitud; $i++) {
    echo $array1[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $array2[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $array3[$i];
    echo "<br>";
}
?>