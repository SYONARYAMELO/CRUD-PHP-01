<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Nro Produto</th>
                    <th>Nome Produto</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Fornecedor</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <!--Lista os dados do banco de dados'While'-->
            <?php 
            
            include 'conexao.php';

            //comando SQL
            $select = "SELECT *FROM estoque";
            $stmt = $conn->prepare($select);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //laço para listar
            
            foreach( $result as $linha){
                $id_estoque = $linha['id_estoque'];
                $nroproduto = $linha['nroproduto'];
                $nomeproduto =$linha['nomeproduto'];
                $id_categoria = $linha['id_categoria'];
                $quantidade = $linha['quantidade'];
                $id_fornecedor = $linha['id_fornecedor'];       
            
            ?>
            <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $id_categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $id_fornecedor ?></td>
            
            <td>
            <a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id_estoque;?>">Editar</a>
            <a class="btn btn-danger btn-sm" href="excluir.php?id=<?php echo $id_estoque;?>">Excluir</a>
            </td>

            <?php 
            }
            ?>

            </tr>

        </table>
    </div>
    
</body>
</html>