<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessores e antecessores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $num = $_GET["numero"] ?? 0;
                //$sucessor = $num + 1; <- comentarei para evitar gasto desnecessário de memória com variáveis...
                //$antecessor = $num - 1;
                echo "O número escolhido foi <strong>$num</strong>";
                echo "<br>O seu antecessor é ". ($num - 1);
                echo "<br>O seu sucessor é ". ($num + 1);
            ?>
        </p>
        <p><a href="javascript:history.go(-1)"><- Voltar</a></p>
    </main>
</body>
</html>