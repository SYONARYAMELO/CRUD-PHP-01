<?php require 'conexao.php';

$id = $_GET['id'];

//comando deletar
$delet = "DELETE FROM estoque WHERE id_estoque = $id";
$stmt= $conn->prepare("$delet");
$stmt->execute();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <div class="container" style="width: 400px; margin-top: 20px;">
            <center>
                <h3>Excluído com sucesso!</h3>
                <div style="margin-top: 10px;">
                    <a href="listar.php" class="btn btn-sm btn-success">Voltar</a>
                </div>
            </center>

    </div>



