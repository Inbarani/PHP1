<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*include 'cfg.php';
$sql = "SELECT id, nimi, sahkoposti FROM login";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["ID"]. " - Nimi: " . $row["Nimi"]. "Sahkoposti " . $row["Sahkoposti"]. "<br>";
    }
} else {
    echo "0 results";
}

//mysqli_close($conn);

$result = mysqli_query($mysqli, "insert into user values)*/

if ($_SERVER["REQUEST_METHOD"] == "post") {
    $nimi = $_post["nimi"];
    $sahkoposti = $_post["sahkoposti"];

    $virheet = [];

    // Tarkista, että nimi ja sähköposti eivät ole tyhjiä
    if (empty($nimi)) {
        $virheet[] = "Nimi on pakollinen kenttä.";
    }

    if (empty($sahkoposti)) {
        $virheet[] = "Sähköposti on pakollinen kenttä.";
    } else {
        // Tarkista sähköpostiosoitteen muoto filter_var-funktiolla
        if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
            $virheet[] = "Sähköpostiosoite ei ole oikeassa muodossa.";
        }
    }

    // Jos virheitä ei ole, näytä syötetyt tiedot ja tallenna ne tiedostoon
    if (empty($virheet)) {
        echo "Tiedot saatiin onnistuneesti:<br>";
        echo "Nimi: " . $nimi . "<br>";
        echo "Sähköposti: " . $sahkoposti . "<br>";

        // Tallenna tiedot tiedostoon
        $tiedosto = fopen("tiedot.txt", "a");
        fwrite($tiedosto, "Nimi: " . $nimi . ", Sähköposti: " . $sahkoposti . "\n");
        fclose($tiedosto);
    } else {
        // Jos virheitä on, näytä virheilmoitukset
        echo "Tarkista seuraavat virheet:<br>";
        foreach ($virheet as $virhe) {
            echo $virhe . "<br>";
        }
    }
} else {
    // Näytä lomake, jos sivua ei ole lähetetty POST-metodilla
    header("Location: index.html");
    exit;
}
?>

    
</body>
</html>