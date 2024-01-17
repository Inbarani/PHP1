<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poistetaan tiedot</title>
</head>
<body>
<?php
if (isset($_POST['submit2']) && isset($_POST['login'])) {
    $login = $_POST['login'];

    // Yhdistetään tietokantaan ja poistetaan käyttäjä
    
    $connection = new mysqli("localhost", "inba", "Inba", "asiakkaat");
    $query = "DELETE FROM taulu2 WHERE login='$login'";
    
    if ($connection->query($query) === TRUE) {
        echo "Käyttäjä poistettu.";
    } else {
        echo "Käyttäjän poisto epäonnistui: " . $connection->error;
    }
} else {
    echo "Virheellinen pyyntö.";
}
?>
<br><a href="index.html">Palaa</a>
    
</body>
</html>
