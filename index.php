<?php
require '.lib.inc.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Lumière du studio</title>

	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body id="main">
	<nav class="nav-main">
		<h1>Studio</h1>
		<div class="nav-main__left">
			<a class="btn-add" href="#">+</a>
			<label class="toggle" for="boutonOnOff">
				<input type="checkbox" class="toggle-input" id="boutonOnOff" />
				<span class="toggle-track">
					<span class="toggle-indicator">
						<span class="check-state"> ON </span>
					</span>
				</span>
			</label>
		</div>
	</nav>
	<script src="assets/js/app.js"></script>
</body>

</html>