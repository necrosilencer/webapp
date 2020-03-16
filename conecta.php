<?php 

$servidor="localhost";
$banco="placas";
$usuario="root";
$senha="usbw";

$conecta = new mysqli($servidor,$usuario,$senha,$banco);
// sem utilizar var de memoria
//$conn= new mysqli("localhost","root","usbw","pessoa");


if ($conecta ==TRUE)

{
	
}

else 
{
	echo "<script>alert('Falha no login!Verifique as informações e tente novamente');</script>";
}

 ?>