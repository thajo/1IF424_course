<?php

$anv_namn="1";
$losenord="12345678";
$upprepa_losen="12345678";

/*if($anv_namn == "" || $losenord == "" || $upprepa_losen == "") {
	echo "Du måste fylla i alla fält!";
}

if($losenord != $upprepa_losen){
	echo "Lösenorden stämmer inte överens";
}

if(strlen ($anv_namn)  > 10) {
	echo "Användarnamnet ska vara mellan 3 och 10 tecken långt";
}

if(strlen ($anv_namn)  < 3) {
	echo "Användarnamnet ska vara mellan 3 och 10 tecken långt";
}

if (strlen ($losenord) < 8){
	echo "Lösenordet ska bestå av 8 tecken";
}



if($anv_namn != "" && strlen($anv_namn) > 3 && strlen($anv_namn) < 10 && $losenord != "" && $upprepa_losen != "" && $losenord == $upprepa_losen) {
	echo("Yeah");
}*/


	
	if($anv_namn == "" || $losenord == "" || $upprepa_losen == "") {
	  		echo "Du måste fylla i alla fält!"; 
		}	
		
	if($losenord != $upprepa_losen){
			echo "Lösenorden stämmer inte överens";
		}
		
	if(strlen ($anv_namn) <3) {
			echo "Användarnamnet ska vara mellan 3 och 10 tecken långt";
		}
	
	if(strlen ($anv_namn) >10) {
			echo "Användarnamnet ska vara mellan 3 och 10 tecken långt";
		}
		
	if (strlen ($losenord) <8){
		echo "Lösenordet ska bestå av 8 tecken";
		echo $anv_namn;
		}
		
	if (strlen ($losenord) >8){
		echo "Lösenordet ska bestå av 8 tecken";
		echo $anv_namn;
		}
		
	if($anv_namn != "" && $losenord != "" && $upprepa_losen != "" && $losenord ==  $upprepa_losen) {	
			echo "Formuläret är rätt ifyllt";
		}



