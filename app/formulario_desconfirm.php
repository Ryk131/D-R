<?php

session_start();

if(isset($_GET['nome'])){
    $_SESSION['nome_convidado'] = $nome_convidado = $_GET['nome'];
} else {
    $nome_convidado = $_SESSION['nome_convidado'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Desconfirmação</title>
</head>
<body>
    <h3>Confirme o nome do convidado abaixo, após isso digite o documento cadastrado e clique em desconfirmar presença</h3>
    <?php
        echo "<p>Nome: ".$nome_convidado."</p>";
    ?>
    <form action="desconfirmar.php" method="POST">
        <label> Documento </label>
        <input type="text" name="doc" required>
        <input type="submit" value="Desconfirmar Presença" class="desconfirmar">
    </form>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
        }
    ?>
</body>
</html>