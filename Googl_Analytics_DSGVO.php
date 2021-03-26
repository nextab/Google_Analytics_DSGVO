# Vorlage für die Einbindung des Tracking-Codes:

<!-- Global Site Tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=XX-XXXXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'XX-XXXXXXXXX-X', { 'anonymize_ip': true });
</script>

# Code Snippet CSS Code:

// Ausblenden des Schließen-Buttons im Cookie-Hinweis
#cookie-notice #cn-close-notice { display: none; }

# Code Snippet für die functions.php:

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


# Vorlage für den Hinweis in der Datenschutzerklärung:

Sie können dieser Analyse widersprechen oder sie durch die Nichtbenutzung bestimmter Tools verhindern. Das Webtracking auf dieser Seite ist aktuell [ds-button]
