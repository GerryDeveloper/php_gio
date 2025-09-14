<?php
include_once "util.php";

/*
- comparasion: ==
- ucando php usa esta comparasion ==
  lo que hace es hacer una conversion para intentar comprararlos

- loose conversion, donde hace la conversion de tipos por ti
- comparasion estricta: ===
  also checks the data type of the value

- operador de desigualdad: !=, !==, <>
- operador SPACESHIFT <=>
  retorna -1 si el izquierdo es mas grande, retorna 1 si el derecho es mayor
  y retorna 0 si son iguales, usa LOOSEY CONVERSION

- operadores: ??, ?:
- antes de PHP 8 cuando una cadena era comparada con un numero la cadena era convertida
  a numero antes de la comparacion, luego era comparada
  por ejemplo: (0 == 'Hello')
  anterior a PHP 8 el 'Hello' era convertido a int, y pasaba a ser 0:
  (0 == '0') therefore 0 == 0 = true, esto daba true, lo cual era un error

- en PHP 8 esto no longer is converted to number
  lo que pasa ahora es:
  si la cadena no es numerica, string is not numeric
  el otro lado se convierte en string
  entonces se compara
  ('0' == 'Hello')
  entonces ahora es unacomparacion de cadenas, resulta en FALSE

  ahora la comparacion:
  (0 == '0') returna TRUE
  peus '0' es una String numerica, es convertida a numero y comparada
  resultando en true

- se recomienda usar la comparasion estricta siempre que se pueda para evitar errores potenciales

- Operador Ternario
- se llama operador ternario porque espera 3 valores
- puedes stackear operadores ternarios
  pero se recomienda siempre que se haga utilizar parentesis ()

- no usar parentesis fue depreciated in PHP 7.4
  resultara en errores en PHP 8
- es mas legible cuando hay parentesis

=============
- operador: null coallising operator ??

- para explicar:
- $y = $x ?? 'Hello';
  la variable $y sera igual a 'Hello' solo si $x es null
  si lavariable $x no es null, entoncds $y sera igual a lo que sea que $x valga
- puede ser util cuando trabajamos con variables no definidas
- or undefined array keys

*/

h1("Comparassion Operators");

$x = 5;
$y = '5';
var_dump($x == $y);
br();
var_dump($x === $y);
br();
echo("Operador de desigualdad usando: <>");
br();
var_dump($x <> $y);
echo("Operador Spaceshift <=>");
br();
var_dump($x <=> $y);

// ejemplo para ver porque la STRICT COMPARASSION is very important

br();
hr();
h2("Strict Type Comparassion");
$x = 'Hello World';
$y = strpos($x, 'H');

//if($y == false) { // returns false, 0 is converted to BOOLEAN, false == false
if($y === false){
  echo 'H not found';
} else {
  echo 'H found at index ' . $y;
}

// =====================
hr();
h2("Operadores Condicionales");
h2("Operador Ternario: ?:");

$x = 'Hello World';
$y = strpos($x, 'H');

$result = $y === false ? 'H Not Found' : 'H Found at index: ' . $y;
echo $result;

// ============0
hr();
h2("Null Coalising Operator: ??");
$x = null;
$x = false;
$y = $x ?? 'Hello';

// si $x fuera null tendriamos undefined variable $x warning
br();
var_dump($y);
?>