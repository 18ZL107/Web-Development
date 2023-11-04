window.addEventListener("load", function() {
	$('.directions li').prepend("<button class='hide-direction' aria-label='Hide step'><span aria-hidden='true'>&#10004;</span></button>");
	$('.directions li .hide-direction').each(function() {
		$(this).click(function() {
			$(this).parent().addClass("hidden").css("position", "absolute").css("left", "-9999em");
		});
	});
});