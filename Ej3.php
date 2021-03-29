<?php
/*
	Rodicio Julian

	Aplicación No 3 (Obtener el valor del medio)
	Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
	el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
	variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
	Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
	Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/
	
	$a = random_int ( 1 , 9 );
	$b = random_int ( 1 , 9 );
	$c = random_int ( 1 , 9 );

	print("(debug):[Números: $a - $b - $c]<br><br>");

	if (($a > $b && $a < $c) || ($a > $c && $a < $b))
	{
		print("$a");
	}
	elseif (($b > $a && $b < $c) || ($b > $c && $b < $a))
	{
		print("$b");
	}
	elseif (($c > $a && $c < $b) || ($c > $b && $c < $a))
	{
		print("$c");
	}
	else
	{
		print("No hay valor del medio");
	}
?>