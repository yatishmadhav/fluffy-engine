<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<!-- Matomo -->
		<script>
		var _paq = window._paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//www.matomo.com/";
			_paq.push(['setTrackerUrl', u+'matomo.php']);
			_paq.push(['setSiteId', '1']);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
		</script>
		<!-- End Matomo Code -->
	</head>
	<body>
		<!-- <form method="POST" action="https://wikiuat.striata.com/test.php?qweqweqwe=dasds&sdfsf=asf"> -->
		<form method="POST" action="index.php">
			Name: <input type="text" name="name" required /><br/>
			Email: <input type="text" name="email" required /><br/>
			Color: <input type="color" name="color" required /><br/>
			Key: <input type="text" name="key" minlength="5" maxlength="20" onkeyup='this.value = this.value.toUpperCase()' pattern="[A-Z]{1}[A-Z0-9]{4,19}" title="Start with uppercase alphabet. Rest of the 4-19 characters are alphnumeric" required /><br/>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
