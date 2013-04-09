<doctype html>
	
<html>
<head>
	<title>Exempel 3</title>
	<meta charset="utf-8" />
</head>
<body>

<?php
	
	// Hjälp med brevskrivning angående tenta
	
	// Vad händer om vi ändrar betygsystem
	
	
/*	$mail = "Hej John!";
	$mail .= "Din poäng på tentan var 15.";
	$mail .= "Det ger betyget 3.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
	
	$mail = "Hej Greta!";
	$mail .= "Din poäng på tentan var 35.";
	$mail .= "Det ger betyget 4.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
	
	$mail = "Hej Lisa!";
	$mail .= "Din poäng på tentan var 45.";
	$mail .= "Det ger betyget 5.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";*/
	
	
	writeMail("John", 15);
	writeMail("Greta", 35);
	writeMail("Lisa", 45);	
	
	
	
?>
</body>
</html>

<?php
function writeMail($name, $point) {
	$mail = "Hej $name!";
	$mail .= "Din poäng på tentan var $points.";
	$grade = getGrade($point);
	
	$mail .= "Det ger betyget: $grade.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
}

function getGrade($p) {
	if($p >= 40) {
		return "MVG";
	}
	elseif($p >= 30) {
		return "VG";
	}
	elseif($p >= 15) {
		return "G";
	}
	else {
		return "U";
	}
}