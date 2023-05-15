<?php
require '.lib.inc.php';
$mabd = connexionBD();
$lampes = getAllLampes($mabd);
deconnexionBD($mabd);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Lumière du studio</title>

	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body id="main">
	<nav class="nav-main">
		<h1>Studio</h1>
	</nav>
	<main>
		<!-- carte -->
		<section class="carte-wrapper">
			<div class="carte">
				<svg id="Calque_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 300">
					<defs>
						<style>
							.cls-1{fill:#2c3333;}
						</style>
					</defs>
					<path class="cls-1" d="m348,4v292H4v-114.79h47.98V4h296.02m4-4H47.98v177.21H0v122.79h352V0h0Z"/>
					<?php foreach($lampes as $lampe) { ?>
						<a xlink:href="detail.php?lampe=<?= $lampe['id'] ?>">
							<image xlink:href="assets/img/svg/lampe.svg" x="<?= $lampe['posX'] ?>" y="<?= $lampe['posY'] ?>" height="40" width="40" alt="Lampe <?= $lampe['id'] ?>" />
						</a>
					<?php } ?>
				</svg>
			</div>
		</section>

		<!-- lampes -->
		<section class="bottom-wrapper">
			<div class="slider">
				<?php foreach ($lampes as $lampe) { ?>
					<a class="slider__element" href="detail.php?lampe=<?= $lampe['id'] ?>">
						<img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Lampe <?= $lampe['id'] ?>" />
						<p class="light-name"><?= $lampe['name'] ?></p>
					</a>
				<?php } ?>
			</div>
		</section>
	</main>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="assets/js/select.js"></script>
	<script src="assets/js/slider.js"></script>
</body>

</html>