<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Listagem de Clientes</title>
</head>

<body>
    <div class="container">
        <h3 class="titulo">Lista de Clientes</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">cpf</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `cliente`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $idClinte = $array['idCliente'];
                $telefone  = $array['telefone'];
                $genero    = $array['genero'];
                $nomeCliente     = $array['nomeCliente'];
                $gmail = $array['gmail'];
                $endereco = $array['endereco'];
                $cpf = $array['cpf'];
            ?>
                <tr>
                    <td><?php echo $nomeCliente ?></td>
                    <td><?php echo $telefone ?></td>
                    <td><?php echo $gmail ?></td>
                    <td><?php echo $endereco ?></td>
                    <td><?php echo $cpf ?></td>
                    <td><?php echo $genero ?></td>
                    <td><a class="btn btn-primary" style="text-decoration: none;" href="editarCliente.php?id=<?php echo $idClinte ?>" role="button">Editar</a>
                    <a class="btn btn-primary" href="deletarCliente.php?id=<?php echo $idClinte ?>" role="button">Deletar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>