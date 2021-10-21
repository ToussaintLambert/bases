
<?php
/** ecrire un script qui genere deux point A (xA,yB) et un point B (xB,yB)
 * Le script affiche les deux points puis determine et affiche la distance
 *  qui sépare ses deux point
 */
define("MIN",-100);
define("MAX",100);

$coordonnee_xA=rand(MIN,MAX);
$coordonnee_xB=rand(MIN,MAX);
$coordonnee_yA=rand(MIN,MAX);
$coordonnee_yB=rand(MIN,MAX);

$distance=sqrt(pow(($coordonnee_xB-$coordonnee_xA),2)+pow(($coordonnee_yB-$coordonnee_yA),2));
echo("la distance entre le point A ($coordonnee_xA,$coordonnee_yA) et le point B ($coordonnee_xB,$coordonnee_yB) est: $distance");

?>