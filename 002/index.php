<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $numero = rand(0,100);
            echo "<p>O valor geado foi <strong>$numero</strong></p>";
        ?>
        <input type="button" value="Gerar outro" onClick="window.location.reload()">
    </main>
</body>
</html>