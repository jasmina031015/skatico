function PopUpFeedback() {
	var popup = document.getElementById("popup-feedback-container");
	popup.toggleAttribute("visible");
	var closepopup = document.getElementById("close-popup-feedback");
	closepopup.toggleAttribute("visible");
	
	window.onclick = function(event) {
		if (event.target == popup) {
			popup.toggleAttribute("visible");
		}
	}
}