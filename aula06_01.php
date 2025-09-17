<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula06</title>
</head>
<body>
    <h1>Resultados das Operações</h1>
    <h2>Operadores Aritméticos</h2>
    <?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>
<h2>Operadores de atribuição </h2>
<?php
$a=10; // atruindo valor 10 para a variavel a
$b=2; //atribuindo valor 2 para a variavel b
$a+=$b; // equivalente a $a=$a+$b 
$b-=5; // equivalente a $b=$b-5 negativo por conta do sinal de menos
echo "a = ".$a; // concatenação
echo "<br>b = ".$b; // concatenação
$c=11; //atribuindo valor 11 para a variavel c
$d=6; //atribuindo valor 6 para a variavel d
$c%=$d; // equivalente a $c=11%6 //$c= 5
$d+=$a; // equivalente a $d=$d+$a //$d=6+12 //$d=18
echo "<br>c = ".$c;// concatenação //5
echo "<br>d = ".$d;// concatenação //18 //o ponto . operador de concatenação pode ser substituido por aspas ""
?>
<h2>Operadores de string</h2>
<?php
$a = "Maria ";
echo "$a <br>";
$b = "Leopoldina ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 
?>

<h2>Operadores de incremento e decremento</h2>
<?php
$x = 100;
echo "x = ".++$x;
echo "<br>x final = ".$x;
?>
<?php
$i=10;
echo "<br>i = $i";
/*
$i++; //11
$i++; //12
++$i; //13
++$i; //14
*/
//$i++; $i++; ++$i; ++$i; //mesma coisa que o bloco comentado acima
$i+=4; //10+4=14 //mesma coisa que as 4 linhas comentadas acima

echo "<br>i = $i"; //14
$i--; //13
$i--; //12
--$i; //11
--$i; //10
echo "<br>i = $i"; //10
?>
<h2>Operadores de comparação</h2>
<?php
/*
= atribuição;
== igualdade;
=== idêntico;
!= diferente;
!== não idêntico mesmo valor e mesmo tipo;
<> diferente;
> maior que;
< menor que;
>= maior ou igual;
<= menor ou igual;
<=> nave espacial (spaceship) -1, 0, 1
*/
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";//1
echo "Idêntico = ".($a===$b)."<br>";//0 ou seja nada
echo "Não igual = ".($a!=$b)."<br>";//0
echo "Não Idêntico = ".($a!==$b)."<br>";//1

echo "<hr>";
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";           //0
echo "Menor ou igual: ".($a<=$b)."<br>"; //1
echo "Maior: ".($c>$b)."<br>";           //1
echo "Maior ou igual: ".($c>=$b)."<br>"; //1
?>

</body>
</html>