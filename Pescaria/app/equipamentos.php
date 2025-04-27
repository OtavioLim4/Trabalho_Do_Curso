<?php

require_once '../modelo/Banco.php';

$banco = new Banco();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b = $_POST['busca'];
    $nome = $banco->listarEquipamentos($b);
}else {
    $nome = $banco->listarEquipamentos("");
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

        <p class="text-end"><a href="equipamentoscadastra.php" class="btn btn-sm btn-outline-success m-2"><i class="fa-solid fa-user-plus"></i> Cadastrar</a></p>
       

        <div class="my-2 col-md-6">
            <form method="post" action="equipamentos.php">
                <input class="form-control" type="text" name="busca" placeholder="Digite para buscar">
            </form>
        </div>

        <table class="table table-striped">
            <tr>
                <th>NOME</th>
                <th>VALOR</th>
                <th></th>
            </tr>
            <?php foreach ($nome as $nome):?>
            <tr>
                <td><?php echo $nome['nome'];?></td>
                <td><?php echo $nome['valor'];?></td>
                <td class="d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                           
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="equipamentosedita.php?id=<?php echo $nome['id']; ?>">Editar</a></li>
                            <li><a class="dropdown-item" href="equipamentosexcluir.php?id=<?php echo $nome['id']; ?>">Excluir</a></li>
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
                window.location = 'equipamentosexcluir.php?id='+id;
            }
        }
    </script>
</body>
</html>

</html><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnicas de Pesca - Loja de Pesca</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <!-- Link to your custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<h2 class="text-center text-light">Equipamentos de Pesca</h2>
           
<!-- Conteúdo sobre Técnicas de Pesca -->
<div class="container mt-5">
   
    <div>
        <!-- Creative styling for each technique -->
        <div class="fishing-technique">
            <h3 class="green-text">Varas de Pesca:</h3>
            <p><p>As varas de pesca vêm em várias formas e tamanhos, cada uma adequada para um tipo específico de pesca.</p>
<p>Varas de pesca para carretilhas: São ideais para pesca de água doce e água salgada. Permitem maior controle sobre a linha e o anzol.<br>
Varas de pesca para molinetes: São versáteis e adequadas para iniciantes. São usadas em uma variedade de tipos de pesca.<br>
Varas de pesca de mosca: Projetadas para pesca com mosca, são longas e leves para lançar a isca com precisão.<br>
Varas de pesca no gelo: São curtas e resistentes, projetadas para serem usadas em buracos de gelo.</p></p>
        </div>
       
        <!-- Repeat the same structure for other techniques -->

        <div class="fishing-technique">
            <h3 class="green-text">Carretilhas e Molinetes:</h3>
            <p>As carretilhas e os molinetes são usados para enrolar e armazenar a linha de pesca.
Carretilhas são ideais para pescadores experientes que desejam controle preciso da linha.
Molinetes são mais fáceis de usar e são ótimos para iniciantes.</p>
        </div>
 

<div class="fishing-technique">
    <h3 class="green-text">Iscas e Anzóis:</h3>
    <p>As iscas podem ser naturais (como minhocas e camarões) ou artificiais (como plugs e jigs).</p>
<p>Os anzóis variam em tamanho e forma, dependendo do tipo de peixe que se pretende capturar.</p>

</div>


<div class="fishing-technique">
    <h3 class="green-text">Linhas e Leader:</h3>
    <p>As linhas de pesca também variam em material e espessura. As linhas de monofilamento são populares devido à sua versatilidade.</p>
<p>Os leaders são segmentos de linha mais resistentes usados para evitar que o peixe quebre a linha.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Redes de Pesca:</h3>
    <p>As redes de pesca são usadas principalmente na pesca comercial para capturar grandes quantidades de peixes.
Também são usadas por pescadores recreativos para ajudar a retirar o peixe da água com cuidado.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Caixas de Pesca:</h3>
     Caixas de pesca são usadas para armazenar e organizar equipamentos de pesca, iscas, anzóis, chumbadas e outros acessórios.
Elas vêm em vários tamanhos e estilos, incluindo caixas de plástico, bolsas e mochilas.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Chumbadas e Boias:</h3>
    <p>Chumbadas são usadas para afundar a isca na profundidade desejada.</p>
<p>Boias são usadas para manter a isca suspensa a uma profundidade específica.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Sacos de Pesca:</h3>
    <p>Os sacos de pesca são usados para transportar equipamentos de pesca, como varas e molinetes.
Eles geralmente têm compartimentos e bolsos para organizar os itens.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Roupas e Acessórios de Pesca:</h3>
    <p>Roupas de pesca, como chapéus, camisas de manga longa e óculos de sol polarizados, protegem os pescadores dos elementos.</p>
<p>Botas de pesca, luvas e coletes salva-vidas também são importantes, dependendo do ambiente de pesca.</p>
</div>




<div class="fishing-technique">
    <h3 class="green-text">Eletrônicos de Pesca:</h3>
    <p>Sonares e localizadores de peixes ajudam os pescadores a encontrar cardumes e estruturas subaquáticas.
GPS pode ser usado para marcar locais de pesca favoritos.</p>
<p>A escolha do equipamento de pesca depende do tipo de pesca que você planeja praticar e das espécies de peixes que deseja capturar. Cada tipo de pesca tem seus próprios requisitos específicos de equipamento, e os pescadores geralmente adaptam seus equipamentos de acordo com suas preferências pessoais e experiência.</p>
</div>
</div>
</div>







<!-- Rodapé -->
<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p>&copy; 2023 Pescaria com estilo.</p>
    </div>
</footer>


<!-- Link to Bootstrap JS and your custom JS -->
<script src="bootstrap-5.3.0-alpha2-dist/bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>

<style>

body{
        background: linear-gradient(72deg, #797979 1%, #white 99%)
    }

    /* Header and Technique Titles */
.green-text {
    color: #228B22; /* Dark Green */
}

/* Background color for the techniques */
.fishing-technique {
    background-color: #E0F2E9; /* Light Green */
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Footer Styling */
footer {
    background-color: #333; /* Dark Gray */
    color: #6B8E23; /* Olive Drab */
}

/* Additional custom styles can be added here */

</style>
