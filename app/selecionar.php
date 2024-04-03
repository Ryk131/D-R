<?php
    session_start();
    require_once '../classes/repositorioConvidado.php'; 
    $repositorio = new RepositorioConvidadosMySQL();

    $_SESSION['nome_convidado'] = $_GET['nome'];
    unset($_SESSION['selec_convidado']);
    $_SESSION['mostrar_convidado'] = true;
    header('Location: pesquisa_convidado.php');

?>