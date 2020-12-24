<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<section>
		<div class="quest">
		<?php
			echo '<br>';
			echo '<h2>Tem cabelos louros ?</h2>';

		?>
		<br>
		<br>
		<br>
		<a href="erroquest5.php" class="btn btn-success" data-text="sim" data-event="click" data-toggle-form-edit="#form-que-altera" title="Habilitar Form">Sim</a>
		<a href="quest3.php" class="btn btn-danger" data-text="nao" data-event="click" data-toggle-form-edit="#form-que-altera" title="Habilitar Form">Não</a>
		</div>
	</section>
</body>
</html>

