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
	
	// Här anropas funktionen "showImages" med två parametrar, först URL:en sedan texten
	$current_html_tag = showImages($image_url, $program);
 	
	// Skriv ut HTML-koden som returneras.
	echo $current_html_tag; 
}

?>

</body>
</html>

<?php

// Denna funktion tar två parametrar, först url och sedan texten
function showImages($url, $text) {
	// Skapar en img-tagg
	$html = "<img src='$url' />";
	
	// bygger vidare (.=) på strängen html och lägger till en p-tagg med texten
	$html .= "<p>$text</p>";
	
	// returnerar html-koden
	return $html;
}