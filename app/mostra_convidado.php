<?php
 
// resolver para aparecer opção de confirmar e desconfirmar de cada usuario

session_start();

if(isset($_SESSION['retira'])){
    unset($_SESSION['retira']);
}


require_once '../classes/repositorioConvidado.php';  
$repositorio = new RepositorioConvidadosMySQL(); 

$nome_convidado = $_SESSION['nome_convidado'];

$convidado = $repositorio->MostraConvidado($nome_convidado);
foreach ($convidado as $key) {
    $nome = $key['fam_conv'];
}

$nomes = $repositorio->PuxarNomes($nome);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Convidado</title>
</head>
<body>
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
                    echo "<tr>";
                        echo "<td>".$key['nome_convidado']."</td>";
                        echo "<td>".$key['doc_convidado']."</td>";
                    echo "</tr>";
                }
                echo "<td>".$key['nome_convidado']."</td>";
                echo "<td>".$key['doc_convidado']."</td>";
                if($key['confirm'] == NULL){
                    echo "<td>NÃO CONFIRMADO</td>";
                    echo "<td><a href='formulario_confirm.php'>Confirmar Presença</a></td>";
                } else if($key['confirm'] == 1) {
                    echo "<td>CONFIRMADO</td>";
                    echo "<td><a href='formulario_desconfirm.php'>Desconfirmar Presença</a></td>";
                } else {
                    echo "<td>DESCONFIRMADO</td>";
                    echo "<td><a href='formulario_confirm.php'>Reconfirmar Presença</a></td>";
                }
            }
            ?>
        </tr>
    </table>
    <?php
        if(isset($_SESSION['mensagem'])){
            if(isset($_SESSION['nomes_confirmados'])){
                echo $_SESSION['mensagem'];
                $tam = count($_SESSION['nomes_confirmados']) - 1;
                for($i = 0;$i <= $tam;$i++){
                    echo "<br>";
                    echo "- ".$_SESSION['nomes_confirmados'][$i];
                }
            } else {
                echo $_SESSION['mensagem'];
                foreach ($nomes as $key) {
                    echo "<br>";
                    echo "- ".$key['nome_convidado'];
                }
            }
        }
    ?>
    <p>Ao confirmar a presença do convidado acima estará confirmando a presença de todos os seguintes convidados:</p>
    <?php
        foreach ($nomes as $key) {
            echo $key['nome_convidado'];
            echo "<br>";
        }
    ?>
    <p>Retirar algum dos convidados da lista de confirmação?(Ao fazer isso todos os convidados terão sua presença confirmada menos o que você retirar da lista)</p>
    <a href='form_retira_conv.php'>Retirar</a>
</body>
</html>