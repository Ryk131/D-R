<?php

// Arrumar confirmação de presença pra mais de um convidado e um pra tirar os convidados que não terão a presença confirmada

session_start();
 
unset($_SESSION['mensagem']); 
 
require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$nome_convidado = $_SESSION['nome_convidado'];


$conv = $repositorio->MostraConvidado($nome_convidado);
foreach ($conv as $key) {
    $nome_fam = $key['fam_conv'];
}

// Em caso de retira um dos convidados
$nomes_confirmados = array();
$nomes = $repositorio->PuxarNomes($nome_fam);
foreach($nomes as $key) {
	$nome = $key['nome_convidado'];
	$nome = str_replace(" ","_",$nome);
	if(isset($_POST["$nome"])){
		$novo_nome = $_POST["$nome"];
		array_push($nomes_confirmados, $novo_nome);
	}
}

$_SESSION['nomes_confirmados'] = $nomes_confirmados;
header('Location: formulario_confirm.php');

?>