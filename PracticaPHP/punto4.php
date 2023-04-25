 <!DOCTYPE html>
<html>
<head>
	<title>Calcular promedio de notas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h1>Calcular promedio de notas</h1>
		<form method="post">
			<div class="form-group">
				<label for="nota1">Nota 1:</label>
				<input type="number" class="form-control" name="nota1" id="nota1" required>
			</div>

			<div class="form-group">
				<label for="nota2">Nota 2:</label>
				<input type="number" class="form-control" name="nota2" id="nota2" required>
			</div>

			<div class="form-group">
				<label for="nota3">Nota 3:</label>
				<input type="number" class="form-control" name="nota3" id="nota3" required>
			</div>

			<button type="submit" class="btn btn-primary" name="calcular">Enviar consulta</button>
		</form>

		<?php
			if(isset($_POST['calcular'])) {
				$nota1 = $_POST['nota1'];
				$nota2 = $_POST['nota2'];
				$nota3 = $_POST['nota3'];
				$promedio = ($nota1 + $nota2 + $nota3) / 3;
				echo "<h2 class='mt-3'>Resultados:</h2>";
				echo "<table class='table table-striped'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>Nota 1</th>";
				echo "<th>Nota 2</th>";
				echo "<th>Nota 3</th>";
				echo "<th>Promedio</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				echo "<tr>";
				echo "<td>" . $nota1 . "</td>";
				echo "<td>" . $nota2 . "</td>";
				echo "<td>" . $nota3 . "</td>";
				echo "<td>" . $promedio . "</td>";
				echo "</tr>";
				echo "</tbody>";
				echo "</table>";
			}
		?>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
