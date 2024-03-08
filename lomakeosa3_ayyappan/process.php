<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Arvioni tälle tehtäväkoodille on 10-->
<body>
    <?php
    // Tarkista, onko lomakkeelta saatu POST-pyyntö
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tarkista, että nimi- ja sähköpostikentät eivät ole tyhjiä
        if (!empty($_POST["nimi"]) && !empty($_POST["sahkoposti"]) && !empty($_POST["puhelin"])) {
            $nimi = $_POST["nimi"];
            $sahkoposti = $_POST["sahkoposti"];
            $puhelin = $_POST["puhelin"];

            //Tarkista sähköpostiosoitteen muoto filter_var-funktiolla
            if (filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
            // Tallenna tiedot tiedostoon
            $tiedosto = "tallennetut_tiedot.txt";
            $data = "Nimi: $nimi\nSähköposti: $sahkoposti\nPuhelinnumero: $puhelin\n\n";

            // Avaa tiedosto kirjoitustilaan (lisää tiedot loppuun)
            if (file_put_contents($tiedosto, $data, FILE_APPEND)) {
                $message = "Tiedot tallennettiin onnistuneesti.";
            } else {
                $message = "Tietoja ei tallenneta. Tarkista tiedoston kirjoitusoikeudet.";
            }
        } else {
            $message = "Sähköpostiosoite ei ole oikeassa muodossa.";
        }
    } else {
        $message = "Kaikkia tietoja (nimi, sähköposti, puhelin) vaaditaan.";
    }

    // Redirect back to index.html with the message
    header("Location: index.html?message=" . urlencode($message));
    exit;
} else {
    echo "<p>Lomaketta ei ole lähetetty.</p>";
}


    ?>
    

   

    
</body>
</html>