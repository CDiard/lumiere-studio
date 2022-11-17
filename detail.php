<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumière du studio</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="content">
        <header>
            <a href="index.php" class="bouton-retour">
                <img src="assets/img/svg/arrow_retour.svg" alt>
            </a>
            <input type="text" name="nameLight" id="name-light" class="name-modif-light" placeholder="Nom de la lumière...">
            <label class="toggle" for="boutonOnOff">
                <input type="checkbox" class="toggle-input" id="boutonOnOff">
                <span class="toggle-track">
                    <span class="toggle-indicator">
                        <span class="check-state">
                            <span class="check-state-on">ON</span>
                            <span class="check-state-off">OFF</span>
                        </span>
                    </span>
                </span>
            </label>
        </header>
        <section class="selection-couleur">
            <div class="picker-couleur">
                <!-- Ajouter/enlever la class disable-picker pour désactiver/activer le colorpicker -->
                <div id="pickerColor" ></div><!--class="disable-picker"-->
                <div id="pickerIntensity"></div>
                <fieldset class="code-couleur"><!-- disable-picker -->
                    <legend>HEX</legend>
                    <label for="input-couleur">Votre couleur</label>
                    <input type="text" name="input_color" id="input-couleur" class="input-couleur">
                </fieldset>
            </div>
        </section>
        <section class="bottom-wrapper slider-detail">
            <div class="slider">
                <a class="slider__element" href="detail.php?name=test">
                    <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Projecteur">
                    <p class="light-name">Nom</p>
                </a>
                <a class="slider__element" href="detail.php?name=test">
                    <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Projecteur">
                    <p class="light-name">Nom</p>
                </a>
                <a class="slider__element" href="detail.php?name=test">
                    <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Projecteur">
                    <p class="light-name">Nom</p>
                </a>
                <a class="slider__element" href="detail.php?name=test">
                    <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Projecteur">
                    <p class="light-name">Nom</p>
                </a>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/select.js"></script>
    <script src="assets/js/color.js"></script>
</body>
</html>