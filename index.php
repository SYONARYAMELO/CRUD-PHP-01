<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <h3 class="navbar-brand">Crud PHP Estrutural</h3>
        </div>        
    </nav>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Opção para adicionar podutos em nosso estoque.</p>
                        <a href="adicionar.php" class="btn btn-primary">Cadastrar Produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar,Editar e excluir os produtos.</p>
                        <a href="listar.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>