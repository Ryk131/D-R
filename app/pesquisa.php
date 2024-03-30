<?php

session_start();
unset($_SESSION['mensagem']);

require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();
   
    $nome_convidado = $_POST['nome'];
    $nome_convidado = strtoupper($nome_convidado);
    $nome_convidado = ltrim($nome_convidado);
    $nome_convidado = rtrim($nome_convidado);
    $caracteres_sem_acento = array('Á'=>'A','Ã'=>'A','Â'=>'A','À'=>'A','É'=>'E','Ê'=>'E','È'=>'E','Í'=>'I',
                            'Î'=>'I','Ì'=>'I','Ó'=>'O','Õ'=>'O','Ô'=>'O','Ò'=>'O','Ú'=>'U','Û'=>'U','Ù'=>'U',
                            'á'=>'a','ã'=>'a','â'=>'a','à'=>'a','é'=>'e','ê'=>'e','è'=>'e','í'=>'i','î'=>'i',
                            'ì'=>'i','ó'=>'o','õ'=>'o','ô'=>'o','ò'=>'o','ú'=>'u','û'=>'u','ù'=>'u');
    $nome_convidado = strtr($nome_convidado,$caracteres_sem_acento);
    $numeroLinhas = $repositorio->PesquisaConvidado($nome_convidado);


    if($numeroLinhas == 1 && ($nome_convidado == "RYKELMY" || $nome_convidado == "DANIELLY")){
        header('Location: lista_convidados.php');
    } else if($numeroLinhas > 1) {
        $_SESSION['nome_convidado'] = $nome_convidado;
        header('Location: selec_convidado.php');
    } else if($numeroLinhas == 1) {
        $convidado = $repositorio->MostraConvidado($nome_convidado);
        foreach ($convidado as $key) {
            $nome_convidado = $key['nome_convidado'];
        }
        $_SESSION['nome_convidado'] = $nome_convidado;
        header('Location: mostra_convidado.php');
    } else {
        $_SESSION['mensagem'] = "Convidado não encontrado";
        header('Location: pesquisa_convidado.php');
    }

?>