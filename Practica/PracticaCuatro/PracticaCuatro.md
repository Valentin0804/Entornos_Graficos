Ejercicio 1

<?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 

Variables-> $a : Boolean, $b : String, $c : String, $d : Integer, $f : Integer, $g : Integer.

Operadores Aritmeticos-> * : Multiplicacion, += : Suma y Asignación, ++ : Incremento.
Operadores de Comparacion -> is_int() : Verifica si es entero, is_string() : Verifica si es string.
Operadores logicos-> ?: : Operador ternario.

Funciones -> 
doble($i) : Parametro: $i (numerico)
gettype($var) : Parametro: $var (de cualquier tipo)
is_string($var) : Parametro: $var (de cualquier tipo)
is_int($var) : Parametro: $var (de cualquier tipo)

Estructuras de control -> 
if (){} : Condicional
?: : Operador ternario

Impresion por pantalla -> booleanstringstringinteger1xyzxyz184444


Ejercicio 2




Operadores Aritmeticos-> * : Multiplicacion, += : Suma y Asignación, ++ : Incremento.
Operadores de Comparacion -> is_int() : Verifica si es entero, is_string() : Verifica si es string.
Operadores logicos-> ?: : Operador ternario.
