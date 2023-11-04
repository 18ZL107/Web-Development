window.addEventListener("load", function changeQuantities(){
	let button = document.getElementsByClassName("quantity-button");
	let numbers = document.getElementsByClassName("changes");

	for (let i = 0; i < button.length; i++){
		if (button[i].value == "1") {
			button[i].addEventListener("click", function() {
				numbers[0].innerHTML = "1";
				numbers[1].innerHTML = "&frac34;";
				numbers[2].innerHTML = "&frac12;";
				numbers[3].innerHTML = "2 &frac12;";
				numbers[4].innerHTML = "1";
			});
		}

		if (button[i].value == "2") {
			button[i].addEventListener("click", function() {
				numbers[0].innerHTML = "2";
				numbers[1].innerHTML = "1 &frac12;";
				numbers[2].innerHTML = "1";
				numbers[3].innerHTML = "5";
				numbers[4].innerHTML = "2";
			});
		}

		if (button[i].value == "3") {
			button[i].addEventListener("click", function() {
				numbers[0].innerHTML = "3";
				numbers[1].innerHTML = "2 &frac14;";
				numbers[2].innerHTML = "1 &frac12;";
				numbers[3].innerHTML = "7 &frac12;";
				numbers[4].innerHTML = "3";
			});
		}
	}

});