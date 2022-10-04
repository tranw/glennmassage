document.getElementById('copyright-footer-div').innerHTML = "<p>&copy; " + new Date().getFullYear() + "&ensp;|&ensp;Natural Healthy &amp; Strong Massage. All rights reserved.</p>";

$(document).ready(function () { 
	$(".book-button").click(function () {
		$('#Setmore_button_iframe').click();
	});
});