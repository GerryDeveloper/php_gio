<?php
include_once "util.php";

echo "Hola mundo desde PHP with Gio";

/*
- la asignacion en PHP se hace por valor y no por referencia
  copia el valor de la variable oroginal a la nueva

- operadores con un solo operando es: OPERADOR UNARIO
- operador con dos operandos es: OPERADOR BINARIO
- operador con tres operandos es: OPERADOR TERNARIO
- and so on..., I don't think any further exists beyond that

- operadores aritmeticos:
- + - * / % **

- operadores + & -
- los puedes usarlos como prefijo en un valor o variable y convertira estos valores a 
  un int o un float

- operador de division /
- el resultado siempre sera float
  a menos que ambos operadores sean int y ademas el resultado sea int también
  evenly divisable, if they are not, the resulta will always be float
- if one of them is float but they are evenly divisible, still the result will be float
- division por 0, en versiones anteriores a PHP 8 instead of failure you will get a warning
  pero el codigo no se detendra, aun retornara valor, pero este sera INF de infinity
- para evitar esto puedes usar una funcion introducida en PHP 8
- fdiv(arg1, arg2); return INFINITY

- MOD operator %
- en mod ambos operadores son casteados a int
- si quieres hacer operacion mod en float numbers puedes usarla funcion
- fmod(arg1, arg2);
- cuando trabajas con MOD, el signo del resultado depende del signo del numero que dividimos
- 10%3 = 1, -10%3 = -1

- operadores de asignacion

*/

echo "<h2>Operacoines Aritmeticas</h2>";
echo "<h4>Operadores +, -</h4>";
$x = "10";
$y = -2;

var_dump($x);
echo "<br>";
var_dump(+$x);
echo "<br>";
var_dump(-$x); // precedemos var con un operador -

echo "<h4>Operador de division /</h4>";

$x = 10;
$y = 2;

var_dump($x / $y);

echo "<hr>";
echo "<h4>Division por 0 usando fdiv(arg1, arg2)</h4>";
var_dump (fdiv(10, 0));

echo "<hr>";
echo "<h4>Division MOD %</h4>";

echo (15.82 % 4.20202020);
echo "<br>";
echo "Division usando fmod(arg1, arg2);";
echo "<br>";
var_dump( fmod(10.88, 4.2222));

echo "<hr>";
echo "<h4>Operadores de Asignación</h4>";

/*
OPERADORES DE ASIGNACION
- asignan el valor de la derecha a la izquierda
- puedes asignar multiples variables al mismo tiempo
*/

// multiple asignation.
$x = $y = 8;

echo ("Asignacion multiple: " . $x . " " . $y);

// you could also use more complex assignations

br();

$x = ($y = 10) + 5; // not recomended, makes code less readable

var_dump($x, $y);

// ============================
/*
  OPERADORES COMBINADOS

- short-hand for the aritmetic or the String operators
- usamos prefijo con el signo = precedido del simbolo de la operacion que vamos a realizar
*/

// ejemplo:
$x = 5;
$x = $x + 3;
br();
var_dump($x);

h3("Operadores Combinados: +=, -=, /=, *=");
$x = 5;
$x += 3;
br();
var_dump($x);
br();
$x /= 4;
var_dump($x);
br();
$x *= 4;
var_dump($x);
br();
$x -= 4;
var_dump($x);

hr();
h2("String operators: . .=");

br();
$s = "Hello";
$s = $s . " World";
$s .= " ASDF"; // using concatenation operator
echo $s;
?>