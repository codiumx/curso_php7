<?php
/*
	Sirven para almacenar valores
	En php las variables son de tipado dinamico (pueden ser textos numeros etc)
*/


// Asigna en número a la variable
$numero = 5;

// Imprime el valor de nuestra variable
echo 'Valor de nuestra primer variable es: '. $numero;

// Asignamos la variable pi
$pi = 3.14159265359;

// Realizamos cálculos de circunferencia (pi * diámetro)
echo '<br>pi * 5: '. $pi * 5;
echo '<br>pi * 3: '. $pi * 3;


/*
Declarar variables de forma correcta

//No se acepta declarar las variables:
	comenzando con un numero o tener guion en medio

$nombre = 'Soy_un_nombre';     // Legal
$Nombre = 'Soy_un_nombre';     // Legal
$_nombre = 'Soy_un_nombre';    // Legal
$nom_bre = 'Soy_un_nombre';    // Legal
$nom_br3 = 'Soy_un_nombre';    // Legal
$nom-bre = 'Soy_un_nombre';    // Illegal
$1nombre = 'Soy_un_nombre';    // Illegal
*/


// Variables con Naming convention
$lowerCamelCase = 2;
$UpperCamelCase = 2;


/*
 * Tipos de variables:
 * integer
 * float
 * boolean
 * string
 * null
 * array
 */

// integer
$unEntero = 10;
$otroEntero = -4;

// float
$unNumeroFloat = 2.34;
$otroNumeroFloat = -80.19;

// boolean
$cosaFalsa = FALSE;
$cosaVerdadera = TRUE;

// string
$nombre = 'Juan';
$apellido = 'Perez';

// null
$caja = NULL;

// array
$miPrimerArray = [1, 2, 3];
$otroArray = array(5, 6, 7, 8);


// Asignación avanzada
$valores = 2;
echo '<br>Aqui vale: '. $valores;
$valores += 1;
echo '<br>Y Aqui vale: '. $valores;


// var_dump muestra información de la variable (por ejemplo el tipo)
echo "<br>Muestra información de la variable inicial: ";
var_dump($valores);

// Decrementa el valor
$valores--;
echo "<br>Decrementa el valor: ";
var_dump($valores);

// Decrementa el valor
--$valores;
echo "<br>Decrementa el valor: ";
var_dump($valores);


// Dump Antes.
echo "<br>Dump Antes: ";
var_dump($valores);

// Dump durante.
echo "<br>Dump durante: ";
var_dump(--$valores);

// Dump después.
echo "<br>Dump después: ";
var_dump($valores);


// Dump Antes.
echo "<br>Dump Antes ";
var_dump($valores);

// Dump durante.
echo "<br>Dump durante: ";
var_dump($valores--);

// Dump después.
echo "<br>Dump después: ";
var_dump($valores);



// Asignación
$valores2 = 5;

// Asignar, e incrementar
$cantidadvalores = $valores2++;
echo "<br>Se normal: ";
var_dump($cantidadvalores);


$cantidadvalores = $valores2;
echo "<br>Valores despues del ++: ";
var_dump($cantidadvalores);


// Incremento
$valores2 = $valores2 + 1;
echo "<br>Se incrementa +1: ";
var_dump($valores2);