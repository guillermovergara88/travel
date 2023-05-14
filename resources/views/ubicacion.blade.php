<!DOCTYPE html>
<html>
<head>
	<title>Obtener ubicación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="location"></div>

	<script>
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) {
			var lat = position.coords.latitude;
			var lng = position.coords.longitude;
			var accuracy = position.coords.accuracy;
			var link = "https://www.google.com/maps/search/?api=1&query=" + lat + "," + lng;
			var message = "Tu ubicación es: " + lat + ", " + lng + " (Precisión: " + accuracy + " metros).";
			document.getElementById("location").innerHTML = message + " <a href='" + link + "' target='_blank'>Ver mapa</a>";
		}

		getLocation();
	</script>
</body>
</html>
