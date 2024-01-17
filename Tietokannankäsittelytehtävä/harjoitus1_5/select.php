<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'cfg.php';

$sql = "SELECT id, pvm, nimi, email, viesti FROM viestit";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error in SQL query: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - pvm: " . $row["pvm"] . " "."Nimi: " . $row["nimi"] . " " ."email: " . $row["email"] ." ". "Viesti: " . $row["viesti"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>

    
</body>
</html>
