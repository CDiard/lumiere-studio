<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Lumière du studio</title>

		<link rel="stylesheet" href="assets/css/style.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
		/>
	</head>
	<body id="main">
		<nav class="nav-main">
			<h1>Studio</h1>
			<div class="nav-main__left">
				<a class="btn-add" href="#">+</a>
				<label class="toggle" for="boutonOnOff">
					<input
						type="checkbox"
						class="toggle-input"
						id="boutonOnOff"
					/>
					<span class="toggle-track">
						<span class="toggle-indicator">
							<span class="check-state">
								<span class="check-state-on">ON</span>
								<span class="check-state-off">OFF</span>
							</span>
						</span>
					</span>
				</label>
			</div>
		</nav>
		<div class="carte-wrapper">
			<div class="carte">CARTE<br />width : 100wv<br />height : 100%</div>
		</div>

		<div class="bottom-wrapper">
			<div class="slider">
				<a class="slider__element" href="detail.php?name=test">
					<img
						class="light-icon"
						src="assets/img/svg/noun-light.svg"
						alt="Projecteur"
					/>
					<p class="light-name">Nom</p>
				</a>
				<a class="slider__element" href="detail.php?name=test">
					<img
						class="light-icon"
						src="assets/img/svg/noun-light.svg"
						alt="Projecteur"
					/>
					<p class="light-name">Nom</p>
				</a>
				<a class="slider__element" href="detail.php?name=test">
					<img
						class="light-icon"
						src="assets/img/svg/noun-light.svg"
						alt="Projecteur"
					/>
					<p class="light-name">Nom</p>
				</a>
				<a class="slider__element" href="detail.php?name=test">
					<img
						class="light-icon"
						src="assets/img/svg/noun-light.svg"
						alt="Projecteur"
					/>
					<p class="light-name">Nom</p>
				</a>
			</div>
		</div>
		<script
			src="https://code.jquery.com/jquery-3.6.1.min.js"
			integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
			crossorigin="anonymous"
		></script>
		<script
			type="text/javascript"
			src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
		></script>
        <script src="assets/js/select.js"></script>
		<script src="assets/js/slider.js"></script>
	</body>
</html>
