<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Diego Almeida Silva";
print "<br>Diego Almeida Silva<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
echo "<br>";
echo strlen("Olá Mundo")
?>
<?php
echo "<br>";
echo str_word_count("Olá Mundo")
?>
<?php
echo "<br>";
echo strpos ("Novo bravo mundo", "Iron Maiden")
?>
<?php
$x = "Ola Mundo";
echo strtoupper ($x);
?>
<?php
echo "<br>";
$x= "NoVo Teste";
echo strtolower($x);
?>
<?php
echo "<br>";
$x="Meu Teste";
echo str_replace("Teste", "Arquivo",$x);
?>
<?php
$x="Meu Teste";
echo "<br>";
echo strrev($x);
?>
<?php
echo "<br>";
$x="Meu Teste";
echo trim($x);
?>
<?php
echo "<br>";
echo "<input value='". $x ."'>";
echo "<br>";
?>
<?php
$x="Meu ";
$y="Teste";
$z=$x . $y;
echo "<br>";
echo $z;
?>
<?php
$x="Diego ";
$y="Almeida Silva";
$z=$x . $y;
echo "<br>";
echo $z;
?>

