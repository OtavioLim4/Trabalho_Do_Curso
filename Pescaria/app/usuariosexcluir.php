<?php

    require_once 'barra.php';


    if(isset($_GET['id'])){
        require_once '../modelo/Banco.php';
        $banco = new Banco();
        $banco->excluirUsuarios($_GET['id']);
        header('Location: usuarios.php');
    }else{
        echo "<script>alert('Erro ao tentar excluir!')</script>";
        echo "<script>window.location = 'usuarios.php'</script>";
    }