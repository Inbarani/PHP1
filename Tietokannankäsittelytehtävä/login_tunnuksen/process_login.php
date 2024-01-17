<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['login']) && isset($_POST['salasana'])) {
    $login = $_POST['login'];
    $salasana = $_POST['salasana'];

    // Yhdistä tietokantaan ja suorita kysely käyttäjän tarkistamiseksi
    $connection = new mysqli("localhost", "inba", "Inba", "asiakkaat");

    if ($connection->connect_error) {
        die("Yhteys tietokantaan epäonnistui: " . $connection->connect_error);
    }

    // Valmistele ja suorita kysely
    $query = "SELECT etunimi FROM taulu2 WHERE login = '$login' AND salasana = '$salasana'";
    $result = $connection->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $etunimi = $user['etunimi'];
        // Kirjautuminen onnistui
        header("Location: welcome.php?etunimi=$etunimi");
    } else {
        // Käyttäjää ei löytynyt tai salasana ei täsmää
        header("Location: error.php");
    }

    $connection->close();
} else {
    echo "Virheellinen pyyntö.";
}
?>

    
</body>
</html>