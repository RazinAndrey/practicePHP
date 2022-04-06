<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<title>PHP</title>
</head>
<body>
	<?php
		require_once "db/connect.php";
	?>
	<div class="container">
		<p>Практика по PHP</p>
		<?php
			require_once "db/requests.php";
		?>
	</div>
	<h5>класс Layout согласно паттерну Singleton:</h5>
	<?php
		require_once "classes/layout.php";
	?>
</body>
</html>