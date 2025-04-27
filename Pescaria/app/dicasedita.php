<?php
    require_once '../modelo/Banco.php';
    $banco = new Banco();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $descriçao = $_POST['descriçao'];
        $auto = $_POST['auto'];

        $banco->editarDicass($id, $descriçao, $auto);
        echo "<script>alert('Dica editada com sucesso!')</script>";
        echo "<script>window.location = 'principal.php';</script>";
    }else{
        $dicas = $banco->pegarDicas($_GET['id']);
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
        <form method="post" action="dicasedita.php">
            <label>ID</label>
            <input class="form-control w-25" type="text" hidden="hidden" name="id" value = "<?php echo $dicas['id'];?>">
            <label class="form-label">DESCRIÇÃO</label>
            <input class="form-control" type="text" name="descriçao" value="<?php echo $dicas['descriçao']; ?>">
            <label class="form-label">AUTOR</label>
            <input class="form-control" type="text" name="auto" value="<?php echo $dicas['auto']; ?>">
            <input class="mt-2 btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>

    <script src="../vendor/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
</body>
</html>