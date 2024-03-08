<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-perusteet - koodiharjoituksia - merkkijonofunktiot</title>
</head>
<body>
    <?php
/***********************************************************************************
* Sovellus:      php-perusteet
* Tiedosto:      php_perusteet_Ayyappan.php 
* Tehtävä:       Php-perusteet - koodiharjoituksia - merkkijonofunktiot
* Ohjelmoija:    Inbarani Ayyappan
* Pvm:           30.8.2023
* Päivitykset    versio 0.1 19.8.2023
*                versio 1 valmis / julkaisu 30.8.2023
* Pisteet        12 pistettä 
*************************************************************************************/
//Tehtävä 1:
    //Tehtävä1
    //lasketaan merkkijonon merkkienmäärän.
    //määritellään merkkijonomuuttuja
    $merkkijono = "kukkuluuruu";

    //otetaan merkkijonon pituus muuttujaan
    $mjoonpituus = strlen($merkkijono);
    //tulostetaan merkkijonon pituus
    echo " Merkkijonon merkkien määrän " .$mjoonpituus ."<br><br>";

    //Tehtävä 2
    //käytä substr-funktiota.

    $merkkijono = "kukkuluuruu";    
    $tuloste = substr($merkkijono, 3, 4);
    echo "Merkkijonon merkki keskelta : " . $tuloste ."<br><br>";

      
    //Tehtävä 3
    //tulostetaan merkkijonon satunnaisessa järjestyksessä
    $merkkijono = "kukkuluuruu";
    $satunnainenJarjestys = str_shuffle($merkkijono);
    echo "Merkkijonon satunnaisia järjestys : " .$satunnainenJarjestys ."<br><br>";

    //Tehtävä 4
    //tulostetaan merkkijono isoilla kirjaimilla
    $merkkijono = "kukkuluuruu";
    $tuloste = strtoupper($merkkijono);
    echo "Merkkijono isoilla kirjaimilla: " . $tuloste ."<br><br>";

    //Tehtävä 5
    //tulostetaan merkkijono pienillä kirjaimilla
    $merkkijono = "KuKKuLuuRuU";
    $tulosteLower = strtolower($merkkijono);
    echo "Merkkijono pienillä kirjaimilla: " . $tulosteLower ."<br><br>";

    //Tehtävä 6
    //poistetaan merkkijono alusta tyhjät merkit
    $merkkijono = " kukkuluuruu";
    $tuloste = trim($merkkijono);
    echo $tuloste ."<br><br>";

    //Tehtävä 7
    //poistetaan merkkijono lopusta tyhjät merkit. 
    $merkkijono = "kukkuluuruu  ";
    $tuloste = rtrim($merkkijono);
    echo $tuloste . "<br><br>";

    //Tehtävä 8
    //tulostetaan käänteiset merkkijono
    $merkkijono = "kukkuluuruu";
    $tuloste = strrev($merkkijono);
    echo "kääntää merkkijonon nurinpäin: " .$tuloste ."<br><br>";

    //Tehtävä 9
    //tarkistetaan onko muuttujassa oleva merkkijono palindrommi.
    $merkkijono = "kukkuluuruu";
    $tuloste = strrev($merkkijono);

    if ($merkkijono === $tuloste){
        echo "Merkkijono on polindrommi." ."<br><br>";
    }else{
        echo "Merkkijono ei ole palindrommi.". "<br><br>";
    }

    //Tehtävä 10
    //Poista ylimääräiset välilyönnit 
    $merkkijono = " kuk kulu uruu ";
    $tuloste = str_replace(" ", "",$merkkijono);
    echo "Poista ylimääräiset välilyönnit: " .$tuloste ."<br><br>";

    //Tehtävä 11
    //Korvaa vokaalit numeroilla
    $merkkijono = "KAALIMAAN KAKARAT";
    $vokaalit = array("A", "E", "I", "O", "U", "Y", "Ä", "Ö","a", "e", "i", "o", "u", "y", "ä", "ö");
    $numerot = array(1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8);
    // Korvaa vokaalit numeroilla
    $tuloste = str_replace($vokaalit, $numerot, $merkkijono);
    echo $merkkijono . ": " . $tuloste ."<br><br>";

    //Tehtävä 12
    $sana = "Ruusu";
    $kirjain = "u";
    // Lasketaan, monta kertaa kirjain esiintyy sanassa
    $tuloste = substr_count($sana, $kirjain);

    echo "Kirjain esiintyy tässä sanassa " .$tuloste." kertaa.";

  

    ?>

    
</body>
</html>