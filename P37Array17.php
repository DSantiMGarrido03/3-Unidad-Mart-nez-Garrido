<?php
/*CBTIS 89
P37Array17.php
Programa que haga un listado de números positivos y negativos guardandolos en arreglos y al final sumalos y muestra el resultado.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/
$arraynumeros=array(-8,8,-11,17,-3,1,20,-20,21,-73,50,-7,-30,-4);
$arrayP=array();
$arrayN=array();
$sumaP=0;
$sumaN=0;
$longitud=count($arraynumeros);

echo"NÚMEROS POSITIVOS","<br>","<br>";
for ($i=0; $i<$longitud; $i++) {
	if ($arraynumeros[$i]>0) {
	$arrayP[$i]=$arraynumeros[$i];
	echo $arrayP[$i];
	echo "<p>";
	$sumaP += $arraynumeros[$i];
   }
 	}
 	echo "la suma es de: ",$sumaP;
 	echo "<p>";

 	echo"NÚMEROS NEGATIVOS","<br>","<br>";
for ($i=0; $i<$longitud; $i++) {
	if ($arraynumeros[$i]<0) {
	$arrayN[$i]=$arraynumeros[$i];
	echo $arrayN[$i];
	echo "<p>";
	$sumaN += $arraynumeros[$i];
   }
 	}
echo "la suma es de ",$sumaN;

?>