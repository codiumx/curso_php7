<?php

/*
 * Operadores artiméticos:
 * Podemos realizar operaciones artiméticas con php
 * Para unir direntes valores (concatenar) usamos un punto
 */

//	+ Suma
	echo 3 + 3 .'<br>';

//	- Resta
echo 5 - 3 .'<br>';

//	* Multiplicación
	echo 3 * 3 .'<br>';

//	/ División
	echo 9 / 3 .'<br>';

//	% Módulo (Lo que sobra de la División)
echo 9 % 3 .'<br>';

//Combinadas (Revisar Prioridad de los operadores aritméticos abajo)
echo 4 + 3 * 2 / 1 .'<br>';

/*
 * Prioridad de los operadores aritméticos
 * Multiplicación
 * División
 * Módulo
 * Suma
 * Resta
 */


//  Buena práctica: Agrupar las operaciones matemáticas para evitar confusiones
 
echo (4 + 3) * (2 / 1) .'<br>';