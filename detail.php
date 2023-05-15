<?php
require '.lib.inc.php';
$lampeId = $_GET['lampe'];
if ($lampeId === null) {
    header("Location: index.php");
    die();
}
$mabd = connexionBD();
$lampe = getLampById($mabd, $lampeId);
$lampes = getAllLampes($mabd);
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="content">
        <header>
            <a href="index.php" class="bouton-retour">
                <img src="assets/img/svg/arrow_retour.svg" alt>
            </a>
            <div class="container-name">
                <input type="text" name="nameLight" id="name-light" class="name-modif-light" placeholder="Nom de la lumière..." value="<?= $lampe[0]['name'] ?>">
            </div>
        </header>
        <section class="selection-couleur">
            <div class="picker-couleur">
                <!-- Ajouter/enlever la class disable-picker pour désactiver/activer le colorpicker -->
                <div id="pickerColor"></div><!--class="disable-picker"-->
                <div id="pickerIntensity"></div>
                <fieldset class="code-couleur"><!-- disable-picker -->
                    <legend>HEX</legend>
                    <label for="input-couleur">Votre couleur</label>
                    <input type="text" name="input_color" id="input-couleur" class="input-couleur">
                </fieldset>
            </div>
        </section>
        <!-- lampes -->
        <section class="bottom-wrapper slider-detail">
            <div class="slider">
                <a class="slider__element" href="detail.php?lampe=<?= $lampe[0]['id'] ?>">
                    <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Lampe <?= $lampe[0]['id'] ?>" />
                    <p class="light-name"><?= $lampe[0]['name'] ?></p>
                </a>
                <?php foreach ($lampes as $lampeList) { 
                    if ($lampeList['id'] !== $lampe[0]['id']) { ?>
                        <a class="slider__element" href="detail.php?lampe=<?= $lampeList['id'] ?>">
                            <img class="light-icon" src="assets/img/svg/noun-light.svg" alt="Lampe <?= $lampeList['id'] ?>" />
                            <p class="light-name"><?= $lampeList['name'] ?></p>
                        </a>
                    <?php } 
                } ?>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
    <script>
        var idLampe = <?= $lampe[0]['id'] ?>;
        var nameLampe = "<?= $lampe[0]['name'] ?>";
        var channelRed = <?= $lampe[0]['red'] ?>;
        var channelGreen = <?= $lampe[0]['green'] ?>;
        var channelBlue = <?= $lampe[0]['blue'] ?>;
        var valRed = <?= $lampe[0]['valRed'] ?>;
        var valGreen = <?= $lampe[0]['valGreen'] ?>;
        var valBlue = <?= $lampe[0]['valBlue'] ?>;
        var channelIntensity = <?= $lampe[0]['intensity'] ?>;
        var valIntensity = <?= $lampe[0]['valIntensity'] ?>;
        var url = "<?= ServeurDMX ?>";
    </script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/select.js"></script>
</body>

</html>