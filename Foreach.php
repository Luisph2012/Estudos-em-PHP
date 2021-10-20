<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Foreach</title>
	</head>
	<body>
		<form action="Foreach.php" method="GET">
			<label>Digite um numero</label>
			<input type="number" name="a"><br>
			<label>Digite um numero</label>
			<input type="number" name="b"><br>
			<button type="submit">Enviar</button>
		</form>
		<?php
			$number1 = @$_GET["a"];
			$number2 = @$_GET["b"];

			$numeros = range("$number1","$number2");
			foreach ($numeros as $key => $lista) {
				print $lista." ";
			}
		?>
	</body>
</html>