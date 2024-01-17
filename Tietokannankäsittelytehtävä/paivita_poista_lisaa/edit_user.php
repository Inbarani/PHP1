<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Käyttäjätietojen muokkaus</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color:  #b4f9bf;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

a {
    display: block;
    margin-top: 10px;
    text-align: center;
    color: #333;
    text-decoration: none;
}
</style>
</head>
<body>
<h1>Käyttäjätietojen muokkaus</h1>
    <?php
    if (isset($_POST['login'])) {
        $login = $_POST['login'];

        // Yhdistetään tietokantaan, suoritetaan kysely ja haetaan käyttäjän tiedot
        
       
        $connection = new mysqli("localhost", "inba", "Inba", "asiakkaat");
        $query = "SELECT * FROM taulu2 WHERE login = '$login'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Näytä käyttäjän tiedot ja lomake muokkausta varten
            echo "<form action='update_user.php' method='post'>";
            echo "<input type='hidden' name='login' value='" . $user['login'] . "'>";
            echo "Salasana: <input type='text' name='salasana' value='" . $user['salasana'] . "'><br>";
            echo "Etunimi: <input type='text' name='etunimi' value='" . $user['etunimi'] . "'><br>";
            echo "Sukunimi: <input type='text' name='sukunimi' value='" . $user['sukunimi'] . "'><br>";
            echo "Sähköposti: <input type='text' name='email' value='" . $user['email'] . "'><br>";
            echo "<input type='submit' value='Päivitä tiedot'>";
            echo "</form>";
            echo "<form action='delete_user.php' method='post'>";
            echo "<input type='hidden' name='login' value='" . $user['login'] . "'>";
            echo "<input type='submit' name='submit2' value='Poista käyttäjä'>";
            echo "</form>";
        } else {
            echo "Käyttäjää ei löytynyt.";
        }
    } else {
        echo "Virheellinen pyyntö.";
    }
    ?>
    <a href="index.html">Palaa</a>
    
</body>
</html>