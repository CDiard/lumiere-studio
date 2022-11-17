$(document).ready(function () {
	//Fonction actualisation
	function reloadColor() {
		var hex = colorPicker.color.hexString
		$(".code-couleur .input-couleur").val(hex)
	}

	//Iro.js
	var colorPicker = new iro.ColorPicker("#pickerColor", {
		width: 300,
		color: "#ffffff",
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
	})

	var intensityPicker = new iro.ColorPicker("#pickerIntensity", {
		width: 300,
		color: "#ffffff",
		layoutDirection: "vertical",
		wheelDirection: "clockwise",
		layout: [
			{
				component: iro.ui.Slider,
				options: {
					sliderType: "value",
					sliderSize: 35,
				},
			},
		],
	})

	//Pour le responsive
	$(window).resize(function () {
		var width = $(window).width()
		if (width < 500) {
			colorPicker.resize(220)
			intensityPicker.resize(220)
		} else {
			colorPicker.resize(300)
			intensityPicker.resize(300)
		}
	})

	//Affichage code hexa
	reloadColor()
	colorPicker.on("color:change", function () {
		reloadColor()
	})
	intensityPicker.on("color:change", function () {
		reloadColor()
	})

	$(".code-couleur input[type=text]").change(function () {
		var hexChange = $(".code-couleur .input-couleur").val()
		colorPicker.color.hexString = hexChange
		reloadColor()
	})

	var red = colorPicker.color.red
	var green = colorPicker.color.green
	var blue = colorPicker.color.green
	var intensity = intensityPicker.color.value
})
