<?php
require '.lib.inc.php';
$lampeId = $_GET['lampe'];
if ($lampeId === null) {
    header("Location: index.php");
    die();
}
$mabd = connexionBD();
$lampe = getLampById($mabd, $lampeId);
deconnexionBD($mabd);
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumière du studio</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="content">
        <header>
            <a href="index.php" class="bouton-retour">
                <img src="assets/img/svg/arrow_retour.svg" alt>
            </a>
            <input type="text" name="nameLight" id="name-light" class="name-modif-light" placeholder="Nom de la lumière..." value="<?= $lampe[0]['name'] ?>">
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
                <div id="pickerColor"></div>
                <div id="pickerIntensity"></div>
                <div class="codeColor">
                    <label for="inputColor">HEX</label>
                    <input type="text" name="input_color" id="inputColor" class="inputColor">
                </div>
            </div>
        </section>
        <section>

        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>