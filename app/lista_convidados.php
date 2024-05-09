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
    <link rel="stylesheet" href="../estilos/confirm-presenc.css">
</head>
<body>
    <header>
        <h1>Danielly & Rykelmy</h1>
        <nav>
            <a href="../index.php">Início</a>
            <a href="../index.php?#local">Local e Hora</a>
            <a href="pesquisa_convidado.php">Confirmar Presença</a>
            <a href="../index.php?#msg" id="bl_msg">Mensagem para os noivos</a>
        </nav>
    </header>
    <main>
        <?php
            echo "<table id='lista_convidados'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Nome Completo</th>";
                        echo "<th colspan='3'>Confirmação</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    foreach ($lista_convidados as $key) {
                        $nome = $key['nome_convidado'];
                        echo "<tr>";
                            echo "<td>".$key['nome_convidado']."</td>";
                            if($key['confirm'] == NULL){
                                echo "<td>NÃO CONFIRMADO</td>";
                                echo "<td><a href='confirmar.php?nome=$nome'>Confirmar Presença</a></td>";
                            } else if($key['confirm'] == 1) {
                                echo "<td>CONFIRMADO</td>";
                                echo "<td><a href='desconfirmar.php?nome=$nome'>Desconfirmar Presença</a></td>";
                            } else {
                                echo "<td>DESCONFIRMADO</td>";
                                echo "<td><a href='confirmar.php?nome=$nome'>Reconfirmar Presença</a></td>";
                            }
                            echo "<td><a href='confirm_excl.php?nome=$nome'>Excluir Convidado</a></td>";
                        echo "</tr>";
                    }
                echo "</tbody>";
            echo "</table>";

        ?>
        <?php
            if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
            }
        ?>
    </main>
</body>
</html>