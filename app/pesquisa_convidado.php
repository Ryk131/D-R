<?php   

session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

if(isset($_SESSION['retira'])){ 
    unset($_SESSION['retira']);
}

if(isset($_SESSION['nome_convidado'])) {
    $nome_convidado = $_SESSION['nome_convidado'];
    $convidado = $repositorio->MostraConvidado($nome_convidado);
    foreach ($convidado as $key) {
        $nome = $key['fam_conv'];
    }
    $nomes = $repositorio->PuxarNomes($nome);
}

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

        <?php
        if(isset($_SESSION['mostrar_convidado'])) {
            ?>
            <table id="tbl_nomes">
                <tbody>
                    <?php
                    $convidado = $repositorio->MostraConvidado($nome_convidado);

                    foreach ($convidado as $key) {
                        $nomes_desc = array();
                        $nomes_conf = array();
                        $nomes = $repositorio->PuxarNomes($nome);
                        foreach ($nomes as $key) {
                            if($key['confirm'] == NULL || $key['confirm'] == 0){
                                array_push($nomes_desc,$key['nome_convidado']);
                            } else {
                                array_push($nomes_conf,$key['nome_convidado']);
                            }
                        }
                        $tam_c = count($nomes_conf) - 1;
                        $tam_d = count($nomes_desc) - 1;
                        if($nomes_conf != NULL){
                            
                        } else {
                            
                        }
                        foreach ($nomes as $key) {
                            $nome = $key['nome_convidado'];
                            echo "<tr>";
                                echo "<td>".$key['nome_convidado']."</td>";
                                if($key['confirm'] == NULL){
                                    echo "<td>Não Confirmado</td>";
                                    echo "<td class='botao_conf'><a href='formulario_confirm.php?nome=$nome'>Confirmar Presença</a></td>";
                                } else if($key['confirm'] == 1) {
                                    echo "<td>Confirmado</td>";
                                    echo "<td class='botao_conf'><a href='formulario_desconfirm.php'>Desconfirmar Presença</a></td>";
                                } else {
                                    echo "<td>Desconfirmado</td>";
                                    echo "<td class='botao_conf'><a href='formulario_confirm.php'>Reconfirmar Presença</a></td>";
                                }
                            echo "</tr>";
                        }
                    }
                    ?> 
                </tbody>
            </table>
        <?php
        }
        ?> 
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