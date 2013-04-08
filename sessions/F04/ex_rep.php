<doctype html>
	
<html>
<head>
	<title>Exempel - extra</title>
	<meta charset="utf-8" />
</head>
<body>

<?php

// Här skapas en associativ array
$arr = array(
	"Professor Balthazar" => "http://www.croatianhistory.net/gif/film/baltazar_m1.jpg",
	"Professor Drövels hemlighet" => "http://cdn1.cdnme.se/cdn/5-2/101653/images/2007/br_derna_1177700801_7087080.jpg",
	"Tårtan" => "http://gfx.svd-cdn.se/multimedia/dynamic/00792/tartan_655_792057c.jpg",
	"Dr Snuggles" => "http://hem.bredband.net/snugglesonline/jpg/1/snuggles01.jpg"
);

// Arrayen loopas igenom
foreach($arr as $program => $image_url) {
	
	// Här anropas funktionen "showImages" med två parametrar, fört URL:en sedan texten
	$current_html_tag = showImages($image_url, $program);
 	
	// Skriv ut HTML-koden som returneras.
	echo $current_html_tag; 
}

?>

</body>
</html>

<?php

// This funktion takes
function showImages($url, $text) {
	$html = "<img src='$url' />";
	$html .= "<p>$text</p>";
	return $html;
}