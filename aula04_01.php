<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula04_01 - PHP</title>
</head>
<body>
    <h1>aula04_01 - PHP</h1>
    <?php
    //constantes
    //var_dump
    define("USER", "admin");
    $nome="Bete";//string
    $dia=2;//inteiro
    $nota=7.8;//float
    $cep=01012123;

    //gerar saida: admin- bete-2-7.8

   echo USER."-".$nome."-".$dia."-".$nota;
   
   echo"<br>cep=$cep";
   echo'<br>cep=$cep';
    //var_dump($nome);
    
    
    ?>
    
</body>
</html>