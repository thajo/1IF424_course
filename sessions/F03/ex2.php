<doctype html>
	
<html>
<head>
	<title>Exempel 2</title>
	<meta charset="utf-8" />
</head>
<body>

<?php
$arr = array("Kalmar", "Växjö", "Karlskrona");
?>
<form method="post">
	<!-- Gör en select/dropdown med värdena som finns i arrayen ovan -->
	<select>
		<option value="1">Testvärde 1</option>
		<option value="2">Testvärde 2</option>
		<option value="3">Testvärde 3</option>
	</select>
	<input type="submit" name="submit" value="Skicka" />
</form>

</body>
</html>