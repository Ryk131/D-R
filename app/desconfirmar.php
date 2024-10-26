<?php

session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$nome_convidado = $_GET['nome'];

    $confirm = 2;
    $desconfirmar = $repositorio->DesconfirmarPresenca($confirm,$nome_convidado);
   
    header('Location: pesquisa_convidado.php');


?>