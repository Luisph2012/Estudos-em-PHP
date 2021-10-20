<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Do While</title>
	</head>
	<body>
		<form action="Exercicio8.php" method="GET">
			<label>Digite um numero</label>
			<input type="number" name="a"><br>
			<label>Digite um numero</label>
			<input type="number" name="b"><br>
			<button type="submit">Enviar</button>
		</form>
		
		<?php
			$numero_1 = @$_GET["a"];
			$numero_2 = @$_GET["b"];

			do{
			print $numero_1++ . " ";
			}

			while($numero_1 <= $numero_2);
		?>
	</body>
</html>