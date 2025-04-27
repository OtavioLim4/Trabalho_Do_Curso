<?php

require_once '../modelo/Banco.php';

$banco = new Banco();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $b = $_POST['busca'];
    $dicas = $banco->listarDicas($b);
}else {
    $dicas = $banco->listarDicas("");
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

        <p class="text-end"><a href="dicascadastrar.php" class="btn btn-sm btn-outline-success m-2"><i class="fa-solid fa-user-plus"></i> Cadastrar</a></p>
       

        <div class="my-2 col-md-6">
            <form method="post" action="dicas.php">
                <input class="form-control" type="text" name="busca" placeholder="Digite para buscar">
            </form>
        </div>

        <table class="table table-striped">
            <tr>
                <th>DESCRIÇÃO</th>
                <th>AUTOR</th>
                <th></th>
            </tr>
            <?php foreach ($dicas as $dica):?>
            <tr>
                <td><?php echo $dica['descriçao'];?></td>
                <td><?php echo $dica['auto'];?></td>
                <td class="d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                         
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="dicasedita.php?id=<?php echo $dica['id']; ?>">Editar</a></li>
                            <li><a class="dropdown-item" href="dicasexcluir.php?id=<?php echo $dica['id']; ?>">Excluir</a></li>
                            
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
                window.location = 'dicasexcluir.php?id='+id;
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
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<h2 class="text-center text-light">Técnicas de Pesca</h2>
           
<div class="container mt-5">
   
    <div>
        <!-- Creative styling for each technique -->
        <div class="fishing-technique">
            <h3 class="green-text">Pesca com Mosca:</h3>
            <p>Os pescadores usam uma vara de pesca especializada e uma isca leve (a mosca) para atrair peixes, como trutas e salmões.</p>
        </div>
       
        <!-- Repeat the same structure for other techniques -->

        <div class="fishing-technique">
            <h3 class="green-text">Pesca de Arremesso:</h3>
            <p>Usando uma vara de pesca de arremesso, os pescadores lançam iscas, como colheres ou iscas artificiais, na água para atrair peixes.</p>
        </div>
 

<div class="fishing-technique">
    <h3 class="green-text">Pesca de Fiação:</h3>
    <p>Semelhante à pesca de arremesso, mas com o uso de um molinete ou carretilha para lançar e recuperar a linha.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Pesca de Fundo:</h3>
    <p>A isca é colocada no fundo do corpo d'água para atrair peixes que se alimentam no fundo, como bagres e linguados.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Pesca de Superfície:</h3>
    <p>Iscas flutuantes são usadas para atrair peixes que se alimentam perto da superfície da água, como peixes predadores.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca no Gelo:</h3>
    <p>Praticada em lagos congelados, os pescadores fazem buracos no gelo e usam iscas para atrair peixes.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca à Deriva:</h3>
    <p>A linha é lançada na água e permitida para derivar com a corrente ou vento para atrair peixes.</p>
</div>

<div class="fishing-technique">
    <h3 class="green-text">Pesca de Corrico:</h3>
    <p>Iscas são arrastadas atrás de uma embarcação em movimento para atrair peixes predadores, como atuns e marlins.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca Submarina:</h3>
    <p>Mergulhadores usam lanças ou arco e flecha para capturar peixes debaixo d'água.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca de Caiaque:</h3>
    <p>Pescadores lançam iscas de corrico na costa ou da praia para atrair peixes costeiros.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca Noturna:</h3>
    <p>Realizada durante a noite com o uso de lanternas e iscas luminosas para atrair peixes.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca com Redes:</h3>
    <p>Usando redes para capturar peixes, comumente usada na pesca comercial.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca de Barranco:</h3>
    <p>Pescadores se posicionam em margens ou barrancos para pescar em águas mais rasas.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca com Tralha:</h3>
    <p>Usando uma variedade de iscas e anzóis para atrair uma variedade de peixes.</p>
</div>



<div class="fishing-technique">
    <h3 class="green-text">Pesca de Praia:</h3>
    <p>Realizada da costa da praia, geralmente usando varas longas para alcançar áreas mais profundas.</p>
</div>


<div class="fishing-technique">
    <h3 class="green-text">Pesca com Caniço:</h3>
    <p>Envolve o uso de caniços de pesca longos e flexíveis para lançar iscas à distância.</p>
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
}''

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