<?php

require_once '../modelo/Banco.php';

$banco = new Banco();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b = $_POST['pega'];
    $users = $banco->listarUsuarios($b);
}else {
    $users = $banco->listarUsuarios("");
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

        <p class="text-end"><a href="cadastrausuarios.php" class="btn btn-sm btn-outline-success m-2"><i class="fa-solid fa-user-plus"></i> Cadastrar</a></p>
       

        <div class="my-2 col-md-6">
            <form method="post" action="usuarios.php">
                <input class="form-control" type="text" name="pega" placeholder="Digite para buscar">
            </form>
        </div>

        <table class="table table-striped">
            <tr>
                <th>NOME</th>
                <th>SENHA</th>
                <th></th>
            </tr>
            <?php foreach ($users as $user):?>
            <tr>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['password'];?></td>
                <td class="d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="contatos.php?id=<?php echo $user['id'];?>">Contatos</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="usuariosedita.php?id=<?php echo $user['id']; ?>">Editar</a></li>
                            <li><button class="dropdown-item" onclick="usuariosexcluir(<?php echo $user['id']; ?>)">Excluir</button></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </table>

    </div>

    <script src="../vendor/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script>
        function usuariosexcluir(id){
            var resposta = confirm("Tem certeza que deseja excluir?");
            if(resposta){
                window.location = 'usuariosexcluir.php?id='+id;
            }
        }
    </script>
</body>
</html>