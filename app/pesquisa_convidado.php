<?php   

session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();


if(isset($_SESSION['nome_convidado'])) {
    $nome_convidado = $_SESSION['nome_convidado'];
    $convidado = $repositorio->MostraConvidado($nome_convidado);
    foreach ($convidado as $key) {
        $nome = $key['fam_conv'];
    }
    $nomes = $repositorio->PuxarNomes($nome);
} else {
    $nome_convidado = " ";
    $nome = " ";
    ?>
    <style> 
        #tbl_nomes {
            display: none;
        }
    </style>
    <?php
}

?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="../estilos/confirm-presenc.css">
    <script>
        imgs=Array('img03.jpeg','img04.jpeg','img041.jpeg');
        imgQtde = imgs.length;
        //function preload(){
          //  imgs=Array('img03.jpeg','img04.jpeg','img01.jpeg');
            //imgQtde = imgs.length;
            //for(i=0;i<imgQtde;i++) {
            //    var preloading = new Image ();
            //    preloading.src=imgs[i];
            //}
        //}

        function iniciarSlider() {
            min=0;
            max=2;
            im=0;
            //preload();
            carregaFoto(im);
            tmr = setInterval(trocaFoto,4000);
        }

        function carregaFoto(foto) {
            img = imgs[foto];
            document.getElementById("slide").style.backgroundImage="URL(../imagens/"+img+")";
        }

        function trocaFoto() {
            if(im >= imgQtde){
                im = 0;
            }
            carregaFoto(im);
            im++;
        }
    </script>
</head> 
<body onload="iniciarSlider()">
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
        <form id="form-pesq" action="pesquisa.php" method="POST">
            <p id="form-nome">
                <label for="nome">Pesquisar Nome</label>
                <input type="text" name="nome" id="nome" 
                placeholder="Nome Completo do Convidado" required >
            </p>
            <p id="form-env">
                <input id="bt-pesq" type="submit" value=" ">
            </p>
        </form>

        <?php
        if(isset($_SESSION['mensagem'])){
            echo "<p id='msg_cvne'> Convidado não encontrado! </p>";
        }
        
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
                        foreach ($nomes as $key) {
                            $nome = $key['nome_convidado'];
                            echo "<tr>";
                                echo "<td>".$key['nome_convidado']."</td>";
                                if($key['confirm'] == 0){
                                    echo "<td>Não Confirmado</td>";
                                    echo "<td class='botao_conf'><a href='confirmar.php?nome=$nome'>Confirmar Presença</a></td>";
                                } else if($key['confirm'] == 1) {
                                    echo "<td>Confirmado</td>";
                                    echo "<td class='botao_conf'><a href='desconfirmar.php?nome=$nome'>Desconfirmar Presença</a></td>";
                                } else {
                                    echo "<td>Desconfirmado</td>";
                                    echo "<td class='botao_conf'><a href='confirmar.php?nome=$nome'>Reconfirmar Presença</a></td>";
                                }
                            echo "</tr>";
                        }
                    }
                    ?> 
                </tbody>
            </table>
        <?php
        } else if(isset($_SESSION['selec_convidado'])) {
            ?>
            <table id='tbl_select'>
                <tbody>
                    <?php
                    $nomes = $repositorio->MostraConvidado($_SESSION['nome_convidado']);
                    foreach ($nomes as $key) {
                        $nome = $key['nome_convidado'];
                        echo "<tr>";
                            echo "<td>".$key['nome_convidado']."</td>";
                            echo "<td><a href='selecionar.php?nome=$nome'>Selecionar</a></td>";
                        echo "<tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?> 
        <div id="slide">
            
        </div>
    </main>
</body>
</html>