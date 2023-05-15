$(document).ready(function () {
    var nameLampeInput = $("#name-light");
    nameLampeInput.change(() => {
        nameLampe = nameLampeInput.val();
        APIBDD();
    });

    //Sélecteur on off (menu)
    $("header .check-state-on").css("display", "none");
    $("header .toggle-input").prop("checked", false);
    $("header .toggle-input").click(function () {
        $("header .check-state-on").toggle();
        $("header .check-state-off").toggle();
    });

    //Fonction actualisation + appels API
    function reloadColor() {
        var hex = colorPicker.color.hexString;
        $(".code-couleur .input-couleur").val(hex);

        var intensity = intensityPicker.color.value;

        valIntensity = (intensity * 255) / 100;

        valRed = colorPicker.color.red;
        valGreen = colorPicker.color.green;
        valBlue = colorPicker.color.blue;

        APIColor();
        APIBDD();
    }

    function APIColor() {
        data = {};

        data[channelRed] = valRed;
        data[channelGreen] = valGreen;
        data[channelBlue] = valBlue;
        data[channelIntensity] = valIntensity;

        console.log(data);

        //192.168.62.158
        // ! Adresse ip de l'api (raspberry)
        fetch(url, {
            method: "POST",
            headers: {
                accept: "application/json",
            },
            body: JSON.stringify(data),
        }).then((resp) => {
            console.log(resp);
        });
        // // fetch("http://192.168.62.158:8080/ajuster/" + channelRed + "/" + valRed).then(console.log('red'));
        // // fetch("http://192.168.62.158:8080/ajuster/" + channelBlue + "/" + valBlue).then(console.log('blue'));
        // // fetch("http://192.168.62.158:8080/ajuster/" + channelGreen + "/" + valGreen).then(console.log('green'));
        // // fetch("http://192.168.62.158:8080/ajuster/" + channelIntensity + "/" + valIntensity).then(console.log('intensity'));
    }

    function APIBDD() {
        data = {
            name: nameLampe,
            idLampe: idLampe,
            valRed: valRed,
            valGreen: valGreen,
            valBlue: valBlue,
            valIntensity: valIntensity,
        };

        currentURL = location.pathname.split("/");
        currentURL.pop();
        currentURL.push("APIVal.php");
        urlAPI = currentURL.join("/");

        fetch(urlAPI, {
            method: "POST",
            headers: {
                accept: "application/json",
            },
            body: JSON.stringify(data),
        });
    }

    // Initialisation du sélecteur de couleur
    var colorPicker = new iro.ColorPicker("#pickerColor", {
        width: 220,
        color: "rgb(" + valRed + ", " + valGreen + ", " + valBlue + ")",
        layoutDirection: "horizontal",
        layout: [
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: "saturation",
                    sliderSize: 35,
                },
            },
            {
                component: iro.ui.Wheel,
                options: {
                    sliderType: "hue",
                },
            },
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: "value",
                    sliderSize: 35,
                },
            },
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: "kelvin",
                    layoutDirection: "vertical",
                    sliderSize: 35,
                },
            },
        ],
    });

    // Initialisation d'intensité
    var intensityPicker = new iro.ColorPicker("#pickerIntensity", {
        width: 220,
        color:
            "rgb(" +
            valIntensity +
            ", " +
            valIntensity +
            ", " +
            valIntensity +
            ")",
        layoutDirection: "vertical",
        layout: [
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: "value",
                    sliderSize: 35,
                },
            },
        ],
    });

    //Affichage code hexa + envoie appel API
    reloadColor();
    colorPicker.on("color:change", function () {
        reloadColor();
    });
    intensityPicker.on("color:change", function () {
        reloadColor();
    });

    //Pour le responsive
    function responsive() {
        var width = $(window).width();
        if (width < 500) {
            colorPicker.resize(220);
            intensityPicker.resize(220);
        } else {
            colorPicker.resize(300);
            intensityPicker.resize(300);
        }
    }

    responsive();

    $(window).resize(function () {
        responsive();
    });

    $(".code-couleur input[type=text]").change(function () {
        var hexChange = $(".code-couleur .input-couleur").val();
        colorPicker.color.hexString = hexChange;
        reloadColor();
    });
});
