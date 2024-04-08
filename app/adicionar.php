<?php

session_start();

if(isset($_SESSION['mensagem'])){
    unset($_SESSION['mensagem']);
}

require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();
   
    $nome_convidado = $_POST['nome'];
    $caracteres_sem_acento = array('Á'=>'A','Ã'=>'A','Â'=>'A','À'=>'A','É'=>'E','Ê'=>'E','È'=>'E','Í'=>'I',
                            'Î'=>'I','Ì'=>'I','Ó'=>'O','Õ'=>'O','Ô'=>'O','Ò'=>'O','Ú'=>'U','Û'=>'U','Ù'=>'U',
                            'á'=>'a','ã'=>'a','â'=>'a','à'=>'a','é'=>'e','ê'=>'e','è'=>'e','í'=>'i','î'=>'i',
                            'ì'=>'i','ó'=>'o','õ'=>'o','ô'=>'o','ò'=>'o','ú'=>'u','û'=>'u','ù'=>'u');

    $nome_convidado = strtr($nome_convidado,$caracteres_sem_acento);

    $nome_convidado = strtoupper($nome_convidado);

    $numeroLinhas = $repositorio->PesquisaConvidado($nome_convidado);

    if($numeroLinhas == 1){
        $_SESSION['mensagem'] = "Nome já cadastrado";
        header('Location: adicionar_convidados.php');
    } else {
        $Convidado = new Convidado($nome_convidado,NULL,NULL);
        $adiciona_convidado = $repositorio->CadastraConvidado($Convidado);
        if(isset($_SESSION['convidados_adicionados'])){
            array_push($_SESSION['convidados_adicionados'],$nome_convidado);
        } else {
            $_SESSION['convidados_adicionados'] = [$nome_convidado];
        }
        header('Location: adicionar_convidados.php');
    }

?>