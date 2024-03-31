<?php 

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();


session_start(); 
 
if(isset($_GET['nome'])){
    $_SESSION['nome_convidado'] = $nome_convidado = $_GET['nome'];
} else {
    $nome_convidado = $_SESSION['nome_convidado'];
}


$convidado = $repositorio->MostraConvidado($nome_convidado);

foreach ($convidado as $key) {
    $confirm = $key['confirm'];
    $nome = $key['fam_conv'];
}

$_SESSION['nomes'] = $repositorio->PuxarNomes($nome);    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Confirmação</title>
</head>
<body>
    <h3>Confirme o nome do(s) convidado(s) abaixo, após isso digite um documento e clique em confirmar presença</h3>
    <?php
        echo "<p>Nomes: </p>";
        echo "<br>";
        if(isset($_SESSION['retira'])){
            $tam = count($_SESSION['nomes_confirmados']) - 1;
            for($i = 0; $i <= $tam; $i++){
                echo "- ".$_SESSION['nomes_confirmados'][$i];
                echo "<br>";
            }
        } else {
            foreach ($_SESSION['nomes'] as $key) {
                echo "- ".$key['nome_convidado'];
                echo "<br>";
            }
        }
        if($confirm == NULL){
            echo "<form action='confirmar.php' method='POST'>";
                echo "<label> Documento </label>";
                echo "<input type='text' name='doc' required>";
                echo "<input type='submit' value='Confirmar Presença' class='confirmar'>";
            echo "</form>";
        } else {
            echo "<form action='reconfirmar.php' method='POST'>";
                echo "<label> Documento </label>";
                echo "<input type='text' name='doc' required>";
                echo "<input type='submit' value='Confirmar Presença' class='confirmar'>";
            echo "</form>";
        }
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
        }
    ?>
</body>
</html>