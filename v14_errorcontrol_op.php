<?php
include_once "util.php";

/*
Error Control Operators

- en PHP todo son expresiones
- si tu añades @ a una expresion, simplemente supress any errors from that expression
- los errores que suprime dependenden en como tienes configurado tu manejo de errores
  en PHP.
- Gio does not recomend using this operator at all, uless you havea really good use case for it
  somethimes you want to supress some API calls or something but he still don't recommend
  using this operator
- simplemente silencia tu app, no resuelve ningun problema.
- es mejro construir un mejor "error-handling" alrededor de tu aplicacion.

============
- hay dos tipos de increment and decrement operators
- preincremento
- postincremento

- increment y decrement, solo afectan numbers and strings
  arrays, booleans, resources and objects are not afected

- nullo es afectado por ++ hace que aumente a 1, pero -- no tiene efecto
- las String son afectadas por ++, pero no por --

===============
OPERADORES LOGICOS
- basicamente te ayudan a agrupar condiciones, para crear un condicional statement mas grande
- operador && evalua a true solo si los dos operandos son true
- operador ||  evalua a true si cualqiera de los dos es true
- operador ! negara cualquiera que sea el valor al que se aplique

- PHP tiene variaciones de estos operadores:
- and or xor
- and or hacen lo mismo que sus homologos, pero cambia su precedencia
$z = $x and $y; donde x = true, y y = false, esto pasa por la precendencia
  usando and evalua primero z = x, lo cual es true, y es lo que retorna
  esto es PORQUE el operador = tiene mayor precedencia que el operador and

- CORTOCIRSUITO O shortcircuiting in PHP
- en el caso de la operacion: true || true, solo un operador, el primero necesita ser true
  paraque la operacion sea true, si el primero ya es true, es "innecesario" que el otro
  sea true, por tanto no necesita ser evaluado
  
- lo mismo aplica para &&, si el primer operando es false, entonces no hay necesidad
  de operar con el segundo y esto PHP lo sabe

================
*/

h1("Error Control Operator @");
$x = @file('foo.txt'); // just reads the file, somethimes, this file does not exist

// ==========0
hr();
h1("Increment or decrement Operator: -- ++");

$x = 5;

$x++; // first return value, then increments
$x--; // first return value, then decrement
++$x; // first increment, then returns the value
--$x; // first decrement, then return the value

br();
echo $x;
br();
echo $x++; // 5
br();
echo $x++; // 6
br();
echo --$x;
br();

$y = true;
$y = false;
$y = null; // null + 1 pasa a 1, null -- no tiene efecto
echo(++$y); // esto si imprime 1
br();
echo "fin clase";

br();
echo "cadenas se ven afectadas por ++, pero no por --";
$s = 'abc';
br();
echo --$s;
br();
echo ++$s . " -> aumenta el valor del ultimo digito";

hr();
h2("Logical Operators: && || ! and or not");

h4("operador: &&");
echo "Evalua a true, solo si los dos operandos son true";
br();

$x = true;
$y = false;

var_dump($x && $y);

h4("operador: ||");
echo "Evalua a true si almenos un operador es true";
br();
var_dump($x || $y);

h4("operador: !");
echo "Niega el valor al que se le aplique";
br();
var_dump( !$x || $y); // ambos false ahora

// variaciones de estos operadores
h4("Operadores alternativos: and or xor");
$x = true;
$y = false;

$z = $x && $y;

var_dump('evaluamos usando && ->', $z);
br();

$z = $x and $y;
var_dump('evaluamos usando and->', $z); // true
br();

h4("Shortcircuiting in PHP");
$x = true;
$y = false;

var_dump($x || $y);
br();

// lets try wit a function

function hello() {
  echo "hello world";

  return false;
}

var_dump($x || hello() );
br();
var_dump($x && hello() ); // aqui si imprime hello world
br();

$x = false;
$y = false;
// operacion extra, que retorna??
echo "precedencia operadores:";
br();br();
var_dump($x && hello() || true); // pista, no imprime hello world!

?>  