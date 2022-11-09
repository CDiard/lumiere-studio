$(document).ready(function() {
    //Sélecteur on off (menu)
    $('header .check-state-on').css('display', 'none');
    $("header .toggle-input").prop("checked", false);
    $('header .toggle-input').click(function() {
        $('header .check-state-on').toggle();
        $('header .check-state-off').toggle();
    })
});