<!DOCTYPE html>
<html> 
    <head> 
        <title>Documento teste - Form</title>
    </head>
    <body> <!-- Determina o inicio do corpo do documento   -->

        <?php
            $metodo = $_SERVER['REQUEST_METHOD'];

            if($metodo === 'GET') {
                $nome = $_GET['nome']; 
                $endereco = $_GET['endereco']; 
                $bairro = $_GET['bairro']; 
                $cidade = $_GET['cidade']; 
                $cep = $_GET['cep']; 
                $telefone = $_GET['telefone']; 
            } else {
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $cep = $_POST['cep'];
                $telefone = $_POST['telefone'];
            }
        ?>

        <h1> Resultado do Form! </h1>

        <h2> <?= $metodo ?> </h2>

        <h3>Nome: <?= $nome ?> </h3> 
        <h3>Endereço: <?= $endereco ?> </h3>
        <h3>Bairro: <?= $bairro ?> </h3>
        <h3>Cidade: <?= $cidade ?> </h3>
        <h3>Cep: <?= $cep ?> </h3>
        <h3>Telefone: <?= $telefone ?> </h3>
        
        <table>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Cep</th>
                <th>Telefone</th>
            </tr>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $endereco ?></td>
                <td><?= $bairro ?></td>
                <td><?= $cidade ?></td>
                <td><?= $cep ?></td>
                <td><?= $telefone ?></td>
            </tr>
        </table>


    </body>
</html>

