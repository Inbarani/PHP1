<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/***********************************************************************************
* Sovellus:      php-perusteet
* Tiedosto:      php_perusteet_Ayyappan.php 
* Tehtävä:       Php-perusteet - koodiharjoituksia - arrayt
* Ohjelmoija:    Inbarani Ayyappan
* Pvm:           28.8.2023
* Päivitykset    versio 0.1 19.8.2023
*                versio 1 valmis / julkaisu 30.8.2023
* Pisteet        9 pistettä 
*************************************************************************************/
//Tehtävä 1:
/*Array tallentaa useita arvoja yhteen muuttujaan.
Array voi sisältää useita arvoja yhdellä nimellä, 
ja voit käyttää arvoja viittaamalla indeksinumeroon.
Arrayt voivat sisältää useita erilaisia arvoja, 
kuten lukuja, merkkijonoja tai muita arvoja, 
ja jokainen arvo tallennetaan tiettyyn indeksiin. */

//Tehtävä 2:
// Luodaan taulukko ja sijoitetaan luvut siihen
$luvut = array(1, 5, -3, 8, 12, -2);

// Tulostetaan taulukon sisältö näytölle
echo "Taulukon sisältö: " . $luvut[0] . ", " . $luvut[1] . ", " . $luvut[2] . ", " . $luvut[3] . ", " . $luvut[4] . ", ".$luvut[5]  ;
echo "<br><br>";
//Tehtävä 3: 

// Luodaan taulukko ja sijoitetaan luvut siihen 

$luvut = array(1, 5, -3, 8, 12, -2); 

// Lisätään uusi alkio arvolla 4 taulukon loppuun 

$luvut[] = 4; 

// Tulostetaan taulukon sisältö näytölle 

echo "Taulukon sisältö: " . $luvut[0] . ", " . $luvut[1] . ", " . $luvut[2] . ", " . $luvut[3] . ", " . $luvut[4] . ", ".$luvut[5] . ", " .$luvut[6] ; 

echo "<br><br>"; 

//Tehtävä 4: 

//Laske taulukon alkioiden määrä taulukkofunktioilla. Tulosta vastaus näytölle. 

// Lisätään uusi alkio arvolla 4 taulukon loppuun 

$luvut = array(1, 5, -3, 8, 12, -2); 

$luvut[] = 4; 

//Hanki taulukon pituus 

//count($luvut);
echo ("Taulukossa on " . count($luvut) . " numeroa"); 

echo "<br><br>"; 

//Tehtävä 5: 

/*Lisää ohjelmaan taulukon järjestäminen siten, että lopputuloksena  

ensimmäinen solu sisältää pienimmän numeron ja viimeinen solu suurimman. 

Tulosta taulukon sisältö näytölle järjestämisen jälkeen*/ 

$luvut = array(1, 5, -3, 8, 12, -2); 

// Lisätään uusi alkio arvolla 4 taulukon loppuun 

$luvut[] = 4; 

// Järjestetään taulukko pienimmästä suurimpaan 

sort($luvut); 

// Tulostetaan taulukon sisältö näytölle 

foreach ($luvut as $luku){ 

    echo $luku ." "; 
    
} 

echo "<br><br>"; 


/*Tehtävä 6: 

Tee kaikki tulostukset omiin muuttujiinsa:*/ 

 $luvut= array(6, 5, 4, 3, -1, -3, 8);

//Tulosta neljäs elementti taulukosta
 echo "Taulukon neljäs elementti on: " .$luvut[3] . "<br><br>";
 
//Tulosta lukujen summa
 array_sum($luvut);
 echo ("Lukujen summa: " . array_sum($luvut) ."<br><br>" );

//tulosta toistorakenteella kaikki taulukon alkiot näytölle

  foreach ($luvut as $luku) {
    
    echo $luku . ", ";
}
echo "<br><br>";

//tulosta toistorakenteella kaikki taulukon alkiot näytölle käännetyssä järjestyksessä
rsort($luvut);
echo "Käänteisen järjestyksen elementit: ";
foreach ($luvut as $luku) {
   
    echo $luku . ", " ;
}
echo "<br><br>";
//Tehtävä 7:
//tee assosiatiivinen taulukko
$henkilot = array(
    "Juha" => 40,
    "Anna" => 28,
    "Elsa" => 22
);

foreach ($henkilot as $nimi => $ika) {
    echo "Key= " . $nimi . ", " . $ika . " vuotta" . "<br>" ;
}
echo "<br><br>";
//Tehtävä 8:
//Kirjoita ohjelma, joka tulostaa postitoimipaikan postinumeron perusteella.

$postinumerot = array(
    "00100" => "Helsinki 10",
    "15100" => "Lahti 10",
    "15110" => "Lahti 11",
    "15140" => "Lahti 14",
    "16710" => "Hollola",
    "15560" => "Nastola",
    "16300" => "Orimattila",
    "17320" => "Asikkala",
    "16200" => "Artjärvi",
    "16610" => "Kärkölä",
    "16600" => "Järvelä",
    "16500" => "Herrala"
);

$postinumero = "17320"; 

if (array_key_exists($postinumero, $postinumerot)) {
    $postitoimipaikka = $postinumerot[$postinumero];
    echo "Postitoimipaikka $postinumero on: $postitoimipaikka";
} else {
    echo "Postitoimipaikkaa ei löydy $postinumero";
}
echo "<br><br>";

//Tehtävä 9:
//array_push(): funktio lisää yhden tai useampia arvoja taulukon loppuun.

$fruits = array("apple", "banana");
array_push($fruits, "orange", "kiwi");

print_r($fruits);
echo "<br><br>";

//array_pop(): Tämä funktio poistaa ja palauttaa taulukon viimeisen arvon.

$fruits = array("apple", "banana");
array_push($fruits, "orange", "kiwi");
$viimeisenArvo = array_pop($fruits);

print_r($fruits);
echo "<br><br>";

/*array_shift()
 Tämä funktio poistaa ja palauttaa taulukon ensimmäisen arvon, 
siirtäen kaikki muut arvot yhden askeleen eteenpäin.*/

$colors = array("red", "green", "blue");
$firstColor = array_shift($colors); 

print_r($colors);
echo "<br><br>";

/*array_unshift()
Tämä funktio lisää yhden tai useampia arvoja taulukon alkuun, 
siirtäen kaikki olemassa olevat arvot eteenpäin.*/
$colors = array("red", "green", "blue");
array_unshift($colors, "yellow", "orange"); 

print_r($colors);
echo "<br><br>";

/* array_reverse() 
Tämä funktio palauttaa uuden taulukon, 
jossa taulukon arvot ovat käänteisessä järjestyksessä.*/

$luvut =array(1,2,3,4,5);
$reversed =array_reverse($luvut);

print_r($reversed);
echo "<br><br>";


?>

    
</body>
</html>