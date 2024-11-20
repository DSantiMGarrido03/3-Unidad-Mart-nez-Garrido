<?php
/*CBTIS 89
P39Array19.php
Programa almacene información de 6 personas y dependiendo su edad los contabiliza en diversos arreglos dependiendo de su edad los contabiliza en diversos arrglos de acuerdo a las siguientes condiciones:
Si la persona es menor de 18 años debe colocar un 1 en el array $gruo1 y si no cumple un 0.
En el array $grupo2 si cumple un 1 y si no un 0;
en el untimo array $grupo3 si cumple un 1 y si lo cumple un 0.

Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/


$Nombres = array ("Paco","Mari","Lalo","Rosi","paty","Beto");
$Edades = array(17,30,71,38,12,58);
$grupo1=array();
$grupo2=array();
$grupo3=array();

echo "---Nombres---","---Grupo1---","---Grupo2---","---grupo3---";

for ($i=0; $i<count($Nombres); $i++) {
if  ($Edades[$i] < 19){
	$grupo1[$i]=1;
	$grupo2[$i]=0;
	$grupo3[$i]=0;}

elseif ($Edades[$i] <50) {
$grupo1[$i]=0;
$grupo2[$i]=1;
$grupo3[$i]=0;
}
else { 

	$grupo1[$i]=0;
	$grupo2[$i]=0;
	$grupo3[$i]=1;}
}

for ($i=0; $i<count($Nombres); $i++){
echo $Nombres[$i] . "-----" . $Edades[$i] . "-----" . $grupo1[$i] . "-----" . $grupo2[$i] . "-----". $grupo3[$i];
echo "<br>";
}
?>