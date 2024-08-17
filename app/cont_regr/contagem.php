<?php
date_default_timezone_set('America/Sao_Paulo');

$data_atual = strtotime(date("Y-m-d h:i"));
$dia_evento = strtotime(date("2024-12-22 17:30"));

$diferenca_total = $dia_evento - $data_atual;
$diferenca_dias = $diferenca_total % 86400;
$diferenca_horas = $diferenca_dias % 3600;
$diferenca_minutos = $diferenca_horas % 60;

$dias = ($diferenca_total - $diferenca_dias) / 86400;
$horas = ($diferenca_dias - $diferenca_horas) / 3600;
$minutos = ($diferenca_horas - $diferenca_minutos) / 60;

echo "<div id='cont'>";
    echo "<p>".$dias." : ".$horas." : ".$minutos."</p>";
    echo "<a>Dias</a><a>Horas</a><a>Minutos</a>";
echo "</div>";
?>