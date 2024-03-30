<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Convidados</title>
</head>
<body>
    <form action="adicionar.php" method="POST">
        <label>Nome Completo do Convidado</label>
        <input type="text" name="nome" required>
        <input type="submit" value="Adicionar" class="adicionar">
    </form>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo "<p style='color:red'>".$_SESSION['mensagem']."<p>";
        }

        if(isset($_SESSION['convidados_adicionados'])){
            echo "<table>";
                echo "<tr>";
                    echo "<td>Nomes</td>";
                echo "</tr>";
                for ($x = 0; $x < count($_SESSION['convidados_adicionados']); $x++) {
                    echo "<tr> <td>".$_SESSION['convidados_adicionados'][$x]."</td> </tr>";
                }
            echo "</table>";
        }
    ?>
</body>
</html>