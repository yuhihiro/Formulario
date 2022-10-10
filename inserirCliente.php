<?php

include 'conexao.php';


$telefone       = $_POST['telefone'];
$genero         = $_POST['genero'];
$nomeCliente    = $_POST['nomeCliente'];
$gmail          = $_POST['gmail'];
$endereco       = $_POST['endereco'];
$cpf            = $_POST['cpf'];


$sql = "INSERT INTO `cliente`(`telefone`, `genero`, `nomeCliente`, `gmail`, `endereco`,`cpf`)  VALUES ($telefone,'$genero','$nomeCliente','$gmail', '$endereco', $cpf)";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <h4>Produto Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.html" role="button" class="btn btn-sm btn-secondary">Cadastrar novo Ítem</a>
    </div>
</div>