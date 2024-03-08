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
* Tehtävä:       tutustutaan php-ohjelmoinnin perusteisiin
* Ohjelmoija:    Inbarani Ayyappan
* Pvm:           22.8.2023
* Päivitykset    versio 0.1 19.8.2023
*                versio 1 valmis / julkaisu 30.8.2023
* Pisteet        13 pistettä 
*************************************************************************************/
//Tehtävä1
//tulostetaan etuNimi 

$etuNimi = "Inbarani"; 
echo "Etunimi: " . $etuNimi;


//Tehtävä2
//Tulostetaan "Moi Inbarani. Sukunimesi on Ayyappan ja olet 42-vuotias".
$etuNimi = "Inbarani";
$sukuNimi = "Ayyappan";
$ika = 42;

echo "<br><br>Moi " .$etuNimi . ". Sukunimesi on " .$sukuNimi . " ja olet " .$ika . "-vuotias.<br><br>";


//Tehtävä3
//Tarkistaa oma etunimi

$etuNimi = "Inbarani";
if ($etuNimi ==="Inbarani"){
	echo "jeps, oikein meni<br><br>";
}else {
	echo "hups, jokin meni vikaan <br><br>";
}

//Tehtävä4
//ohjelma, jossa määrittele muuttujan $ika
$ika =42;

if($ika<0 || $ika>120){
	echo "virheellinen ikä";	
}
else if($ika>=0 && $ika<=17){
	echo "saat ostaa vain limpparia<br><br>"	;
}
else if($ika>=18 && $ika<=64){
	echo "työikäisenä voit ostaa miestä väkevämpääkin<br><br>";
}
else {
	echo "ikää yli kuusviis<br><br>";
}

//Tehtävä5
/* ohjelma, joka tarkistaa muuttujasta kuukauden numeron ja 
tulostaa sen perusteella kuukauden nimen.*/

$kuukaudenNumero = 5; 

// Tulosta kuukauden nimi
switch ($kuukaudenNumero) {
    case 1:
        $kuukaudenNimi = "Tammikuu";
        break;
    case 2:
        $kuukaudenNimi = "Helmikuu";
        break;
    case 3:
        $kuukaudenNimi = "Maaliskuu";
        break;
    case 4:
        $kuukaudenNimi = "Huhtikuu";
        break;
    case 5:
        $kuukaudenNimi = "Toukokuu";
        break;
    case 6:
        $kuukaudenNimi = "Kesäkuu";
        break;
    case 7:
        $kuukaudenNimi = "Heinäkuu";
        break;
    case 8:
        $kuukaudenNimi = "Elokuu";
        break;
    case 9:
        $kuukaudenNimi = "Syyskuu";
        break;
    case 10:
        $kuukaudenNimi = "Lokakuu";
        break;
    case 11:
        $kuukaudenNimi = "Marraskuu";
        break;
    case 12:
        $kuukaudenNimi = "Joulukuu";
        break;
    default:
        $kuukaudenNimi = "Virheellinen kuukausinumero.";
        break;
}

echo "Kuukauden nimi on: $kuukaudenNimi <br><br>";


//Tehtävä 6
//Ohjelma, joka tulostaa luvut 1-10 välilyönnillä eroteltuna for-rakenteella
for ($i = 1; $i <= 10; $i++) {    
    echo $i . " ";
}
echo "<br><br>";

//Tehtävä 7
//Ohjelma, joka tulostaa luvut 1-10 allekkain while-rakenteella

$n = 1;
 
while($n <= 10) {
  echo "$n <br>";
  $n++;
}
echo "<br><br>";

//Tehtävä 8
//Ohjelma, joka tulostaa parilliset luvut väliltä 1-20. Käytä for tai while rakennetta.

$j = 1;

for ($i= 2; $i <= 20; $i += 2) {
    echo $j . ". parillinen luku on " . $i . "<br>";
    $j++;
}
echo"<br><br>";

//Tehtävä 9:
//Ohjelma, joka laskee N ensimmäistä lukua yhteen. N:n arvo laitetaan muuttujaan.

$N = 10;

if($N < 1){
    echo $N. " on vähintään 1";
} else {
    $summa = 0;
    for ($i=1; $i<=$N; $i++) {
        $summa +=$i;
        
    }
    //tulostaa numero ja "+" ja summa
    echo "N=$N : ";
    for ($i = 1; $i <=$N; $i++) {
        echo $i;
        if ($i < $N) {
            echo "+";
            
        }
       
    }
    echo "=" .$summa;
    echo "<br><br>";

}
//Tehtävä 10:
//Ohjelma, joka tulostaa N! kertoman arvon 
$N = 5;
//Tarkista, onko N vähintään 1
if($N < 1){
    echo $N. " on vähintään 1 <br><br>";
} else  {
    // Kerää luvut kertomaan
    $kertoma = 1;
    for ($i=1; $i<=$N; $i++) {
        $kertoma *=$i;
        
        
    }
    //Tulosta i  ja *
    echo "$N! = ";
    for ($i =1; $i<=$N ; $i++){
        echo $i ;
        if ($i != $N){
            echo "*";
        }      
    }
    echo "<br><br>";

}

//Tehtävä11
//Ohjelma laskee N:n ensimmäisen parittoman ja parillisen lukujen summan.
$N = 10; // You can change this value as desired

if ($N < 1) {
    echo $N. " on vähintään 1 <br><br>";
} else {
    $paritonSumma = 0;
    $parillinenSumma = 0;
    
    echo "N = $N : ";
   // Laske paritonSumma 
    for ($i = 1; $i <= $N; $i++) {
        if ($i % 2 == 1) { 
            $paritonSumma += $i;
            echo $i;
			if ($i < $N-1) {
            echo "+";
			}            

        } else { 
            // parillinenSumma
            $parillinenSumma += $i;
                        
        }
        
    }
    
    echo "=$paritonSumma ja ";
    
    for ($i = 2; $i <= $N; $i += 2) {
        echo $i;
        if ($i <= $N-1) {
            echo "+";
        }
    }
    
    echo "=$parillinenSumma <br><br>";
    
}
/*Tehtävä 12:
Tee ohjelma, joka ratkaisee Eratostheneen seulan :Poista luvuista 1 - 100 :
Poista luvuista 1 - 100 :
- kaikki 2:lla jaolliset alkaen luvusta 4
- kaikki 3:lla jaolliset alkaen luvusta 6
- kaikki 5:llä jaolliset alkaen luvusta 10
- kaikki 7:llä jaolliset alkaen luvusta 14

Ohjelman tulee tulostaa jäljelle jääneet luvut. */


$limit = 100;
$num = 3;

while ($num <= $limit) {
    if (($num >= 4 && $num % 2 == 0) ||
        ($num >= 6 && $num % 3 == 0) ||
        ($num >= 10 && $num % 5 == 0) ||
        ($num >= 14 && $num % 7 == 0)) {
        $num++;
        continue;
    }
    
    echo $num . " ";
    $num++;
}
echo "<br><br>";



//Tehtävä 13:Etsi karkausvuosi tai ei karkausvuosi
$vuosi = 2100;

if ($vuosi % 4 == 0 && ($vuosi % 100 != 0 || $vuosi % 400 == 0)) {
    echo $vuosi . " on karkausvuosi";
} else {
    echo $vuosi . " ei ole karkausvuosi";
}


?>
</body>
</html>



