<?php
require 'conexao.php'; ?>

<!--copiando o arquivo do index-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <h3 class="navbar-brand">Crud PHP Estrutural</h3>
        </div>
    </nav>
    <div class="container" style="margin-top: 40px;">
        <h4>Formulario de Cadastro</h4>
        <form action="atualizar.php" method="POST" style="margin-top: 20px;">

            <!--Comando listar-->
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT *FROM estoque WHERE id_estoque = $id";
                $stmt = $conn->prepare($sql);
                $stmt->execute();


                //laço para listar produtos
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id_estoque = $row['id_estoque'];
                    $nroproduto = $row['nroproduto'];
                    $nomeproduto = $row['nomeproduto'];
                    $id_categoria = $row['id_categoria'];
                    $quantidade = $row['quantidade'];
                    $id_fornecedor = $row['id_fornecedor'];

            ?>

                    <div class="form-group">
                        <label>Nro produto</label>
                        <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto; ?>" disabled>
                        <input type="number" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label>Nome do Produto</label>
                        <input type="text" name="nomeproduto" class="form-control" value="<?php echo htmlspecialchars($nomeproduto); ?>">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-select" name="id_categoria">
                            <option value="1" <?php if ($id_categoria == 1) echo 'selected'; ?>>Periféricos</option>
                            <option value="2" <?php if ($id_categoria == 2) echo 'selected'; ?>>Hardware</option>
                            <option value="3" <?php if ($id_categoria == 3) echo 'selected'; ?>>Software</option>
                            <option value="4" <?php if ($id_categoria == 4) echo 'selected'; ?>>Celulares</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" class="form-control" name="quantidade" value="<?php echo htmlspecialchars($quantidade); ?>">
                    </div>
                    <div class="form-group">
                        <label>Fornecedor</label>
                        <select class="form-select" name="id_fornecedor" >
                            <option value="1" <?php if ($id_fornecedor == 1) echo 'selected'; ?>>Fornecedor A</option>
                            <option value="2" <?php if ($id_fornecedor == 2) echo 'selected'; ?>>Fornecedor B</option>
                            <option value="3" <?php if ($id_fornecedor == 3) echo 'selected'; ?>>Fornecedor C</option>
                        </select>
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" id="botao" name="cadastrar" class="btn btn-sm btn-success">Atualizar</button>
                    </div>
            <?php }
            }
            ?>
        </form>

    </div>


</body>

</html>