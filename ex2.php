<?php 
header("content-type: text/html, charset=utf8");

//vamos utilizar a conexão que está na aula 9 
include ("assets/php/conecta.php");

$placa= $_POST['placa'];

$sql="SELECT * FROM informacoes WHERE placa= '$placa'"; 

//ASC = ASCENDENTE = CRESCENTE
//DESC = DECRESCENTE

//executando o comando que está no $sql
$registro = mysqli_query($conecta,$sql);

while ($campo=mysqli_fetch_array($registro))
	{
		?>
		<input type="text" class="form-control" placeholder="Placa do veiculo" class ="inpute" name="placa" value="<?php echo $placa; ?>">
		<br>
		<p type="text" class="form-control" placeholder="Quilometragens ##" class="inpute" disabled  name="km"><?php echo $campo['km']; ?></p>
		<br><hr>
		<p type="text" class="form-control" placeholder="Ultima troca de frio ##" class="inpute" disabled  name="kmfreio"><?php echo $campo['kmfreio']; ?></p>
		<br>
		<p type="text" class="form-control" placeholder="Ultima troca de atual ##" class="inpute" disabled  name="kmpneu"><?php echo $campo['kmpneu']; ?></p>
		<br>
		<p type="text" class="form-control" placeholder="Ultima troca de oleo ##" class="inpute" disabled  name="kmoleo"><?php echo $campo['kmoleo']; ?></p>

		<?php 
			}   //fechamento do while
			mysqli_close($conecta);

		 ?>



