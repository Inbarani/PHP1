<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tietojen haku sukunimen perusteella</title>
</head>
<body>

<h2>Hae henkilöitä sukunimen tai etunimen perusteella</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Sukunimi: <input type="text" name="sukunimi">
        Etunimi: <input type="text" name="etunimi">
        <input type="submit" name="hae" value="Hae tiedot"><br><br>
    </form>
<?php


$servername = "localhost";
$username = "inba";
$password = "Inba";
$dbname = "asiakkaat";

// Luo yhteys
$conn = new mysqli($servername, $username, $password, $dbname);

// Tarkista yhteyden onnistuminen
if ($conn->connect_error) {
    die("Tietokantayhteys epäonnistui: " . $conn->connect_error);
}

// Suorita kysely

$sql = "SELECT id, sukunimi, etunimi, email FROM taulu1 ORDER BY sukunimi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Sukunimi: " . $row["sukunimi"] . " - Etunimi: " . $row["etunimi"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Ei tuloksia.";
}
// Tarkista, onko lomake lähetetty
if (isset($_POST['hae'])) {
    $snimi = $_POST['sukunimi'];
    $enimi = $_POST['etunimi'];

    $sql = "SELECT id, sukunimi, etunimi, email FROM taulu1 WHERE sukunimi='$snimi' or etunimi='$enimi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Henkilöt tiedot:</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Sukunimi: " . $row["sukunimi"] . " - Etunimi: " . $row["etunimi"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "Ei tuloksia.";
    }
}

// Sulje yhteys
$conn->close();



?>
    
</body>
</html>

