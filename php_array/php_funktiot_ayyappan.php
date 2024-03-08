<!DOCTYPE html>
<html lang="en">
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
* Tehtävä:       Php-perusteet - koodiharjoituksia - funktiot
* Ohjelmoija:    Inbarani Ayyappan
* Pvm:           28.8.2023
* Päivitykset    versio 0.1 19.8.2023
*                versio 1 valmis / julkaisu 30.8.2023
* Pisteet        6 pistettä 
*************************************************************************************/
//Tehtävä 1:
/* PHP-ohjelmoinnissa funktiot ovat nimettyjä koodilohkoja, 
jotka suorittavat tietyn tehtävän tai toiminnon. 
Funktion avulla voit ryhmitellä koodia loogisiin osiin, 
mikä tekee koodista modulaarista ja helpommin ymmärrettävää. 
Funktion käyttö auttaa myös välttämään koodin toistoa ja helpottaa ylläpitoa. 
Funktiot otetaan käyttöön, kun samaa toiminnallisuutta tarvitaan useita kertoja koodissa. */

// tulostetaan henkilön etu- ja sukunimen
function tulostaNimi() {
    $etuNimi = "Inbarani";
    $sukuNimi = "Ayyappan";
    echo "Nimi on : " .$etuNimi ." " . $sukuNimi;
    }
    // Kutsu funktiota
    tulostaNimi();
    echo"<br><br>";

//tulostetaan henkilön etu- ja sukunimen, käytä parametreina etu- ja sukunimeä. 
//Kutsu funktiota argumenteilla.
//käytetään parametreina etu- ja sukunimeä.
function henkiloNimi($etuNimi, $sukuNimi) { 

    echo "Nimi on : " .$etuNimi ." " . $sukuNimi;
    }
    $etuNimi = "Inbarani";
    $sukuNimi = "Ayyappan";

    // Kutsu funktiota
    henkiloNimi($etuNimi,$sukuNimi);
    echo "<br><br>";

// suoritetaan kahden luvun kertolaskun. Käytä parametreja ja argumentteja.
function kertoLasku($luku1, $luku2) {
    $tulos = $luku1 * $luku2;
    return $tulos;
         
}  
$luku1 = 10;
$luku2 = 3;
// Kutsu funktiota ja tallenna tulos
$tulos = kertolasku($luku1, $luku2);

echo "Kahden luvun kertolasku: " .$tulos ;
echo "<br><br>";

// lasketaan huoneen tilavuuden. Käytä parametreja ja argumentteja.
function laskeTilavuus($pituus, $leveys, $korkeus){
    $tilavuus = $pituus * $leveys * $korkeus;
    return $tilavuus;
} 
$pituus = 4;
$leveys = 3;
$korkeus = 2;
// Kutsutaan funktiota ja tallenna tulos
$tilavuus = laskeTilavuus($pituus, $leveys, $korkeus);
// Tulostetaan huoneen tilavuus 
echo "Huoneen tilavuus on : " .$tilavuus ." m3" . "<br><br>";



    
    
?>

</body>
</html>