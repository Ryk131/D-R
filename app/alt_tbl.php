<?php

$a = NULL;

if($a == NULL) {
    echo "OIII";
}
 
session_start();

if(isset($_SESSION['tbtp'])) {
    unset($_SESSION['tbtp']);
}
require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$tb = $_GET['tb'];
echo $_GET['tb'];

if($tb == 0) {
    $_SESSION['tbtp'] = 0;
} else if($tb == 1) {
    $_SESSION['tbtp'] = 1;
} else if($tb == 2) {
    $_SESSION['tbtp'] = 2;
} else if($tb == NULL) {
    echo "AA";
} else {
    $_SESSION['tbtp'] = 3;
}

echo $tb;
exit;

header('Location: lista_convidados.php');

?>