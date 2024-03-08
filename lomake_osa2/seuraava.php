<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Arvosanani tästä on 8 pistettä
$nimi="";
$viesti = "";


if (isset($_POST["nimi"]) && isset($_POST["viesti"]))
{
        $nimi=$_POST["nimi"];
        $viesti = $_POST["viesti"];
        echo "Nimesi on ".$nimi . "<br>";
        echo "Viestisi on: " .$viesti ."<br>";
}
$vari= "";
if (isset($_POST["vari"]))
{
    $vari = $_POST["vari"];
    echo "Lempivärisi on ".$vari . "<br>";
}

$harrastukset="";
if (isset($_POST["harrastukset"])) 
{
    $harrastukset = "Harrastuksesi ovat <br />"; 
    foreach ($_POST["harrastukset"] as $arvo)
       {
        $harrastukset = $harrastukset . $arvo . "<br />";
        
       }
       echo $harrastukset;
       
}

$kulkuneuvot=""; 
if (isset($_POST["kulkuneuvo"])) 
{
    $kulkuneuvot = "Valitsemasi kulkuneuvot ovat:<br />"; 
    foreach ($_POST["kulkuneuvo"] as $arvo) 
    {
        $kulkuneuvot = $kulkuneuvot. $arvo . "<br />";} 
        echo $kulkuneuvot;
    } 

     



?>
    
</body>
</html>



