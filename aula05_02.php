<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_02-PHP</title>
</head>
<body>
    <h1>Aula05_02 - PHP</h1>
    <?php
    //echo "<pre>"; print_r($_REQUEST); echo "</pre>"; //print_r mostra o array
    $nome=$_POST["nome"];// usando o nome do campo do formulario criado no arquivo aula05_01.php
    $sem=$_POST["sem"];
    $senha=$_POST["senha"];
    echo "Nome: $nome <br>";
    echo "Sem: $sem <br>";
    echo "Senha: $senha <br>";

    
    ?>
    
</body>
</html>