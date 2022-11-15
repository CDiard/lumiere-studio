$(document).ready(function() {
    //Sélecteur on off (menu)
    $('header .check-state-on').css('display', 'none');
    $("header .toggle-input").prop("checked", false);
    $('header .toggle-input').click(function() {
        $('header .check-state-on').toggle();
        $('header .check-state-off').toggle();
    })

    //Fonction actualisation
    function reloadColor() {
        var hex = colorPicker.color.hexString;
        $('.codeColor .inputColor').val(hex);
    }

    //Iro.js
    var colorPicker = new iro.ColorPicker('#pickerColor', {
        width: 300,
        color: "#ffffff",
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

    var intensityPicker = new iro.ColorPicker('#pickerIntensity', {
        width: 300,
        color: "#ffffff",
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

    //Pour le responsive
    //colorPicker.resize(200);

    //Affichage code hexa
    reloadColor();
    $("#pickerColor").mousemove(function() {
        reloadColor();
    });
});