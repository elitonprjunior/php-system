
<?php
session_start();
include_once("conectar.php");

$setor = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);
$andar = filter_input(INPUT_POST, 'andar', FILTER_SANITIZE_EMAIL);
$seriedesktop = filter_input(INPUT_POST, 'seriedesktop', FILTER_SANITIZE_STRING);
$seriemonitor = filter_input(INPUT_POST, 'seriemonitor', FILTER_SANITIZE_EMAIL);
$patrimoniomonitor = filter_input(INPUT_POST, 'patrimoniomonitor', FILTER_SANITIZE_STRING);
$patrimoniodesktop = filter_input(INPUT_POST, 'patrimoniodesktop', FILTER_SANITIZE_EMAIL);
$registro = filter_input(INPUT_POST, 'registro', FILTER_SANITIZE_STRING);
$detalhes = filter_input(INPUT_POST, 'detalhes', FILTER_SANITIZE_EMAIL);



//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO patrimonio (setor,andar,seriedesktop,seriemonitor,patrimoniomonitor,patrimoniodesktop,registro,detalhes) VALUES ($setor,$andar,$seriedesktop,$seriemonitor,$patrimoniomonitor,$patrimoniodesktop,$registro,$detalhes)";
$resultado_usuario = mysqli_query($strcon, $result_usuario);

