<doctype html>
	
<html>
<head>
	<title>Exempel 1</title>
	<meta charset="utf-8" />
</head>
<body>

<form method="post">
	Skriv meddelande: <br /><textarea rows="4" cols="50" name="message"></textarea><br />
	Skriv hur många: <br /><input type="text" name="how_many" /><br />
	<input type="submit" name="submit" value="Skicka" />
</form>

<?php
	
	$mess = $_POST["message"];
	echo $mess ."<br />";
		
		
	/*$nr = $_POST["how_many"];
	if($nr != "") {
		echo "beräkingen gav: " .$nr + 10;
	}
	else {
		echo "Det du skrev var ingen siffra";
	}*/
?>
</body>
</html>