<?php
/** ecrire un script qui génère  la longeur et la latgenre du rectangle 
 * puis deter et affiche le demi périmètre le périmètre, la surface, et 
 * la longue d'une des diagonales la somme des deux nombre le produit
 *
 */
define ("Max",200);
 $longueur=rand(10,20);
 $largeur=rand(1,5);
 $demi_perimetre=$longueur + $largeur;
 $perimetre=($longueur+$largeur)*2;
 $surface= $longueur * $largeur;
 $diagonale= sqrt(pow($longueur,2)+pow($largeur,2));

 echo("le demi perimetre est $demi_perimetre <br>");
 echo("le perimetre est $perimetre <br>");
 echo("la surface est $surface <br>");
 echo("la diagonale est $diagonale <br>");

 ?>