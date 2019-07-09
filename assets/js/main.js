/* Open when someone clicks on the span element */
function openNav() {
	if ($(".overlay-content").hasClass('vu')) {
		closeNav();
	} else {
		document.getElementById("myNav").style.height = "100%";
		$(".overlay-content").toggleClass('vu');
	}
	

}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  $(".overlay-content").toggleClass('vu');
}

