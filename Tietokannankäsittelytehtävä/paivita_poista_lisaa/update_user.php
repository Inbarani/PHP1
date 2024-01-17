<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Päivitetään tiedot</title>
</head>
<body>
<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $salasana = $_POST['salasana'];
    $etunimi = $_POST['etunimi'];
    $sukunimi = $_POST['sukunimi'];
    $email = $_POST['email'];

    // Yhdistetään tietokantaan ja päivitetään tiedot
    
    $connection = new mysqli("localhost", "inba", "Inba", "asiakkaat");
    $query = "UPDATE taulu2 SET sukunimi='$sukunimi', etunimi='$etunimi', salasana='$salasana', email='$email' WHERE login='$login'";
    
    if ($connection->query($query) === TRUE) {
        echo "Tiedot päivitetty onnistuneesti.";
    } else {
        echo "Tietojen päivitys epäonnistui: " . $connection->error;
    }
} else {
    echo "Virheellinen pyyntö.";
}
?>
<br><a href="index.html">Palaa</a>

    
</body>
</html>
