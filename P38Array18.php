<?php
/*CBTIS 89
P38Array18.php
Programa un arreglo tridimencional con diferentes tipos de posiciones filas y columnas.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

$datos = array(
array(10,20,30),array(40,50,60),array(70,80,90));

echo "Normal";
echo "<br>";
for ($i=0; $i <3 ; $i++) 
{ for ($j=0; $j <3 ; $j++)
 {echo $datos[$i][$j]." ";}

echo "<br>"; 
}

echo "filas a columnas";
echo "<br>";
for ($i=0; $i <3 ; $i++) 
	{ for ($j=0; $j<3 ; $j++)
		{echo $datos[$i][$j]." ";}

echo "<br>";
}


echo "Columnas inversas";
echo "<br>";
for ($i=0; $i <3; $i++) 
	{  for ($j=2; $j >-1 ; $j--) 
		{ echo $datos[$i][$j]." ";}
	echo "<br>";
}


echo "Filas inversas";
echo "<br>";
for ($i=2; $i >-1 ; $i--) 
	{for ($j=0; $j <3 ; $j++) 
		{echo $datos [$i][$j]." ";}
echo "<br>";
}

echo "Fila en espejo";
echo "<br>";
for ($i=2; $i>-1 ; $i--)
	{ for ($j=2; $j >-1 ; $j--)
  {echo $datos[$i][$j]." ";}
   echo "<br>";
}

?>