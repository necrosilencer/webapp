<meta charset='utf8'>

<?php 	
header('content-type: text/html;charset=utf8');
date_default_timezone_set('America/Sao_Paulo');
session_start();

$placa =$_SESSION['placa'];
$km = $_POST["kmatual"];
$kmfreio = $_POST['kmfreio'];
$kmpneu = $_POST['kmpneu'];
$kmoleo = $_POST['kmoleo'];

$comando = "UPDATE dados_profissionais SET km='$km',kmfreio='$kmfreio',kmpneu='$kmpneu',kmoleo='$kmoleo', WHERE placa=$placa";


include "conecta.php";

mysqli_query($conecta,$comando);
mysqli_close($conecta);


echo "<script>alert('Registro atualizado com sucesso!!!');
window.location.href='atualiza.html';</script>";

