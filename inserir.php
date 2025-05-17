<?php 
require 'conexao.php';


if (isset($_POST['cadastrar'])) {
    $nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
    $nomeproduto = $_POST['nomeproduto'];
    $id_categoria = $_POST['categoria'];   
    $quantidade = $_POST['quantidade'];
    $id_fornecedor = $_POST['fornecedor'];

    //comando SQL
    $insert = "INSERT INTO  estoque(nroproduto, nomeproduto, id_categoria, quantidade, id_fornecedor) values (:nroproduto,:nomeproduto,:id_categoria,:quantidade, :id_fornecedor)";

    $stmt = $conn->prepare($insert);
    $stmt->execute([
        ':nroproduto'=> $nroproduto,
        ':nomeproduto'=> $nomeproduto,
        ':id_categoria'=> $id_categoria,
        ':quantidade'=> $quantidade,
        ':id_fornecedor'=> $id_fornecedor 
        
    ]);

}
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <div class="container" style="width: 500px; margin-top: 20px;">
        <div style="padding-top: 20px;">
            <center><h4>Produto adicionado com sucesso!</h4></center>
        </div>
        <center><a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novo Item</a></center>

    </div>


