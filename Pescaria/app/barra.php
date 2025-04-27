<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        session_destroy();
        header('Location: login.php');
    }
?>
<nav class="navbar bg-primary rounded rounded-2">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/">Loja de Pesca</a>

        <div class="dropdown">
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-tie"></i> <?php echo $_SESSION['usuario'];?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="usuarios.php">Usuarios</a></li>
               
                <li><a class="dropdown-item" href="dicas.php">Dicas</a></li>
              
                <li><a class="dropdown-item" href="equipamentos.php">Equipamentos</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="sair.php">Sair</a></li>
            </ul>
        </div>
    </div>
</nav>