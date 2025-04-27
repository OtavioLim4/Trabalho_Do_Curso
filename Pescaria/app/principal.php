<?php

require_once '../modelo/Banco.php';

$banco = new Banco();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b = $_POST['busca'];
    $pessoas = $banco->listarPessoas($b);
}else {
    $pessoas = $banco->listarPessoas("");
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link href="../vendor/bootstrap-5.3.0-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free-6.4.2-web/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
   
    <div class="container p-3 shadow mx-auto">

        
        <?php include('barra.php')?>

        <p class="text-end"><a href="cadastrar.php" class="btn btn-sm btn-outline-success m-2"><i class="fa-solid fa-user-plus"></i> Cadastrar</a></p>
       

        <div class="my-2 col-md-6">
            <form method="post" action="principal.php">
                <input class="form-control" type="text" name="busca" placeholder="Digite para buscar">
            </form>
        </div>
        


        <table class="table table-striped">
            <tr>
                <th>NOME</th>
                <th>E-MAIl</th>
                <th></th>
            </tr>
            <?php foreach ($pessoas as $pessoa):?>
            <tr>
                <td><?php echo $pessoa['nome'];?></td>
                <td><?php echo $pessoa['email'];?></td>
                <td class="d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                           
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="editar.php?id=<?php echo $pessoa['id']; ?>">Editar</a></li>
                            <li><button class="dropdown-item" onclick="excluir(<?php echo $pessoa['id']; ?>)">Excluir</button></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </table>

    </div>

    <script src="../vendor/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script>
        function excluir(id){
            var resposta = confirm("Tem certeza que deseja excluir?");
            if(resposta){
                window.location = 'excluir.php?id='+id;
            }
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pescaria com estilo</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha2-dist/bootstrap-5.3.0-alpha2-dist/css/bootstrap.css">
</head>
<body class="bg-light">

<!-- Banner principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Seja Bem-vindo!!!</h1>
            <p> A pesca é uma atividade popular em todo o mundo, praticada por lazer, esporte e como meio de subsistência. Aqui estão algumas informações e tópicos relacionados à pesca:</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="loja.jpg" alt="Imagem Principal" class="img-fluid w-50" style="border-radius: 40px;">
        </div>
    </div>
</div>

<!-- Produtos em destaque -->
<div class="container mt-5">
    <h2>Assuntos em Destaque:</h2>
    
        <div class="col-md-4">
            <div class="card">
                <img src="produtogeral.jpg" alt="Produto 2" class="card-img-top w-50">
                <div class="card-body">
                    <h5 class="card-title">Equipamentos de pesca:</h5>
                    <p class="card-text">Clique abaixo e veja as especificações.</p>
                    <a href="equipamentos.php" class="btn btn-primary">Clique Aqui</a>
                </div>
            </div>
        </div>

</div>

<!-- Rodapé -->
<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p>&copy; 2023 Pescaria com estilo.</p>
    </div>
</footer>

<!-- Adicione os links para os arquivos JavaScript do Bootstrap -->
<script src="bootstrap-5.3.0-alpha2-dist/bootstrap-5.3.0-alpha2-dist/js/bootstrap.js"></script>
</body>
</html>
