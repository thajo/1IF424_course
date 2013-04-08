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
	<select>
	<?php
	
		$length = sizeof($arr);
		
		for($i = 0; $i < $length; $i++) {
			echo "<option value='" .$i ."'>" .$arr[$i] ."</option>";
		}
		
	
	?>
	</select>
	<input type="submit" name="submit" value="Skicka" />
</form>

</body>
</html>