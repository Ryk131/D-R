<?php
 
session_start();

if(isset($_SESSION['tbtp'])){

} else {
    $_SESSION['tbtp'] = 3;
}

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();
$lista_convidados = $repositorio->ListarConvidados($_SESSION['tbtp']); 
$convidados_confirmados = $repositorio->NumConv(1);
$convidados_nconfirmados = $repositorio->NumConv(0);
$convidados_nconfirmados = $convidados_nconfirmados - 2;
$convidados_dconfirmados = $repositorio->NumConv(2);
$convidados = $repositorio->NumTot();
$convidados = $convidados - 2;

$_SESSION['admin'] = TRUE;

unset($_SESSION['nome_convidado']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
    <link rel="stylesheet" href="../estilos/tabelas.css">
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
            
            echo "<div id='tbls'>";
                if($_SESSION['tbtp'] != 1 && $_SESSION['tbtp'] != 4) {
                    echo "<p>Convidados Confirmados: ".$convidados_confirmados." <a href='alt_tbl.php?tb=1'>( Detalhes )</a></p>";
                }
                if($_SESSION['tbtp'] != 0 && $_SESSION['tbtp'] != 4) {
                    echo "<p>Convidados Não Confirmados: ".$convidados_nconfirmados." <a href='alt_tbl.php?tb=0'>( Detalhes )</a></p>";
                }
                if($_SESSION['tbtp'] != 2 && $_SESSION['tbtp'] != 4) {
                    echo "<p>Convidados Desconfirmados: ".$convidados_dconfirmados." <a href='alt_tbl.php?tb=2'>( Detalhes )</a></p>";
                }
                echo "<p>Total de Convidados: ".$convidados;
                if($_SESSION['tbtp'] != 3) {
                    echo "<a href='alt_tbl.php?tb=3'>( Detalhes )</a></p>";
                }
                if($_SESSION['tbtp'] != "FM") {
                    echo "<p><a href='alt_tbl.php?tb=F'>Lista por Famílias</a></p>";  
                }
                 
            echo "</div>";
            if($_SESSION['tbtp'] == "FM") {
                foreach ($lista_convidados as $key) {
                    if(isset($fmcv)){
                    
                    } else {
                        $fmcv = $key['fam_conv'];
                    }

                    if($fmcv == $key['fam_conv']) {
                        
                    }
                }
                $cont = 1;
                while(isset($_SESSION["familia$cont"])){
                    $x = 1;
                    echo "<div id='tb_fm'>";
                    while(isset($_SESSION["familia$cont"]["conv$x"])){
                        $nome = $_SESSION["familia$cont"]["conv$x"];
                        $convidado = $repositorio->VerificarConfirm($nome);
                        foreach ($convidado as $key) {
                            if($key['confirm'] == 1){
                                $confirm = true;
                            } else {
                                $confirm = false;
                            }
                        }
                        if($confirm == true){
                            echo "<a>".$_SESSION["familia$cont"]["conv$x"]."  </a><a style='color: green; font-weight: bold'>CONFIRMADO</a>";
                        } else {
                            echo "<a>".$_SESSION["familia$cont"]["conv$x"]."</a>";
                        }
                        
                        echo "<br>";
                        $x++;
                    }
                    echo "</div>";
                    $cont++;
                }
            } else if($_SESSION['tbtp'] != 4) {
                echo "<div id='tbl_msg'>";
                    echo "<a href='alt_tbl.php?tb='''>Ver mensagens dos Convidados</a>";
                echo "</div>";
            
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
                                if($key['confirm'] == 0){
                                    echo "<td id='inf01'>NÃO CONFIRMADO</td>";
                                    echo "<td><a href='confirmar.php?nome=$nome'>Confirmar Presença</a></td>";
                                } else if($key['confirm'] == 1) {
                                    echo "<td id='inf01' style='color: rgb(28, 206, 28)'>CONFIRMADO</td>";
                                    echo "<td><a href='desconfirmar.php?nome=$nome'>Desconfirmar Presença</a></td>";
                                } else {
                                    echo "<td id='inf01'>DESCONFIRMADO</td>";
                                    echo "<td><a href='confirmar.php?nome=$nome'>Reconfirmar Presença</a></td>";
                                }
                                echo "<td><a href='confirm_excl.php?nome=$nome'>Excluir Convidado</a></td>";
                            echo "</tr>";
                        }
                    echo "</tbody>";
                echo "</table>";
            } else {
                $mensagens = $repositorio->PuxarMensagens();
                foreach ($mensagens as $key) {
                    $nome = $key['nome_convidado'];
                    $mensagem = $key['msg_convidado'];
                    echo "<div id='cx_msg'>";
                        echo "<p id='cp_nome'>".$nome."</p>";
                        echo "<p id='cp_msg'>".$mensagem."</p>";
                    echo "</div>";
                }
            }
        ?>
        <?php

            if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
            }

            ?>
    </main>
</body>
</html>