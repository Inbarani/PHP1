<?php
include 'cfg.php';
// Get data from the form
$sql = "INSERT INTO viestit (pvm, nimi, email, viesti)
VALUES ('2023-10-23', 'John Doe', 'john@example.com', 'Hi John!')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
