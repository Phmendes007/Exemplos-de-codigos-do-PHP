<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<!-- php syntax -->
<!-- imprimindo um texto com php -->
<?php
echo "Hello World!";
?> 

<!-- Funções não são case sensitive -->
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?> 

<!-- Variáveis são case sensitive -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

<!-- php comments -->
<!--comentários de linha única -->
<?php
// This is a single-line comment

# This is also a single-line comment
?>

<!--comentários multi-linha -->
<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

<!-- comentários usados para deixar partes do código de fora -->
<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

<!-- php variables -->
<!-- criando variáveis diferentes -->
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<!-- variável fora da função (Escopo global) -->
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<!-- Variável dentro da função -->
<?php
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<!-- palavra-chave para ter acesso a uma variável global na função -->
<?php
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<!-- Ter acesso a variável global dentro da função por meio do array $GLOBALS -->
<?php
$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>

<!-- Uso da palavra-chave static, permitindo que uma variável local não seja excluída após a execução da função  -->
<?php
function myTest4() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

<!-- php echo and print -->
<!-- string exibida com o comando echo -->
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 

<!-- string e variáveis exibidas com o comando echo -->
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>

<!-- string exibida pelo print -->
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<!-- string e variáveis exibidas pelo print -->
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>

<!-- php data types -->
<!-- string do php -->
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<!-- php inteiro (integer) -->
<?php  
$x = 5985;
var_dump($x);
?> 

<!-- php float -->
<?php  
$x = 10.365;
var_dump($x);
?>  

<!-- Matriz do php -->
<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<!-- objeto do php ou PHP object -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!-- valor nulo do php -->
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<!-- php string -->
<!-- obter o comprimento da string -->
<?php
echo strlen("Hello world!");
?> 

<!-- contando o número de palavras na string -->
<?php
echo str_word_count("Hello world!");
?> 

<!-- inverter uma string -->
<?php
$x = "Hello World!";
echo strrev($x);
?> 

<!-- Pesquisar um texto dentro de uma string -->
<?php
echo strpos("Hello world!", "world");
?> 

<!-- Substituir texto dentro de uma string -->
<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 

<!-- php numbers -->
<!-- verificando se a variável e do tipo inteiro -->
<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>

<!-- verificando se a variável e do tipo float -->
<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  

<!-- php math  -->
<!-- Encontre valor de pi -->
<?php
echo(pi());
?>

<!-- encontre o maior e o menor valor de uma sequencia -->
<?php
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
?>

<!--PHP Constants-->
<!-- Nome constante com distinção entre maiúsculas e minúsculas -->
<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>

<!-- Nome constante que não diferencia entre maiúsculas e minúsculas -->
<?php
// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?> 




</body>
</html>