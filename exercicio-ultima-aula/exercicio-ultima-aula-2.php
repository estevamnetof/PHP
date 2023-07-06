<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus dados</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background: #4CAF50;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Dados cadastrados</h1>
    <p>Olá <?= $_POST['nome'] ?></p>
    <p>Seu endereço é: <?= $_POST['endereco'] ?></p>
</body>
</html>