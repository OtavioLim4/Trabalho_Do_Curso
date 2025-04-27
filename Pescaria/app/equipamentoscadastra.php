<?php
    require_once '../modelo/Banco.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $banco = new Banco();
        $banco->cadastrarEquipamento($nome, $valor);
        echo "<script>alert('Equipamento cadastrado com sucesso!')</script>";
        echo "<script>window.location = 'principal.php';</script>";
    }
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link href="../vendor/bootstrap-5.3.0-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free-6.4.2-web/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container p-3 shadow mx-auto">
      
        <?php include('barra.php')?>
        <p class="text-end mt-2">
            <a href="principal.php" class="btn btn-sm btn-outline-dark"><i class="fas fa-chevron-circle-left"></i> Voltar</a>
        </p>
        <form method="post" action="equipamentoscadastra.php">
            <label class="form-label">NOME</label>
            <input class="form-control" type="text" name="nome">
            <label class="form-label">VALOR</label>
            <input class="form-control" type="text" name="valor">
            <input class="mt-2 btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>

    <script src="../vendor/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
</body>
</html>