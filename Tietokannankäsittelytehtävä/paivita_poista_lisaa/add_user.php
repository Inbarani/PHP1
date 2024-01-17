<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisää uusi käyttäjä</title>
</head>
<body>
<h1>Lisää uusi käyttäjä</h1>
<?php
    if (isset($_POST['login'], $_POST['salasana'], $_POST['etunimi'], $_POST['sukunimi'], $_POST['email'])) {
        $login = $_POST['login'];
        $salasana = $_POST['salasana'];
        $etunimi = $_POST['etunimi'];
        $sukunimi = $_POST['sukunimi'];
        $email = $_POST['email'];

        // Establish a connection to the database
        $connection = new mysqli("localhost", "inba", "Inba", "asiakkaat");

        if ($connection->connect_error) {
            die("Tietokantaan yhdistäminen epäonnistui: " . $connection->connect_error);
        }

        // Create and execute an SQL query to insert the new user
        $query = "INSERT INTO taulu2 (login, salasana, etunimi, sukunimi, email) VALUES ('$login', '$salasana', '$etunimi', '$sukunimi', '$email')";

        if ($connection->query($query) === true) {
            echo "Käyttäjä lisätty onnistuneesti.";
        } else {
            echo "Virhe käyttäjän lisäämisessä: " . $connection->error;
        }

        $connection->close();
    } else {
        echo "Virheellinen pyyntö.";
    }
    ?>
    <br>
    <a href="index.html">Palaa</a>
    
</body>
</html>