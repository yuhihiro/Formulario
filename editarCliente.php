<?php

include 'conexao.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Produtos</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarCliente.php" method="POST">
                <?php
                $sql =  "SELECT * FROM `cliente` WHERE idCliente = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idProduto      = $array['idCliente'];
                    $telefone       = $array['telefone'];
                    $genero         = $array['genero'];
                    $nomeCliente    = $array['nomeCliente'];
                    $gmail          = $array['gmail'];
                    $endereco       = $array['endereco'];
                    $cpf            = $array['cpf'];

                ?>
                    <h3 style="text-align: center">Edição de Cliente</h3>
                    <div class="form-group">
                        <label>Nome Cliente</label>

                        <input type="text" class="form-control" name="nomeCliente" value="<?php echo $nomeCliente ?>">

                        <input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">


                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="number" class="form-control" name="telefone" value="<?php echo $telefone ?>">
                    </div>
                    <div class="form-group">
                        <label>Gmail</label>
                        <input type="text" class="form-control" name="gmail" value="<?php echo $gmail ?>">
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
                    </div>
                    <div class="form-group">
                        <label>cpf</label>
                        <input type="number" class="form-control" name="cpf" value="<?php echo $cpf ?>">
                    </div>
                    <div class="form-group">
                        <label>Genero</label>
                        <select class="form-control" name="genero">
                            <option>Macho</option>
                            <option>Fema</option>
                            <option>Outu</option>
                        </select>
                    </div>
                    <div class="botao">
                        <button type="submit" class="btn btn-secondary botao">Editar</button>
                    </div>
                <?php }

                ?>
            </form>
        </div>
    </section>
</body>
</html>