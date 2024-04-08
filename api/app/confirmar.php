<?php

session_start();
  
unset($_SESSION['mensagem']);
unset($_SESSION['retira']);

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$confirm = 1;

$nome_convidado = $_GET['nome'];

$ConfirmarPresenca = $repositorio->ConfirmarPresenca($confirm,$nome_convidado);

if(isset($_SESSION['admin'])){
    header('Location: lista_convidados.php');
} else {
    header('Location: pesquisa_convidado.php');
}

?>