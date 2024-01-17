<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asiakas-tietokanta</title>
</head>
<body>
<?php
    // Yhdistetään tietokantaan
    $servername = "localhost";
    $username = "inba";
    $password = "Inba";
    $dbname = "asiakkaat";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Tarkistetaan yhteyden onnistuminen
    if ($conn->connect_error) {
        die("Tietokantayhteys epäonnistui: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Hakutoiminto
        if (isset($_POST["search"])) {
            $name = $_POST["name"];
            $sql = "SELECT * FROM viestit WHERE nimi = '$name'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Nimi: " . $row["nimi"] . " - Sähköposti: " . $row["email"] . "<br>";
                }
            } else {
                echo "Ei tuloksia.";
            }
        }

        // Päivitystoiminto
        if (isset($_POST["update"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $sql = "UPDATE viestit SET email = '$email' WHERE nimi = '$name'";
            if ($conn->query($sql) === TRUE) {
                echo "Tiedot päivitetty onnistuneesti.";
            } else {
                echo "Päivitys epäonnistui: " . $conn->error;
            }
        }

        // Poistotoiminto
        if (isset($_POST["delete"])) {
            $name = $_POST["name"];
            $sql = "DELETE FROM viestit WHERE nimi = '$name'";
            if ($conn->query($sql) === TRUE) {
                echo "Tiedot poistettu onnistuneesti.";
            } else {
                echo "Poisto epäonnistui: " . $conn->error;
            }
        }
    }

    // Suljetaan tietokantayhteys
    $conn->close();
    ?>
    <h2>Hae asiakas</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nimi: <input type="text" name="name">
        <input type="submit" name="search" value="Hae">
    </form>

    <h2>Päivitä asiakkaan sähköposti</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nimi: <input type="text" name="name">
        Uusi sähköposti: <input type="text" name="email">
        <input type="submit" name="update" value="Päivitä">
    </form>

    <h2>Poista asiakas</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nimi: <input type="text" name="name">
        <input type="submit" name="delete" value="Poista">
    </form>
</body>
</html>