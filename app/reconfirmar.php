<?php

session_start();

unset($_SESSION['mensagem']);

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$nome_convidado = $_SESSION['nome_convidado'];

$doc_convidado = $_POST['doc'];

$numeroLinhas = $repositorio->VerificarDoc($doc_convidado,$nome_convidado);


if($numeroLinhas == 1){
    $confirm = 1;
    $desconfirmar = $repositorio->ReconfirmarPresenca($confirm,$nome_convidado,$doc_convidado);
    $_SESSION['mensagem'] = "Presença do convidado $nome_convidado CONFIRMADA com sucesso";
    if(isset($_SESSION['admin'])){
        header('Location: lista_convidados.php');
    } else {
        header('Location: mostra_convidado.php');
    }
} else {
    $_SESSION['mensagem'] = "Documento Inválido";
    header('Location: formulario_confirm.php');
}

?>