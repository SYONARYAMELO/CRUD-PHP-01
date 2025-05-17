<?php
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <div>
            <a href="index.php" role="button" class="btn bnt-sm btn-primary">Voltar</a>
        </div>
        <h4>Formulario de Cadastro</h4>
        <form action="inserir.php" method="POST" style="margin-top: 20px;">
            <div class="from-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do Produto" required autocomplete="off">
            </div>
            <div class="from-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do Produto" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option value="1">Periféricos</option>
                    <option value="2">Hardware</option>
                    <option value="3">Software</option>
                    <option value="4">Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-select" name="fornecedor">
                    <option value="1">Fornecedor A</option>
                    <option value="2">Fornecedor B</option>
                    <option value="3">Fornecedor C</option>
                </select>
            </div>
            <div style="text-align: right;">
                <button type="submit" id="botao" name="cadastrar" class="btn btn-sm btn-success">Cadastar</button>
            </div>
        </form>
    </div>

</body>

</html>