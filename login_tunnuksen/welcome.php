<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tervetuloa</title>
</head>
<body>
<?php
if (isset($_GET['etunimi'])) {
    $etunimi = $_GET['etunimi'];
    // Näytä käyttäjänimi tervehdyksessä
    echo "<h1>Tervetuloa, $etunimi!</h1>";
} else {
    echo "Virheellinen pyyntö.";
}
?>
</body>
</html>