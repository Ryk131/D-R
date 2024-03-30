<?php

session_start();
require_once '../classes/repositorioConvidado.php';
$repositorio = new RepositorioConvidadosMySQL();
 
$_SESSION['retira'] = true; 

$nome_convidado = $_SESSION['nome_convidado'];
$convidado = $repositorio->MostraConvidado($nome_convidado);
foreach ($convidado as $key) {
    $nome = $key['fam_conv'];
}

$nomes = $repositorio->PuxarNomes($nome);
$x = 0;
foreach ($nomes as $key) { 
    $x++;
    $_SESSION["nome$x"] = $key['nome_convidado'];
}

echo "<h1>Escolha quais convidados terão a presença confirmada: </h1>";

echo "<form action='retira.php' method='POST'>";
    while($x > 0){
        ?>
            <input type='checkbox' name='<?php echo $_SESSION["nome$x"] ?>' value='<?php echo $_SESSION["nome$x"] ?>'><?php echo $_SESSION["nome$x"] ?>            
	    <br>
        <?php
        $x = $x - 1;
    }
    echo "<input type='submit' name='Tirar' value='Enviar'>";
echo "</form>";

?>