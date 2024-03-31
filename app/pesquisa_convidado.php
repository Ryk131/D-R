<?php  

session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();
$lista_convidados = $repositorio->ListarConvidados(); 

?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="../estilos/confirm-presenc.css">
</head>
<body>
    <header>
        <h1>Danielly & Rykelmy</h1>
        <nav>
            <a href="../index.php">Início</a>
            <a href="#">Local e Hora</a>
            <a href="pesquisa_convidado.php">Confirmar Presença</a>
            <a href="#" id="bl_msg">Mensagem para os noivos</a>
        </nav>
    </header>
    <main>
        <form id="form-pesq" action="pesquisa.php" method="POST">
            <p id="form-nome">
                <label for="nome">Pesquisar Nome</label>
                <input type="text" name="nome" id="nome" 
                placeholder="Digite aqui Nome Completo do Convidado" required >
            </p>
            <p id="form-env">
                <input id="bt-pesq" type="submit" value=" ">
            </p>
        </form>
        <img id="img01" src="../imagens/img02.jpeg" alt="">
        <img id="img02" src="../imagens/img04.jpeg" alt="">
        <img id="img03" src="../imagens/img07.jpeg" alt="">
    </main>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo "<p style='color: red; margin: auto'> Convidado não encontrado! </p>";
        }
    ?>
</body>
</html>