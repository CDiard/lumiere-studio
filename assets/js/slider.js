$(document).ready(function () {
	$(".slider").slick({
		centerMode: true,
		centerPadding: "60px",
		slidesToShow: 1,
		infinite: true,
		arrows: false,
		variableWidth: true,
	})

	//Sélecteur on off (menu)
	$(".check-state-on").css("display", "none")
	$(".toggle-input").prop("checked", false)
	$(".toggle-input").click(function () {
		$(".check-state-on").toggle()
		$(".check-state-off").toggle()
	})
})
