<?php

// Arrumar confirmação de presença pra mais de um convidado e um pra tirar os convidados que não terão a presença confirmada

session_start();
  
unset($_SESSION['mensagem']);
unset($_SESSION['retira']);

require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();


$doc_convidado = $_POST['doc'];
$confirm = 1;

if(isset($_SESSION['nomes_confirmados'])){
	$tam = count($_SESSION['nomes_confirmados']) - 1;
	for($i = 0;$i <= $tam; $i++){
		$nome = $_SESSION['nomes_confirmados'][$i];
		$confirmar = $repositorio->ConfirmarPresenca($doc_convidado,$confirm,$nome);
	}
} else {	
	$nome_convidado = $_SESSION['nome_convidado'];
	$conv = $repositorio->MostraConvidado($nome_convidado);
	foreach ($conv as $key) {
	    $nome_fam = $key['fam_conv'];
	}
	$nomes = $repositorio->PuxarNomes($nome_fam);
	foreach($nomes as $key){
		$nome = $key['nome_convidado'];
		$confirmar = $repositorio->ConfirmarPresenca($doc_convidado,$confirm,$nome);
	}
}

$_SESSION['mensagem'] = "Presença do(s) seguinte(s) convidado(s) CONFIRMADA com sucesso";
if(isset($_SESSION['admin'])){
    header('Location: lista_convidados.php');
} else {
    header('Location: mostra_convidado.php');
}

?>