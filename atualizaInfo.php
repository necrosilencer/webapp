<meta charset="utf8">
<?php
header ("content-type:text/html,charset=utf8");

$placa = $_POST["placa"];
$km = $_POST["kmatual"];
$kmfreio = $_POST['kmfreio'];
$kmpneu = $_POST['kmpneu'];
$kmoleo = $_POST['kmoleo'];


include ("conecta.php");

$sql = "INSERT INTO informacoes (placa,km,kmfreio,kmpneu,kmoleo) VALUES ('$placa','$km','$kmfreio','$kmpneu','$kmoleo')";

$resultado = mysqli_query($conecta,$sql);
mysqli_close();
if ($resultado == TRUE)
	{ echo "<script>alert('As informações foram atualizadas com sucesso!');
			window.location.href='atualiza.php';</script>";

		}

else {
	echo "<script>alert('As informações não foram atualizadas!');
			window.location.href='../../atualiza.php';</script>";
}		