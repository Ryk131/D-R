<?php

    require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();

    session_start();

    $nome_convidado = $_SESSION['nome_convidado_exclu'];

    $exclui_convidado = $repositorio->DeletarConvidado($nome_convidado);

    unset($_SESSION['nome_convidado_exclu']);

    header('Location: lista_convidados.php');


?>