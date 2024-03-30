<?php

session_start();

?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Pesquisa</title>
</head>
<body>
    <form action="pesquisa.php" method="POST">
        <label>Nome Completo</label>
        <input type="text" name="nome" required>
        <input type="submit" value="Pesquisar" class="pesquisar">
    </form>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo "<p style='color: red'> Convidado não encontrado! </p>";
        }
    ?>
</body>
</html>