<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra - Php-perusteet - koodiharjoituksia - merkkijonofunktiot - substr</title>
</head>
<body>
<?php

/***********************************************************************************
* Sovellus:      php-perusteet
* Tiedosto:      php_perusteet_Ayyappan.php 
* Tehtävä:       Extra - Php-perusteet - koodiharjoituksia - merkkijonofunktiot - substr
* Ohjelmoija:    Inbarani Ayyappan
* Pvm:           30.8.2023
* Päivitykset    versio 0.1 19.8.2023
*                versio 1 valmis / julkaisu 30.8.2023
* Pisteet        8 pistettä 
*************************************************************************************/
//Tehtävä 1:
// Tulostetaan merkkijonon ensimmäinen k-kirjain
$mjono = "kapakala";
$tuloste = substr($mjono, 0,1);
echo "Merkkijonon ensimmäinen kirjain: " .$tuloste ."<br><br>";

//Tehtävä2
//merkkijonon keskeltä lohkaistu 4 merkkiä
$mjono = "kapakala";
$tuloste = substr($mjono, 2,4);
echo "Merkkijonon keskeltä lohkaistu 4 merkkiä: " .$tuloste . "<br><br>";

//Tehtävä3
//merkkijonon lopusta lohkaistu 3 merkkiä
$mjono = "kapakala";
$tuloste = substr($mjono, -3);
echo "Merkkijonon lopusta lohkaistu 3 merkkiä: " .$tuloste ."<br><br>";

//tehtävä 4
//tulostetaan muuttujien sisältö.
$mjono ="kapakala";
//Luodaan muutujat
$alku = substr($mjono, 0,2);
$keski1 = substr($mjono, 2, 2);
$keski2 = substr($mjono, 4, 2);
$loppu = substr($mjono, -2);

//tulostetaan muuttujet
echo $alku . "<br>" .$keski1. "<br>" . $keski2 ."<br>" .$loppu ."<br><br>";

//VERSIO 5: (Tee toistorakenteella)
$mjono ="kapakala";

for($i = 1; $i <= strlen($mjono); $i++){
    $tuloste = substr($mjono, 0, $i);
    echo $tuloste . "<br>";

}
echo "<br><br>";

//VERSIO 6: (Tee toistorakenteella)
$mjono ="kapakala";

for($i = 2; $i <= strlen($mjono); $i=$i+2){
    $tuloste = substr($mjono, 0, $i);
    echo $tuloste . "<br>";

}
echo "<br><br>";


//VERSIO 7: (Tee toistorakenteella)

/*$mjono ="kapakala";
$mjonolen = strlen($mjono);

for($i = $mjonolen; $i >= 0; $i--){
    $tuloste = substr($mjono, 0, $i);
    echo $tuloste . "<br>";

}
*/

//VERSIO 7: (Tee toistorakenteella)
$mjono ="kapakala";

for($i = strlen($mjono); $i >= 0; $i--){
    $tuloste = substr($mjono, 0, $i);
    echo $tuloste . "<br>";

}
echo "<br><br>";

//VERSIO 8: (Tee toistorakenetella)
$mjono ="kapakala";

for($i = strlen($mjono); $i >= 2; $i= $i-2){
    $tuloste = substr($mjono, 0, $i);
    echo $tuloste . "<br>";

}
echo "<br><br>";

?>

</body>
</html>