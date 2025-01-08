<?php
if(basename(__FILE__) === basename($_SERVER["SCRIPT_FILENAME"])){
  exit;
}

$berichtResponsive = <<<BERICHT
Beste $voornaam $achternaam,

U heeft op onze lojal website een contact formulier ingevuld.
We zullen zo snel mogelijk contact maken.

$voornaam $achternaam
$email
$telefoonNummer
$regio

$onderwerp $overig
"$bericht"
BERICHT;