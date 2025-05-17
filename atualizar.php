<?php require 'conexao.php';

if (isset($_POST['id'])) {
$id = $_POST['id'];
#$nroproduto = $_POST['nroproduto']; --não pe editavel na atualização
$nomeproduto = $_POST['nomeproduto'];
$id_categoria = $_POST['id_categoria'];
$quantidade = $_POST['quantidade'];
$id_fornecedor = $_POST['id_fornecedor'];

//comando atualizar
$update = "UPDATE estoque SET nomeproduto=:nomeproduto, id_categoria=:id_categoria, quantidade=:quantidade, id_fornecedor=:id_fornecedor WHERE id_estoque=:id";
$stmt =$conn->prepare("$update");
$stmt->bindParam(':nomeproduto', $nomeproduto);
$stmt->bindParam(':id_categoria', $id_categoria);
$stmt->bindParam(':quantidade', $quantidade);
$stmt->bindParam(':id_fornecedor', $id_fornecedor);
$stmt->bindParam(':id', $id);
$stmt->execute();
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <div class="container" style="width: 400px; margin-top: 20px;">
            <center>
                <h3>Atualizado com sucesso!</h3>
                <div style="margin-top: 10px;">
                    <a href="listar.php" class="btn btn-sm btn-success">Voltar</a>
                </div>
            </center>

    </div>
