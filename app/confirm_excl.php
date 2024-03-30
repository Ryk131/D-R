<?php
    require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();

    session_start();

    $_SESSION['nome_convidado_exclu'] = $nome_convidado = $_GET['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Excluir Convidado</title>
</head>
<body>
    <p>Tem certeza que deseja excluir o seguinte convidado da lista?</p>
    <table>
        <tr>
            <td> Nome </td>
            <td> Documento </td>
            <td> Confirmação </td>
        </tr>
        <tr>
        <?php
            $convidado = $repositorio->MostraConvidado($nome_convidado);
            foreach ($convidado as $key) {
                echo "<td>".$key['nome_convidado']."</td>";
                echo "<td>".$key['doc_convidado']."</td>";
                echo "<td>".$key['confirm']."</td>";
            }
        ?>
        </tr>
    </table>
    <form action="exclui_convidado.php" method="POST">
        <input type='submit' value='Excluir' class='excluir'>
    </form>
</body>
</html>