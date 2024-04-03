<?php

    session_start();
    require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Convidado</title>
</head>
<body>
    <table>
        <?php
            echo "<table>";
            $nomes = $repositorio->MostraConvidado($_SESSION['nome_convidado']);
            foreach ($nomes as $key) {
                $nome = $key['nome_convidado'];
                echo "<tr>".$key['nome_convidado']."</tr>";
                echo "<a href='selecionar.php?nome=$nome'>Selecionar</a>";
                echo "<br>";
            }
            echo "</table>";
        ?>
    </table>
</body>
</html>