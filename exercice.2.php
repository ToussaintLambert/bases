<?php
/** ecrire un scrip qui  génère un rayon puis determine et affiche :
 *  le diamètre
 *  la circonférence
 *  et la surface
*/

define ("PI",3.14);

$rayon = rand(1, 5);
echo ("le rayon est $rayon <br>");

$diametre = $rayon * 2 ;
$circonference = 2* PI * $rayon;
//$surface =PI*$rayon*$rayon;
$surface = PI*pow($rayon,2);

echo ("La valeur du diamètre est: $diametre.<br>");
echo ("La valeur du circonférance est: $circonference.<br>");
echo ("La valeur du surface est: $surface.<br>");

?>