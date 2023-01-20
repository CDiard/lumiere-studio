$(document).ready(function() {
    var nameLampeInput = $('#name-light');
    nameLampeInput.change(() => {
        nameLampe = nameLampeInput.val();
        APIBDD();
    });

    //Sélecteur on off (menu)
    $('header .check-state-on').css('display', 'none');
    $("header .toggle-input").prop("checked", false);
    $('header .toggle-input').click(function() {
        $('header .check-state-on').toggle();
        $('header .check-state-off').toggle();
    })

    //Fonction actualisation + appels API
    function reloadColor() {
        var hex = colorPicker.color.hexString;
        $('.codeColor .inputColor').val(hex);
        
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

        fetch("http://localhost:8080/ajuster", {
            method: "POST",
            headers: {
                accept : "application/json"
            },
            body: JSON.stringify(data)
        }).then((resp) => {
            console.log(resp);
        }).then((truc) => {
            console.log(truc);
        });
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

        currentURL = location.pathname.split('/');
        currentURL.pop();
        currentURL.push('APIVal.php');
        urlAPI = currentURL.join('/');

        fetch(urlAPI, {
            method: "POST",
            headers: {
                accept : "application/json"
            },
            body: JSON.stringify(data)
        });
    }


    // Initialisation du sélecteur de couleur
    var colorPicker = new iro.ColorPicker('#pickerColor', {
        width: 300,
        color: 'rgb(' + valRed + ', ' + valGreen + ', ' + valBlue + ')',
        layoutDirection: 'horizontal',
        layout: [
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: 'saturation',
                    sliderSize: 35,
                }
            },
            {
                component: iro.ui.Wheel,
                options: {
                    sliderType: 'hue',
                }
            },
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: 'value',
                    sliderSize: 35,
                }
            },
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: 'kelvin',
                    layoutDirection: 'vertical',
                    sliderSize: 35,
                }
            },
        ]
    });

    // Initialisation d'intensité
    var intensityPicker = new iro.ColorPicker('#pickerIntensity', {
        width: 300,
        color: 'rgb(' + valIntensity + ', ' + valIntensity + ', ' + valIntensity + ')',
        layoutDirection: 'vertical',
        layout: [
            {
                component: iro.ui.Slider,
                options: {
                    sliderType: 'value',
                    sliderSize: 35,
                }
            },
        ]
    });

    //Affichage code hexa + envoie appel API
    reloadColor();
    colorPicker.on('color:change', function() {
        reloadColor();
    });
    intensityPicker.on('color:change', function() {
        reloadColor();
    });
});