<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Yhdistä tietokantaan ja suorita kysely käyttäjän tarkistamiseksi
    $connection = new mysqli("localhost", "root", "", "booktour");

    if ($connection->connect_error) {
        die("Yhteys tietokantaan epäonnistui: " . $connection->connect_error);
    }

    // Valmistele ja suorita kysely
    $query = "SELECT firstname FROM users WHERE email = '$email' AND password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $firstname = $user['firstname'];
        // Kirjautuminen onnistui
        //header("Location: welcome.php?firstname=$firstname");
        echo "welcome";
    } else {
        // Käyttäjää ei löytynyt tai salasana ei täsmää
        //header("Location: error.php");
        echo "Ei onnistuu";
    }

    $connection->close();
} 

?>