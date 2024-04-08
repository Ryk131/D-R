<?php
 
session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();
$lista_convidados = $repositorio->ListarConvidados(); 

$_SESSION['admin'] = TRUE;

unset($_SESSION['nome_convidado']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
</head>
<body>
    <?php
        echo "<table>";
            echo "<tr>";
                echo "<td>Nome Completo</td>";
                echo "<td>Documento</td>";
                echo "<td>Confirmação</td>";
            echo "</tr>";
        foreach ($lista_convidados as $key) {
            $nome = $key['nome_convidado'];
            echo "<tr>";
                echo "<td>".$key['nome_convidado']."</td>";
                echo "<td>".$key['doc_convidado']."</td>";
                if($key['confirm'] == NULL){
                    echo "<td>NÃO CONFIRMADO</td>";
                    echo "<td><a href='formulario_confirm.php?nome=$nome'>Confirmar Presença</a></td>";
                } else if($key['confirm'] == 1) {
                    echo "<td>CONFIRMADO</td>";
                    echo "<td><a href='formulario_desconfirm.php?nome=$nome'>Desconfirmar Presença</a></td>";
                } else {
                    echo "<td>DESCONFIRMADO</td>";
                    echo "<td><a href='formulario_confirm.php?nome=$nome'>Reconfirmar Presença</a></td>";
                }
                echo "<td><a href='confirm_excl.php?nome=$nome'>Excluir Convidado</a></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
    <a href='adicionar_convidados.php'>Adicionar Convidados</a>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
        }
    ?>
</body>
</html>