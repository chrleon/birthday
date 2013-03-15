<?php 
// git clone https://github.com/chrleon/birthday.git


$birthdaybaby = "Øystein";
$words = array();
$words[0] = "Happy";
$words[1] = "birthday";
$words[2] = "to";
$words[3] = "you";
$words[4] = "dear";
$age = 27;

function singsong(){
	echo $words[0];
	echo $words[1];
	echo $words[2];
	echo $words[3];
	echo $words[0];
	echo $words[1];
	echo $words[2];
	echo $words[3];
	echo $words[0];
	echo $words[1];
	echo $words[4];
	echo $birthdaybaby;
	echo $words[0];
	echo $words[1];
	echo $words[2];
	echo $words[3];
	$age++;
}
singsong();

?>