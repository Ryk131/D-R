<?php
 
session_start();

if(isset($_SESSION['tbtp'])) {
    unset($_SESSION['tbtp']);
}
if(isset($_SESSION["familias"])){
    unset($_SESSION["familias"]);
}
require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();

$tb = $_GET['tb'];

if($tb == "F") {
    $_SESSION['tbtp'] = "FM";
    $lista_convidados = $repositorio->ListarConvidados($_SESSION['tbtp']);
    foreach ($lista_convidados as $key) {
        $cont = 1;
        if(isset($_SESSION["familias"])){
            
        } else {
            echo $_SESSION["familias"]["familia $cont"] = $key['fam_conv'];
            echo $_SESSION["familias"]["familia $cont"]["conv $cont"] = $key['nome_convidado'];
            exit;
        }
    }
} else if($tb == 0) {
    $_SESSION['tbtp'] = 0;
} else if($tb == 1) {
    $_SESSION['tbtp'] = 1;
} else if($tb == 2) {
    $_SESSION['tbtp'] = 2;
} else if($tb == NULL) {
    $_SESSION['tbtp'] = 4;
} else {
    $_SESSION['tbtp'] = 3;
}

header('Location: lista_convidados.php');

?>