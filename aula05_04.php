<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05_04</title>
</head>
<body>
    <?php 
    if(count($_POST)==0){
        echo "Nenhum dado foi enviado!";
        exit;
    
    //echo "<pre>"; print_r($_POST); echo "</pre>"; //print_r mostra o array$nome=$_POST["nome"];// usando o nome do campo do formulario criado no arquivo aula05_01.php
    $nome=$_POST["nome"];
    $data=$_POST["data"];
    $av1=$_POST["av1"];
    $av2=$_POST["av2"];
    
    echo "Nome: $nome <br>";
    echo "data: $data <br>";
    echo "av1: $av1 <br>";
    echo "av2: $av2 <br>";
    $media=($av1+$av2)/2;
    echo "Média: $media <br>";
    }
?>

</body>
</html>