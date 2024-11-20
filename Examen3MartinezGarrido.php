<?php
/*CBTIS 89
P39Array19.php
Programa almacene el nombre de cuatro articulos en un arreglo llamado $Productos y en otro multidimencional llamados 
$Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas.

Debes calcular por medio de ciclos el sutotal y promedio de cada producto y guardarlo en los arreglos $Subtotal y $Promedio sugún corresponda.

Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

$Productos= array("Vestido","Pantalón","Cinturón","Camiseta");
$Subtotal = array();
$Promedio = array();
$Precios = array(
array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$sumaA1= 500+600+550;
$sumaA2= 800+700+600;
$sumaA3= 400+200+300;
$sumaA4= 500+200+500;

$longitud = count($Precios);

echo "----Tienda de Ropa-----";
echo "<br>","<br>";
echo "---Productos---","---Subtotal---","---Promedio---","<br>","<br>";

for ($i=0; $i<count($Precios); $i++) {
	 
	if ($Subtotal[$i]=$sumaA1) {
	$Promedio[$i]= $sumaA1/3;}
	}

for ($i=0; $i <count($Precios) ; $i++) { 

if ($Subtotal[$i]=$sumaA2) {
	$Promedio[$i]= $sumaA2/3;}
}

for ($i=0; $i <count($Precios) ; $i++) {

if ($Subtotal[$i]=$sumaA3) {
	$Promedio[$i]= $sumaA3/3;}
}

for ($i=0; $i <count($Precios) ; $i++) { 

		if ($Subtotal[$i]=$sumaA4) {
		$Promedio[$i]=$sumaA4/3;}
}


for ($i=0; $i<count($Precios); $i++){
echo $Productos[$i] . "-----" . $Subtotal[$i] . "-----" . $Promedio[$i];
echo "<br>";
}

	
echo "-----Precios-----";
echo "<br>";
for ($i=0; $i <4; $i++) 
{ for ($j=0; $j <4; $j++)
 {echo $Precios[$i][$j]." ";}

echo "<br>"; 
}

?>