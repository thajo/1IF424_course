<doctype html>
	
<html>
<head>
	<title>Exempel 3</title>
	<meta charset="utf-8" />
</head>
<body>

<?php
	
	// Hjälp med brevskrivning angående tenta...
	
	// Låt säga kursen har 40 studenter
	// Vad händer om vi ändrar betygsystem?
	// Vad hände rom vi ändrar betygsgränser
	// Vad hände rom vi vill ha en annan text
	
/*	$mail = "Hej John!";
	$mail .= "Din poäng på tentan var 15.";
	$mail .= "Det ger betyget G.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
	
	$mail = "Hej Greta!";
	$mail .= "Din poäng på tentan var 35.";
	$mail .= "Det ger betyget VG.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
	
	$mail = "Hej Lisa!";
	$mail .= "Din poäng på tentan var 45.";
	$mail .= "Det ger betyget MVG.";
	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";*/
	
	
	writeMail("John", 15);
	//writeMail("Greta", 35);
	//writeMail("Lisa", 45);	
	
	
	
?>
</body>
</html>

<?php


function writeMail($name, $point) {
	$mail = "Hej $name!<br />";
	$mail .= "Din poäng på tentan var $point.<br />";
//	$grade = getGrade($point);
	
//	$mail .= "Det ger betyget: $grade.<br />";
//	$mail .= "Hej då!";
	echo $mail ."<br /><hr />";
}


/*
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
}*/