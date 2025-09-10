<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05_03-php</title>
</head>
<body>
    <!--criar um formulario com os seguintes campos:
    nome, data, av1, av2
    criar uma pagina php para regatar os dados e caucular a media entre av1 e av2, mostrar o resultado da média
    -->
    <h1>aula05_03 - PHP</h1>


    <form method "post" action="aula05_03.php">
        Nome <input type="text" name="nome" required><br>
        Data <input type="date" name="data" required><br>
        Av1 <input type="number" step="0.01" name="av1" required><br>
        Av2 <input type="number" step="0.01" name="av2" required><br>
        <input type="submit" value="Enviar!">   

    </form>
    
</body>
</html>