<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php


// Tarkista, että lomakkeen tiedot on lähetetty POST-metodilla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkista, että nimi- ja sähköpostikenttien tiedot eivät ole tyhjiä
    if (empty($_POST["nimi"]) || empty($_POST["sahkoposti"])) {
        echo "Nimi ja sähköposti ovat pakollisia kenttiä. <a href='index.html'>Palaa takaisin</a>";
    } else {
        $nimi = $_POST["nimi"];
        $sahkoposti = $_POST["sahkoposti"];
        
        // Tarkista, että sähköpostiosoite on oikeassa muodossa
        if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
            echo "Sähköpostiosoite ei ole kelvollinen. <a href='index.html'>Palaa takaisin</a>";
        } else {
            // Tulosta syötetyt tiedot
            echo "Nimi: " . $nimi . "<br>";
            echo "Sähköposti: " . $sahkoposti . "<br>";
            
            // Tallenna tiedot tekstitiedostoon
            $tiedosto = "data.txt";
            $data1 = "Nimi: " . $nimi . "\n" . "Sähköposti: " . $sahkoposti . "\n\n";
            
            if (file_put_contents($tiedosto, $data1, FILE_APPEND)) {
                echo "Tiedot tallennettiin onnistuneesti tiedostoon. ";
            } else {
                echo "Tietojen tallentaminen epäonnistui. ";
            }
        }
    }
} else {
    // Jos lomaketta ei ole lähetetty POST-metodilla, ohjaa takaisin alkuperäiselle sivulle
    header("Location: index.html");
    exit;
}
?>
<br><br>
<a href="index.html">Palauta etusivulle</a>

  
</body>
</html>
