<?php

session_start();

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$nome = $_POST['nome'];
$msg = $_POST['msg'];

$EnviarMensagem = $repositorio->GuardarMensagem($nome,$msg);

$_SESSION['mensagem'] = "Mensagem enviada com sucesso!";
header("Location: ../index.php");

?>