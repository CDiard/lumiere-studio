$(document).ready(function () {
	//Sélecteur on off (menu)
	$(".check-state-on").css("display", "none")
	$(".toggle-input").prop("checked", false)
	$(".toggle-input").click(function () {
		$(".check-state-on").toggle()
		$(".check-state-off").toggle()
	})
})
