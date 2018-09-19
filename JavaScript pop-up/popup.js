window.onload = function(){ 
	let popup = document.getElementById('myPopup');
	let btn = document.getElementsByClassName("myBtn")[0];
	let span = document.getElementsByClassName("popup__closeButton")[0];

	btn.onclick = function() {
		popup.style.display = "block";
	}

	span.onclick = function() {
		popup.style.display = "none";
	}

	window.onclick = function(event) {
		if (event.target == popup) {
			popup.style.display = "none";
		}
	}
};
