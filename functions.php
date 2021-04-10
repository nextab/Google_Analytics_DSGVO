# Code Schnipsel für die functions.php zur Erzeugung eines Buttons, der alle Tracker unterbindet:
function ds_button_shortcode() {
	return '<script>
		if (localStorage.getItem(\'optout\')) {
			document.write(\'<span> deaktiviert. </span><button class="et_pb_button ds_button" onclick="deleteOptOut()">Jetzt aktivieren</button>\');
		} else {
			document.write(\'<span> aktiviert. </span><button class="et_pb_button ds_button" onclick="setOptOut()">Jetzt deaktivieren</button>\');
		}
		function setOptOut() {
			localStorage.setItem(\'optout\', \'true\');
			window.location.reload(false);
		}
		function deleteOptOut() {
			localStorage.removeItem(\'optout\');
			window.location.reload(false);
		}
	</script>';
}
add_shortcode( 'ds-button', 'ds_button_shortcode' );
