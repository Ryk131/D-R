<?php

    session_start();
    require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();

    $_SESSION['nome_convidado'] = $_GET['nome'];
    header('Location: mostra_convidado.php');

?>