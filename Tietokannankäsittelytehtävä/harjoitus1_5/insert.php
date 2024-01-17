<?php
include 'cfg.php';
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get data from the form
$pvm = $_POST['pvm'];
$nimi = $_POST['nimi'];
$email = $_POST['email'];
$viesti = $_POST['viesti'];

$sql = "INSERT INTO viestit (pvm, nimi, email, viesti) VALUES ('$pvm', '$nimi', '$email', '$viesti')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
